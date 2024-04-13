
<?php
include 'config.php';
        $sql= "SELECT * FROM companylist";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0)
        {
        while($row = mysqli_fetch_assoc($result))
        {
        $cid=$row["cid"];
        $cname=$row["cname"];
        echo"<option value='".$cid."'>".$cid." - ".$cname."</option>";
        }
         }else{
 
         }
      mysqli_close($conn);  
 ?>