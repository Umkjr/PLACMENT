<?php
          include 'config.php';
          if(isset($_POST['add']))
          {
            $cid2=$_POST['compid'];
            $year=$_POST['year'];
            $seats=$_POST['seats'];
            $domain=$_POST['domain'];
            $cutoff=$_POST['cutoff'];
            $sql="INSERT INTO companyplaced(cid,year,seats,domain,cutoff) VALUES ('$cid2','$year','$seats','$domain','$cutoff')";
            if (mysqli_query($conn, $sql)) {
              echo '<script>
              $(document).ready(function() {
                      location.reload(true);   
              });</script>';
              header("Location:company.php");

            } else {
  
            }
            mysqli_close($conn);
          } 
          ?>
