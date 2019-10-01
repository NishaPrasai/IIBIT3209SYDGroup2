<?php 
include 'include/config.php';
$id= $_GET['id'];
$sel = mysqli_query($db, "SELECT * from posts where id='$id'");
$rows = mysqli_fetch_array($sel);
$likes = $rows['likes'];
$sql = mysqli_query($db, "UPDATE posts set likes=$likes + 1 where id= $id");
if($sql == true){
	header("location:index.php");
}