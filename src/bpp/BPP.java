package bpp;

import java.io.FileNotFoundException;
import java.io.IOException;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.Scanner;

/**
 *
 * @author Loreto
 */
public class BPP {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) throws SQLException, IOException, FileNotFoundException, ClassNotFoundException, InstantiationException, IllegalAccessException {
        Saldos s = new Saldos();

        ResultSet f; //= s.consultar("Select * from bpp.estudiante");

        /* while (f.next()) {
         //String nombre = f.getString("nombre");
         //System.out.println(nombre);
         //String texto = r.getString("Text");
         int idS = f.getInt("idEstudiante");
         String contrasenia = f.getString("password");
         String nombre = f.getString("nombre");
         String carrera = f.getString("carrera");
         String mail = f.getString("mail");
         double saldo = f.getDouble("saldo");

         System.out.println(idS);
         System.out.println(nombre);
         System.out.println(contrasenia);
         System.out.println(carrera);
         System.out.println(mail);
         System.out.println(saldo);
         System.out.println();
         }*/
        Scanner id = new Scanner(System.in);// se declara e inicializa una instancia  de la clase Scanner.
        Scanner contrasenia = new Scanner(System.in);

        System.out.print("Ingrese su ID: ");
        String idEstudiante = id.next();

        System.out.print("Ingrese su contraseña: ");
        String password = contrasenia.next();

        f = s.consultar("Select idEstudiante, nombre, carrera, mail, saldo from bpp.estudiante where idEstudiante = '" + idEstudiante + "'"
                + "and password = '" + password + "'");
        while (f.next()) {
            int idS = f.getInt("idEstudiante");
            String nombre = f.getString("nombre");
            String carrera = f.getString("carrera");
            String mail = f.getString("mail");
            double saldo = f.getDouble("saldo");

            System.out.println(idS);
            System.out.println(nombre);
            System.out.println(carrera);
            System.out.println(mail);
            System.out.println(saldo);
            System.out.println();
        }

    }
}
