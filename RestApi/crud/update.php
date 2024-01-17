<?php
include('config.php');
$id=$_POST['id'];

$sql = "UPDATE ajax SET (fname,lname) VALUES ('$name','$last')";
if(mysqli_query($conn, $sql)){
    echo 1;
  }else{
    echo 0;
  }
?>