<?php
session_start();
?>
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
        <form method="POST">
            Tên đăng nhập:
            <input type="text" name="user" value="">
            <br><br>
            Mật khẩu:
            <input type="text" name="pass" value="">
            <br><br>
            <input type="submit" name="login" value="Login">
        </form>
        <?php
        if(isset($_POST['login']))
            {
                $_SESSION['user'] = $_POST['user'];
                $_SESSION['pass'] = $_POST['pass'];
                header("location:quanly.php");
            }
        ?>
    </body>
</html>
