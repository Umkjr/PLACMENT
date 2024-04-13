<?php
session_start();
$user=$_SESSION['user'];
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'placement');

if(isset($_POST['domain']))
{
    $domain= $_POST['domain_id'];
    $id=$user.$domain;
    $sql="DELETE FROM domainin where did='$id'";
    $result = mysqli_query($connection,$sql);
    header("Location:profile.php");
}
?>
