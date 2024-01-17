<?php
include 'header.php';
?>
<?php
// include 'nav.php';
// if (isset($_SESSION['name'])) {
//     header('location:index.php');
// }
?>
<form method="post" id="myform2">
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

    </div>



<input type="submit" id="continue" name="continue" value="CONTINUE" class="btn btn-primary mt-5 mr-2" style="margin-left: 50%;">
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
    $("#continue").on('click', function(e) {
            e.preventDefault();
            //var name=$('#fname').val();
            $.ajax({
                type: 'POST',
                url: 'education-recorde.php',
               //data: new FormData(this),
               data:$('#myform2').serialize(),
                // contentType: false,
                // cache: false,
                // processData: false,
                // beforeSend: function() {
                // },
                success: function(response) {
            if(response==1){
            //('#para').html('logging');
            window.location.replace('experience.php');
            }else{
                //('#para').html('wrong');
                window.location.replace('experience.php');
            }
        }
    });
});
    });
</script>
<?php
include 'footer.php';
?>

