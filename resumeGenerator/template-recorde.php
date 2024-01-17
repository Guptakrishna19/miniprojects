<?php
include 'action/config.php';
?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style>
		/* template css */

		@import url("https://fonts.googleapis.com/css2?family=Montserrat&display=swap");

		body {
			background-image: linear-gradient(#636162, #b1afaf);
			height: 122vh;
			font-weight: bold;
			letter-spacing: 2px;
		}

		* {
			margin: 0px;
			padding: 0px;
			font-family: "Montserrat", sans-serif;
		}

		.main {
			background-color: white;
			height: auto;
			width: 650px;
			position: absolute;
			transform: translate(-50%, -50%);
			left: 50%;
			top: 60%;
		}

		.left {
			background-color: #fbb03b;
			width: 200px;
			height: 100%;
			float: left;
		}

		.right {
			width: 450px;
			float: left;
		}

		.profile-img {
			height: 180px;
			width: 180px;
			background-color: #ddd;
			border-radius: 50%;
			margin-bottom: 20px;
			margin-left: 60px;
			border: 10px solid #fbb03b;
			box-shadow: 6px 7px 9px 5px #fbb03b73;
		}

		.profile-img img {
			width: 100%;
			border-radius: 50%;
		}

		.box-1 {
			position: relative;
		}

		.heading {
			background-color: #4d4d4d;
			padding: 10px;
			color: #fbb03b;
			text-align: left;
			padding-left: 20px;
			margin-right: -15px;
		}

		.heading::after {
			content: "";
			position: absolute;
			width: 21px;
			height: 18px;
			background-color: #5a5959;
			left: 191px;
			top: 26px;
			transform: rotate(56deg);
			z-index: -1;
		}

		.p1 {
			padding: 9px 10px;
			font-size: 11px;
		}

		.icons1 {
			font-size: 16px !important;
			padding-right: 10px !important;
			vertical-align: sub;
		}

		.skill-container {
			width: 90%;
			background-color: #4d4d4d;
			margin: 0px 10px;
		}

		.skill {
			text-align: right;
			padding-top: 2px;
			padding-bottom: 2px;
			color: white;
		}

		.html {
			width: 90%;
			background-color: white;
		}

		.css {
			width: 80%;
			background-color: white;
		}

		.js {
			width: 85%;
			background-color: white;
		}

		.jquery {
			width: 80%;
			background-color: white;
		}

		.web {
			width: 85%;
			background-color: white;
		}

		.gra {
			width: 70%;
			background-color: white;
		}

		.icons2 {
			padding: 18px 10px;
		}

		.name-div {
			padding: 86px 0px 60px 55px;
			text-align: center;
			letter-spacing: 3px;
		}

		.name-div h1 {
			margin-bottom: 10px;
		}

		.box-2 {
			padding: 0px 50px;
			margin-top: 30px;
		}

		.p2 {
			font-size: 10px;
			font-weight: 300;
			letter-spacing: 1px;
			word-spacing: 2px;
			line-height: 18px;
			margin-top: 5px;
		}

		h2 {
			font-size: 16px;
			margin-bottom: 15px;
		}

		.icons3 {
			vertical-align: bottom;
			font-size: 21px !important;
			color: #4d4d4d;
		}

		.p3 {
			font-size: 13px;
			word-spacing: 1px;
			letter-spacing: 0px;
			margin-top: 10px;
		}

		.p3 span {
			color: #ff9b00;
			padding-left: 20px;
		}
	</style>

</head>

<body>
<button id='download' style='position: absolute;
    left: 89%;
    top: 5%;'>Generate PDF</button>
	<button id='download2' style='position: absolute;
    left: 89%;
    top: 10%;'>Generate PDF</button>
	<button id='download3' style='position: absolute;
    left: 89%;
    top: 15%;'>Generate PDF</button>
	<button onclick="genPDF()" style='position: absolute;
    left: 89%;
    top: 20%;'>Generate PDF</button>
	<?php
	$sql = 'SELECT * FROM personal p 
JOIN education e ON p.per_id=e.education_id
JOIN experience ex ON e.education_id=ex.exp_id';
	$result = mysqli_query($conn, $sql) or die('could not connect');
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
	?>
			<div class='page'>
			
				<div class='container'>
					<div class='main' id='resume' style='height: 841px;
    width: 652px;    left: 50%;
    top: 87%;'>
						<div class='left'>
							<br>
							<div class='profile-img'><img src='<?php echo $row['image']; ?>'></div>
							<?php echo $row['image']; ?>
							<div class='box-1'>
								<div class='heading'>
									<p>CONTACT</p>
								</div>
								<p class='p1'><i class='material-icons icons1'>call</i><?php echo $row['mobile']; ?></p>
								<p class='p1'><i class='material-icons icons1'>email</i><?php echo $row['email']; ?></p>
							</div>

							<div class='box-1'>
								<div class='heading'>
									<p>LANGUAGES</p>
								</div>

								<p class='p1'>HTML
								<div class='skill-container'>
									<div class='skill html'></div>
								</div>
								</p>

								<p class='p1'>CSS
								<div class='skill-container'>
									<div class='skill css'></div>
								</div>
								</p>

								<p class='p1'>JAVASCRIPT
								<div class='skill-container'>
									<div class='skill js'></div>
								</div>
								</p>

								<p class='p1'>JQUERY
								<div class='skill-container'>
									<div class='skill jquery'></div>
								</div>
								</p>
							</div>
							<br>

							<div class='box-1'>
								<div class='heading'>
									<p>SKILLS</p>
								</div>

								<p class='p1'>WEBSITE DESIGN
								<div class='skill-container'>
									<div class='skill web'></div>
								</div>
								</p>

								<p class='p1'>GRAPHIC DESIGN
								<div class='skill-container'>
									<div class='skill gra'></div>
								</div>
								</p>


							</div>
							<br>
							<div class='box-1'>
								<div class='heading'>
									<p>HOBBIES</p>
								</div>

								<div class='h-div'>
									<i class='material-icons icons2'>camera_roll</i>
									<i class='material-icons icons2'>music_note</i>
									<i class='material-icons icons2'>motorcycle</i>
									<i class='material-icons icons2'>border_color</i>
								</div>

							</div>

						</div>


						<div class='right'>
							<div class='name-div'>
								<h1><?php echo $row['name']; ?></h1>
								<p>WEBSITE DESIGNER</p>
							</div>

							<div class='box-2'>
								<h2>ABOUT ME <i class='material-icons icons3' style='font-size: 28px!important; '>perm_identity</i></h2>
								<p class='p2'>
									<?php echo $row['summary']; ?>
								</p>
							</div>



							<div class='box-2'>
								<h2>EDUCATION <i class='material-icons icons3'>border_color</i></h2>
								<p class='p3'><?php echo $row['start_date']; ?> <span><?php echo $row['degree']; ?></span></p>
								<p class='p2'>
									<?php echo $row['college_name']; ?>
								</p>

								<p class='p3'>2013-2016 <span>Lorem Ipsum </span></p>
								<p class='p2'>
									Lorem Ipsum is simply dummy text of
								</p>

								<p class='p3'>2016-2021 <span>Lorem Ipsum is</span></p>
								<p class='p2'>
									Lorem Ipsum is simply dummy text of
								</p>
							</div>


							<div class='box-2'>
								<h2>WORK EXPERIENCE <i class='material-icons icons3'>folder</i></h2>
								<p class='p3'><?php echo $row['start_date']; ?> <span><?php echo $row['job_title']; ?></span></p>
								<p class='p2'>
									<?php echo $row['job_desc']; ?>
								</p>

								<p class='p3'>2013-2016 <span>Lorem Ipsum </span></p>
								<p class='p2'>
									Lorem Ipsum is simply dummy text of
								</p>


							</div>

						</div>
					</div>
				</div>
			</div>
			<div id='editor'></div>
			
	<?php
		}
	} 
	//echo $output;
	//  else {
	// 	echo 0;
	// }
	?>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
	
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
	integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
	crossorigin="anonymous"
	referrerpolicy="no-referrer"
