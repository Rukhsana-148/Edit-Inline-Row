<?php include 'header.html';
require 'OOP.php';
$home = new Homepage();
$result = $home->show();
?>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 center">
            <div class="add">
            <p>Insert Data </p>
            <form action="add.php" method="post">
                  <label for="Roll">Roll</label>
                <input type="int" name="roll" placehoder="Enter Roll No" class="w-50 form-control"/>
                <label for="name">Name</label>
                <input type="text" name="name" placehoder="Enter Name" class="w-50 form-control"/>
                <label for="session">Session</label>
                <input type="text" name="session" placehoder="Session" class="w-50 form-control"/>
                <label for="year">Current Year</label>
                <input type="text" name="year" placehoder="Current Year" class="w-50 form-control"/>
                <label for="Semester">Semester</label>
                <input type="text" name="semester" placehoder="Semester" class="w-50 form-control"/>
                <input type="submit" name="add" class="my-3 btn btn-primary text-white" value="Submit"/>
            </form>
            </div>
           
    </div>
  <!--  <div class="col-sm-3"><a href="show.php" class="my-3 btn btn-primary text-white">See Al Data</a></div> -->
</div>
<div class="row">
       
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
               <th>Update</th>
               <th>Delete</th>
                </thead>
                <tbody>

        <?php
        if($result ==TRUE){
           while($rows = mysqli_fetch_assoc($result)){?>
<tr>
<form action="update.php" method="post">

<td><?php echo $rows['SL_ID'];?></td>
<td ><input type="hidden" value="<?php echo $rows['SL_ID'];?>" name="sl_id"/>
    <input type="text" value="<?php echo $rows['Roll'];?>" name="roll" class="text-white"/></td>
<td><input type="text" value="<?php echo $rows['Name'];?>" name="name" class="text-white"/></td>
<td><input type="text" value="<?php echo $rows['Session'];?>" name="session" class="text-white"/></td>
<td><input type="text" value="<?php echo $rows['Current_Year'];?>" name="year" class="text-white"/></td>
<td><input type="text" value="<?php echo $rows['Semester'];?>" name="semester" class="text-white"/></td>
<td>   <input type="submit" name="ok" value="Ok" id="ok" class=" text-primary"/>
                            <input type="submit" name="cancel" value="X" id="cancel" class=" ml-3 text-danger"/>
            
                        </form>
           </td>
<td><a href="delete.php?id=<?php echo $rows['SL_ID'];?>" class="btn btn-transparent text-danger">X</a>
           </td>
</tr>
           <?php }
        }
        ?>
                </tbody>
    </table>
        </div>
      
    </div>


<?php include 'footer.html';?>