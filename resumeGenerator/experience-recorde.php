<?php
include'action/config.php';
// $fname=$_POST['fname'];
// $lname=$_POST['lname'];
// $mobile=$_POST['mobile'];
// $birth=$_POST['birth'];
// $email=$_POST['email'];
// $address=$_POST['address'];
$title=$_POST['title'];
$employer=$_POST['employer'];
$city=$_POST['city'];
$state=$_POST['state'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
$describe=$_POST['describe'];
// $college=$_POST['college'];
// $degree=$_POST['degree'];
// $cgpa=$_POST['cgpa'];
// $graduation_date=$_POST['graduation_date'];
// $graduation_year=$_POST['graduation_year'];
// $summary=$_POST['summary'];
// $certificate=$_POST['additional'];
 $sql="INSERT INTO experience(job_title,employer,city,state,start_date,end_date,job_desc) VALUES('$title','$employer','$city','$state','$start_date','$end_date','$describe')";
//$sql="INSERT INTO experience(fname,lname,mobile,birth,email,address) VALUES('$fname','$lname','$mobile','$birth','$email','$address')";
echo $result=mysqli_query($conn,$sql) or die('could not connect');
if(mysqli_num_rows($result) > 0){
    echo 1;
}
else{
    echo 0;
}
?>