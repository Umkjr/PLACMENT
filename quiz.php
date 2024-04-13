<html>
<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
</head>
<body>
<div class="container">
<div class="card">
</div class="col-lg-8 m-auto d-block">
<br><h1 class="text-center text-primary">HTML Quiz</h1>
<h2 class="text-center text-success">welcome user</h2>
<div class="text-center card-header">
    <h3>welcome user ,you have to given test within give time. All the Best</h3>
</div>
<br>
<form action="check.php" method="post">
    <?php
 $con = mysqli_connect('localhost','root','','placement') or die('Unable To connect');
 $count=array(1,2,3,4,5);
 shuffle($count);
    for($i=0;$i<5;$i++){
        $v=$count[$i];
                $sql="SELECT * FROM questions where qid=$v";
                $result = mysqli_query($con,$sql);
                $row='';
                while($row = mysqli_fetch_array($result)){
                ?>
                    <div class="card">
                    <h5 class="card-header"> <?php echo $row['questions'] ; ?></h5>
                    
                    <?php 
                    $sql="SELECT * FROM answers where ans_id=$v ORDER BY rand() LIMIT 4";
                    $result = mysqli_query($con,$sql);
                    $row='';
                    while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class="card-body">
                    <input type="radio" name="quizcheck[<?php echo $row['ans_id'];?>]" value="<?php echo $row['aid']; ?>">
                    <?php echo $row['answers'] ;?>
                    </div>
                    <?php
                    }
                    ?>

                    </div>


                <?php
                }
    }
    ?>
    <input type="submit" name="submit" value="submit" class="btn btn-success m-auto d-block">
    </form>
    <a href="#" class="btn btn-primary">Done</a>
    </div>
</div>
</div>
</body>
</html>