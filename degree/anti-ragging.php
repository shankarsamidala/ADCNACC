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
					   <h3><span class="text-warning">Anti-Ragging</span></h3>
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
								<a class="nav-link" id="home-tab" data-toggle="tab" href="#roles" role="tab" aria-controls="home" aria-selected="true">Roles & Responsibilities</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab">
								<p>Aditya Degree College, Kakinada, maintains a healthy and congenial academic environment for the students. The institution offers protection to the new entrants from the menace of ragging. Ragging is defined as: Any disorderly conduct whether by words spoken or written or by an act which the effect of teasing, treating or handling with rudeness any other student, indulging in rowdy or indiscipline activities which causes or is likely to cause annoyance, hardship or psychological harm or to raise fear or apprehension thereof in a fresher or any other student or asking the student to do any act or perform something which such student will not do in the ordinary course and which has the effect of causing or generating a sense of shame or embarrassment so as to adversely affect the physique or psyche of a fresher or any other student. Ragging in the college is absolutely banned and, hence, any student found indulging in an act of ragging shall meet strict disciplinary action, which may include immediate rustication from the college apart from criminal consequences.</p>
								<p>In this regard our Institute has constituted an Anti-Ragging Cell. The cell is headed by Head of the institution, along with several other committee members comprising of senior faculties. Anti-Ragging members and Anti Ragging Bus In charges have been deputed from all departments to monitor students discipline both inside the campus and on board.</p>
								<h5>Functions :-</h5>
								<p>
								<ul>
								  <li>To build self-esteem & dignity among junior boys and girls students.</li>
								  <li>Class wise Mentoring Cells, Anti ragging Sub committees (involving faculty, non teaching staff and students) and Anti Ragging Squads shall be formed in due course to distribute the responsibilities</li>
								  <li>To offer services such as counseling, legal aid in case of atrocities against women.</li>
								  <li>To creates awareness regarding women rights. To address complaints about ragging as per the Govt. and University procedures.</li>
								  <li>To avoid and prohibit sexual harassment at workplace</li>
								  <li>To ensure overall disciplined environment in the College.</li>
								  <li>To initiate timely action against erring students.</li>
								  <li>To sensitize students about the evils of ragging and its prevention in the College. Campus by organizing talks/ programs etc.</li>
								  <li>To maintain records of the cases investigated and submit the same to the IQAC Committee.</li>
								</ul>
								</p>  
							</div>
							<div class="tab-pane fade" id="roles" role="tabpanel" aria-labelledby="profile-tab">
								<h5>Roles & Responsibilities of the Chairman </h5>
								<ul>
								  <li>To create self-confidence and congenial environment among the newly admitted students by way of conducting frequent interactive sessions to clear the doubts related to academic matters, social interaction and compatibility.</li> 
								</ul> 
								<h5>Roles & Responsibilities of the Convener </h5>
								<ul>
								  <li>Based on the first hand information and prime-facie evidence, the convener submits report to the Principal for necessary disciplinary action. Severe punishment will be recommended on the accused, if proven.</li> 
								</ul> 
								<h5>Roles & Responsibilities of the Faculty Members </h5>
								<ul>
								  <li>Faculty is deputed at various locations inside the college campus to monitor the student activities. Members sees that no student groups are formed and if any are observed, the group is dispersed to avoid any nuisance. The punishment for ragging is displayed at various places to make the students aware of seriousness of the administration for preventing ragging. To conduct an enquiry and identify the culprits on receipt of complaint.</li> 
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