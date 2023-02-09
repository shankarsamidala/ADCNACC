<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/css.php";?>
</head>

<body class="sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-info fixed-top">
        <?php include "include/header.php";?>
    </nav>
  	<div class="page-top">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-md-8 align-self-end">
					<div class="title-bg">
					   <h3><a href="index.php" class="text-info">Home</a></h3>
					   <h3><span class="text-warning">Videos</span></h3>
				  </div>
				</div>
			</div>
		</div>		   
	</div>
	<div class="page-content">
	<div class="container content-pt">
				<div class="card card-warning">
					<div class="card-header">
						<h4 class="title text-warning">Videos</h4>
					</div>
					<div class="card-body">
						<div class="row">
							<!--<div class="col-md-4">
								<video width="100%" controls>
								  <source src="https://aditya.ac.in/degree/media/HARSHITHA SRI PRASANTHI RAMADUGULA ( III BBC).mp4" type="video/mp4">
								</video>
							</div>-->
							<div class="col-md-4">
								<video width="100%" controls>
								  <source src="https://aditya.ac.in/degree/media/ISWARYA BONALA ( III MSCS).mp4" type="video/mp4">
								</video>
							</div>
							<div class="col-md-4">
								<video width="100%" controls>
								  <source src="https://aditya.ac.in/degree/media/KADALI BALA LAKSHMI PRIYA ( III BBA).mp4" type="video/mp4">
								</video>
							</div>
						</div>
					</div>
				</div>
	</div>
				
				<?php include "include/footer.php";?>
    </div>
	 <?php include "include/js.php";?>
</body>
</html>