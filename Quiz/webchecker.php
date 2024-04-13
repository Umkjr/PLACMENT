<?php 
session_start();
$id=$_SESSION['user'];
$conn = mysqli_connect('localhost','root','','quiz') or die('Unable To connect');
$sid=$id.'Web Design';
$sql="SELECT * FROM scores WHERE id='$id' AND sid='$sid'";
$db_check=mysqli_query($conn,$sql);
$count=mysqli_num_rows($db_check);
if($count==1)
{
echo '<script type="text/javascript">location.href = "error.php";</script>';
}
else{
    echo '<script type="text/javascript">location.href = "startweb.php";</script>';
}
?>