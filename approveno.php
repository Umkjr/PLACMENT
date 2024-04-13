<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'placement');

if(isset($_POST['deletedata2']))
{
    $id = $_POST['delete_id2'];

    $sql = "UPDATE `apply4comp` SET `approve`='no' WHERE id = '$id'";

    $query_run = mysqli_query($connection, $sql);
    if($query_run)
    {
        echo '<script> alert("Student is not placed"); </script>';
        header("Location:approvStudent.php");
    }
    else
    {
        echo '<script> alert("Something went wrong"); </script>';
    }
}

?>
