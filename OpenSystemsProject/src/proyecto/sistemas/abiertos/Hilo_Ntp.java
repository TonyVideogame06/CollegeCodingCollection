/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package proyecto.sistemas.abiertos;

import java.io.IOException;
import static java.lang.Integer.parseInt;
import java.net.InetAddress;
import java.net.SocketException;
import java.net.UnknownHostException;
import java.text.NumberFormat;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.Properties;
import org.apache.commons.net.ntp.NTPUDPClient;
import org.apache.commons.net.ntp.NtpUtils;
import org.apache.commons.net.ntp.NtpV3Packet;
import org.apache.commons.net.ntp.TimeInfo;
import org.apache.commons.net.ntp.TimeStamp;

/**
 *
 * @author Hp
 */


public class Hilo_Ntp implements Runnable{

    String Server;
    String Usuario;
    boolean Flag_Server;
    boolean Flag_Usuario;
    int Id;
        
    
    public class retraso {
        public Long Delay;
        public String Server;
        public boolean flag_Server;

        public retraso(Long Delay, String Server, boolean flag_Server) {
            this.Delay = Delay;
            this.Server = Server;
            this.flag_Server=flag_Server;
        }
    }
    Hilo_Ntp(String Server, String Usuario, int Serv, boolean Flag_Usuario, int Id)
    {
        this.Server = Server;
        this.Usuario = Usuario;
        Flag_Server = (Serv>=0)?true:false;
        this.Flag_Usuario=Flag_Usuario;
        this.Id = Id;
    }
    
    private static long Promedio;
    
    @Override
    public void run() {
        main_ntp(Server);
        retraso A = new retraso(Promedio, Server,Flag_Server );
        var add = LLenado_base.Delays.add(A);
    }
    
    
    private static final NumberFormat N_FORMAT = new java.text.DecimalFormat("0.00");
    
    
    private static int Cant;
    
    static ArrayList<Integer> Datos = new ArrayList();
    static ArrayList<String> Nombres = new ArrayList();

