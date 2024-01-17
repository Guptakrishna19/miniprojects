<?php
include 'header.php';
?>
<?php
// include 'nav.php';
// if (isset($_SESSION['name'])) {
//     header('location:index.php');
// }
?>
<form method="post" id="myform3">

<h2 class="text-center bg-dark text-light mt-2">EXPERIENCE</h2>
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


<input type="submit" id="forward" name="forward" value="FORWARD" class="btn btn-primary mt-5 mr-2" style="margin-left: 50%;">
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
    $("#forward").on('click', function(e) {
            e.preventDefault();
            //var name=$('#fname').val();
            $.ajax({
                type: 'POST',
                url: 'experience-recorde.php',
               //data: new FormData(this),
               data:$('#myform3').serialize(),
                // contentType: false,
                // cache: false,
                // processData: false,
                // beforeSend: function() {
                // },
                success: function(response) {
            if(response==1){
            //('#para').html('logging');
            window.location.replace('template-recorde.php');
            }else{
                //('#para').html('wrong');
                window.location.replace('template-recorde.php');
            }
        }
    });
});
    });
</script>
<?php
include 'footer.php';
?>

