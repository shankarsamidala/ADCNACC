<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/css.php";?>
	<style>
		.nav-tabs {padding:0; width:auto; float:left; display:block}
		.nav-tabs .nav-item {float:left; display:block}
		.nav-tabs>.nav-item>.nav-link {padding:8px 12px;border-radius:15px; font-weight:600; float:left; display:block}
		.nav-tabs>.nav-item>.nav-link.active {  color:#333333; border: 2px solid #333333;}
		/*@media screen and (max-width: 768px){
		.nav-tabs {padding:0; width:auto; float:left;}
		}*/
	</style>
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
					   <h3><span class="text-warning">Admission</span></h3>
				  </div>
				</div>
			</div>
		</div>		   
	</div>
	<div class="page-content">
	<div class="container content-pt">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card card-warning">
					<div class="card-header">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							
							<li class="nav-item">
								<a class="nav-link active" id="profile-tab" data-toggle="tab" href="#about" role="tab" aria-controls="profile" aria-selected="false">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="home-tab" data-toggle="tab" href="#roles" role="tab" aria-controls="home" aria-selected="true">Roles & Responsibilities </a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab">
								<p>The Admissions Committee is responsible for the graduate student admissions in the program. This committee will also develop contacts with other relevant graduate admissions committees with the goal of identifying potential candidates who would be more appropriate for the U.G programs & P.G programs. The admissions committee endeavors to identify applicants from various junior colleges. Applicants to be identified by the committee and, when possible, invited to visit the campus. In addition, the admissions committee tracks the success of the admissions process each day during admissions by maintaining a database of pertinent information on the applicants. This committee reviews admission requirements for the program annually.</p> 
								<h5>Functions :-</h5> 
								<ul>
									<li> To improve the admissions quality with well defined policy</li>
									<li> To disseminate and comply with all the rules and regulations of admissions as prescribed by Govt. and statutory agencies</li>
									<li> To create a brand value and awareness about the institute</li>
									<li> To provide best counseling to students and parents who come to seek admission</li>
									<li> To guide the students and parents in making effective decisions</li>
									<li> To guide admitted students to complete the admission procedure like paying fees, getting roll nos., getting hostel admission, getting I-card, fulfilling eligibility criteria, getting time tables etc.</li> 
								</ul> 
							</div>
							<div class="tab-pane fade" id="roles" role="tabpanel" aria-labelledby="profile-tab">
								<ul>
								  <li> In consultation with HRD prepare attractive brochures, prospectus and handouts for wider publicity</li>
								  <li> To collect proposals / materials from the Departments, Committees and lecturers to draft Annual plan of activities for the year for publication in the Prospectus.</li>
								  <li> To prepare plan for addressing12th standard, diploma students as a career counseling activity.</li>
								  <li> To place advertise mention news papers regarding admissions as and when permitted by the respective Conveners of admissions.</li>
								  <li> To assist the students and to interact with the parents during admissions</li>
								  <li> To advise the Principal on improving facilities from the feedbacks got from parents and students during admission counseling</li>
								  <li> To file and maintain the records of the admissions and Annual Plan. To submit the enrollment records to the IQAC Committee.</li>
								  <li> To issue notifications for Spot admission & Category-B (MQ) admissions with the guidelines issued by State Government</li>
								  <li> To submit the admissions list to the authorities seem deemed and seeks for their approval</li>
								</ul> 
								<h5>Roles & Responsibilities of the Chairman </h5>
								<ul>
								  <li> To finalize on all the matters relating to Admissions of the students at both UG & PG level.</li> 
								  <li> To provide all information related to admissions under A Category (Convener Quota) and B Category (Management Quota) to the students and parents. </li> 
								</ul> 
								<h5>Roles & Responsibilities of the Convener </h5>
								<ul>
								  <li> To issue Notifications for Spot Admissions under A Category and for Admissions under B Category as per the guidelines issued by State Government and concerned Competent authority</li> 
								  <li> To submit the list of Admissions made by the college to the concerned competent authorities and get approved</li>
								</ul> 
								<h5>Roles & Responsibilities of the Faculty Members </h5>
								<ul>
								  <li> Organize Activities related to admissions deemed fit by the institute as when decided by the convenor.</li> 
								</ul> 
							</div>
					</div>
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