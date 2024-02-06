/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package proyecto.sistemas.abiertos;

import static java.lang.Integer.parseInt;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.ArrayList;

/**
 *
 * @author Hp
 */
public class ProyectoSistemasAbiertos {

    /**
     * @param args the command line arguments
     */ 
    
    public static void main(String[] args) {
        //String[] Server = {"192.100.201.202", "time.windows.com", "time.apple.com", "mx.pool.ntp.org"};
        String[] Server = {"il.pool.ntp.org", "in.pool.ntp.org", "jp.pool.ntp.org", "kr.pool.ntp.org", "tw.pool.ntp.org"};
        ArrayList<Thread> Hilos = new ArrayList<>();
        ArrayList<String> Servers = new ArrayList<>();
        String Usuario = "Brian";
        String conteo_topics ="";
        boolean f_usuario=false;
       
        String databaseURL = "jdbc:derby://localhost:1527/NTP;territory=en_US";
        //String databaseURL = "jdbc:derby://187.220.190.93:1527/NTP;territory=en_US";
        Connection conexion = null;
        try{
            conexion = DriverManager.getConnection(databaseURL);

            String sql = "SELECT server FROM delay GROUP BY server";

            Statement state = conexion.createStatement();
            ResultSet result  = state.executeQuery(sql);

            while(result.next())
            {
                Servers.add(result.getString("server"));
            }
            
            sql = "SELECT usuario FROM delay WHERE usuario = '"+Usuario+"' GROUP BY usuario";

            state = conexion.createStatement();
            result  = state.executeQuery(sql);

            while(result.next())
            {
                f_usuario=true;
            }
            
            sql = "SELECT COUNT(id) FROM topics";

            state = conexion.createStatement();
            result  = state.executeQuery(sql);
            
            while(result.next())
            {
                conteo_topics = result.getString("1");
            }
            
        }catch(Exception ex){
            System.out.println(ex);
        }
       int topics = parseInt(conteo_topics);
       
       System.out.println(topics);
       for (int i=0;i<Server.length;i++){
            int flag_s = Servers.indexOf(Server[i]);
            Hilo_Ntp A = new Hilo_Ntp(Server[i],Usuario, flag_s,f_usuario, topics+i);
            Thread A_h = new Thread(A);
            A_h.start();
            Hilos.add(A_h);
       }
       
       LLenado_base B = new LLenado_base(Server.length,Usuario,f_usuario, topics); 
       Thread B_h = new Thread(B);
       B_h.start();
    }
    
}


