<?php 
include_once('config.php');
// if(isset($_POST['register'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="INSERT INTO register(name,email,password) VALUES('$name','$email','$password')";
    $result=mysqli_query($conn,$sql);
    //$num=mysqli_num_rows($result);
    if($result){
    //    echo 'successfully registered!!
    //    <a href="../login.php" name="registerToLogin">Login</a>';
    //    if(isset($_POST['registerToLogin'])){

    //        header('location:../login.php');
    //    }
    echo 1;
    }
    else{
        echo 'user not registerd yet!!';
    }
// }
?>