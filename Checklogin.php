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
        $host = "localhost";
        $username = "root";
        $password = "";
        $db_name = "login";
        $tbl_name = "login";
        
        $conn=mysqli_connect($host, $username, $password, $db_name);
        
        if (!$conn)
        {
        die("connection failed" . mysqli_connect_error());    
        }
        
        $my_username = $_POST['username'];
        $my_password = $_POST['password'];
        
        $sql = "SELECT * FROM $tbl_name WHERE Username = '$my_username'and Password = '$my_password'";
        $resultat = mysqli_query($conn, $sql);
        
        $count = mysqli_num_rows($resultat);
        
            if($count == 1)
            {
                $_SESSION[login] = 1;
                header("location:Correct_login.php");
            }
            else 
            {
                echo 'Forkert Brugernavn eller password';
            }
        
        ?>
        
        <form action="Login.php" method="post">
            <input type="submit" name="logout" value="Prøve Igen"> 
            
        </form>
    </body>
</html>
