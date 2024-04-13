<?php
$user=$_SESSION['user'];
include 'config.php';
                $cid=$user;
                $sql="SELECT id,ssc,hsc,diploma,be FROM studentmarks WHERE id='$cid'";
                $i=0;
              $result=mysqli_query($conn,$sql);
              while($row = mysqli_fetch_array($result)) {
?>

<div class="modal fade" id="updatem" role="dialog">
					<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
            <form action="" method="POST" class="design">

            <div class="modal-body">

                <input type="hidden" name="update_id" id="update_id">

                <div class="form-group">
                    <label> SSC </label>
                    <input type="text" name="ssc" id="ssc" class="form-control" value="<?php echo $row['ssc']?>">
                </div>
                <div class="form-group">
                    <label> HSC</label>
                    <input type="text" name="hsc" id="hsc" class="form-control" value="<?php echo $row['hsc']?>"> 
                </div>
                <div class="form-group">
                    <label> Diploma </label>
                    <input type="text" name="diploma" id="diploma" class="form-control" value="<?php echo $row['diploma']?>">
                </div>
                <div class="form-group">
                    <label> BE </label>
                    <input type="text" name="be" id="be" class="form-control" value="<?php echo $row['be']?>">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
            </div>
            </form>
            
            <?php
                $rollnumber=$row['id'];
                        $i++;
                        }
     
                mysqli_close($conn);
            ?>
						</div>
					</div>
					</div>
					</div>