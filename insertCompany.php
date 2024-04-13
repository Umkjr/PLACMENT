<?php
          include 'config.php';
          if(isset($_POST['new']))
          {
            $cid2=$_POST['cid'];
            $cname2=$_POST['cname'];
            $sql="INSERT INTO companylist(cid,cname) VALUES ('$cid2','$cname2')";
            if (mysqli_query($conn, $sql)) {
              echo '<script> alert("Company Added"); </script>';
              header("Location:company.php");
            } else {
              echo '<script> alert("Company Not Added"); </script>';
            }
            mysqli_close($conn);
          } 
          ?>