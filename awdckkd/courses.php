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
					   <h3><span class="text-warning">Programmes</span></h3>
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
						<h4 class="title text-info">Programmes - <span class="text-warning">OFFERED</span></h4>
					</div>
					<div class="card-body std-info">
						<p>The Admissions in Aditya Group of Degree Colleges starts every year in the month of March up to June. The Aditya Group of Degree Colleges is affiliated to Adikavi Nannaya University, Rajamahendravaram. The students can collect the application forms from the office of any degree college from the month of February by paying an amount of rupees hundred in the college cash counter.</p>
						<div class="acc-body">
								<div id="accordion2" class="accordion">
										<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne1">
												Science And Computer
										</div>
										<div id="collapseOne1" class="card-block collapse show">
											<li><a href="mpc.php">B.Sc : Maths, Physics, Chemistry</a></li>
											<li><a href="mpcs.php">B.Sc : Maths, Physics, Computer Science</a></li>
											<li><a href="mecs.php">B.Sc : Maths, Electronics, Computer Science</a></li>
											<li><a href="mscs.php">B.Sc : Maths, Statistics, Computer Science</a></li>
											<li><a href="datascience.php">B.Sc : Data Science, Statistics, Computer Science</a></li>
											<li><a href="ai-robotics.php">B.Sc : Maths, Physics, Artificial Intelligence & Robotics</a></li>
										</div>
										<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo1">
											  BIO Science Courses 
										</div>
										<div id="collapseTwo1" class="card-block collapse show">
											<li><a href="bbc.php">B.Sc : Biotechnology, Biochemistry, Chemistry</a></li>
											<li><a href="mbc.php">B.Sc : Microbiology, Biochemistry , Chemistry</a></li>
											<!--<li>B.SC : Biotechnology, Zoology, Chemistry</li>
											<li>B.Sc. FOOD TECHNOLOGY</li>-->
										</div>
										<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour1">
											  Professional Courses 
										</div>
										<div id="collapseFour1" class="card-block collapse show">
											<!--<li><a href="bcom.php">B.Com : Computers Applications</a></li>-->
											<li><a href="digital-marketing.php">BBA : DIGITAL MARKETING</a></li>
											<li><a href="bba.php">BBA    : Bachelor of Business Administration</a></li>
											<!--<li><a href="bba-plus.php">BBA+ : An Integrated Program with TISS Certification</a></li>-->
											<li><a href="bca.php">BCA    : Bachelor of Computer Applications </a></li>
										</div>
										<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive1">
											  PG Courses  
										</div>
										<div id="collapseFive1" class="card-block collapse show">
											<li><a href="organic-chemistry.php">M.Sc : Organic Chemistry</a></li>
											<!--<li><a href="analytical-chemistry.php">M.Sc : Analytical Chemistry</a></li>-->
											<!--<li>M.Sc : Microbiology</li>-->
											<!--<li><a href="bio-chemistry.php">M.Sc : Bio-chemistry</a></li>-->
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