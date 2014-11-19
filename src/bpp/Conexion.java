package bpp;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

/**
 *
 * @author Loreto
 */
public class Conexion {
     public Connection getConexion() throws ClassNotFoundException, InstantiationException, IllegalAccessException, SQLException {
        Connection conexion = null;
        Class.forName("com.mysql.jdbc.Driver").newInstance();
        conexion = DriverManager.getConnection("jdbc:mysql://localhost:3306/mysql?zeroDateTimeBehavior=convertToNull&user=root&password=root");
        return conexion;
    }   
}