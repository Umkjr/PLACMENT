<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<?php include 'app.php'; 
    $app->studentDataAdd();
    $app->studentLoginForm();
    ?>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Blueprint: Split Layout</title>
		<meta name="description" content="Blueprint: Split Layout" />
		<meta name="keywords" content="website template, layout, css3, transition, effect, split, dual, two sides, portfolio" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="signupassets/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="signupassets/css/component.css" />
        <link rel="stylesheet" href="signupassets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="signupassets/js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<div id="splitlayout" class="splitlayout">
				<div class="intro">
					<div class="side side-left">
						<div class="intro-content">
							<div class="profile" style="background: white"><img src="images/STUDENT.png" alt="profile1"></div>
							<h1><span>Student Login </span></h1>
						</div>
						<div class="overlay"></div>
					</div>
					<div class="side side-right">
						<div class="intro-content">
							<div class="profile"><img src="images/STUDENT.png" alt="profile2"></div>
							<h1><span>Student Signup </span></h1>
						</div>
						<div class="overlay"></div>
					</div>
				</div><!-- /intro -->
				<div class="page page-right">
					<div class="page-inner">
						<section class="signup">
										<div class="containers">
												<form action="" method="post" name="add" >   
												<h1> Student Registeration Form</h1>  
												<hr>  
												<label><b> First name </b></label>   <br>
												<input class="left" type="text" name="fname" placeholder= "First name" size="15" required />   <br>
												<label><b> Middle name</b> </label>   <br>
												<input class="left" type="text" name="mname" placeholder="Middle name" size="15" required />   <br>
												<label><b> Last name </b></label>  <br>  
												<input class="left" type="text" name="lname" placeholder="Last name" size="15"required />   <br>
												<label><b>   
												Department </b>  
												</label>   <br> 
												<select name="dept" class="left">  
												<option value="0">Department</option>  
												<option value="CO">Computer</option>  
												<option value="ME">Mechanical</option>  
												<option value="CE">Civil</option>  
												<option value="EE">Electronics</option>  
												<option value="EXTC">Electronics and TeleCommunication</option>    
												</select><br><br>
												<label><b>Roll No. </b></label><br>
												<input class="left" type="text" name="rollno" placeholder="Roll No." size="7" required/> <br>
												<label><b>   
												Class </b>  
												</label>   <br> 
												<select name="class" class="left">  
												<option value="0">Class</option>  
												<option value="FE">FE</option>  
												<option value="SE">SE</option>  
												<option value="TE">TE</option>  
												<option value="BE">BE</option>    
												</select><br>
												<label><b>Date Of Birth</b></label><br>
												<input type="date" name="date" class="left"><br>
												<label><b>  Phone </b>  </label>  <br>
												<input class="left" type="text" name="mobile" placeholder="phone no." size="10" required>   <br>
												<b>Current Address</b> <br><br>
												<textarea class="left" name="address" cols="80" rows="5" placeholder="Current Address" value="address" required>  
												</textarea>  <br>
												<label for="email"><b>Email</b></label> <br> 
												<input class="left" type="text" placeholder="Enter Email" name="email" required>  <br>
												
													<label for="psw"><b>Password</b></label>  <br>
													<input class="left" type="password" placeholder="Enter Password" name="password" required>  <br>
												
													<label for="psw-repeat"><b>Re-type Password</b></label>  <br>
													<input class="left" type="password" placeholder="Retype Password" name="password-repeat" required>  <br>
													<br>
													<button type="submit" class="registerbtn" name="add">Register</button>    
												</form> 
											</div> 
							
						</section>
					</div><!-- /page-inner -->
				</div><!-- /page-right -->
				<div class="page page-left">
					<div class="page-inner">
						<section>
                        <div>
							<form action=" " method="post">
								<h3 class="big">STUDENT LOGIN</h3><br>
								<img class="logo" src="images/STUDENT.png">
								<br><br>
								<div class="input-container">
								<i class="fa fa-user icon"></i>
								<input class="input-field" type="text" name="user" placeholder="username or roll no" required>
								</div><br>
								<div class="input-container">
								<i class="fa fa-key icon"></i>
								<input class="input-field" type="password" name="pass" placeholder="password" required>
								</div><br>
								<input type="submit" class="input-field btn-primary" name="studentlogin" value="LOGIN">
								<br><br>
								<label class="m">
								<input type="checkbox" checked="checked" name="remember"> <b>Remember me</b>
								</label>
                                </form>
                            </div>
                            </section>
					</div><!-- /page-inner -->
				</div><!-- /page-left -->
				<a href="#" class="back back-right" title="back to intro">&rarr;</a>
				<a href="#" class="back back-left" title="back to intro">&larr;</a>
			</div><!-- /splitlayout -->
		</div><!-- /container -->
		<script src="signupassets/js/classie.js"></script>
		<script src="signupassets/js/cbpSplitLayout.js"></script>
	</body>
</html>