></script>
	<script type="text/javascript">
		// var doc = new jsPDF();
		// var specialElementHandlers = {
		//     '#editor': function (element, renderer) {
		//         return true;
		//     }
		// };


		// $(document).ready(function(){
		//     doc.fromHTML($('#resume').html(), 15, 15, {
		//         'width': 700,
		//         'elementHandlers': specialElementHandlers
		//     });
		//     doc.save('resume.pdf');
		// });
		window.onload = function() {
			document.getElementById("download")
			.addEventListener("click", () => {
			var invoice = this.document.getElementById("resume");
			console.log(invoice);
			console.log(window);
			var opt = {
				margin: 1,
				filename: 'myfile.pdf',
				image: {
					type: 'jpeg',
					quality: 0.98
				},
				html2canvas: {
					scale: 2
				},
				jsPDF: {
					unit: 'in',
					format: 'letter',
					orientation: 'portrait'
				}
			};
			html2pdf().from(invoice).set(opt).save();
			 })
		}
		// another download button
		$("#download3").click(function() {
		var doc = new jsPDF();          
		var elementHandler = {
		  '#editor': function (element, renderer) {
			return true;
		  }
		};
		var source = window.document.getElementsByTagName("body")[0];
		doc.fromHTML(
			source,
			15,
			15,
			{
			  'width': 180,'elementHandlers': elementHandler
			});
		
		doc.output("dataurlnewwindow");
		doc.save("2.pdf");
		});
		// thord button
		//$(document).ready(function() {
		
		$("#download3").click(function() {
		
		var pdf = new jsPDF('p','pt','letter');
		var specialElementHandlers = {
		'#editor': function (element, renderer) {
		return true;
		}
		};
		
		pdf.addHTML($('#editor').first(), function() {
		pdf.save("caravan.pdf");
		});
		});
		//});
		</script>


<script>
    function genPDF() {
		//var invoice = this.document.getElementById("editor");
        var doc = new jsPDF();
        // doc.text(20, 20, 'Hello world!');
        // doc.text(20, 30, invoice);
		doc.fromHTML($('#resume').html(), 15, 15, {
		        'width': 700,
		        
		    });
        doc.addPage();
        //doc.text(20, 20, 'Do you like that?');
    
        doc.save('Test.pdf');
    }
</script>
	 -->
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
 $(document).ready(function () {
    
    window.jsPDF = window.jspdf.jsPDF;
    
    var doc = new jsPDF();
        
    // Source HTMLElement or a string containing HTML.
    var elementHTML = document.querySelector("#resume");
    
    doc.html(elementHTML, {
        callback: function(doc) {
            // Save the PDF
            doc.save('sample-document.pdf');
        },
        x: 15,
        y: 15,
        margin:-15,
        width: 205, //target width in the PDF document
        windowWidth: 850 //window width in CSS pixels
    });
});
</script>


</body>
</html>