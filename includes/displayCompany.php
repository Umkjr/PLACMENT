<?php 
                        include 'config.php';
                        $sql= "SELECT companylist.cid,id,cname,cutoff,domain,year,seats FROM companylist INNER JOIN companyplaced ON companylist.cid=companyplaced.cid ORDER BY year ASC";
                        $i=0;
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr id="<?php echo $row['id']?>">
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["cname"]; ?></td>
                        <td><?php echo $row["cutoff"]; ?></td>
                        <td><?php echo $row["domain"]; ?></td>
                        <td><?php echo $row["year"]; ?></td>
                        <td><?php echo $row["seats"]; ?></td>
                        <td>
                                    <button type="button" class="btn btn-success editbtn"><i class="fa fa-edit"></i> </button>
                                    <button type="button" class="btn btn-danger deletebtn"><i class="fa fa-trash"></i></button>
                                </td>
                        </tr>
                        <?php
                        $i++;
                        }
                        ?>