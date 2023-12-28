<?php
include 'header.html';
require 'OOP.php';
$home = new Homepage();
$result = $home->show();
?>
<div class="container " style="background-color : teal; height : 100vh; max-width: 1300px;">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <h4 style="text-align:center; padding-top : 50px;">Data List</h4>
        <table class="table table-striped mt-5">
            <thead>
                <th>SL_ID</th>
                <th>ROLL</th>
                <th>Name</th>
                <th>Session</th>
                <th>Current Year</th>
                <th>Semester</th>
               <th>Action</th>
                </thead>
                <tbody>

        <?php
        if($result ==TRUE){
           while($rows = mysqli_fetch_assoc($result)){?>
<tr>


<td><?php echo $rows['SL_ID'];?></td>
<td><?php echo $rows['Roll'];?></td>
<td><?php echo $rows['Name'];?></td>
<td><?php echo $rows['Session'];?></td>
<td><?php echo $rows['Current_Year'];?></td>
<td><?php echo $rows['Semester'];?></td>
<td> <a href="update.php?id=<?php echo $rows['SL_ID'];?>" class="btn btn-success text-white">Update</a>
<a href="delete.php?id=<?php echo $rows['SL_ID'];?>" class="btn btn-danger text-white">Delete</a>
           </td>
</tr>
           <?php }
        }
        ?>
                </tbody>
    </table>
        </div>
        <div class="col-sm-1">
            <a href="index.php" class="btn btn-success text-white">Back</a>
        </div>
    </div>
</div>
<?php include 'footer.html'; ?>