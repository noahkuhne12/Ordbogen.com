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
        <form name="form1" method="post" action="Checklogin.php">
        <table width="150px" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
            
            <font size="5" color="green">Hvelkommen til ordbogen</font>
           <tr>
                <td colspan="3"><strong>Test Brugernavn og Password</strong></td>
            </tr>  
            <tr>
                <td width="78">Brugernavn</td>
                <td width="6">:</td>
                <td width="294"><input name="username" type="text"></td>
            </tr>
            <tr>
                <td>password</td>
                <td>:</td>
                <td><input name="password" type="password"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="submit" name="Logind" value="Login"></td>
            </tr>
            
        </table> 
    </form>
        <form name="forl2" method="post" action="Ny_User.php">
        <tr>
            <td><input type='submit' neme='Ny User' value="Opret profil"></td>
        </tr>        
    </form>
    </body> 
</html>