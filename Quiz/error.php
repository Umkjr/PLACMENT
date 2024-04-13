<?php

?>

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
        <div>
                <h1 class="text-center text-warning text-uppercase animateuse" >SORRY !! <br> YOU ALREADY GIVEN THIS EXAM</h1>
        </div>
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