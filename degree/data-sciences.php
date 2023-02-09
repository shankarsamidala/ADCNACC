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
					   <h3><span class="text-warning">Data Sciences</span></h3>
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
						<h4 class="title text-info">Data Sciences</h4>
					</div>
					<div class="card-body std-info">
						<p>Data science is a "concept to unify statistics, data analysis, machine learning and their related methods" in order to "understand and analyze actual phenomena" with data. Our aim is to produce Data Scientists to work in Big Data Sector.</p>
						<p align="center"><strong>SYLLABUS</strong></p>
<ul>
  <li>Introduction  to Data Science With R </li>
  <li>Data  Mining and Data Analysis </li>
  <li>Multivariate  Technique for Data Analysis <strong> </strong></li>
  <li>Big Data  Technology <strong> </strong></li>
  <li>Python  Programming for Data Analytics<strong> </strong></li>
</ul>
<p><strong>CAREER OPPORTUNITIES</strong></p>
<ul>
  <li>Analytical Manager</li>
  <li>Business Analyst</li>
  <li>Data Analyst</li>
  <li>Data Scientist<strong> </strong></li>
  <li>Statistician<strong> </strong></li>
  <li>Research Analyst<strong> </strong></li>
</ul>
						
					</div>
				</div>
			</div>
			<div class="col-md-8 content-pt" ng-init="loadprojects('dstcs')">
   		<?php include "include/projects.php";?>
	</div>
		</div>
	</div>
				
				<?php include "include/footer.php";?>
    </div>
	 <?php include "include/js.php";?>
</body>
</html>