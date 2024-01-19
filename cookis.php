<?php session_start(); ?>
<html>
    <form action="usecookie.php" method="POST">
    <form>
        <label for="fname">Username:</label><br>
        <input type="text" id="fname" name="fname">
        <input type="submit" value="Login" />
    </form>
<?php
    $expire=time()+60*60*24*30;
    setcookie("username", "B6601638", $expire);

?>

</html>
