<?php

$id = $_POST["id"];
$name = $_POST["name"];
$age = $_POST["age"];
$city = $_POST["city"];
$conn = mysqli_connect("localhost","root","","test") or die("Connection Failed");

$sql = "UPDATE restapi SET name = '{$name}',age = '{$age}',city = '{$city}' WHERE id = {$id}";

if(mysqli_query($conn, $sql)){
  echo 1;
}else{
  echo 0;
}

?>
