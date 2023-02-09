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
					   <h3><span class="text-warning">BCA</span></h3>
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
						<h4 class="title text-info">BCA</h4>
					</div>
					<div class="card-body std-info">
						<p>
                   After completion of SSC, almost all the students prefer to opt either MPC/BiPC groups in +2 for securing a seat in professional courses of Engineering and Medicine. For Bi.PC students due to non-availability of adequate number of seats in proportion to the demand, though the candidate comes out with a comfortable rank in EAMCET, it may not become practically possible to secure a seat in medicine. A student need not be disappointed for his inability to get a seat in Medicine as bright chances are thrown open to BiPC students to shine in IT sector. Undoubtedly the present day society is replete with wide openings for IT Professionals due to rapid industrialisation and entry of multi-nationals in the global arena. As students belonging to BiPC stream are eligible to seek admission in three year BCA course, why can’t you make use of this golden opportunity and aspire to achieve the destination of carving as an IT professional. 
                    </p>
					</div>
				</div>
			</div>
			<div class="col-md-8 content-pt" ng-init="loadprojects('bca')">
   		<?php include "include/projects.php";?>
	</div>
		</div>
	</div>
				
				<?php include "include/footer.php";?>
    </div>
	 <?php include "include/js.php";?>
</body>
</html>