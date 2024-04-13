<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
    background-color: #191c24;
    color:white;
}
    .profile2{
      background-color:white;
      width:250px;
      height:250px;
      border-radius:50%;
    }
    table{
        text-align:center;
        color:white;
    }
    th,tr,td{
        color:white;
    }

    </style>
</head>
<body>
<?php
echo '<div class="card-body"><div class="table-responsive"><table class="table table-bordered"">
<thead><th><label class="card-title">Anjuman-E-Isalam Kalsekar Technical Campus</label><br>
<label class="card-title">School of Engineering & Technology</label></th></thead><tbody>
</tbody></table></div></div>';
$con = mysqli_connect('localhost','root','','placement') or die('Unable To connect');
if(isset($_POST['viewdetail'])){
    $id=$_POST["detail_id"];

    $sql="SELECT * FROM profileimg where sid='$id'";
    $result=mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result))
    {
        echo '<center><img src="';echo $row["image"]; echo '" class="profile2"></center>';   
    }
    //Personal info
    $sql="SELECT * FROM studentinfo where id='$id'";
    $result=mysqli_query($con,$sql);
    echo '<div class="card-body"> 
    <br>
    <div class="table-responsive"><table class="table table-bordered" style="text-align:left;">
    <thead><th><label class="card-title">Personal Information</label></th></thead><tbody>';
    while($row = mysqli_fetch_array($result)){
       echo '<tr><td><label class="card-title">Roll no. - '.$id.'</label></td></tr>'; 
       echo '<tr><td><label class="card-title">Name - '.$row["fname"].' '.$row["mname"].' '.$row["lname"].'</label></td></tr>';
       echo '<tr><td><label class="card-title">Department - '.$row['dept'].'</label></td></tr>';
       echo '<tr><td><label class="card-title">Class - '.$row['class'].'</label></td></tr>';
       echo '<tr><td><label class="card-title">email - '.$row["email"].'</label></td></tr>';
       echo '<tr><td><label class="card-title">Mobile no. - '.$row["mobile"].'</label></td></tr>';
       echo '<tr><td><label class="card-title">Date of Birth - '.$row['dob'].'</label></td></tr>';
       echo '<tr><td><label class="card-title">Address - '.$row['address'].'</label></td></tr>';
    }
    echo '	</tbody>
    </table></div></div>';

    //Schools marks
    $sql="SELECT * FROM studentschooling where id='$id'";
    $result=mysqli_query($con,$sql);
    
    echo '<div class="card-body"> 
    <label class="card-title">SSC / HSC /Diploma</label><br>   
    <div class="table-responsive"><table class="table table-bordered">
				<thead>
				  <tr>
					<th> SSC </th>
					<th> SSC Year of passing </th>
					<th> HSC</th>
					<th> HSC Year of passing </th>
					<th> DIPLOMA</th>
					<th> Diploma Year of passing </th>
				  </tr>
				</thead>
				<tbody>
			   ';
			   while($row = mysqli_fetch_array($result)) {
			   echo '<tr id="'.$row["id"].'">';
			   echo'<td>'.$row["ssc"].'</td>';
			   echo'<td>'.$row["sscpyear"].'</td>';
			   echo'<td>'.$row["hsc"].'</td>';
			   echo'<td>'.$row["hscpyear"].'</td>';
			   echo'<td>'.$row["diploma"].'</td>';
			   echo'<td>'.$row["dippyear"].'</td></tr>';
			   }
			   echo'
				</tbody>
              </table></div></div>';
              
               //BE marks

              echo '<div class="card-body"> 
              <label class="card-title">BE All Sems pointers</label><br>   
              <div class="table-responsive"><table class="table table-bordered">
              <thead>
                <tr>
                  <th> Sem 1 </th>
                  <th> Sem 2 </th>
                  <th> Sem 3</th>
                  <th> Sem 4 </th>
                  <th> Sem 5</th>
                  <th> Sem 6 </th>
                  <th> Sem 7 </th>
                  <th> Sem 8 </th>
                  <th> BE Pointer </th>
                  <th> BE Percentage </th>
                </tr>
              </thead>
              <tbody>
             ';
             $sql= "SELECT * FROM bemarks where id='$id'";
             $result = mysqli_query($con,$sql);
             while($row = mysqli_fetch_array($result)) {
             echo '<tr id="'.$row["id"].'">';
             if($row['sem1'] != 101){
              echo'<td>'.$row["sem1"].'</td>';
             }
             else{
              echo'<td>'.'KT'.'</td>';
             }
             
             if($row['sem2'] != 101){
              echo'<td>'.$row["sem2"].'</td>';
             }
             else{
              echo'<td>'.'KT'.'</td>';
             }

             if($row['sem3'] != 101){
              echo'<td>'.$row["sem3"].'</td>';
             }
             else{
              echo'<td>'.'KT'.'</td>';
             }
             
             if($row['sem4'] != 101){
              echo'<td>'.$row["sem4"].'</td>';
             }
             else{
              echo'<td>'.'KT'.'</td>';
             }
           
             if($row['sem5'] != 101){
              echo'<td>'.$row["sem5"].'</td>';
             }
             else{
              echo'<td>'.'KT'.'</td>';
             }
           
             if($row['sem6'] != 101){
              echo'<td>'.$row["sem6"].'</td>';
             }
             else{
              echo'<td>'.'KT'.'</td>';
             }
           
             if($row['sem7'] != 404 && $row['sem7'] != 101){
              echo'<td>'.$row["sem7"].'</td>';
             }
             elseif($row['sem7'] == 101)
             {
              echo'<td>'.'KT'.'</td>'; 
             }
             else{
              echo'<td>'.'Not Given'.'</td>';
             }

             if($row['sem8'] != 404 && $row['sem8'] != 101){
              echo'<td>'.$row["sem8"].'</td>';
             }
             elseif($row['sem8'] == 101)
             {
              echo'<td>'.'KT'.'</td>'; 
             }
             else{
              echo'<td>'.'Not Given'.'</td>';
             }

             if($row['sem1'] != 101 && $row['sem2'] != 101 && $row['sem3'] != 101 && $row['sem4'] != 101 && $row['sem5'] != 101 && $row['sem6'] != 101 && $row['sem7'] != 101 && $row['sem8'] != 101 ){
              if($row['sem7'] == 404){
              $beagg = $row['sem1'] + $row['sem2'] + $row['sem3'] + $row['sem4'] + $row['sem5'] + $row['sem6'];
              $beagg = $beagg / 6;
              echo '<td>'.number_format((float)$beagg,2,'.','').'</td>';
              }
              elseif($row['sem8'] == 404){
                  $beagg = $row['sem1'] + $row['sem2'] + $row['sem3'] + $row['sem4'] + $row['sem5'] + $row['sem6'] + $row['sem7'];
                  $beagg = $beagg / 7;
                  echo '<td>'.number_format((float)$beagg,2,'.','').'</td>';
              }
              else{
                  $beagg = $row['sem1'] + $row['sem2'] + $row['sem3'] + $row['sem4'] + $row['sem5'] + $row['sem6'] + $row['sem7'] + $row['sem8'];
                  $beagg = $beagg / 8;
                  echo '<td>'.number_format((float)$beagg,2,'.','').'</td>';
              }
              $beper = $beagg * 9.5;
             echo '<td>'.number_format((float)$beper,2,'.','').' %'.'</td>';
             }
             else{
              echo '<td>'.' '.'</td>';
              echo '<td>'.' '.'</td>';
             }
             echo '</tr>';
             }
             echo'
              </tbody>
            </table></div></div>';
 

            //skills result
            $conn = mysqli_connect('localhost','root','','quiz') or die('Unable To connect');
			$sql="SELECT * FROM scores where id='$id'";

			echo '<div class="card-body"> 
            <label class="card-title">Skill Test Result</label><br>   
            <div class="table-responsive"><table class="table table-bordered">
				<thead>
				  <tr>
					<th>ID</th>
					<th>Course</th>
					<th>Marks</th>
					<th>Result</th>
				  </tr>
				</thead>
				<tbody>
			   ';

			   $i=0;
			   $result = mysqli_query($conn,$sql);
			   while($row = mysqli_fetch_array($result)) {
			   echo '<tr id="'.$row["id"].'">';
			   echo'<td>'.$row["id"].'</td>';
			   echo'<td>'.$row["course"].'</td>';
			   echo'<td>'.$row["marks"].'</td>';
			   echo'<td>'.$row["results"].'</td>';
			   echo'
			   </tr>';
			   $i++;
			   }
			   echo'
				</tbody>
			  </table></div></div>';

              //Domain of Interest
              $con=mysqli_connect("localhost","root");
              mysqli_select_db($con,'placement');
              $sql="SELECT * FROM `domainin` WHERE sid='$id'";
      
              echo '<div class="card-body"> 
              <label class="card-title">Domain of interest</label><br>   
              <div class="table-responsive"><table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Interest of Domain</th>
                    </tr>
                  </thead>
                  <tbody>
                 ';
      
                 $i=0;
                 $result = mysqli_query($con,$sql);
                 while($row = mysqli_fetch_array($result)) {
                 echo '<tr id="'.$row["did"].'">';
                 echo'<td>'.$row["domainin"].'</td>';
                 echo'</tr>';
                 $i++;
                 }
                 echo'
                  </tbody>
                </table></div></div>';
      
                //student certified course
                $con=mysqli_connect("localhost","root");
                mysqli_select_db($con,'placement');
                    $sql="SELECT * FROM certificate where id='$id'";
                    $sql2="SELECT id FROM certificate where id='$id' group by id";
                    $result2 = mysqli_query($con,$sql2);
                    $result = mysqli_query($con,$sql);
                    $row = mysqli_fetch_array($result2);
                    if($row['id']==$id){
                    echo '<div class="card-body"> 
                        <label class="card-title">Certified Course</label><br>   
                        <div class="table-responsive"><table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Course</th>
                            <th>Date</th>
                          </tr>
                        </thead>
                        <tbody>
                       ';
        
                       
                       while($row = mysqli_fetch_array($result)) {
                       echo '<tr id="'.$row["course"].'">';
                       echo'<td>'.$row["course"].'</td>';
                       echo'<td>'.$row["coursedate"].'</td>';
                       echo'</tr>';
                       }
                       echo'
                        </tbody>
                      </table></div></div>';
                    }
        
                    //Company placemnet status
                    $con=mysqli_connect("localhost","root");
		mysqli_select_db($con,'placement');
		$sql1="select sid from apply4comp where approve='yes' GROUP by approve";
		$r= mysqli_query($con,$sql1);
		$check = mysqli_fetch_array($r); 
		$id2=$check["sid"];
		if($id2 == $id)
		{
		$query = "SELECT cname,domain,dateofapply,approve FROM apply4comp where sid='$id' AND approve='yes'";
		$result = mysqli_query($con,$query);
		
		echo '<div class="card-body"> 
		<label class="card-title">Placed Company List</label><br>   
		<div class="table-responsive">
		  <table class="table table-bordered">
			<thead>
			  <tr>
				<th> Company </th>
				<th> Domain </th>
				<th> Date of Applied</th>
				<th> Status</th>
			  </tr>
			</thead>
			<tbody>';
			while($row = mysqli_fetch_array($result)) {
				echo '<tr>';
				echo'<td>'.$row["cname"].'</td>';
				echo'<td>'.$row["domain"].'</td>';
				echo'<td>'.$row["dateofapply"].'</td>';
				echo'<td> Placed </td>';
				echo'</tr>';
				}

			echo '</tbody>
		  </table>
		</div></div>';
	}

	$sql1="select sid from apply4comp where approve='no' GROUP by approve";
		$r= mysqli_query($con,$sql1);
		$check = mysqli_fetch_array($r); 
		$id2=$check["sid"];
		if($id2 == $id)
		{
		$query = "SELECT cname,domain,dateofapply,approve FROM apply4comp where sid='$id' AND approve='no'";
		$result = mysqli_query($con,$query);
		
		echo '<div class="card-body"> 
		<label class="card-title">Rejected Company List</label><br>   
		<div class="table-responsive">
		  <table class="table table-bordered">
			<thead>
			  <tr>
				<th> Company </th>
				<th> Domain </th>
				<th> Date of Applied</th>
				<th> Status</th>
			  </tr>
			</thead>
			<tbody>';
			while($row = mysqli_fetch_array($result)) {
				echo '<tr>';
				echo'<td>'.$row["cname"].'</td>';
				echo'<td>'.$row["domain"].'</td>';
				echo'<td>'.$row["dateofapply"].'</td>';
				echo'<td> Rejected </td>';
				echo'</tr>';
				}

			echo '</tbody>
		  </table>
		</div></div>';
			}

		$sql1="select sid from apply4comp where approve='0' GROUP by approve";
		$r= mysqli_query($con,$sql1);
		$check = mysqli_fetch_array($r); 
		$id2=$check["sid"];
		if($id2 == $id)
		{
		$query = "SELECT cname,domain,dateofapply,approve FROM apply4comp where sid='$id' AND approve='0'";
		$result = mysqli_query($con,$query);
		
		echo '<div class="card-body"> 
		<label class="card-title">Pending Company List</label><br>   
		<div class="table-responsive">
		  <table class="table table-bordered">
			<thead>
			  <tr>
				<th> Company </th>
				<th> Domain </th>
				<th> Date of Applied</th>
				<th> Status</th>
			  </tr>
			</thead>
			<tbody>';
			while($row = mysqli_fetch_array($result)) {
				echo '<tr>';
				echo'<td>'.$row["cname"].'</td>';
				echo'<td>'.$row["domain"].'</td>';
				echo'<td>'.$row["dateofapply"].'</td>';
				echo'<td> Not Declare</td>';
				echo'</tr>';
				}

			echo '</tbody>
		  </table>
		</div></div>';
			}

}//End of IF CONDITION
?>
<center><a href="studentdata.php"><button class="btn btn-success">Back</button></a></center>
<br><br><br>
</body>
</html>