    /**
     * Process <code>TimeInfo</code> object and print its details.
     * @param info <code>TimeInfo</code> object.
     */
    public static void processResponse(TimeInfo info)
    {
        NtpV3Packet message = info.getMessage();
        int stratum = message.getStratum();
        String refType;
        if (stratum <= 0) {
            refType = "(Unspecified or Unavailable)";
        } else if (stratum == 1) {
            refType = "(Primary Reference; e.g., GPS)"; // GPS, radio clock, etc.
        } else {
            refType = "(Secondary Reference; e.g. via NTP or SNTP)";
        }
        // stratum should be 0..15...
        System.out.println(" Stratum: " + stratum + " " + refType);
        int version = message.getVersion();
        int li = message.getLeapIndicator();
        System.out.println(" leap=" + li + ", version="
                + version + ", precision=" + message.getPrecision());

        System.out.println(" mode: " + message.getModeName() + " (" + message.getMode() + ")");
        int poll = message.getPoll();
        // poll value typically btwn MINPOLL (4) and MAXPOLL (14)
        System.out.println(" poll: " + (poll <= 0 ? 1 : (int) Math.pow(2, poll))
                + " seconds" + " (2 ** " + poll + ")");
        double disp = message.getRootDispersionInMillisDouble();
        System.out.println(" rootdelay=" + N_FORMAT.format(message.getRootDelayInMillisDouble())
                + ", rootdispersion(ms): " + N_FORMAT.format(disp));

        int refId = message.getReferenceId();
        String refAddr = NtpUtils.getHostAddress(refId);
        String refName = null;
        if (refId != 0) {
            if (refAddr.equals("127.127.1.0")) {
                refName = "LOCAL"; // This is the ref address for the Local Clock
            } else if (stratum >= 2) {
                // If reference id has 127.127 prefix then it uses its own reference clock
                // defined in the form 127.127.clock-type.unit-num (e.g. 127.127.8.0 mode 5
                // for GENERIC DCF77 AM; see refclock.htm from the NTP software distribution.
                if (!refAddr.startsWith("127.127")) {
                    try {
                        InetAddress addr = InetAddress.getByName(refAddr);
                        String name = addr.getHostName();
                        if (name != null && !name.equals(refAddr)) {
                            refName = name;
                        }
                    } catch (UnknownHostException e) {
                        // some stratum-2 servers sync to ref clock device but fudge stratum level higher... (e.g. 2)
                        // ref not valid host maybe it's a reference clock name?
                        // otherwise just show the ref IP address.
                        refName = NtpUtils.getReferenceClock(message);
                    }
                }
            } else if (version >= 3 && (stratum == 0 || stratum == 1)) {
                refName = NtpUtils.getReferenceClock(message);
                // refname usually have at least 3 characters (e.g. GPS, WWV, LCL, etc.)
            }
            // otherwise give up on naming the beast...
        }
        if (refName != null && refName.length() > 1) {
            refAddr += " (" + refName + ")";
        }
        System.out.println(" Reference Identifier:\t" + refAddr);

        TimeStamp refNtpTime = message.getReferenceTimeStamp();
        System.out.println(" Reference Timestamp:\t" + refNtpTime + "  " + refNtpTime.toDateString());

        // Originate Time is time request sent by client (t1)
        TimeStamp origNtpTime = message.getOriginateTimeStamp();
        System.out.println(" Originate Timestamp:\t" + origNtpTime + "  " + origNtpTime.toDateString());

        long destTime = info.getReturnTime();
        // Receive Time is time request received by server (t2)
        TimeStamp rcvNtpTime = message.getReceiveTimeStamp();
        System.out.println(" Receive Timestamp:\t" + rcvNtpTime + "  " + rcvNtpTime.toDateString());

        // Transmit time is time reply sent by server (t3)
        TimeStamp xmitNtpTime = message.getTransmitTimeStamp();
        System.out.println(" Transmit Timestamp:\t" + xmitNtpTime + "  " + xmitNtpTime.toDateString());

        // Destination time is time reply received by client (t4)
        TimeStamp destNtpTime = TimeStamp.getNtpTime(destTime);
        System.out.println(" Destination Timestamp:\t" + destNtpTime + "  " + destNtpTime.toDateString());

        info.computeDetails(); // compute offset/delay if not already done
        Long offsetValue = info.getOffset();
        Long delayValue = info.getDelay();
        
        
        String delay = (delayValue == null) ? "N/A" : delayValue.toString();
        String offset = (offsetValue == null) ? "N/A" : offsetValue.toString();

        System.out.println(" Roundtrip delay(ms)=" + delay
                + ", clock offset(ms)=" + offset); // offset in ms
        Promedio=Promedio+offsetValue;
        Cant=Cant+1;
        
        Datos.add(parseInt(delay));
        Datos.add(parseInt(offset));
    }

    public static void main_ntp(String arg)     {
        Properties defaultProps = System.getProperties(); //obtiene las "properties" del sistema
        defaultProps.put("java.net.preferIPv6Addresses", "true");//mapea el valor true en la variable java.net.preferIPv6Addresses

        Promedio=0;
        Cant=0;
        NTPUDPClient client = new NTPUDPClient();
        // We want to timeout if a response takes longer than 10 seconds
        client.setDefaultTimeout(10000);
        try {
            client.open();
            
            System.out.println();
            try {
                InetAddress hostAddr = InetAddress.getByName(arg);
                System.out.println("> " + hostAddr.getHostName() + "/" + hostAddr.getHostAddress());
                Nombres.add(hostAddr.getHostName());
                TimeInfo info = client.getTime(hostAddr);
                processResponse(info);
            } catch (IOException ioe) {
                System.err.println(ioe.toString());
            }
            
        } catch (SocketException e) {
            System.err.println(e.toString());
        }

        client.close();
        System.out.println("\n Promedio "+(Promedio/Cant));
        
    }
    
}
