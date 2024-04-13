<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
    background-color: #191c24;
}
    .profile2{
      background-color:white;
      width:20cm;
      height:800px;
    }
    table{
        text-align:center;
    }
    th{
        background-color: #22bb33;
    }
    .uploadf{}
    </style>
</head>
<body>
<?php
session_start();
$user=$_SESSION['user'];
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'placement');

if(isset($_POST['viewdata']))
{
    $course= $_POST['view_id'];
    $sql="SELECT * FROM certificate where id='$user' AND course='$course'";
    $result = mysqli_query($connection,$sql);
    while($row = mysqli_fetch_array($result)) {
    echo '<table class="table table-bordered">
				<thead>
				  <tr>
					<th>Course - '.$row["course"].'<br>Date - '.$row["coursedate"].' </th>
				  </tr>
				</thead>
				<tbody>
			   ';

               echo'<td>';
               echo '<img src="';echo $row["loc"]; echo '" class="profile2">';
               echo'</td>';
			   echo'</tr>';
			   }
			   echo'</tbody></table>';

    
}
?>
<center>
<a href="profile.php"><button class="btn btn-success">Back to Profile</button></a>
</center>
<br><br><br><br>
</body>
</html>
