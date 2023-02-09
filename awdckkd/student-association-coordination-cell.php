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
					   <h3><span class="text-warning">Student Association Coordination Cell</span></h3>
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
								<a class="nav-link" id="home-tab" data-toggle="tab" href="#roles" role="tab" aria-controls="home" aria-selected="true">Convener Role</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="home-tab" data-toggle="tab" href="#Secretary" role="tab" aria-controls="home" aria-selected="true">Department Secretary</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="home-tab" data-toggle="tab" href="#complaint" role="tab" aria-controls="home" aria-selected="true">Activity Coordinator Role</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="home-tab" data-toggle="tab" href="#action" role="tab" aria-controls="home" aria-selected="true">Student Role</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab">
								<p>Student Association is a brain child of the Aditya Degree  College for Women, Kakinada which is intended for multidimensional technical /non  technical skill development among students.</p>
    <p>Various Departments had proposed to establish their  department association for the refinement of students to enrich their  professional growth in a continuously improving environment.</p>
<h5>Functions  of SACC </h5>
<ul type="disc">
  <li>To encourage the student creativity,       motivation and team work through co curricular development programs.</li>
  <li>To organize various technical /non technical       co curricular competitions to excavate the competency among the students.</li>
  <li>To provide       economical/financial support to organize the events/activities by the       student association.</li>
</ul>
<h5>SACC  Institutional Functioning </h5>
<ul type="disc">
  <li>SACC will coordinate co curricular activities       by the various department student associations.</li>
  <li>Delivers the plans and schedules to organize       the co curricular activities.</li>
  <li>Supports the co curricular activities through       funding.</li>
  <li>Provides       amenities and facilities for smooth organizing of the activities.</li>
</ul>
							</div>
							<div class="tab-pane fade" id="roles" role="tabpanel" aria-labelledby="profile-tab">
								<h5>Roles and  Responsibilities of the convener </h5>
<ul type="disc">
  <li>To plan activities of all the department       associations.</li>
  <li>To conduct the meetings related to student       association cell.</li>
  <li>To co ordinate the all department secretaries       and supervising the co curricular activities in their department.</li>
  <li>To prepare       the minutes of the meeting and summary of events preparation year wise.</li>
</ul>
							</div>
							<div class="tab-pane fade" id="Secretary" role="tabpanel" aria-labelledby="profile-tab">
								<h5>Roles and  Responsibilities of Department Secretary </h5>
<ul type="disc">
  <li>To plan the co curricular activities of their       department in sync with their department regular activities.</li>
  <li>To prepare the circulars and schedules of the       activities/events.</li>
  <li>Motivating &amp; encouraging the students of       the department to participate/ register in various co curricular       activities.</li>
  <li>To allot the activity coordinator for each       activity in association with their Department HoD.</li>
  <li>To organize department association meetings       and preparation of minutes.</li>
  <li>To keep records, summary and documentations of       all the events or activities organized.</li>
  <li>To upload       the events organized data in to the website and maintenance of       screenshots.</li>
</ul>
							</div>
							<div class="tab-pane fade" id="complaint" role="tabpanel" aria-labelledby="home-tab">
								<h5>Roles and  Responsibilities of Activity coordinator </h5>
<ul type="disc">
  <li>Motivating the students and registering the       students to the stated activity.</li>
  <li>Recording       of the events and preparation of documents of the organized</li>
</ul>
<p>events/ activities i.e. registration forms, winners list,  feedback forms.</p>
<ul type="disc">
  <li>To prepare the report of the event or activity       which they had organized.</li>
  <li>To collect       the feedback and preparation of feedback analysis, forwarding the same to       the HOD &amp; convenor of their respective department for refinement&nbsp;       the events.</li>
</ul>
							</div>
							<div class="tab-pane fade" id="action" role="tabpanel" aria-labelledby="home-tab">
								<h5>Roles and  Responsibilities of student member </h5>
<ul type="disc">
  <li>To motivate the fellow students to participate       in the co curricular activity.</li>
  <li>To act as a organizer &amp; volunteer to the       activity and participant in that event.</li>
  <li>To provide       feedback on the organized event/activity.</li>
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