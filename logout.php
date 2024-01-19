<?php session_start(); ?>
<html>
    
    <?php
        if(isset($_COOKIE["username"]))
            echo "Username: " . $_COOKIE["username"];
        else
            echo "กรุณา Login"
        
    ?>

    <?php
         if(isset($_POST["logout"])) {
            // ลบค่า $_COOKIE ออก
            setcookie("username", "B6601638", time() - 3600, '/');
            header('Location: Cookie.php'); 
            exit();
            }
    ?>
    
    <form method="post" action="">
        <input type="submit" name="logout" value="Logout">
    </form>
</html>
