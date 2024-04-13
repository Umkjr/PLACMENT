<?php
session_start();
$user=$_SESSION['user'];
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'placement');

if(isset($_POST['remove']))
{
    $course= $_POST['remove_id'];
    $query="SELECT loc FROM certificate where id='$user' AND course='$course'";
    $result = mysqli_query($connection,$query);
    $row = mysqli_fetch_array($result);
    $loc=$row['loc'];
    $sql="DELETE FROM `certificate` where id='$user' AND course='$course'";
    $result = mysqli_query($connection,$sql);
    unlink($loc);
    header("Location:profile.php");
}
?>
