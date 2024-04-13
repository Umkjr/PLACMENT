<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="plugins/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="logoicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
      <title>Placement Prediction</title>
      <?php
       include 'app.php';
		$app->tpoLoginForm();
		$app->studentLoginForm();
		$app->deptLoginForm();
      ?>     
  </head>
  <body>
  <nav class="navigation ">
			  <div class="container-fluid">
			  
			  <div class="col-8 title">
			   <header Placement Prediction System
			  </div>
			  <div class="row"><div class="col-4">
			  <img src="plugins/Logo.png">
			  </div>
			  </div>
		      </div>
		    </nav>
        <section class="wrapper">
	<div class="container-fostrap">
	<div>
</div>
       
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="card"  data-toggle="modal" data-target="#TPOLOGIN">
                            <a class="img-card">
                            <img src="plugins/img/TPO.png" />
						  </a>
						  <div class="card-read-more">
						  <h3>TPO</h3>
				   </div>
                        </div>
					</div>
          <div class="col-xs-12 col-sm-4">
                        <div class="card" data-toggle="modal" data-target="#DEPTLOGIN">
                            <a class="img-card">
                            <img src="plugins/img/DEPT.png" />
                          </a>
						  <div class="card-read-more"> 
						  <h3> DEPARTMENT</h3>
				   </div>
                        </div>
					</div>
          <div class="col-xs-12 col-sm-4">
                        <div class="card"  data-toggle="modal" data-target="#STUDENTLOGIN">
                            <a class="img-card">
                            <img src="plugins/img/STUDENT.png" />
                          </a>
                            <div class="card-read-more"> 
							<h3>STUDENTS</h3>
                            </div>
                        </div>
					</div>
          </div>
            </div>
        </div>
    </div>
</section>

<!--Modal-->
          <!--Tpo login-->
          <div class="modal fade" id="TPOLOGIN" role="dialog">
					<div class="modal-dialog ">
					<div class="modal-content">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					<form action=" " method="post" id="tpologin">
					<img class="logo" src="images/TPO.png">
					<h3 class="big">TPO LOGIN</h3>
					<div class="input-container">
					<i class="fa fa-user icon"></i>
					<input class="input-field" type="text" name="username" placeholder="username">
					</div>
					<div class="input-container">
					<i class="fa fa-key icon"></i>
					<input class="input-field" type="password" name="password" placeholder="password" >
					</div>
					<div class="input-container">
					<input type="submit" class="input-field btn-primary" name="tpologin" value="LOGIN">
					</div>
				  </form>
					</div>
					</div>
					</div>
					</div>

          <!--Department Login-->
          <div class="modal fade" id="DEPTLOGIN" role="dialog">
					<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					<form action=" " method="post">
					<img class="logo" src="images/DEPT.png">
					<h3 class="big">DEPARTMENT LOGIN</h3>
					<div class="input-container">
					<i class="fa fa-user icon"></i>
					<input class="input-field" type="text" name="deptuser" placeholder="username" required>
					</div>
					<div class="input-container">
					<i class="fa fa-key icon"></i>
					<input class="input-field" type="password" name="deptpass" placeholder="password" required>
					</div>
					<div class="input-container">
					<i class="fa fa-bank icon"></i>
					<select class="input-field" name="dept">
					<option value="caiml">AIML</option>
					<option value="computer">Computer</option>
					<option value="mechanical">Mechanical</option>
					<option value="civil">Civil</option>
					<option value="electronics">Electronics</option>
					</select>
					</div>
					<div class="input-container">
					<input type="submit" class="input-field btn-primary" name="deptlogin" value="LOGIN">
					</div><br>
				  </form>
					</div>
					</div>
					</div>
					</div>

          <!--Student Login-->
         			<div class="modal fade" id="STUDENTLOGIN" role="dialog">
					<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body">
							<form action=" " method="post">
							<img class="logo" src="images/STUDENT.png">
							<h3 class="big">STUDENT LOGIN</h3>
							<div class="input-container">
							<i class="fa fa-user icon"></i>
							<input class="input-field" type="text" name="user" placeholder="username or roll no" required>
							</div>
							<div class="input-container">
							<i class="fa fa-key icon"></i>
							<input class="input-field" type="password" name="pass" placeholder="password" required>
							</div>
							<div class="input-container">
							<input type="submit" class="input-field btn-primary" name="studentlogin" value="LOGIN">
							</div><br>
							<label>
							<input type="checkbox" checked="checked" name="remember"> Remember me
							</label>
							<label style="padding-left:200px"><b><a href="signup.php">Signup here !!!</a></b></label>
							</form>
						</div>
					</div>
					</div>
					</div>

 
           <!-- Plugins -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <script src="plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="plugins/bootstrap/css/login.css">
  </body>
</html>