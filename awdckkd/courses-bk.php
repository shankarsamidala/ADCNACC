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
					   <h3><span class="text-warning">COURSES</span></h3>
					</div>
				</div>
			</div>
		</div>			 
	</div>
	<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="card card-warning2">
					<div class="card-header card-page-warning">
						<h4 class="title text-info">COURSES - <span class="text-warning">OFFERED</span></h4>
					</div>
					<div class="card-body std-info">
						<p>The Admissions in Aditya Group of Degree Colleges starts every year in the month of June up to August. The Aditya Group of Degree Colleges is affiliated to Andhra University, Visakhapatnam. The students can collect the application forms from the office of any degree college from the month of February by paying an amount of rupees hundred in the college cash counter.</p>
						<div class="acc-body">
								<div id="accordion2" class="accordion">
										<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne1">
												Science And Computer
										</div>
										<div id="collapseOne1" class="card-block collapse show">
											<li>B.SC : Maths, Electronics, Computer Science</li>
											<li>B.SC : Maths, Physics, Computer Science</li>
											<li>B.Sc : Maths, Statistics, Computer Science</li>
											<li>B.Sc : Maths, Physics, Chemistry</li>
										</div>
										<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo1">
											  BIO Science Courses 
										</div>
										<div id="collapseTwo1" class="card-block collapse">
											<li>B.SC : Biotechnology, Biochemistry, Chemistry</li>
											<li>B.Sc : Microbiology, Biochemistry, Chemistry</li>
											<li>B.SC : Biotechnology, Zoology, Chemistry</li>
											<li>B.Sc. FOOD TECHNOLOGY</li>
										</div>
										<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour1">
											  Professional Courses 
										</div>
										<div id="collapseFour1" class="card-block collapse">
											<li>B.Com : Computers Applications</li>
											<li>BBA : Bachelor of Bussiness Administration</li>
											<li>BBA+ an integrated program with TISS Certification</li>
											<li>BCA : Bachelor of Computer Application</li>
											<li>B.Sc. ANIMATION</li>
											<li>BACHELOR HOTEL MANAGEMENT</li>
										</div>
										<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive1">
											  PG Courses  
										</div>
										<div id="collapseFive1" class="card-block collapse">
											<li>M.Sc : Organic Chemistry</li>
											<li>M.Sc : Analytical Chemistry</li>
											<li>M.Sc : Bio Chemistry</li>
											<li>M.Sc : Microbiology</li>
										</div>
								</div>
								</div>
						
					</div>
				</div>
			</div>
			<div class="col-md-4 content-pt">
				<?php include "include/placements.php";?>
			</div>
		</div>
	</div>
				
				<?php include "include/footer.php";?>
    </div>
	 <?php include "include/js.php";?>
</body>
</html>