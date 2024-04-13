<html>
    <head>
    <?php include 'noback.php';?>
    </head>
</html>

<?php
session_start();//session is a way to store information (in variables) to be used across multiple pages.  
session_destroy();
header("Location:login2.php");
?>