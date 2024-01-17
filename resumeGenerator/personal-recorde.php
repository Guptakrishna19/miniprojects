<?php
include'action/config.php';
$filename = $_FILES["image"]["name"];

$tempname = $_FILES["image"]["tmp_name"];  

$folder = "assets/images/".$filename; 
$fname=$_POST['name'];
//$image=$_POST['image'];
$lname=$_POST['surname'];
$mobile=$_POST['mobile'];
$birth=$_POST['birth'];
$email=$_POST['email'];
$address=$_POST['address'];
// $title=$_POST['title'];
// $employer=$_POST['employer'];
// $city=$_POST['city'];
// $state=$_POST['state'];
// $start_date=$_POST['start_date'];
// $end_date=$_POST['end_date'];
// $describe=$_POST['describe'];
// $college=$_POST['college'];
// $degree=$_POST['degree'];
// $cgpa=$_POST['cgpa'];
// $graduation_date=$_POST['graduation_date'];
// $graduation_year=$_POST['graduation_year'];
// $summary=$_POST['summary'];
// $certificate=$_POST['additional'];
// $sql="INSERT INTO template(fname,lname,mobile,birth,email,address,title,employer,city,state,start_date,end_date,describe,college,degree,cgpa,graduation_date,graduation_year,summary,certificate) VALUES('$fname','$lname','$mobile','$birth','$email','$address','$title','$employer','$city','$state','$start_date','$end_date','$describe','$college','$degree','$cgpa','$graduation_date','$graduation_year','$summary','$certificate')";
$sql="INSERT INTO personal(name,image,surname,mobile,birth,email,address) VALUES('$fname','$filename','$lname','$mobile','$birth','$email','$address')";
if (move_uploaded_file($tempname, $folder)) {

    $msg = "Image uploaded successfully";

}else{

    $msg = "Failed to upload image";

} 
$result=mysqli_query($conn,$sql) or die('could not connect');
if(mysqli_num_rows($result) > 0){
   

    echo 1;
}
else{
    echo 0;
}
?>
