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
					   <h3><span class="text-warning">College Time Table</span></h3>
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
								<a class="nav-link active" id="profile-tab" data-toggle="tab" href="#about" role="tab" aria-controls="profile" aria-selected="false">Functions</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="home-tab" data-toggle="tab" href="#roles" role="tab" aria-controls="home" aria-selected="true">Convener Roles</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="home-tab" data-toggle="tab" href="#complaint" role="tab" aria-controls="home" aria-selected="true">Members Roles</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab">
								<ul>
								  <li>To allot subjects  to the faculty based on their specialization and preferences.</li>
								  <li>To ensure better  utilization of time and resources.</li>
								  <li>To provide a balanced workload for the  faculty in order to have better performance.</li>
								</ul> 
							</div>
							<div class="tab-pane fade" id="roles" role="tabpanel" aria-labelledby="profile-tab">
								<h5>Roles and Responsibilities of Convener</h5>
								<ul type="disc">
								  <li>Ensuring       that conflicts in Timetable are avoided.</li>
								  <li>Providing       the information regarding Timetables and venue to any of the departmental       committees.</li>
								  <li>Coordinating       the Timetables and making it available to the faculty on the prescribed       day before each semester.</li>
								  <li>Ensuring       the Timetable is available on the departmental notice boards before each       semester.</li>
								  <li>Reviewing       and managing the Timetables and addressing any of the conflicts regarding       the clashes in the Timetables.</li>
								  <li>Providing support and training to the committee members       as required.</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="complaint" role="tabpanel" aria-labelledby="home-tab">
								<h5>Roles and Responsibilities of members</h5>
								<ul type="disc">
								  <li>Preparing       the class and lab Timetables at the beginning of every semester.</li>
								  <li>Preparing       faculty Timetables and workload.</li>
								  <li>Assigning       subjects to the faculty based on their specialization and preferences that       were approved by the Head of the department.</li>
								  <li>Maintaining       a Timetable committee file.</li>
								  <li>Posting       the class and lab Timetables on the respective classroom boards.</li>
								  <li>Making       sure that the faculty individual Timetables are submitted to each faculty       before the beginning of the semester.</li>
								  <li>Working       collaboratively with other members to meet the Timetable requirements.</li>
								  <li>Attempting to resolve the conflicts within the faculty regarding       the published Timetable.</li>
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