<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Road Report</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
      href="https://fonts.googleapis.com/css?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="main.css">

	<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="js/popper.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="main.js"></script>
</head>
<body>
  	<!-- Navbar -->
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<nav class="navbar navbar-expand-md fixed-top  bg-warning" id="nav">
				  <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon dropdown" style="color: white"></span>
				  </button>
				   <a class="navbar-brand" id="anchor" href="index.php">ROAD REPORT</a>
				 <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
				    <ul class="navbar-nav">
				      <li class="nav-item active">
				        <a class="nav-link anchor" href="index.php" >HOME<span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link anchor" href="report.php">REPORT</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link anchor" href="findpothole.php">FIND POTHOLES</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link anchor" href="contact.php">CONTACT</a>
				      </li>
				    </ul>
				   </div>

				</nav>
			</div>
		</div>
	</div>
		<!-- Navbar Finish -->
		<!-- Carousel Start -->
	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					  </ol>
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img class="d-block w-100 h-25" src="images/road_image1.jpg" alt="First slide">
					      <div class="carousel-caption d-none d-block mt-4">
							<h3 class="text-warning heading_carousel">Maintenance work done at Hakeem Balogun road, Ikeja by NECA House</h3>
					      </div>
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100 h-25" src="images/road_image2.jpg" alt="Second slide">
					      <div class="carousel-caption d-none d-block">
							<h3 class="text-warning heading_carousel">Maintenance work done at Lasu Iyana Iba road</h3>
					      </div>
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100 h-25" src="images/road_image3.jpg" alt="Third slide">
					      <div class="carousel-caption d-none d-block">
							<h3 class="text-warning heading_carousel">Maintenance work done at Mobolaji Bank Anthony Way</h3>
					      </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
				</div>
			</div>
		</div>
	</div>
	<!-- Carousel Finish -->
	<!-- Accordion Start -->
	<div class="container mt-5">
		<div class="row">
			<div class="col">
				<div class="report_heading mb-5 bg-warning">
					<h1 class="px-2 py-2">Report a pothole or road defect</h1>
					<p class="px-2 py-2">We repair potholes and other road defects, and maintain our roads, for the safe access of all road users</p>
					<a href="report.php" class="btn btn-lg ml-5 mb-3  btn-outline-dark">Report Now</a>
				</div>
				<div class="bs-example">
				    <div class="accordion" id="accordionExample">
				        <div class="card bg-dark">
				            <div class="card-header" id="headingOne">
				                <h2 class="mb-0">
				                    <button type="button" class="btn btn-link text-warning button_name" data-toggle="collapse" data-target="#collapseOne"><i class="fa fa-plus text-warning icon_name"></i> REPORT!!!</button>									
				                </h2>
				            </div>
				            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
				                <div class="card-body">
				                    <p class="text-warning">When you report a pothole or road defect we will inspect it within 3 working days, and programme repair work where required.</p>
				                    <p class="text-warning mt-2">When you contact us, please give us as much information as possible that will help our inspector find the pothole or road defect. The more information you give us, the easier it will be for us to find. Please tell us</p>
				                    <ul class="text-warning mt-2">
				                    	<li>Your name and phone number, in case we need to contact you</li>
				                    	<li>Where the pothole or road defect is, including nearest landmark, road name and local goverment</li>
				                    	<li>Is the pothole or defect outside a specific property, for example outside Number 4, Iyana Oworo Road</li>
				                    </ul>
				                </div>
				            </div>
				        </div>
				        <div class="card bg-dark border-light">
				            <div class="card-header" id="headingTwo">
				                <h2 class="mb-0">
				                    <button type="button" class="btn btn-link collapsed button_name text-warning" data-toggle="collapse" data-target="#collapseTwo"><i class="fa fa-plus icon_name text-warning"></i> POTHOLES</button>
				                </h2>
				            </div>
				            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
				                <div class="card-body">
				                    <p class="text-warning mt-2">A pothole happens when the surface of a road or footpath has been worn away and a hollow forms.
									As the road surface ages it becomes more porous, and rainwater gets in through cracks. In wet weather the pressure created by traffic passing over the area forces water further down into the road surface, weakening it.
									In winter, as the temperature changes between freezing and thawing, there is a faster deterioration of road surfaces, because the water filling cracks freezes and expands, loosening chunks of the surface material.
									Once a pothole has formed it will quickly grow as traffic continually dislodges and removes weakened and broken pieces of the surface.<br></p>
									<p class="text-warning mt-2"><b class="mt-1 mb-1">Identifying potholes</b><br>
									Our inspectors check roads, footways and cycleways for potholes regularly. Quieter routes are inspected less often, so we ask you to help us identify and report potholes. When you report a pothole we log it and schedule a repair where required. </p>
									<a href="findpothole.php" class="btn btn-lg btn-outline-warning">Find Pothole</a>
				                </div>
				            </div>
				        </div>
				        <div class="card bg-dark border-light">
				            <div class="card-header" id="headingThree">
				                <h2 class="mb-0">
				                    <button type="button" class="btn btn-link collapsed  button_name text-warning" data-toggle="collapse" data-target="#collapseThree"><i class="fa fa-plus icon_name text-warning"></i> How We Repair Potholes</button>                     
				                </h2>
				            </div>
				            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
				                <div class="card-body">
				                    <p class="text-warning mt-2">A pothole repair involves ‘cutting out’ the weakened area. The hole is then cleaned out and painted with a coat of a liquid bitumen binder which acts like a glue when the hole is filled with a hot layer of road surface material, which is then compacted.<br></p>
									<p class="text-warning mt-2"><b>Paint marks on the road</b> <br> 
									We make paint marks on the road to help us identify the exact spot to carry out the work. The markings used (lines, dots or letters) have no particular meaning. If a member of the public adds additional marks, this will not result in additional work being done</p>
				                </div>
				            </div>
				        </div>
				        <div class="card bg-dark border-light">
				            <div class="card-header" id="headingFour">
				                <h2 class="mb-0">
				                    <button type="button" class="btn btn-link collapsed  button_name text-warning" data-toggle="collapse" data-target="#collapseFour"><i class="fa fa-plus icon_name text-warning"></i> How Long It Takes Us to Repair Potholes and Prioritizing Repairs</button>                     
				                </h2>
				            </div>
				            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
				                <div class="card-body">
				                    <p class="text-warning mt-2">When you report a pothole it is inspected within 10 working days and a repair will be planned if it meets the intervention levels set out in our Highway Safety Inspection Manual. In some cases we may do a temporary repair and a permanent repair will be carried out within 28 days.<br>
									Pothole repairs are prioritised depending on their size and where they are. We also take into account the amount and speed of traffic using the road, and where the pothole is in the road.<br>
									As a general rule, potholes in the road that are 40mm deep will be repaired within 28 days, the same timeframe as for potholes on a footway or cycleway that are 20mm deep. These response times are reduced to 24 hours for busy A and B roads and town centres.</p>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>
				<div class="bs-example mt-5 mb-5">
					<div class="accordion" id="accordionsExample">
						 <div class="card bg-light shadow text-gray-dark border-light">
				            <div class="card-header" id="headingFive">
				                <h2 class="mb-0">
				                    <button type="button" class="btn btn-link collapsed button_name text-dark" data-toggle="collapse" data-target="#collapseFive"><i class="fas fa-arrow-alt-circle-down icon_name"></i><b>Feedback</b> - Was this Information Helpful?</button>
				                </h2>
				            </div>
				            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionsExample">
				                <div class="card-body">
				                    <p class="text-dark mt-2" style="font-weight: 500">
				                    	We will use your feedback to improve this website. Please tell us if we have got something wrong, if there is something missing or if something isn't working.
				                    		<br><br>
										What do you want to tell us about?
				                    </p>
				                    <form id="forms" method="POST" action="feedback.php">
					                    <select style="width: 100%" id="select1">
					                    	<option name="" value="---">---</option>
					                    	<option name="Question1" value="Information On The Page" id="option1">Information On The Page</option>
					                    	<option name="Question2" value="A problem on the Website?" id="option2">A problem on the Website? </option>
					                    	<option name="Question3" value="General Observation" id="option3">General Observation</option>
					                    </select>
					                    <p class="mt-3" style="display: none" id="para1">Describe The Problem</p>
					                    <select id="select2" style="display: none" class="mt-2"><br>
					                    	<option name="" value="Not correct/ Out of Date?" id="option4">Not correct/ Out of Date?</option>
					                    	<option name="" value="Not clear" id="option5">Not clear</option>
					                    </select>
					                    <p class="mt-3" style="display: none" id="para2">Describe The Problem</p>
					                    <textarea id="text_box" rows="10" cols="10" style="width: 100%; display: none" class="mt-2"></textarea>
					                    <button type="submit" id="bttn" class="btn btn-outline-dark btn-lg mt-2">Send</button>
				                    </form>
				                </div>
				            </div>
				        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Accordions Finish -->
	<section id="footer">
		<div class="container-fluid mt-1">
			<div class="row">
				<div class="col-sm-6 mt-4 mb-4">
					<span class="text-center mt-2">Created by Uthman &copy; 2019</span>
				</div>
				<div class="col-sm-6 mt-4 mb-4">
					<a href="https://twitter.com/huthmanov" target="_blank" ><i class="fab fa-twitter mr-2"></i></a>
					<a href="https://instagram.com/huthmanov" target="_blank"><i class="fab fa-instagram mr-2"></i></a>
					<a href="https://facebook.com" target="_blank"><i class="fab fa-facebook mr-2"></i></a>
					<a href="https://www.linkedin.com/in/ojodu-uthman-1a4a6685/" target="_blank"><i class="fab fa-linkedin mr-2"></i></a>
					<a href="https://github.com/Huthmanov-23/Huthmanov-23" target="_blank"><i class="fab fa-github mr-2"></i></a>

				</div>
			</div>
		</div>
	</section>
</body>
</html>