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
import java.io.FileNotFoundException;
import java.io.IOException;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.Scanner;


public class BPP {

  /**
     * @param args the command line arguments
     */
    public static void main(String[] args) throws SQLException, IOException, FileNotFoundException, ClassNotFoundException, InstantiationException, IllegalAccessException {
        Saldos s = new Saldos();

       ResultSet f ;//= s.consultar("Select nombre from bpp.estudiante");

        /* while (f.next()) {
         String nombre = f.getString("nombre");
         System.out.println(nombre);
         //String texto = r.getString("Text");
         }*/
        Scanner id = new Scanner(System.in);// se declara e inicializa una instancia  de la clase Scanner.
        Scanner contrasenia = new Scanner(System.in);

        System.out.print("Ingrese su ID: ");
        String idEstudiante = id.next();

        System.out.print("Ingrese su contraseña: ");
        String password = contrasenia.next();

        f = s.consultar("Select idEstudiante, Nombre_completo, Carrera, Email, Saldo from botellasPet.Estudiante where idEstudiante = '" + idEstudiante + "'"
                + "and password = '" + password + "'");
        while (f.next()) {
            int idS = f.getInt("idEstudiante");
            String nombre = f.getString("Nombre_completo");
            String carrera = f.getString("Carrera");
            String mail = f.getString("Email");
            double saldo = f.getDouble("Saldo");

            System.out.println(idS);
            System.out.println(nombre);
            System.out.println(carrera);
            System.out.println(mail);
            System.out.println(saldo);
            System.out.println();
        }

    }
}

