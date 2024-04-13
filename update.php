<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'placement');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['cid'];

        $year=$_POST['year'];
        $seats=$_POST['seats'];
        $domain=$_POST['domain'];
        $cutoff=$_POST['cutoff'];

        $query = "UPDATE companyplaced SET year='$year', seats='$seats', domain='$domain', cutoff=' $cutoff' WHERE id='$id'  ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:company.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }

    if(isset($_POST['updatepass']))
    {
        $id=$_POST['id'];
        $pass=$_POST['password'];
        $newpass=$_POST['newpass'];

        $sql="UPDATE `studentlogin` SET `password`='$newpass' WHERE id='$id' AND password='$pass'";
        $query_run = mysqli_query($connection, $sql);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:studpass.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }      

    }
?>