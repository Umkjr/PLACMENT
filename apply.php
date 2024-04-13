<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'placement');

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];

    $sql ="SELECT * FROM tempapply WHERE id='$id'";
    $result = mysqli_query($connection,$sql);
    $i=0;
			   
			   while($row = mysqli_fetch_array($result)) {
			   $aid=$row["id"];
			   $cname=$row["cname"];
			   $domain=$row["domain"];
               $sid=$row["sid"];
			   $i++;
               }

    $sql = "SELECT * from studentinfo where id='$sid'";
    $result = mysqli_query($connection,$sql);
    $i=0;
			   
			   while($row = mysqli_fetch_array($result)) {
			   $name=$row["fname"]." ".$row["mname"]." ".$row["lname"];
			   $i++;
               }
    
    $sql="DELETE FROM `tempapply` WHERE id='$id'";
    mysqli_query($connection,$sql);    
   $date=date("Y-m-d");         
    $query = "INSERT INTO `apply4comp`(`id`, `sid`, `name`, `cname`, `domain`,`dateofapply`, `approve`) VALUES ('$aid','$sid','$name','$cname','$domain','$date','0')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Applied to Company"); </script>';
        header("Location:apply4comp.php");
    }
    else
    {
        echo '<script> alert("Something went wrong"); </script>';
    }
}

?>
