<?php
include('config.php');
$name=$_POST['fname'];
$last=$_POST['lname'];
$sql = "INSERT INTO ajax(fname,lname) VALUES ('$name','$last')";
if(mysqli_query($conn, $sql)){
    echo 1;
  }else{
    echo 0;
  }
?>