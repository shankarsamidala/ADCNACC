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
					   <h3><span class="text-warning">Campus Maintenance</span></h3>
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
								<a class="nav-link active" id="profile-tab" data-toggle="tab" href="#about" role="tab" aria-controls="profile" aria-selected="false">FUNCTIONS</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="home-tab" data-toggle="tab" href="#roles" role="tab" aria-controls="home" aria-selected="true">Coordinator Roles</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="home-tab" data-toggle="tab" href="#complaint" role="tab" aria-controls="home" aria-selected="true">Faculty Roles</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="home-tab" data-toggle="tab" href="#action" role="tab" aria-controls="home" aria-selected="true">Student Roles</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab">
								<ul type="disc">
								  <li>Utilize existing space,       particularly classrooms, Seminar halls, board rooms, and video       conferencing hall more closely within reasonable standards and guidelines.</li>
								  <li>To create safe environment in       campus by installing and maintaining fire Extinguishers and CC cameras in       the campus.</li>
								  <li>To maintain college campus clean       and healthy by ensuring dry and wet cleaning in periodic intervals in       classrooms, seminar halls, wash rooms and rest rooms.</li>
								  <li>Ensure an adequate supply of parking       to meet the academic mission of the campus; and locate and configure       spaces to ease student schedules and needs, to minimize conflicts between       vehicles and pedestrians, and to support other goals pertaining to both       land use and space.</li>
								  <li>Ensure that campus pathways are       safe, adequately distributed for pedestrians and for those with       disabilities and that enhance and feature the best qualities of the campus       environment.</li>
								  <li>Ensuring uninterrupted water and       electrical supply in the campus.</li>
								  <li>Utilizing and maintaining college       furniture efficiently.</li>
								  <li>Maintaining       gardens and lawns in the campus by using efficient garden and landscape       maintenance equipment.</li>
								</ul> 
							</div>
							<div class="tab-pane fade" id="roles" role="tabpanel" aria-labelledby="profile-tab">
								<h5>Roles &amp; Responsibilities of Coordinator </h5>
								<ul type="disc">
								  <li>To coordinate with Aditya Degree College for Women, Kakinada campus Maintenance committee faculty members, to conduct       the meetings, discussing about Campus Management, taking suggestions from       higher level or management.</li>
								  <li>To coordinate the Dept-wise campus       Maintenance committee faculty members and managing and co-coordinating       various activities related to the campus.</li>
								  <li>Implementing       decisions taken in Aditya Degree College for Women, Kakinada campus Maintenance       committee meetings.</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="complaint" role="tabpanel" aria-labelledby="home-tab">
								<h5>Roles &amp; Responsibilities of Faculty  Members </h5>
								<ul type="disc">
								  <li>Create check list, rules and regulations       to maintain classrooms, seminar halls, labs, and auditorium in order to       maintain campus infrastructure.</li>
								  <li>To collect the final data from       Department wise members and ensuring the campus maintained as per the       rules and regulations.</li>
								  <li>Organizing       various activities as per the schedule.</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="action" role="tabpanel" aria-labelledby="home-tab">
								<h5>Roles &amp; Responsibilities of Student  Members </h5>
								<ul type="disc">
								  <li>Understand the community in which they       work.</li>
								  <li>Understand themselves in relation to       their community.</li>
								  <li>Identify the needs and problems of the       community and involve them in problem-solving.</li>
								  <li>Utilize their       knowledge in finding practical solutions to individual and community       problems.</li>
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