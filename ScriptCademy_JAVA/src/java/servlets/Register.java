/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package servlets;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author Earl
 */
@WebServlet(name = "Register", urlPatterns = {"/Register"})
public class Register extends HttpServlet {

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {

        PrintWriter out = response.getWriter();
        RequestDispatcher rd = request.getRequestDispatcher("ErrorPage");

        String fname = request.getParameter("fname");
        String lname = request.getParameter("lname");
        String uname = request.getParameter("uname");
        String email = request.getParameter("email");
        String pword = request.getParameter("pword");

        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/scriptcademy", "root", "");
            Statement stmt = con.createStatement();

            stmt.executeUpdate("insert into user_accounts(fname, lname, username, email, password) values('" + fname + "', '" + lname + "', '" + uname + "','" + email + "' ,'" + pword + "')");
            response.sendRedirect("http://localhost/coursewebsitefinals/ScriptCademy_PHP");

        } catch (ClassNotFoundException ex) {
            Logger.getLogger(Register.class.getName()).log(Level.SEVERE, null, ex);
        } catch (SQLException ex) {
            rd.include(request, response);
        }
    }

    private Boolean passwordValidator(String pass) {
        boolean flag = false;
        int upperCase = 0;
        int lowerCase = 0;
        int digitCount = 0;

        for (int i = 0; i < pass.length(); i++) {
            if (Character.isUpperCase(pass.charAt(i))) {
                upperCase++;
            }
            if (Character.isLowerCase(pass.charAt(i))) {
                lowerCase++;
            }
            if (Character.isDigit(pass.charAt(i))) {
                digitCount++;
            }
        }

        if (upperCase > 0 && lowerCase > 0 && digitCount > 0 && pass.length() >= 8) {
            return true;
        }

        return flag;
    }

    private Boolean isExisting(String uname) {
        boolean result = false;
        Connection con;
        PreparedStatement ps;
        try {
            String conStr = "jdbc:mysql://localhost:3306/scriptcademy?user=root&password=";
            con = DriverManager.getConnection(conStr);
            ps = con.prepareStatement("select username from user_accounts where username = " + uname + "");
            ResultSet rs = ps.executeQuery();
            rs.first();
            if (rs.next()) {
                result = true;
            }

        } catch (SQLException ex) {
            Logger.getLogger(ErrorPage.class.getName()).log(Level.SEVERE, null, ex);
        }
        return result;
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
