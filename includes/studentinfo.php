<?php
$user=$_SESSION['user'];
include 'config.php';
                $cid=$user;
              $sql= "SELECT id,fname,mname,lname,email,mobile,dept,class,dob,address,password FROM studentinfo where id='$cid'";
              $i=0;
              $result=mysqli_query($conn,$sql);
              while($row = mysqli_fetch_array($result)) {
              ?>
              <form>
              <table  class="table" style="font-size:15px;">
              <tr>
              <td>
                        <label>First Name </label>
                        </td>
                        <td>
                        <input type="text" value="<?php echo $row['fname']?>" disabled>
                        </td>
                </tr>

                <tr>
                <td>
                        <label>Middle Name </label>
                </td><td>
                        <input type="text" value="<?php echo $row['mname']?>" disabled>
                        </td>
                </tr>
                <tr>
                <td>
                        <label>Last Name </label>
                </td><td>    
                        <input type="text"value="<?php echo $row['lname']?>" disabled>
                </td>
                </tr>
 
                <tr>
                <td>
                    <label>mobile No </label>
                    </td><td>
                    <input type="text" value="<?php echo $row['mobile']?>" disabled>
                    </td>
                    </tr>
                    <tr>
                <td>
                    <label>E-mail </label>
                    </td><td>
                    <input type="text" value="<?php echo $row['email']?>" disabled>
                    </td>
                    </tr>
                    <tr>
                <td>

                    <label>DOB </label></td><td>
                    <input type="date" value="<?php echo $row['dob']?>" disabled>
                    </td>
                    </tr>
                    <tr>
                <td>
                    <label>address </label></td><td>
                    <input type="text" value="<?php echo $row['address']?>" disabled>
                    </td>
                    </tr>
                    </table>
                    </form> 
                <!---->
                </div>
                  <div class="card-body">
                    <label class="card-title">Academic Info</label>
                    <!---->
                    <table style="width:50% font-size:50%" class="table">
                    <form method="post" action="" name="add">
                    <div class="row">
                    <tr>
                    <td>
                        <label>Department</label>
                        </td>
                        <td>
                        <input type="text" value="<?php echo $row['dept']?>" disabled>
                        </td>
                    </tr>
                    <tr><td>
                        <label>Roll no</label>
                        </td>
                        <td>
                        <input type="text" value="<?php echo $row['id']?>" name="rollno" disabled>
                        <td>
                        </tr>
                    </div>
                    <br>
                    </form>
                    </table>

                <?php
                $rollnumber=$row['id'];
                        $i++;
                        }
     
                mysqli_close($conn);
            ?>




