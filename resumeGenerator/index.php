<?php
    include'header.php';
    ?>
    <?php
    include'nav.php';
    if(isset($_SESSION['name'])){
      header('location:index.php');
    }
    ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="assets/images/slider1.jpg" class="d-block w-100" alt="..." height="600" width="900">
    </div>
    <div class="carousel-item">
      <img src="assets/images/slider2.jpg" class="d-block w-100" alt="..." height="600" width="900">
    </div>
    <div class="carousel-item">
      <img src="assets/images/slider3.jpg" class="d-block w-100" alt="..." height="600" width="900">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <div class="card" id="card" style="width: 18rem;position: absolute;
top: 50px;
left: 20px;
height: 400px;">
  <img src="assets/images/template2.png" class="card-img-top" alt="...">
  <div class="card-body"  style="position: absolute;
    top: 50%;
    left: 250%;">
    
  </div>
</div>
<div class="inner" style="position: absolute;
    top: 50%;
    right: 4%;opacity:100%">
<h2>The Best Online
Resume Builder</h2>
<p>
Easily create the perfect resume for any job using our best-in-class resume builder platform.</p>
</div>
</div>
<h3 style="    padding: 10px 20px 10px 30px;
    margin: 10px 200px 5px 200px;">Pick one of many world-class templates and build your resume in minutes.</h3>
<div class="row gx-5" style="    display: flex;
    align-content: center;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    column-gap: 50px;margin-bottom: 30px;
    margin-top: 40px;">
    
<div class="card" style="width: 18rem;">
  <img src="assets/images/template1.webp" class="card-img-top" alt="" height= "300"
    width="250">
  <div class="card-body">
    <a href="personal.php" class="btn btn-primary">Click me</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="assets/images/template2.png" class="card-img-top" alt="" height= "300"
    width="250">
  <div class="card-body">
    <a href="personal.php" class="btn btn-primary">Click me</a>
</div>
</div>
<div class="card" style="width: 18rem;">
  <img src="assets/images/template3.jpg" class="card-img-top" alt="" height= "300"
    width="250">
  <div class="card-body">

    <a href="#" class="btn btn-primary">Click me</a>
  </div>
</div>
</div>
<button type="button" class="btn btn-dark" style="    position: relative;
    left: 50%;
    top: 30%;
    margin: 14px 0 10px 0;">MORE</button>
   <p id="features" style="margin: 40px 40px 10px 40px;
    padding: 10px 30% 10px 250px;">Features designed to help you win your dream job</p>
   <div class="container px-4 text-center" style="margin: 10px 10px 10px 10px;
    padding: 10px 10px 10px 10px;">
  <div class="row gx-5">
    <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Easy online resume builder</h5>
        <p class="card-text">
Create an awesome resume in minutes, without leaving your web browser.</p>
      
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Automatic spell-checker</h5>
        <p class="card-text">
Our built-in spell-checker takes care of the grammar for you. Create a resume with zero typos or errors.</p>
  
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Your data is safe</h5>
        <p class="card-text">
Your data is kept private and protected by strong 256-bit encryption.</p>
       
      </div>
    </div>
  </div>
  <div class="row gx-5" style="margin: 10px 10px 10px 10px;
    padding: 10px 10px 10px 10px;">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Automatic summary generator</h5>
        <p class="card-text">
Create a powerful resume profile or cover letter in one click. Writer’s block is no longer an obstacle. Try for free!</p>
   
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Approved templates</h5>
        <p class="card-text">
Professionally-designed resume templates and examples. Just edit and download in 5 minutes.</p>
      
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">AI pre-written phrases</h5>
        <p class="card-text">
Use the power of AI and data analysis, choose pre-generated effective phrases and keywords.</p>

      </div>
    </div>
  </div>
  </div>
 
</div>
   </div>
   <h1 style="text-align:center;margin-top:50px;">Reviewed by the community. Trusted by professionals</h1>

   <div class="row gx-5">
    <div class="col">
    <div class="order-2 p-2">
  <img src="assets/images/rating1.webp" class="card-img-top" alt="" style="    border-radius: 0%;
    height: 50px;
    width: 150px;">
  <div class="card-body">
    <h5 class="card-title">AWESOME TOOLS</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<p style="padding-left: 700px;">---- Lorem willsome</p>  
</div>
    </div>
  <div class="order-2 p-2"><img src="assets/images/rating1.webp" class="card-img-top" alt=""  style="    border-radius: 0%;
    height: 50px;
    width: 150px;">
  <div class="card-body">
    <h5 class="card-title">GOOD PAGE LAYOUTS</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p></div>
    <p style="padding-left: 700px;">---- Lorem willsome</p>   
</div>
  <div class="order-1 p-2"><img src="assets/images/rating1.webp" class="card-img-top" alt="" style="    border-radius: 0%;
    height: 50px;
    width: 150px;">
  <div class="card-body">
    <h5 class="card-title">VERY USER FRIENDLY GUI</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p></div>
    <p style="padding-left: 700px;">---- Lorem willsome</p> 
</div>
  </div>
    </div>
   
   

   
    <?php
    include'footer.php';
    ?>
