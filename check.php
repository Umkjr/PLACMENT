<!DOCTYPE html>
<html>
   <head>
      <title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

   </head>
   <body>
     <div class="container text-center" >
     	<br><br>
    	<h1 class="text-center text-success text-uppercase animateuse" > HTML Quiz</h1>
    	<br><br><br><br>
      <table class="table text-center table-bordered table-hover">
      	<tr>
      		<th colspan="2" class="bg-dark"> <h1 class="text-white"> Results </h1></th>
      		
      	</tr>
      	<tr>
		      	<td>
		      		Questions Attempted
		      	</td>

	         <?php
                $con = mysqli_connect('localhost','root','','placement') or die('Unable To connect');
                if(isset($_POST['submit']))
                {
                    if(!empty($_POST['quizcheck']))
                    {
                        $count = count($_POST['quizcheck']);
            ?>

        	<td>
            <?php
            echo "Out of 5, You have attempt ".$count." Questions."; ?>
            </td>
        
          	
            <?php
            $i=1;
        $result=0;
        $selected = $_POST['quizcheck'];
        $q= "SELECT * FROM questions";
        $query=mysqli_query($con,$q);

        while($rows= mysqli_fetch_array($query)){
            $checked=$rows['ans_id'] == $selected[$i];

            if($checked){
                    $result++;
            }
            $i++;

        }
            	?>
            	
    		
    		<tr>
    			<td>
    				Your Total score
    			</td>
    			<td colspan="2">
	    	<?php 
	            echo "your total score is ".$result;
	            }
	            
	            } 
	          ?>
	          </td>
            </tr>

            <?php 

            $id="18dco03";
            $finalresult="INSERT INTO users(id,username,totalquestion,answercorrect) VALUES ('18dco03','zishan','5','$result')";
            $squeryresult=mysqli_query($con,$finalresult);
            ?>
      </table>

      	<a href="logout.php" class="btn btn-success"> LOGOUT </a>
      </div>
   </body>
</html>



