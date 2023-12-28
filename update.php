<?php include 'header.html';
require 'OOP.php';
$home = new Homepage();


$id = $_GET['id'];

if(isset($_POST['ok'])){
    $s_id = $_POST['sl_id'];
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $session = $_POST['session'];
    $year = $_POST['year'];
    $semester = $_POST['semester'];
    $result = $home->update($roll, $name, $session, $year, $semester, $s_id);
    if($result == TRUE){
        header('location:index.php');
    }
}else{
    header('location:index.php');
}

?>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 center">
            <div class="add">
            <p>Update Information : </p>
            <form action="" method="post">
       <?php   
       $id = $_GET['id'];
       $result = $home->show_1($id);
       
       if($result==TRUE){
while($rows = mysqli_fetch_assoc($result)){ ?>

                  <label for="Roll">Roll</label>

                <input type="int" name="roll" value="<?php echo $rows['Roll'];?>" class="w-50 form-control"/>
                <label for="name">Name</label>
                <input type="text" name="name" value="<?php echo $rows['Name'];?>" class="w-50 form-control"/>
                <label for="session">Session</label>
                <input type="text" name="session" value="<?php echo $rows['Session'];?>" class="w-50 form-control"/>
                <label for="year">Current Year</label>
                <input type="text" name="year" value="<?php echo $rows['Current_Year'];?>" class="w-50 form-control"/>
                <label for="Semester">Semester</label>
                <input type="text" name="semester"value="<?php echo $rows['Semester'];?>" class="w-50 form-control"/>
                <input type="submit" name="submit" class="my-3 btn btn-primary text-white" value="Update"/>
            <?php 
}
       }
            ?>
            </form>
            </div>
           
    </div>
    
</div>


<?php include 'footer.html';?>