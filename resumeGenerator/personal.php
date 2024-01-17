<?php
include 'header.php';
?>
<?php
// include 'nav.php';
// if (isset($_SESSION['name'])) {
//     header('location:index.php');
// }
?>
<form method="post" id="myform1" enctype="multipart/form-data">
    <h2 class="text-center bg-dark text-light mt-2">FILL PERSONAL DETAILS</h2>
    <div class="row">
    <div class="col-6">
            <label for="form-label">PROFILE</label>
            <input type="file" class="form-control" name="image" id="image" accept="jpg,png">
        </div>
        <div class="col-6">
            <label for="form-label">FIRST NAME</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>

        <div class="col-6">
            <label for="form-label">LAST NAME</label>
            <input type="text" name="surname" id="surname" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="form-label">MOBILE NO.</label>
            <input type="number" name="mobile" id="mobile" class="form-control">
        </div>

        <div class="col-6">
            <label for="form-label">DATE OF BIRTH</label>
            <input type="date" name="birth" id="birth" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="form-label">EMAIL ID</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="col-6">
            <label for="form-label">ADDRESS</label>
            <input type="text" name="address" id="address" class="form-control">
        </div>
    </div>
     <!-- <h2 class="text-center bg-dark text-light mt-2">EXPERIENCE</h2>
    <div class="row">
        <div class="col-6">
            <label for="form-label">JOB TITLE</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="col-6">
            <label for="form-label">EMPLOYER</label>
            <input type="text" name="employer" id="employer" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="form-label">CITY</label>
            <input type="text" name="city" id="city" class="form-control">
        </div>

        <div class="col-6">
            <label for="form-label">STATE</label>
            <input type="text" name="state" id="state" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="form-label">START DATE</label>
            <input type="text" name="start_date" id="start_date" class="form-control">
        </div>

        <div class="col-6">
            <label for="form-label">END DATE</label>
            <input type="text" name="end_date" id="end_date" class="form-control">
        </div>
        <div class="col-12">
            <label for="form-label">DESCRIBE JOB ROLE</label>
            <input type="textarea" name="describe" id="describe" class="form-control">
        </div>
    </div>
    <h2 class="text-center bg-dark text-light mt-2">EDUCATION DETAIL</h2>
    <div class="row">
        <div class="col-6">
            <label for="form-label">COLLEGE NAME</label>
            <input type="text" name="college" id="college" class="form-control">
        </div>

        <div class="col-6">
            <label for="form-label">DEGREE</label>
            <input type="text" name="degree" id="degree" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="form-label">CGPA</label>
            <input type="number" name="cgpa" id="cgpa" class="form-control">
        </div>

        <div class="col-6">
            <label for="form-label">GRADUATION DATE</label>
            <input type="text" name="graduation_date" id="graduation_date" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="form-label">GRADUATION YEAR</label>
            <input type="text" name="graduation_year" id="graduation_year" class="form-control">
        </div>

    </div>  -->
    <!-- <h2 class="text-center bg-dark text-light mt-2">SKILLS</h2>
    <div class="row">
        <div class="col-6">
            <label for="form-label">SKILL</label>
            <div class="form-check">
  <input class="form-check-input" type="checkbox" value="PROBLEM SOLVING" id="solving" name="solving">
  <label class="form-check-label" for="solving">PROBLEM SOLVING
  </label><br><br>
  <input class="form-check-input" type="checkbox" value="EXCEPTIONAL TIME MANAGEMENT " id="time" name="time">
  <label class="form-check-label" for="time">EXCEPTIONAL TIME MANAGEMENT 
  </label><br><br>
  <input class="form-check-input" type="checkbox" value="GOOD LEARNER" id="learner" name="learner">
  <label for="learner"> GOOD LEARNER</label><br><br>
  <input class="form-check-input" type="checkbox" value="GOOD LISTENER" id="listener" name="listener">
  <label for="listener"> GOOD LISTENER</label><br><br>
  <input class="form-check-input" type="checkbox" value="HARD WORKING" id="working" name="working">
  <label for="working"> HARD WORKING</label><br><br>
  <input class="form-check-input" type="checkbox" value="SINCERE TOWARDS WORK" id="sincere" name="sincere">
  <label for="sincere"> SINCERE TOWARDS WORK</label><br><br>
  <input class="form-check-input" type="checkbox" value="EXTRAORDINARY COMMUNICATION " id="communication" name="communication">
  <label for="communication"> EXTRAORDINARY COMMUNICATION</label><br><br>

</div>

        </div>
    </div> -->
    
    <!-- <h2 class="text-center bg-dark text-light mt-2">SUMMARY OF YOUSELF</h2>
    <div class="row">
        <div class="col-12">
            <label for="form-label">SUMMARY</label>
            <input type="textarea" id="summary" name="summary" class="form-control">
        </div>

    </div>
    <h2 class="text-center bg-dark text-light mt-2">ADDITIONAL DETAILS</h2>
    <div class="row">
        <div class="col-12">
            <label for="form-label">ADDITIONAL CERTIFICATE</label>
            <input type="textarea" id="additional" name="additional" class="form-control">
        </div>

    </div> -->
    <input type="submit" id="next" name="next" value="NEXT" class="btn btn-primary mt-5 mr-2" style="margin-left: 50%;">
</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script> $(document).ready(function(){
// $('#save').on('click',function(e){
//     e.preventDefault();
//     var data = new FormData('#myform');
//     $.ajax({
//         type: "post",
        
//         url: "templateDataStore.php",
//         data:{} ,
//         //dataType: "dataType",
//         success: function (response) {
    $("#next").on('click', function(e) {
            e.preventDefault();
            //var name=$('#fname').val();
            $.ajax({
                type: 'POST',
                url: 'personal-recorde.php',
               //data: new FormData(this),
               data:$('#myform1').serialize(),
                // contentType: false,
                // cache: false,
                // processData: false,
                // beforeSend: function() {
                // },
                success: function(response) {
            if(response==1){
            //('#para').html('logging');
            window.location.replace('education.php');
            }else{
                //('#para').html('wrong');
                window.location.replace('education.php');
            }
        }
    });
});
    });
</script>
<?php
include 'footer.php';
?>

