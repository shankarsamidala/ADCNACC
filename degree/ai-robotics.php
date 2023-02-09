<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/css.php";?>
</head>

<body class="sidebar-collapse" ng-app="degree" ng-controller="projects">
    <!-- Navbar -->
    <?php include "include/header.php";?>
  	<div class="page-top">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-md-8 align-self-end">
					<div class="title-bg">
					   <h3><a href="index.php" class="text-info">Home</a></h3>
					   <h3><span class="text-warning">Artificial Intelligence & Robotics</span></h3>
					</div>
				</div>
			</div>
		</div>			 
	</div>
	<div class="page-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<div class="card card-warning2">
					<div class="card-header card-page-warning">
						<h4 class="title">B.Sc.-Artificial Intelligence & Robotics</h4>
					</div>
					<div class="card-body std-info">
						<p>Artificial intelligence is an area of computer science that emphasizes the creation of intelligent machines that work and react like humans, its main advantages are reduces human involvement in selected jobs, minimal or no errors. Our main aim is to produce Machine Learning Engineers to build and manage platforms in AI projects.</p>

									<h4 class="text-warning">SYLLABUS</h4>
								
									<ul class="courselist">
                                    <li>Microprocessors & Microcontrollers</li>
<li>Introduction to Artificial Intelligence & Python</li>
<li>Introduction to Robotics </li>
<li>Data Warehousing & Data Mining</li>
<li>Computer Networks</li>
<li>Expert Systems     </li>
<li>Fuzzy Logic </li>
<li>Embedded systems</li>

									</ul>
										
									<h4 class="text-warning">CAREER OPPORTUNITIES</h4>
								
								
								
								
									<ul class="courselist">
                                    

<li>Algorithm specialists </li>
<li>Research Scientists & Engg. consultants</li>
<li>Surgical technicians working with robotic tools</li>
<li>Medical health professionals working with artificial limbs, prosthetics, hearing aids and vision restoration devices</li>
<li>Military and aviation electricians working with flight simulators, drones, etc</li>
									</ul>

				</div>
				</div>
			</div>
			<div class="col-md-8 content-pt" ng-init="loadprojects('mpair')">
   		<?php include "include/projects.php";?>
	</div>
		</div>
	</div>
				
				<?php include "include/footer.php";?>
    </div>
	 <?php include "include/js.php";?>
</body>
</html>