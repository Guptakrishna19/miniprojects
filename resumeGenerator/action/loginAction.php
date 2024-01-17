<?php
include_once('config.php');
//if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT (email,password) FROM register WHERE email='$email'AND password='$password'";
    //$result=mysqli_query($conn,$sql);
    $result = mysqli_query($conn, $sql) or die("Query Failed.");

    if (mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)){
          session_start();
          $_SESSION["name"] = $row['name'];
echo 1;
        //header("Location: ../index.php");
    }}
else {
    echo '<div class="alert alert-danger">Username and Password are not matched.</div>';
}
//}
?>
