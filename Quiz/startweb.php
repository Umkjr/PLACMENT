<?php 
session_start();
$id=$_SESSION['user'];
$conn = mysqli_connect('localhost','root','','placement') or die('Unable To connect');
$sql ="SELECT id,fname,dept FROM studentinfo WHERE id='$id'";
$i=0;
			   $result = mysqli_query($conn,$sql);
			   while($row = mysqli_fetch_array($result)) {
			   $name=$row["fname"];
			   $dept=$row["dept"];
			   $i++;
			   }
?>

<html>
<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script>
    function noBack()
         {
             window.history.forward()
         }
        noBack();
        window.onload = noBack;
        window.onpageshow = function(evt) { if (evt.persisted) noBack() }
        window.onunload = function() { void (0) }
    </script>
</head>
<body>
         <div class="container text-center">
         <h1 class="text-center text-success text-uppercase animateuse" > Web Design Quiz</h1>
             <table class="table text-center table-bordered table-hover">
                 <tr>
                     <th colspan="2" class="bg-dark text-white">Instruction</th>
                </tr>
                <tr>
                    <td class="text-left">
                        1. All Questions are Compulsory. <br>
                        2. Try to Submit the Paper in 30 minutes. <br>
                        3. You are allowed to submit only once, make sure that you have correctly attempted all the question before submission.<br>
                        4. Make sure you clicked on submit button to successfully complete the test.<br>
                        5. Any kind of cheating can be detected and report goes to higher aurthority.<br>
                        6. Make Sure you check your Roll no and Name.<br><br><br>

                        <h4 class="text-center btn-primary">!!!!   All the Best  !!!!</h4>

                    </td>
                </tr>
            </table>

            <table class="table text-center table-bordered table-hover">
                 <tr>
                     <th colspan="2" class="bg-dark text-white">Personal Info</th>
                </tr>
                <tr colspan="2">
                    <td>
                        Name 
                    </td>
                    <td>
                    <?php echo $name;?>
                    </td>
                </tr>
                <tr colspan="2">
                    <td>
                        Roll No
                    </td>
                    <td>
                        <?php echo $id;?>
                    </td>
                </tr>
                <tr colspan="2">
                    <td>
                        Department 
                    </td>
                    <td>
                    <?php echo $dept;?>
                    </td>
                </tr>
            </table>
            <br>
            <a href="webskill.php" class="btn btn-success"> Start</a>
          <button class="btn btn-danger" name="close"> Close </button>
        <?php
        if(isset($_POST['close']))
        {
        echo "<script>window.close();</script>";
        }
        ?>
        </div>
</body>
</html>