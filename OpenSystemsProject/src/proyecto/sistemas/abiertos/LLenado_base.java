/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package proyecto.sistemas.abiertos;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.Statement;
import java.util.ArrayList;
import java.time.format.DateTimeFormatter;  
import java.time.LocalDateTime;    

/**
 *
 * @author Hp
 */
public class LLenado_base implements Runnable{
    
    public static ArrayList<Hilo_Ntp.retraso> Delays = new ArrayList<>();
    int Servers;
    String Usuario;
    boolean Flag_Server;
    boolean Flag_Usuario;
    int Id;

   LLenado_base(int Servers,String Usuario, boolean Flag_Usuario, int Id){
        this.Servers=Servers;
        this.Usuario = Usuario;
        this.Flag_Usuario=Flag_Usuario;
        this.Id = Id;
   }
    
    public void run() {
        while(Delays.size()<Servers)
        {
            try
            {
                Thread.sleep(1000);
            }
            catch(InterruptedException ex)
            {
                Thread.currentThread().interrupt();
            }
            
        }
        System.out.println("Ya hay "+Servers+" datos");
        DateTimeFormatter dtf = DateTimeFormatter.ofPattern("yyyy/MM/dd HH:mm:ss");  
        LocalDateTime now = LocalDateTime.now();  
        for(int i =0; i< Delays.size();i++){
            Carga_Delay(Usuario,Delays.get(i).Server,Delays.get(i).Delay.toString(),now.toString());
            Carga_topics(Usuario,Delays.get(i).Server,Delays.get(i).Delay.toString(),Delays.get(i).flag_Server,Flag_Usuario,Id+i);
            Carga_aso(Usuario,Delays.get(i).Server,Delays.get(i).Delay.toString(),Delays.get(i).flag_Server,Flag_Usuario,Id+i);
            Carga_ocu(Delays.get(i).Delay.toString(),Id+i,now.toString());
            Flag_Usuario = true;
        }
    }
    
    public static void Carga_Delay(String Usuario, String Servidor, String Delay, String Fecha) {
        String databaseURL = "jdbc:derby://localhost:1527/NTP";
        //String databaseURL = "jdbc:derby://187.220.190.93:1527/NTP;territory=en_US";
        Connection conexion = null;
        try{
            conexion = DriverManager.getConnection(databaseURL);
            

            //String sql = "INSERT INTO topics (topic_id, topic_ref, basename, ingles, frances) VALUES ('i_idioma', null, 'idioma', null, null)";
            String sql = "INSERT INTO delay (usuario, Server, Delay, Fecha) VALUES "
                    + "('"+ Usuario +"', '"+ Servidor +"', "+ Delay +", '"+ Fecha +"')";

            Statement state = conexion.createStatement();
            int rows = state.executeUpdate(sql);

            if(rows >0)
            {
                System.out.println("Exito_DELAY");
            }
            
            state.close(); 
            conexion.close(); 
        }catch(Exception ex){
            System.out.println(ex);
        }
    }
    
    public static void Carga_topics(String Usuario, String Servidor, String Delay, boolean Flag_Server, boolean Flag_Usuario, int Id) {
        String databaseURL = "jdbc:derby://localhost:1527/NTP";
        //String databaseURL = "jdbc:derby://187.220.190.93:1527/NTP;territory=en_US";
        Connection conexion = null;
        try{
            conexion = DriverManager.getConnection(databaseURL);
            System.out.println("Conectado a la base de datos 1");

            
            String sql = "INSERT INTO topics (topic_id, topic_ref, basename) VALUES "
                    + "('d_"+Id+"_"+ Delay+"', 't_delay', '"+ Delay +"')";
            
            if(!Flag_Usuario)
            {
                sql = sql+", \n ('u_"+Usuario+"','t_usuario', '"+ Usuario +"')";
            }
            if(!Flag_Server)
            {
                sql = sql+", \n ('s_"+Servidor+"','t_servidor', '"+ Servidor +"')";
            }

            Statement state = conexion.createStatement();
            int rows = state.executeUpdate(sql);

            if(rows >0)
            {
                System.out.println("Exito_TOPIC");
            }
            
            state.close(); 
            conexion.close(); 
        }catch(Exception ex){
            System.out.println(ex);
        }
    }
    public static void Carga_aso(String Usuario, String Servidor, String Delay,  boolean Flag_Server, boolean Flag_Usuario, int Id) {
        String databaseURL = "jdbc:derby://localhost:1527/NTP";
        //String databaseURL = "jdbc:derby://187.220.190.93:1527/NTP;territory=en_US";
        Connection conexion = null;
        try{
            conexion = DriverManager.getConnection(databaseURL);
            

            //String sql = "INSERT INTO topics (topic_id, topic_ref, basename, ingles, frances) VALUES ('i_idioma', null, 'idioma', null, null)";
            String sql = "INSERT INTO asociacion (asso_type, topic_type1, topic_id1, topic_type2, topic_id2) VALUES "
                    + "('t_relacion', 't_usuario', 'u_"+Usuario+"', 't_delay', 'd_"+Id+"_"+ Delay+"'),"
                    + "('t_relacion', 't_servidor', 's_"+Servidor+"', 't_delay', 'd_"+Id+"_"+ Delay+"')";
            
            if(!Flag_Server || !Flag_Usuario){
                sql = sql + ", \n ('t_relacion', 't_usuario', 'u_"+Usuario+"', 't_servidor', 's_"+Servidor+"')";
            }

            Statement state = conexion.createStatement();
            int rows = state.executeUpdate(sql);

            if(rows >0)
            {
                System.out.println("Exito_DELAY");
            }
            
            state.close(); 
            conexion.close(); 
        }catch(Exception ex){
            System.out.println(ex);
        }
    }
    public static void Carga_ocu(String Delay, int Id, String Fecha) {
        String databaseURL = "jdbc:derby://localhost:1527/NTP";
        //String databaseURL = "jdbc:derby://187.220.190.93:1527/NTP;territory=en_US";
        Connection conexion = null;
        try{
            conexion = DriverManager.getConnection(databaseURL);
            

            //String sql = "INSERT INTO topics (topic_id, topic_ref, basename, ingles, frances) VALUES ('i_idioma', null, 'idioma', null, null)";
            String sql = "INSERT INTO ocurrencias (topic_id, res_type, topic_ref, resource) VALUES "
                    + "('d_"+Id+"_"+ Delay+"', 'resourceData','Fecha', '"+Fecha+"')";

            Statement state = conexion.createStatement();
            int rows = state.executeUpdate(sql);

            if(rows >0)
            {
                System.out.println("Exito_OCURRENCIA");
            }
            
            state.close(); 
            conexion.close(); 
        }catch(Exception ex){
            System.out.println(ex);
        }
    }
}
