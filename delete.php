<?php include 'header.html';
require 'OOP.php';
$id = $_GET['id'];
$home = new Homepage();
$delete = $home->delete($id);
if($delete==TRUE){
    header('location:index.php');
}
?>