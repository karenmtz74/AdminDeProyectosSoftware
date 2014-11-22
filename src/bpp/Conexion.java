/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package bpp;

/**
 *
 * @author ana_sm74
 */

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;


public class Conexion {
     public Connection getConexion() throws ClassNotFoundException, InstantiationException, IllegalAccessException, SQLException {
        Connection conexion = null;
        Class.forName("com.mysql.jdbc.Driver").newInstance();
        
        //si alguien tiene contraseña en su mysql a lado del igual de password se le agrega
        conexion = DriverManager.getConnection("jdbc:mysql://localhost:3306/mysql?zeroDateTimeBehavior=convertToNull&user=root&password=");
        return conexion;
    }   
}
