<?php
	class App
	{

		//############### Top Login Query ##################
		function tpoLoginForm()
		{
			$con = mysqli_connect('localhost','root','','placement') or die('Unable To connect');
			if(isset($_POST['tpologin']))
			{
				$username = $_POST['username'];
				$password = $_POST['password'];
				$result = mysqli_query($con,"SELECT * FROM adminlogin WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
				while($row = mysqli_fetch_array($result)){
					$check_username = $row['username'];
					$check_password = $row['password'];
				}
				if($username == $check_username && $password == $check_password){
					session_start();
					$_SESSION['tpoid'] = $username;
					echo '<script type="text/javascript">location.href = "tpopanel.php";</script>';
				}
				else{
					echo '<script> alert("Wrong Username/Password !!"); </script>';
					echo '<script type="text/javascript">location.href = "login2.php";</script>';
				}
			}
		}//end of tpoLoginForm() function

		//###############  Student Login query #####################
		function studentLoginForm()
		{
			$con = mysqli_connect('localhost','root','','placement') or die('Unable To connect');
			if(isset($_POST['studentlogin']))
			{
				$username = $_POST['user'];
				$password = $_POST['pass'];
				$result = mysqli_query($con,"SELECT * FROM studentlogin WHERE id='$username' AND password='$password'");
				while($row = mysqli_fetch_array($result)){
					$check_username = $row['id'];
					$check_password = $row['password'];
				}
				if($username == $check_username && $password == $check_password){
					session_start();
					$_SESSION['user'] = $username;
					echo '<script type="text/javascript">location.href = "profile.php";</script>';
				}
				else{
					echo '<script> alert("Wrong Username/Password !!"); </script>';
					echo '<script type="text/javascript">location.href = "login2.php";</script>';
				}
			}
		}//end of studentLoginForm() function

		//########## Display the of Students #############
		function displayName()
		{	include 'config.php';
			$id=$_SESSION['user'];
			$sql="SELECT fname FROM studentinfo where id='$id'";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($result);
			echo $row['fname'];
		}//end of displayName() function

		//############### Department Login Query ###############
		function deptLoginForm()
		{
			$con = mysqli_connect('localhost','root','','placement') or die('Unable To connect');
			if(isset($_POST['deptlogin']))
			{
				$username = $_POST['deptuser'];
				$password = $_POST['deptpass'];
				$result = mysqli_query($con,"SELECT * FROM deptlogin WHERE username='$username' AND password='$password'");
				while($row = mysqli_fetch_array($result)){
					$check_username = $row['username'];
					$check_password = $row['password'];
				}
				if($username == $check_username && $password == $check_password){
					session_start();
					$_SESSION['deptuser'] = $username;
					echo '<script type="text/javascript">location.href = "deptpanel.php";</script>';
				}
				else{
					echo '<script> alert("Wrong Username/Password !!"); </script>';
					echo '<script type="text/javascript">location.href = "login2.php";</script>';
				}
			}
		}//end of deptLoginForm() function

		//########## TPC Company Data extract ########
		function companyData()
		{
			include 'includes/displayCompany.php';
		}//end of companyData() function

		//######## Student Signup code #####
		function studentDataAdd()
		{
			include 'config.php';
			if(isset($_POST['add']))
			{
				$id=$_POST['rollno'];
				$fname=$_POST['fname'];
				$mname=$_POST['mname'];
				$lname=$_POST['lname'];
				$mobile=$_POST['mobile'];
				$email=$_POST['email'];
				$dept=$_POST['dept'];
				$class=$_POST['class'];
				$dob=$_POST['date'];
				$address=$_POST['address'];
                $password=$_POST['password'];
				$sql2="INSERT INTO studentlogin (id,username,password) VALUES ('$id','$email','$password')";
				$sql="INSERT INTO studentinfo (id,fname,mname,lname,mobile,email,dept,class,dob,address,password,profilepic) VALUES ('$id','$fname','$mname','$lname','$mobile','$email','$dept',' $class','$dob ','$address','$password',' ')";
					if(mysqli_query($conn,$sql2))
					{
						if (mysqli_query($conn, $sql)) {
						echo '<script> alert("Signup Completed"); </script>';
						$sql="INSERT INTO `studentschooling`(`id`, `ssc`, `sscpyear`, `hsc`, `hscpyear`, `diploma`, `dippyear`, `p`) VALUES ('$id','0','0','0','0','0','0','1')";
						mysqli_query($conn, $sql);
						$sql="INSERT INTO `bemarks`(`id`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `sem7`, `sem8`, `p`) VALUES ('$id','0','0','0','0','0','0','0','0','1')";
						mysqli_query($conn,$sql);
						$path='/xampp/htdocs/Project/Certificates/'.$id;
						mkdir($path);
						header("Location:login2.php");
						} else {
						echo '<script> alert("Something Went Wrong"); </script>';
						}
					}
			}
				mysqli_close($conn);
		}//end of studentDataAdd() function


		//change password
		function changePassword()
		{

			$con = mysqli_connect('localhost','root','','placement') or die('Unable To connect');
			if(isset($_POST['change']))
			{
				$old_pass=$_POST['old_password'];
				$new_password=$_POST['password'];
				$c_password=$_POST['confirm_pwd'];
				$user_id = '18dco03';

				if($new_password==$c_password)
				{
					if($old_pass==$new_password){
						echo'<script>alert("old password and new password is same");</script>';
					}
					elseif($old_pass != $new_password)
					{
					$sql="SELECT * FROM studentlogin WHERE id='$user_id' AND password ='$old_pass'";
					$db_check=mysqli_query($con,$sql);
					$count=mysqli_num_rows($db_check);
					if($count==1)
					{
						$sql2="UPDATE studentlogin SET password = '$new_password' WHERE id='$user_id'";
						$sql3="UPDATE studentinfo SET password = '$new_password' WHERE id='$user_id'";
						if(mysqli_query($con,$sql2)){
								mysqli_query($con,$sql3);
								echo'<script>alert("your password has been change");</script>';
								mysqli_close($con);
						}
					}
					}
				}
			}	
		}//end of changepassword function

		//studentinfo extract and put in text area
		function studinfo()
		{
			include 'includes/studentinfo.php';
		}//end of studinfo()

		//######### Student Marks Add to DB Function ##############
		function studmarks($x)
		{
			$conn = mysqli_connect('localhost','root','','placement') or die('Unable To connect');
              if(isset($_POST['addmarks']))
              {	
				$rollnumber=$x;
                $ssc=$_POST['ssc'];
				$sscp=$_POST['sscp'];
				$hsc=$_POST['hsc'];
				$hscp=$_POST['hscp'];
				$diploma=$_POST['diploma'];
				$dipp=$_POST['dipp'];
				
                $sql="UPDATE studentschooling SET ssc='$ssc',sscpyear='$sscp',hsc='$hsc',hscpyear='$hscp',diploma='$diploma',dippyear='$dipp',p='2' where id='$rollnumber'";
                if(mysqli_query($conn,$sql))
                {
                  echo '<script>alert("Marks Added in System");</script>';
				}
				mysqli_close($conn);
              }
		}//end of  studmarks() function

		//########## Displaying the Student Marks from DB ##############
		function schooling($x)
		{
			$conn = mysqli_connect('localhost','root','','placement') or die('Unable to connect');
			$sql = "SELECT * from studentschooling where id='$x'";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($result);
			if($row['p']==1){
				echo'<button type="submit" name="addmarks" data-toggle="modal" data-target="#addm">Add</button>';
			}
			else
			{
				echo '<table class="table table-bordered">
				<thead>
				  <tr>
					<th> SSC </th>
					<th> SSC Year of passing </th>
					<th> HSC</th>
					<th> HSC Year of passing </th>
					<th> DIPLOMA</th>
					<th> Diploma Year of passing </th>
					<th></th>
				  </tr>
				</thead>
				<tbody>
			   ';
			   $sql= "SELECT id,ssc,sscpyear,hsc,hscpyear,diploma,dippyear FROM studentschooling where id='$x'";
			   $i=0;
			   $result = mysqli_query($conn,$sql);
			   while($row = mysqli_fetch_array($result)) {
			   echo '<tr id="'.$row["id"].'">';
			   echo'<td>'.$row["ssc"].'</td>';
			   echo'<td>'.$row["sscpyear"].'</td>';
			   echo'<td>'.$row["hsc"].'</td>';
			   echo'<td>'.$row["hscpyear"].'</td>';
			   echo'<td>'.$row["diploma"].'</td>';
			   echo'<td>'.$row["dippyear"].'</td>';
			   echo '<td>
						   <button type="button" class="btn btn-success editbtn" data-toggle="modal" data-target="#updatemarks"><i class="fa fa-edit"></i> </button>
					   </td>
			   </tr>';
			   $i++;
			   }
			   echo'
				</tbody>
			  </table>';

			}
		}//schooling($x)

		//############ Student BE marks adding to DB and Checking function ###########
		function studBe($x)
		{
			$conn = mysqli_connect('localhost','root','','placement') or die('Unable To connect');
              if(isset($_POST['addbe']))
              {	
				$sem1=$_POST['sem1'];
				if($sem1 == 'kt' || $sem1 =='KT')
				{
					$sem1=101;
				}
		
				$sem2=$_POST['sem2'];
				if($sem2 == 'kt' || $sem2 =='KT')
				{
					$sem2=101;
				}
		
				$sem3=$_POST['sem3'];
				if($sem3 == 'kt' || $sem3 =='KT')
				{
					$sem3=101;
				}
		
				$sem4=$_POST['sem4'];
				if($sem4 == 'kt' || $sem4 =='KT')
				{
					$sem4=101;
				}
		
				$sem5=$_POST['sem5'];
				if($sem5 == 'kt' || $sem5 =='KT')
				{
					$sem5=101;
				}
				
				$sem6=$_POST['sem6'];
				if($sem6 == 'kt' || $sem6 =='KT')
				{
					$sem6=101;
				}

				$sem7=$_POST['sem7'];
				if($sem7 == 'kt' || $sem7 =='KT')
				{
					$sem7=101;
				}
				elseif($sem7 == 'none' || $sem7 == 'NONE' || $sem7 == 'not given'){
					$sem7=404;	
				}
				$sem8=$_POST['sem8'];
				if($sem8 == 'kt' || $sem8 =='KT')
				{
					$sem8=101;
				}
				elseif($sem8 == 'none' || $sem8 == 'NONE' || $sem8 == 'not given'){
					$sem8=404;	
				}

                $sql="UPDATE bemarks SET sem1='$sem1',sem2='$sem2',sem3='$sem3',sem4='$sem4',sem5='$sem5',sem6='$sem6',sem7='$sem7',sem8='$sem8',p='2' where id='$x'";
                if(mysqli_query($conn,$sql))
                {
                  echo '<script>alert("BE Pointer Added in System");</script>';
				}
				mysqli_close($conn);
              }
		}//end of studBe() function

		//############# Display BE marks from DB ###########
		function bemarks($x){
			$conn = mysqli_connect('localhost','root','','placement') or die('Unable to connect');
			$sql = "SELECT * from bemarks where id='$x'";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($result);
			if($row['p']==1){
				echo'<button type="submit" name="addbe" data-toggle="modal" data-target="#addbe">Add</button>';
			}
			else
			{
				echo '<table class="table table-bordered">
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
					<th></th>
				  </tr>
				</thead>
				<tbody>
			   ';
			   $sql= "SELECT * FROM bemarks where id='$x'";
			   $i=0;
			   $result = mysqli_query($conn,$sql);
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
			   echo '<td>
						   <button type="button" class="btn btn-success editbtn" data-toggle="modal" data-target="#updatebe"><i class="fa fa-edit"></i> </button>
					   </td>
			   </tr>';
			   $i++;
			   }
			   echo'
				</tbody>
			  </table>';

			}

		}//end of bemarks() function
		
		//############### Update function for Student marks ################
		function updateschoolingmarks($x){
			$conn = mysqli_connect('localhost','root','','placement') or die('Unable To connect');
			$sql = "SELECT * FROM studentschooling WHERE id='$x'";

			   $result = mysqli_query($conn,$sql);
			   while($row = mysqli_fetch_array($result)) {
				echo '<form action="" method="POST" class="design">
				<div class="modal-body">

                <div class="form-group">
					<label> SSC </label>
					<input type="text" name="ssc" id="ssc" class="form-control" value='.$row["ssc"].'>
					</div>
					
					<div class="form-group">
                    <label> SSC Passing year </label>
                    <input type="text" name="sscy" id="ssy" class="form-control" value='.$row["sscpyear"].'>
				</div>
				
				<div class="form-group">
				<label> HSC </label>
				<input type="text" name="hsc" id="hsc" class="form-control" value='.$row["hsc"].'>
				</div>

				<div class="form-group">
				<label> HSC Passing Year</label>
				<input type="text" name="hscy" id="hscy" class="form-control" value='.$row["hscpyear"].'>
				</div>

				<div class="form-group">
				<label> Diploma </label>
				<input type="text" name="diploma" id="diploma" class="form-control" value='.$row["diploma"].'>
			</div>
			<div class="form-group">
				<label> Diploma Passing Year</label>
				<input type="text" name="diplomay" id="diplomay" class="form-control" value='.$row["dippyear"].'>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
		</div>
		</form>';
			}

			if(isset($_POST['updatedata']))
				{   
					
					$ssc=$_POST['ssc'];
					$sscp=$_POST['sscy'];
					$hsc=$_POST['hsc'];
					$hscp=$_POST['hscy'];
					$diploma=$_POST['diploma'];
					$dipyear=$_POST['diplomay'];

					$query = "UPDATE studentschooling SET ssc='$ssc',sscpyear='$sscp',hsc='$hsc',hscpyear='$hscp',diploma='$diploma',dippyear='$dipyear' WHERE id='$x'";
					$query_run = mysqli_query($conn, $query);

					if($query_run)
					{
						echo '<script> alert("Data Updated"); </script>';
						echo '<script type="text/javascript">location.href = "profile.php";</script>';
						mysqli_close($conn);
					}
					else
					{
						echo '<script> alert("Data Not Updated"); </script>';
					}
					}

		}//end of updateschoolingmarks() function

		//############ Update function for Student BE marks ################
		function updatebemarks($x){
			$conn = mysqli_connect('localhost','root','','placement') or die('Unable To connect');
			$sql = "SELECT * FROM bemarks WHERE id='$x'";
			$kt='KT';
			$ng='Pursuing';
			$result = mysqli_query($conn,$sql);
			   while($row = mysqli_fetch_array($result)) {
				   echo '<form action="" method="POST" class="design">

				   <div class="modal-body">
					   <div class="form-group">
						   <label> Sem 1 </label>';
						   if($row["sem1"] != 101){
						   echo '<input type="text" name="sem1" id="sem1" class="form-control" value='.$row["sem1"].'>';
						   }
						   else
						   {
							echo '<input type="text" name="sem1" id="sem1" class="form-control" value='.$kt.'>';
						   }

						   echo'   </div>
						   <div class="form-group">
							   <label> Sem 2 </label>';
						
							   if($row["sem2"] != 101){
								echo '<input type="text" name="sem2" id="sem2" class="form-control" value='.$row["sem2"].'>';
								}
								else
								{
								 echo '<input type="text" name="sem2" id="sem2" class="form-control" value='.$kt.'>';
								}

						echo'</div>
						<div class="form-group">
							<label> Sem 3 </label>';
					   
							if($row["sem3"] != 101){
								echo '<input type="text" name="sem3" id="sem3" class="form-control" value='.$row["sem3"].'>';
								}
								else
								{
								 echo '<input type="text" name="sem3" id="sem3" class="form-control" value='.$kt.'>';
								}
					   
						   echo'</div>
					   <div class="form-group">
						   <label> Sem 4 </label>';

						   if($row["sem4"] != 101){
							echo '<input type="text" name="sem4" id="sem4" class="form-control" value='.$row["sem4"].'>';
							}
							else
							{
							 echo '<input type="text" name="sem4" id="sem4" class="form-control" value='.$kt.'>';
							}

					   echo'</div>
					   <div class="form-group">
 						   <label> Sem 5 </label>';
						
							if($row["sem5"] != 101){
								echo '<input type="text" name="sem5" id="sem5" class="form-control" value='.$row["sem5"].'>';
								}
								else
								{
								 echo '<input type="text" name="sem5" id="sem5" class="form-control" value='.$kt.'>';
								}
						
					   echo'</div>
					   <div class="form-group">
						   <label> Sem 6 </label>';

						   if($row["sem6"] != 101){
							echo '<input type="text" name="sem6" id="sem6" class="form-control" value='.$row["sem6"].'>';
							}
							else
							{
							 echo '<input type="text" name="sem6" id="sem6" class="form-control" value='.$kt.'>';
							}

					   echo'</div>
					   <div class="form-group">
						   <label> Sem 7 </label>';
							if($row["sem7"] == 404){
								echo'<input type="text" name="sem7" id="sem7" class="form-control" value='.$ng.'>';
							}
							elseif($row["sem7"] == 101){
								echo'<input type="text" name="sem7" id="sem7" class="form-control" value='.$kt.'>';
							}
							else{
								echo'<input type="text" name="sem7" id="sem7" class="form-control" value='.$row["sem7"].'>';
							}
						   

					   echo'</div>
					   <div class="form-group">
						   <label> Sem 8 </label>';
						   
						   if($row["sem8"] == 404){
							echo'<input type="text" name="sem8" id="sem8" class="form-control" value='.$ng.'>';
						}
						elseif($row["sem8"] == 101){
							echo'<input type="text" name="sem8" id="sem8" class="form-control" value='.$kt.'>';
						}
						else{
							echo'<input type="text" name="sem8" id="sem8" class="form-control" value='.$row["sem8"].'>';
						}

					   echo'</div>
				   </div>
				   <div class="modal-footer">
					   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					   <button type="submit" name="updatebe" class="btn btn-primary">Update Data</button>
				   </div>
				   </form>';
			   }

			   if(isset($_POST['updatebe'])){

					$sem1=$_POST['sem1'];
					if($sem1 == 'kt' || $sem1 == 'KT'){
						$sem1=101;
					}		
					
					$sem2=$_POST['sem2'];
					if($sem2 == 'kt' || $sem2 == 'KT'){
						$sem2=101;
					}
					
					$sem3=$_POST['sem3'];
					if($sem3 == 'kt' || $sem3 == 'KT'){
						$sem3=101;
					}
					
					$sem4=$_POST['sem4'];
					if($sem4== 'kt' || $sem4== 'KT'){
						$sem4=101;
					}

					$sem5=$_POST['sem5'];
					if($sem5== 'kt' || $sem5== 'KT'){
						$sem5=101;
					}

					$sem6=$_POST['sem6'];
					if($sem6 == 'kt' || $sem6 == 'KT'){
						$sem6='101';
					}

					$sem7=$_POST['sem7'];
					if($sem7== 'Pursuing' || $sem7== 'pursuing' || $sem7== 404 || $sem7 =='none' || $sem7=='None' || $sem7=='NONE'){
						$sem7=404;
					}

					$sem8=$_POST['sem8'];
					if($sem8 == 'Pursuing' || $sem8== 'pursuing' || $sem8== 404 || $sem8 =='none' || $sem8=='None' || $sem8=='NONE'){
						$sem8=404;
					}
					
					
					$query = "UPDATE bemarks SET sem1='$sem1',sem2='$sem2',sem3='$sem3',sem4='$sem4',sem5='$sem5',sem6='$sem6',sem7='$sem7',sem8='$sem8' WHERE id='$x'";
					$query_run = mysqli_query($conn, $query);

					if($query_run)
					{
						echo '<script> alert("Data Updated"); </script>';
						echo '<script type="text/javascript">location.href = "profile.php";</script>';
						mysqli_close($conn);
					}
					else
					{
						echo '<script> alert("Data Not Updated"); </script>';
					}
			   }
		}//end of updatebemarks() function

		//####### Displaying Student Detail to TPO,DEPT ############
		function studentdata()
		{
			$conn = mysqli_connect('localhost','root','','placement') or die('Unable To connect');
			$sql="SELECT * FROM studentinfo";
			$i=0;
			   $result = mysqli_query($conn,$sql);
			   while($row = mysqli_fetch_array($result)) {
			   echo '<tr id="'.$row["id"].'">';
			   echo'<td>'.$row["id"].'</td>';
			   echo'<td>'.$row["fname"].'</td>';
			   echo'<td>'.$row["email"].'</td>';
			   echo'<td>'.$row["dept"].'</td>';
			   echo '<td>
						   <button type="button" class="btn btn-success viewdetailbtn">Detail</button>
					   </td>
			   </tr>';
			   $i++;
			   }

		}//end of studentdata() function

		//############ Display Quiz marks ##################
		function DisplayTech($x){
			$conn = mysqli_connect('localhost','root','','quiz') or die('Unable To connect');
			$sql="SELECT * FROM scores where id='$x'";

			echo '<table class="table table-bordered">
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
			  </table>';

		}//end of DisplayTech() function

		//############## Profile picture Upload to DB function ##################
		//############## Displaying profile picture from DB #####################
		function imgupload($x){
									$user = $x;

                                  $con=mysqli_connect("localhost","root");
                                
                                  mysqli_select_db($con,'placement');
                                  $displayquery = " select * from profileimg where sid='$user'";
                                  $querydisplay = mysqli_query($con,$displayquery);

                                  $row = mysqli_num_rows($querydisplay);

                                if($row)
                                { 
                                 //echo ' <div class="profile2"> ';

                                 $displayquery = " select * from profileimg where sid='$user'";
                                 $querydisplay = mysqli_query($con,$displayquery);
                             
                                 //$row = mysqli_num_rows($querydisplay);
                             
                                 while($result = mysqli_fetch_array($querydisplay))
                                 {
                                     
                                    echo '<img src="';echo $result["image"]; echo '" class="profile2">';
                                     
                                 }
                             
                                                   

                                 //echo ' </div>';
                                }
                                else
                                {
                                  
                                  echo '    <form action="profile.php" method="post" enctype="multipart/form-data">

                                  <input type="file" name="file" id="file">
                              <br>
                                  <input type="submit" name="submit">
                                  </form>';

				if(isset($_POST['submit'])){
					$files = $_FILES['file'];

					$filename = $files['name'];

					$fileerror = $files['error'];

					$filetemp = $files['tmp_name'];

					$fileext = explode('.',$filename);
					$filecheck = strtolower(end($fileext));

					$fileextstored = array('png','PNG','jpg','JPG','jpeg','JPEG');

							if(in_array($filecheck,$fileextstored))
							{
								$destinationfile = 'profileimg/'.$filename;
								move_uploaded_file($filetemp,$destinationfile);

								$q = "INSERT INTO `profileimg`(`sid`, `image`) VALUES ('$user','$destinationfile')";

								$query = mysqli_query($con,$q);


							}
							echo '<script type="text/javascript">location.href = "profile.php";</script>';
				}
			}
		}//end of imgupload() function

		//########## Student ICON function ################
		function icon($x){
			$user = $x;
			$con=mysqli_connect("localhost","root");
                                
                                  mysqli_select_db($con,'placement');
                                  $displayquery = " select * from profileimg where sid='$user'";
                                  $querydisplay = mysqli_query($con,$displayquery);

                                  $row = mysqli_num_rows($querydisplay);

                                if($row)
                                { 
                                 $displayquery = " select * from profileimg where sid='$user'";
                                 $querydisplay = mysqli_query($con,$displayquery);
                             
                                 //$row = mysqli_num_rows($querydisplay);
                             
                                 while($result = mysqli_fetch_array($querydisplay))
                                 {
                                     
                                    echo $result["image"];
                                     
                                 }
                             
                
		}
	}//end of icon() function

	//############# To store Domain of Interest in DB function ############### 
	function domainIn($x){
		$user = $x;
		$con=mysqli_connect("localhost","root");
                                
		mysqli_select_db($con,'placement');

		if(isset($_POST['AddDo'])){
				$domainInterest = $_POST["domainin"];

				$uid=$user.$domainInterest;
				$q ="INSERT INTO `domainin`(`did`, `domainin`, `sid`) VALUES ('$uid','$domainInterest','$user')";
				mysqli_query($con,$q);

		}
	}//end of domainIn() function

	//################### Domain of Interest Display Function #####################
	function domainDis($x){
		$con=mysqli_connect("localhost","root");
                                
		mysqli_select_db($con,'placement');
		$sql="SELECT * FROM `domainin` WHERE sid='$x'";

		echo '<table class="table table-bordered">
			<thead>
			  <tr>
				<th>Interest of Domain</th>
				<th>Remove</th>
			  </tr>
			</thead>
			<tbody>
		   ';

		   $i=0;
		   $result = mysqli_query($con,$sql);
		   while($row = mysqli_fetch_array($result)) {
		   echo '<tr id="'.$row["did"].'">';
		   echo'<td>'.$row["domainin"].'</td>';
		   echo'<td><center><button type="button" class="btn btn-danger domainbtn">Remove</button></center></td>';
		   echo'</tr>';
		   $i++;
		   }
		   echo'
			</tbody>
		  </table>';


	}//end domainDis() function

	//########## Change of Student Password by Department ################
	function studentpass(){
		$conn = mysqli_connect('localhost','root','','placement') or die('Unable To connect');
			$sql="SELECT SI.id,SI.fname,SI.lname,SL.username,SL.password FROM studentinfo SI join studentlogin SL where SI.id = SL.id";
			$i=0;
			   $result = mysqli_query($conn,$sql);
			   while($row = mysqli_fetch_array($result)) {
			   echo '<tr id="'.$row["id"].'">';
			   echo'<td>'.$row["id"].'</td>';
			   echo'<td>'.$row["fname"]." ".$row["lname"].'</td>';
			   echo'<td>'.$row["username"].'</td>';
			   echo'<td>'.$row["password"].'</td>';
			   echo '<td>
						   <a href="#"><button type="button" class="btn btn-success passbtn">Change Password</button></a>
					   </td>
			   </tr>';
			   $i++;
			   }
	}//end of studentpass() function

	//############# Show current Placement to Dept ################
	function currentplacement()
	{
		$conn = mysqli_connect('localhost','root','','placement') or die('Unable To connect');
		$date=date("Y-m-d");
		$sql = "SELECT CL.cid, CL.cname,CP.cutoff,CP.year FROM companylist CL join companyplaced CP where CL.cid = CP.cid AND CP.year = '$date'";
		$i=0;
			   $result = mysqli_query($conn,$sql);
			   while($row = mysqli_fetch_array($result)) {
			   echo '<tr id="'.$row["cid"].'">';
			   echo'<td>'.$row["cid"].'</td>';
			   echo'<td>'.$row["cname"].'</td>';
			   echo'<td>'.$row["cutoff"].'</td>';
			   echo'<td>'.$row["year"].'</td>';
			   echo'<td></td>';
			   echo '</tr>';
			   $i++;
			   }
	}//end of currentplacement() function

	//################# add Comapny to DB by TPO ##################
	function addcompany(){
		$conn = mysqli_connect('localhost','root','','placement') or die('Unable To connect');
          if(isset($_POST['add']))
          {
            $cid2=$_POST['compid'];
            $year=$_POST['year'];
            $seats=$_POST['seats'];
            $domain=$_POST['domain'];
			$cutoff=$_POST['cutoff'];
			$id=$cid2.$domain.$year;
			$sql = "INSERT INTO `companyplaced`(`cid`, `id`, `year`, `seats`, `domain`, `cutoff`) VALUES ('$cid2','$id','$year','$seats','$domain','$cutoff')";
			if (mysqli_query($conn, $sql)) {
            }
            mysqli_close($conn);
          } 
	}//end of addcompany() function

	//################ Student Apply for Company Function ##################
	function applycomp2($user,$b){
		$conn = mysqli_connect('localhost','root','','placement') or die('Unable To connect');
		$sql2 ="SELECT domainin from domainin where sid='$user'";
			   $be = $b;
			   $date=date("Y-m-d");
			   $result = mysqli_query($conn,$sql2);
			   $j=0;
			   while($row2 = mysqli_fetch_array($result)) {
				$domain = $row2['domainin'];
			   $sql3 = "SELECT cl.cname,cp.cutoff, cp.domain,cp.year from companylist cl join companyplaced cp where cl.cid = cp.cid AND cp.year >'$date' AND cp.cutoff <= $be AND cp.domain = '$domain'";
			   $i=0;
			   $result2 = mysqli_query($conn,$sql3);
							while($row = mysqli_fetch_array($result2)) {
							$id = $user.$row["cname"].$row["domain"].$row["year"];
							$cname=$row["cname"];
							$cutoff=$row["cutoff"];
							$do=$row["domain"];
							$year=$row["year"];
							$q="select * from apply4comp where id = '$id'";
							$r=mysqli_query($conn,$q);
							$rows = mysqli_fetch_array($r);
								$repeat= $rows['id'];
								if($repeat == $id){
								}
								else{
									$sql4 = "INSERT INTO `tempapply`(`id`, `cname`, `cutoff`, `domain`, `year`, `sid`) VALUES ('$id','$cname','$cutoff','$do','$year','$user')";
									mysqli_query($conn,$sql4);
								}
							
						
							$i++;
							}
			   $j++;
			}
	}//end of applycomp2() function

	//################# temp apply function work as cache before storeing in DB #################
	function tempapply($x){
		$conn = mysqli_connect('localhost','root','','placement') or die('Unable To connect');
		$sql = "SELECT * FROM tempapply WHERE sid = '$x'";
		$i=0;
			   $result = mysqli_query($conn,$sql);
			   while($row = mysqli_fetch_array($result)) {
			   echo '<tr id="'.$row["id"].'">';
			   echo'<td>'.$row["id"].'</td>';
			   echo'<td>'.$row["cname"].'</td>';
			   echo'<td>'.$row["cutoff"].'</td>';
			   echo'<td>'.$row["domain"].'</td>';
			   echo'<td>'.$row["year"].'</td>'; 
			   echo '<td>
						<button type="button" class="btn btn-success deletebtn">Apply</button>
					   </td>
			   </tr>';
			   $i++;
			   }

	}//end of tempapply() function

	//################ Show no. of Students Enroll for Drive to Dep ##############
	function enroll()
	{
			$conn = mysqli_connect('localhost','root','','placement') or die('Unable To connect');
			$sql = "SELECT * FROM apply4comp where approve='0'";
			$i=0;
				   $result = mysqli_query($conn,$sql);
				   while($row = mysqli_fetch_array($result)) {
				   echo '<tr id="'.$row["id"].'">';
				   echo'<td>'.$row["sid"].'</td>';
				   echo'<td>'.$row["name"].'</td>';
				   echo'<td>'.$row["cname"].'</td>';
				   echo'<td>'.$row["domain"].'</td>';
				   echo'<td>'.$row["dateofapply"].'</td>'; 
				   echo '</tr>';
				   $i++;
				   }
	}//end of enroll() function

	//############## Shows no. student placed to company to Dept #############
	function placed(){
	
			$conn = mysqli_connect('localhost','root','','placement') or die('Unable To connect');
			$sql = "SELECT * FROM apply4comp where approve='yes'";
			$i=0;
				   $result = mysqli_query($conn,$sql);
				   while($row = mysqli_fetch_array($result)) {
				   echo '<tr id="'.$row["id"].'">';
				   echo'<td>'.$row["sid"].'</td>';
				   echo'<td>'.$row["name"].'</td>';
				   echo'<td>'.$row["cname"].'</td>';
				   echo'<td>'.$row["domain"].'</td>';
				   echo'<td>'.$row["dateofapply"].'</td>'; 
				   echo '</tr>';
				   $i++;
				   }
	}//end of placed() function

	//############# TPO can aprove the Studetn as he/She placed on the Company #############
	function approve(){
		$conn = mysqli_connect('localhost','root','','placement') or die('Unable To connect');
		$sql = "select * from companylist";

		$result = mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($result)){
		
			$comp = $row['cname']." - ".$row['cid'];
			$comp2 = $row['cname'];
			$sql2 = "SELECT * FROM apply4comp where cname = '$comp2' AND approve='0'";
			
			$r= mysqli_query($conn,$sql2);
			while($row2 = mysqli_fetch_array($r)){
				echo "<div class='card-body>;
				<h4 class='card-title' style='text-align:center; padding-top:2.5%;'>".$comp."</h4><br><br><br>
                    <div class='table-responsive'>
                      <table class='table table-bordered'>
                        <thead>
						  <tr>
						  <th> Unique Apply ID</th>
                            <th> Student ID</th>
                            <th> Name </th>
                            <th> Company</th>
                            <th> Domain</th>
                            <th>Date of Apply</th>
                            <th> Approve</th>
                          </tr>
                        </thead>
						<tbody>";
						
						echo '<tr id="'.$row2["id"].'">';
						echo'<td>'.$row2["id"].'</td>';
						echo'<td>'.$row2["sid"].'</td>';
						echo'<td>'.$row2["name"].'</td>';
						echo'<td>'.$row2["cname"].'</td>';
						echo'<td>'.$row2["domain"].'</td>';
						echo'<td>'.$row2["dateofapply"].'</td>'; 
						echo '<td>
									<button type="button" class="btn btn-success deletebtn">Yes</button>
									<button type="button" class="btn btn-danger deletebtn2">NO</button>
								</td>
						</tr>';


						echo "</tbody>
                      </table>
                    </div>
				  </div><br><br><br>";

			}
                        
		}
	}//end of approve() function

	//################### Calculate BE agg ########################
	function BEagg($x){
		$conn = mysqli_connect('localhost','root','','placement') or die('Unable To connect');
		$sql= "SELECT * FROM bemarks where id='$x'";
			   $result = mysqli_query($conn,$sql);
			   while($row = mysqli_fetch_array($result)) {
			   	$sem1=$row['sem1'];
				$sem2=$row['sem2'];   
				$sem3=$row['sem3'];
			   	$sem4=$row['sem4'];
			   	$sem5=$row['sem5'];
			   	$sem6=$row['sem6'];
				$sem7=$row['sem7'];
			   	$sem8=$row['sem8'];
			   }

			   if($sem1 != 101 && $sem2 != 101 && $sem3 != 101 && $sem4 != 101 && $sem5 != 101 && $sem6 != 101 && $sem7 != 101 && $sem8 != 101 )
				{	
					if($sem7 == 404){
					$beagg = $sem1 + $sem2 + $sem3 + $sem4 + $sem5 + $sem6;
					$beagg = $beagg / 6;
					return number_format((float)$beagg,2,'.','');
					}
					elseif($sem8 == 404){
						$beagg = $sem1 + $sem2 + $sem3 + $sem4 + $sem5 + $sem6 + $sem7;
						$beagg = $beagg / 7;
						return number_format((float)$beagg,2,'.','');
					}
					else{
						$beagg = $sem1 + $sem2 + $sem3 + $sem4 + $sem5 + $sem6 + $sem7 + $sem8;
						$beagg = $beagg / 8;
						return number_format((float)$beagg,2,'.','');	
					}
				}
				else{
					return 0;
				}	

	}//end BEagg Function

	//################ Adding Certificates to DB #########################
	function addCertificate($x){
		$con=mysqli_connect("localhost","root");
		mysqli_select_db($con,'placement');
		if(isset($_POST['AddCert'])){

			$course = $_POST['coursename'];

			$date = $_POST['datecert'];

			$files = $_FILES['file'];

			$filename = $files['name'];

			$fileerror = $files['error'];

			$filetemp = $files['tmp_name'];

			$fileext = explode('.',$filename);
			$filecheck = strtolower(end($fileext));

			$fileextstored = array('png','PNG','jpg','JPG','jpeg','JPEG');

					if(in_array($filecheck,$fileextstored))
					{
						$destinationfile = 'Certificates/'.$x.'/'.$filename;
						move_uploaded_file($filetemp,$destinationfile);

						$q = "INSERT INTO certificate(`loc`, `course`, `coursedate`, `id`) VALUES ('$destinationfile','$course','$date','$x')";

						$query = mysqli_query($con,$q);


					}
					echo '<script type="text/javascript">location.href = "profile.php";</script>';
				}
	}//end of addCertificate() function

	//################## Display Student Certificates ###########################
	function displayCertificate($x){
		$con=mysqli_connect("localhost","root");
		mysqli_select_db($con,'placement');
			$sql="SELECT * FROM certificate where id='$x'";
			$sql2="SELECT id FROM certificate where id='$x' group by id";
			$result2 = mysqli_query($con,$sql2);
			$result = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($result2);
			if($row['id']==$x){
			echo '<table class="table table-bordered">
				<thead>
				  <tr>
					<th>Course</th>
					<th>Date</th>
					<th>View Certificate</th>
					<th>Action</th>
				  </tr>
				</thead>
				<tbody>
			   ';

			   
			   while($row = mysqli_fetch_array($result)) {
			   echo '<tr id="'.$row["course"].'">';
			   echo'<td>'.$row["course"].'</td>';
			   echo'<td>'.$row["coursedate"].'</td>';
			   echo'<td><button type="button" class="btn btn-success viewbtn">View Certificate</button></td>';
			   echo'<td><button type="button" class="btn btn-danger removebtn">Remove</button></td>';
			   echo'</tr>';
			   }
			   echo'
				</tbody>
			  </table>';
			}

	}//end of displayCertificate() function

	//############## Job Status Function ########################
	//####### Which shows the status of applied job #############
	function jobStatus($x){
		$con=mysqli_connect("localhost","root");
		mysqli_select_db($con,'placement');
		$sql1="select sid from apply4comp where sid='$x' AND approve='yes' GROUP by approve";
		$r= mysqli_query($con,$sql1);
		$check = mysqli_fetch_array($r); 
		$id=$check["sid"];
		if($id == $x)
		{
		$query = "SELECT cname,domain,dateofapply,approve FROM apply4comp where sid='$x' AND approve='yes'";
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

	$sql1="select sid from apply4comp where sid='$x' AND approve='no' GROUP by approve";
		$r= mysqli_query($con,$sql1);
		$check = mysqli_fetch_array($r); 
		$id=$check["sid"];
		if($id == $x)
		{
		$query = "SELECT cname,domain,dateofapply,approve FROM apply4comp where sid='$x' AND approve='no'";
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

		$sql1="select sid from apply4comp where sid='$x' AND approve='0' GROUP by approve";
		$r= mysqli_query($con,$sql1);
		$check = mysqli_fetch_array($r); 
		$id=$check["sid"];
		if($id == $x)
		{
		$query = "SELECT cname,domain,dateofapply,approve FROM apply4comp where sid='$x' AND approve='0'";
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
	}//end of jobStatus() function

	//################# Check and Show Students ##############################
	//################# Which particular Zone Student is #####################
	//################# Also create Datasets file for particular student #####
	//################# running python Algorithm and Get Prediction result ###
	//################# Display the pie and BAr graph according to Result ####
	//################# This IMP part of Project #############################
	function zone($be,$user)
	{
		$conn = mysqli_connect('localhost','root','','placement') or die('Unable To connect');
		if($be<= 4.5){
			echo '<form><div class="zone1"><h3> RED ZONE </h3></div></form>';
			return 404;
		}
		elseif($be>4.5 && $be<=6.5){
			echo '<form><div class="zone2"><h3> ORANGE ZONE </h3></div></form>';
			echo '<br><br><br>';
			echo '<form  method="POST">
			<input type="submit" name="predict" class="btn btn-success" value="Prediction">
			</form>';
		}
		elseif($be>6.5 && $be<=10){
			echo '<form><div class="zone3"><h3> GREEN ZONE </h3></div></form>';
			echo '<br><br><br>';
			echo '<form action="" method="POST">
			<input type="submit" name="predict" class="btn btn-success" value="Prediction">
			</form>';
		}//end of else-if
		if(isset($_POST['predict'])){
			$sql2 ="SELECT domainin from domainin where sid='$user'";
		   //$date=date("Y-m-d");
		   $result = mysqli_query($conn,$sql2);
		   $domains = array();
		   $i=0;
		   while($row2 = mysqli_fetch_assoc($result)) {
			$domains[] = $row2['domainin'];
			//$domains[] = $domain;
			$i++;}
		#print_r($domains);

		$query = $conn->query("SELECT cp.cid,cl.cname,cp.cutoff, cp.domain,cp.year from companylist cl join companyplaced cp where cl.cid = cp.cid");
		//Exporting data to CSV file 
		$delimiter = ",";
		$filename = $user;
		$n = 'C:/xampp/htdocs/Project/Datasets/'.$filename.'.csv';
		$f = fopen($n, 'w');
		$fields = array('ID', 'Name', 'cutoff','input','require','domain','found','date','status');
		fputcsv($f, $fields, $delimiter);

						while($row = $query->fetch_assoc()){
							if(in_array($row['domain'],$domains)){
								$found='match';
								if($be >= $row['cutoff']){
									$yon = 'yes';
								}
								else{
									$yon = 'no';
								}
								if($be > $row['cutoff']){
									$require='less';
								}elseif($be <  $row['cutoff']){
									$require='high';
								}

							}
							else{
								$yon='no';
								$found='not-match';
								$require='average';
							}
						$lineData = array($row['cid'], $row['cname'],$row['cutoff'],$be,$require,$row['domain'],$found, $row['year'],$yon);
						fputcsv($f, $lineData, $delimiter);
						}
						//move back to beginning of file
						fseek($f, 0);
						//output all remaining data on a file pointer
						fpassthru($f);
			//running python prediction file
			$path = 'python predict.py Datasets/'.$user.'.csv';
			$m = exec($path,$o,$a);
			echo'<br><br><br>';
			$n = 100 - $m;
			//data for pie chart
			echo "    <script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
			<script type='text/javascript'>
			  google.charts.load('current', {packages:['corechart']});
			  google.charts.setOnLoadCallback(drawChart);
			  function drawChart() {
				var data = google.visualization.arrayToDataTable([
				  ['Yes/No', 'Data'],
				  ['YES', ".$m."],
				  ['NO',".$n."]
				]);
		
				var options = {
				  title: 'Chances of Getting Placed',
				  is3D: true,
				  color: 'black',
				};
		
				var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
				chart.draw(data, options);
			  }
			</script>";

			echo '<center><div id="piechart_3d" style="width: 900px; height: 500px;"></div></center>';
			echo '<br><center><label class="card-title">Figure: Pie Chart</label><center><br>';

			echo "<script type='text/javascript'>
			google.charts.load('current', {packages:['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {
			  var data = google.visualization.arrayToDataTable([
				['YES or NO', 'Chances', { role: 'style' } ],
				['YES',".$m." , 'color:#b87333'],
				['NO', ".$n.", 'color: #e5e4e2']
			  ]);
		
			  var view = new google.visualization.DataView(data);
			  view.setColumns([0, 1,
							   { calc: 'stringify',
								 sourceColumn: 1,
								 type: 'string',
								 role: 'annotation' },
							   2]);
		
			  var options = {
				title: 'Chances of getting Placed, in %',
				width: 900,
				height: 500,
				bar: {groupWidth: '100%'},
				legend: { position: 'none' },
			  };
			  var chart = new google.visualization.BarChart(document.getElementById('barchart_values'));
			  chart.draw(view, options);
		  }
		  </script>";
		  echo '<center><div id="barchart_values" style="width: 900px; height: 500px;"></div></center>';
		echo '<br><br><label class="card-title">Figure: Bar Graph</label><br>';

		}//end of if condition
	}//end of zone() function

	//############## showing warning to red zone students ##################
	function check($zone){
		if($zone == 404){
			echo "<h3 class='warning'> YOU'RE IN RED ZONE !!!! <br> SORRY !! WE CANT PREDICT YOU'RE CHANCES OF GETTING PLACED <br> PLEASE IMPROVE YOUR POINTER </h3>";
		}

	}//end of check() function

}//class end here

	
  		
  	$app = new app();
  	// print_r($app->getProjects());

  	
?>