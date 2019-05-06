<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            session_start();
            
            if(!isset($_SESSION['login']))
            {
                header("location:login.php");
            }
            
            ?>
       
        <form action="Correct_login" method="post">
        <table>
            <font size="5" color="blue"></font>
           <tr>
                <td colspan="3"><strong>Udfyld alle felter</strong></td>
            </tr>  
            <tr>
                <td width="78">Navn</td>
                <td width="6">:</td>
                <td width="294"><input name="Navn" type="text"></td>
            </tr>
            <tr>
                <td>E_mail</td>
                <td>:</td>
                <td><input name="E_mail" type="text"></td>
            </tr>
            <tr>
                <td>Besked</td>
                <td>:</td>
                <td><textarea rows="4" cols="50"></textarea></td>
            </tr>
            <tr>
                <td>Adresse</td>
                <td>:</td>
                <td><input name="Adresse" type="text"></td>
            </tr>
            <tr>
                <td>Mobil nr</td>
                <td>:</td>
                <td><input name="Mobil nr" type="text"></td>
            </tr>
        </table>
        
        
            <input type="submit" name="save" value="save">
            
            <input type="reset" value="Reset">
            <input type="submit" name="Dam" value="Delete all messages">
            <input type="submit" name="Ram" value="Read all messages">
        </form>    
            
        <form action="login.php" method="post">
            <input type="submit" name="logout" value="Log ud"> 
            
        </form>
    </body>
</html>
