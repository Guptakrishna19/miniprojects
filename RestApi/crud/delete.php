<?php
include('config.php');
 $id=$_POST["id"];
echo $id;
$sql = "DELETE FROM ajax WHERE id='$id'";
if(mysqli_query($conn, $sql)){
    echo 1;
  }else{
    echo 0;
  }
?>