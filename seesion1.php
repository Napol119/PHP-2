<?php session_start(); ?>
<html>
    <form action="show.php" method="POST">
    <form>
        <label for="fname">Username:</label><br>
        <input type="text" id="fname" name="fname">
        <input type="submit" value="Login" />
    </form>
<?php
    
    $_SESSION["username"] = "B6601607";

?>

</html>
