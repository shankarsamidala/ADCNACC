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
					   <h3><span class="text-warning">Hostels</span></h3>
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
						<h4 class="title text-warning">Hostels</h4>
					</div>
					<img src="assets/img/hsbuild.jpg" width="100%">
					<div class="card-body">
						<div class="row">
							<div class="col-md-4">
								<div class="card">
									<img src="assets/img/madam.jpg" height="180" align="left">
								</div>
								<p class="text-center mb-0"><strong>Smt. N. Lakshmi Rajyam</strong><p class="text-center text-warning"><strong>Secretary</strong></p>
									
							</div>	
							<div class="col-md-8">
								<p>The hostels at aditya are provided with the state-of-the art infrastructural facilities to create such an excellent atmosphere that every inmate of the hostel coming from several parts of the country considers it to be the home away from their home.An excellent hostel facility is provided separately for boys and girls in congenial and pleasant atmosphere . Nutritious food and mineral water are provided to all the inmates of the hostel. The Administration of the hostels is taken care of under the continuous and untiring personal supervision of secretary Smt. N. Lakshmi Rajyam.</p>
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