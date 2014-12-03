package bpp;

import bpp.Conexion;
import java.sql.SQLException;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

/**
 *
 * @author Arturo Jain
 */
public class Saldos {

    Conexion c = new Conexion();
    Connection con;

    public void altaBajaCambio(String query) throws SQLException, IOException, FileNotFoundException, ClassNotFoundException, InstantiationException, IllegalAccessException {
        try (Connection con = c.getConexion()) {
            if (con == null) {
                System.out.println("No hay conexion");
            } else {
                Statement st = con.createStatement();
                st.execute(query);
            }
        }
    }

    public ResultSet consultar(String query) throws SQLException, IOException, FileNotFoundException, ClassNotFoundException, InstantiationException, IllegalAccessException {
        con = c.getConexion();
        ResultSet rs = null;
        if (con == null) {
            System.out.println("No hay conexion");
        } else {
            Statement st = con.createStatement();
            rs = st.executeQuery(query);
        }
        return rs;
    }
}
