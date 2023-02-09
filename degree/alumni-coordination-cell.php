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
					   <h3><span class="text-warning">Alumni Coordination cell</span></h3>
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
							<h5>ALUMNI CELL</h5>
								<ul>
								  <li>To invite the  Alumni to visit the College to interact with the students to enhance the  knowledge and skills of the students.</li>
								  <li>To encourage them  to bring industries and companies for campus placements.</li>
								  <li>To give an opportunity  to the Alumni who are entrepreneurs to motivate the students.</li>
								  <li>To suggest Add On  / Certificate / Diploma courses to be conducted by the College with financial  assistance from industries/commercial organizations and well placed Alumni.</li>
								  <li>To conduct Alumni  meet every year.</li>
								  <li>To receive and  attend to parents / guardians in the College.</li>
								  <li>To inform about  the low attendance or poor Marks of the students, if any, to the concerned  Parents.</li>
								  <li>To hold at least  Two General Body Meetings (August &amp; November) to discuss issues regarding  Students.</li>
								  <li>To file and  submit the records to the IQAC Committee.</li>
								  <li>To increase  alumni interaction with the institution</li>
								  <li>To foster loyalty  to the institution and promote the concern of welfare for the institution</li>
								  <li>To create  awareness and motivate the students with the current trends in the market by  interacting with the alumni</li>
								  <li>To maintain up to  date database of alumni</li>
								 </ul> 
							</div>
							<div class="tab-pane fade" id="roles" role="tabpanel" aria-labelledby="profile-tab">
								<h5>The Role of the  Coordinator </h5>
								<ul type="disc">
								  <li>Manages the Alumni Affairs Office to       ensure that it is operating in an efficient and effective manner in       advancing the ADCK&rsquo;s goals and objectives</li>
								  <li>Develops an annual plan outlining the       goals and objectives of the Alumni Affairs aimed at maximizing alumni       interest</li>
								  <li>Develops and maintains an Alumni network</li>
								  <li>Develops and maintains an Alumni Database,       Website, Alumni Network, and an online Alumni Community</li>
								  <li>Plans and manages all internal special       events for Alumni and acts as the liaison to all College Alumni</li>
								  <li>Conducts necessary surveys and analysis of       graduates (employment information) and provides online information to       graduates and members</li>
								  <li>Builds an Alumni       Volunteer Program through mailing, phone calls, emails, etc.</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="complaint" role="tabpanel" aria-labelledby="home-tab">
								<h5>The Role of the  Faculty member </h5>
								<ul type="disc">
								  <li>&nbsp;Design web page for alumni cell.</li>
								  <li>&nbsp;Take necessary action to establish       alumni chapters and to conduct various programs.</li>
								  <li>Create the network to establish alumni       chapter.</li>
								  <li>To conduct the alumni meet every year in       our college premises to make the program grand success.</li>
								  <li>Development and implementation of a       telephonic and online follow-up and support program for college alumni.</li>
								  <li>Develop communication       plan to contact alumni post-treatment, maintain alumni database including       family contacts; implement and summarize alumni survey.</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="action" role="tabpanel" aria-labelledby="home-tab">
								<h5>The Role of the  Student member</h5>
								<ul type="disc">
								  <li>Support the coordinator and faculty       for developing web page.</li>
								  <li>Support the coordinator and faculty for       establish alumni chapters and to conduct various programs.</li>
								  <li>Support the coordinator and faculty for       creating the network to establish alumni chapter.</li>
								  <li>Support the coordinator and faculty for       conducting the alumni meeting and develop the good relationship for       carrier guidance.</li>
								  <li>Support faculty members and make the       students to attend the program for their growth and development.</li>
								  <li>They promote the       institute to potential students</li>
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