<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/css.php";?>
</head>

<body class="sidebar-collapse">
    <!-- Navbar -->
    <?php include "include/header.php";?>
  	<div class="page-top">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-md-8 align-self-end">
					<div class="title-bg">
					   <h3><a href="index.php" class="text-info">Home</a></h3>
					   <h3><span class="text-warning">Administration</span></h3>
					</div> 
				</div>
			</div>
		</div>			
	</div>
	<div class="page-content">
	<div class="container content-pt">
		<div class="row">
			<div class="col-md-8">
				<div class="card card-warning">
					<div class="card-header">
						<h4 class="title text-info">Administration</h4>
					</div>
					<div class="card-body admin-title">
						<div class="row">
							<div class="col-md-6 col-lg-4 text-center">
								<img src="assets/img/chirmen.jpg" class="img-fluid img-raised rounded-circle">
								<h6>Sri.N.SESHA REDDY <br /><span class="text-warning">Chairman</span></h6>
							</div>
							<div class="col-md-6 col-lg-4 text-center">
								<img src="assets/img/vc.jpg" class="img-fluid img-raised rounded-circle">
								<h6>Sri.N.SATISH REDDY <br /><span class="text-warning">Vice Chairman</span></h6>
							</div>
							<div class="col-md-6 col-lg-4 text-center">
								<img src="assets/img/madam.jpg" class="img-fluid img-raised rounded-circle">
								<h6>Smt.N.LAXMI RAJYAM <br /><span class="text-warning">Secretary</span></h6>
							</div>
							<div class="col-md-6 col-lg-4 text-center">
								<img src="assets/img/secretary.jpg" class="img-fluid img-raised rounded-circle">
								<h6>Sri.N.KRISHNA DEEPAK REDDY <br /><span class="text-warning">Secretary</span></h6>
							</div>
							<div class="col-md-6 col-lg-4 text-center">
								<img src="assets/img/suguna.jpg" class="img-fluid img-raised rounded-circle">
								<h6 class="mb-1">DR. N. SUGUNA REDDY <br /><span class="text-warning">Secretary</span><p style="font-size:12px; text-align: center;">Aditya Degree Colleges</p></h6>
								
							</div>
							<div class="col-md-6 col-lg-4 text-center">
								<img src="assets/img/ac.jpg" class="img-fluid img-raised rounded-circle" width="120">
								<h6 class="mb-1">Dr.B.E.V.L.NAIDU <br /><span class="text-warning">Academic Director</span><p style="font-size:12px; text-align: center;">Aditya Degree & PG Colleges</p></h6>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<?php include "include/placements.php";?>
			</div>
		</div>
	</div>
				
				<?php include "include/footer.php";?>
    </div>
	 <?php include "include/js.php";?>
</body>
</html>