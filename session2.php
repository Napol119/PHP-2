<?php session_start(); ?>
<html>
    <?php
        if(isset($_SESSION["username"]))
            echo "Username: " . $_SESSION["username"];
        else
            echo "กรุณา Login"
    ?>

</html>
