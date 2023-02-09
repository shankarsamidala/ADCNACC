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
					   <h3><span class="text-warning">Press-Media & Publicity Cell</span></h3>
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
								<a class="nav-link" id="home-tab" data-toggle="tab" href="#complaint" role="tab" aria-controls="home" aria-selected="true">Faculty Role</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="home-tab" data-toggle="tab" href="#action" role="tab" aria-controls="home" aria-selected="true">Student Role</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab">
								<p>Press, Media  and Publicity Committee was established with a view to be the face of the  institute and the single touch- point for all the communications of Aditya  Degree College, Kakinada. The primary role of the Press, Media and Publicity  Committee is to establish links with the local media and provide regular  reports and press releases on campus news and opportunities. The committee is  well-equipped with sophisticated machinery which are handled by trained and  competent students.&nbsp;The Committee also provides internal external media  support for the events organized by ADCK like Convocations, Conferences,  Seminars, Sports weeks etc. The Press, Media and Publicity Committee also  designs and arranges printing materials to be used in different events at ADCK.</p>
<h5>Vision</h5>
<p>Our vision is  to have a shared understanding, alignment and commitment, to derive our  institute&rsquo;s vision that sets the course and empowers people to take action.</p>
<h5>Mission</h5>
<p>Our Mission is to enrich the mind and nourish the spirit,  thereby assisting our students to enhance their lives, expand perspectives and  strengthen their capabilities.</p>

							</div>
							<div class="tab-pane fade" id="roles" role="tabpanel" aria-labelledby="profile-tab">
								<h5>Roles & Responsibilities of Convener</h5>
<ul type="disc">
  <li>To lead the Press, Media and Publicity team       and to coordinate with faculty members from various departments to raise       resources for publication of the college magazine and newsletter.</li>
  <li>Writing, editing, and distributing news       releases to the news media.</li>
  <li>To publish the college newsletter twice a year       after collecting the information on all the activities happening in the       college.</li>
  <li>To maintain the records of the activities       conducted and submit the same to the IQAC Committee.</li>
  <li>To gather department wise data and to send the       write ups to the corrections.</li>
  <li>To ensure that the data gathered from the       departments, published right time according to the schedule prepared.</li>
  <li>Takes the financial support       from management</li>
</ul>
							</div>
							<div class="tab-pane fade" id="complaint" role="tabpanel" aria-labelledby="home-tab">
								<h5>Roles &amp; Responsibilities of Faculty Members</h5>
<ul type="disc">
  <li>To coordinate the Press, Media and Publicity       activities by mobilizing students and ensure the printing of magazines and       publishing newsletters strictly according to the schedule prepared.</li>
  <li>Maintaining an up-to-date list of news media.</li>
  <li>To establish link with the       local&nbsp;media&nbsp;and provide regular reports       and&nbsp;press&nbsp;releases on campus news and opportunities.</li>
  <li>To ensure timeliness of the event articles are       published and will be included in the next issue published twice a year.</li>
  <li>To encourage students for       write-ups, poems, stories, pictures etc.</li>
</ul>
							</div>
							<div class="tab-pane fade" id="action" role="tabpanel" aria-labelledby="home-tab">
								<h5>Roles &amp; Responsibilities of Student Members</h5>
<ul type="disc">
  <li>To make them participate in the social       activities.</li>
  <li>To submit photographs of meeting participants,       interesting meeting events, or other items, along with the meeting report,       to the Convener at the conclusion of the meeting for publication.</li>
  <li>To inform the interested public about the       activities of the section and to stimulate meeting attendance.</li>
  <li>To coordinate with faculty       members and help them wherever required.</li>
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