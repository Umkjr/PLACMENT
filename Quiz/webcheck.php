<?php 
session_start();
$id=$_SESSION['user'];
$conn = mysqli_connect('localhost','root','','quiz') or die('Unable To connect');
?>
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
    	<h1 class="text-center text-success text-uppercase animateuse" > Web Design Quiz</h1>
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
                $con = mysqli_connect('localhost','root','','quiz') or die('Unable To connect');
                if(isset($_POST['submit']))
                {
                    if(!empty($_POST['quizcheck']))
                    {
                        $count = count($_POST['quizcheck']);
            ?>

        	<td>
            <?php
            echo "Out of 10, You have attempt ".$count." Questions."; ?>
            </td>
        
          	
            <?php
            $i=1;
        $result=0;
        $selected = $_POST['quizcheck'];
        $q= "SELECT * FROM webquestion";
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
            <tr>
            <td colspan="4">
            <?php 
                  if($result >= 7){
                    echo 'Pass &#128516;';
                    $results="PASS";
                  }
                  else
                  {
                    echo 'Fail ! &#128552;';
                    $results="FAIL";
                  }
                  $siid=$id.'Web Design';
                  $sql="INSERT INTO scores(id,course,marks,results,sid) values('$id','Web Design','$result','$results','$siid')";
                  mysqli_query($conn, $sql);
                  mysqli_close($conn);
            ?>
            </td>
            </tr>
      </table>

          <br>
          <br>
        <form method="post" action=" ">
          <button class="btn btn-primary" name="close"> close </button>
            </form>
        <?php
        if(isset($_POST['close']))
        {
        echo "<script>window.close();</script>";
        }
        ?>
      </div>
   </body>
</html>



