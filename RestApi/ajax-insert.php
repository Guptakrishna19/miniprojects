<?php

$conn = mysqli_connect("localhost","root","","user") or die("Connection Failed");
$name = $_POST["name"];
$age = $_POST["age"];
$city = $_POST["city"];

$sql = "INSERT INTO restapi(name,age,city) VALUES ('{$name}','{$age}','{$city}')";

if(mysqli_query($conn, $sql)){
  echo 1;
}else{
  echo 0;
}


?>
