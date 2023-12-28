<?php include 'header.html';
require 'OOP.php';
$home = new Homepage();
if(isset($_POST['add'])){
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $session = $_POST['session'];
    $year = $_POST['year'];
    $semester = $_POST['semester'];
    $result = $home->add($roll, $name, $session, $year, $semester);
    if($result == TRUE){
        header('location:index.php');
    }
}
?>