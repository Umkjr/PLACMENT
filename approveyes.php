<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'placement');

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];

    $sql = "UPDATE `apply4comp` SET `approve`='yes' WHERE id = '$id'";
    $query_run = mysqli_query($connection, $sql);
    if($query_run)
    {
        echo '<script> alert("Approved Student"); </script>';
        header("Location:approvStudent.php");
    }
    else
    {
        echo '<script> alert("Something went wrong"); </script>';
    }
}

?>
