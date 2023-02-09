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
					   <h3><span class="text-warning">Sports and Games</span></h3>
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
								<a class="nav-link" id="home-tab" data-toggle="tab" href="#roles" role="tab" aria-controls="home" aria-selected="true">Members Role</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="home-tab" data-toggle="tab" href="#complaint" role="tab" aria-controls="home" aria-selected="true">Sports and Game Assistant Role</a>
							</li>
							
						</ul>
					</div>
					<div class="card-body">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab">
								<ul type="disc">
  <li>To create zeal amongst students and faculty       members towards sports.</li>
  <li>To promote every individual&rsquo;s health, physical       well-being as well asthe acquisition of physical skills among the       students.</li>
  <li>To organize training, coaching and education       in sports for everybody so that they can learn to keep themselves       physically fit.</li>
  <li>To organize various competitions in the       following sports: cricket, basketball, volleyball, table tennis, chess,       carom, badminton, and Athletics.</li>
  <li>The committee aspires to inculcate qualities       such as sportsmanship, team spirit and bonding.</li>
  <li>It is       designed to serve the interests of the student&rsquo;s community in competitive       sports and other recreational activities i.e. both indoor and outdoor.</li>
</ul>

							</div>
							<div class="tab-pane fade" id="roles" role="tabpanel" aria-labelledby="profile-tab">
								<h5>Roles  &amp; Responsibilities of Committee Members </h5>
<ul type="disc">
  <li>The committee shall promote sports activities       by motivating students and members of faculty.</li>
  <li>Establishing adequate facilities for Sports       &amp; Games</li>
  <li>Budgeting the funds for organizing Annual       Sports Days </li>
  <li>Conducting orientation programmes for students       and faculty members</li>
  <li>Establishing and updating the facilities       of&nbsp; Gymnasium</li>
  <li>Coordinating with the Departments for putting       special focus on winners in Inter-University and Zonal competitions.</li>
  <li>Preparing the Annual report of accomplishments       in Sports Games.</li>
  <li>Discarding the out-dated, damaged and Sports       &amp; Games and gymnasium equipment&rsquo;s with adequate replacements.</li>
  <li>Cultivating daily fitness training habits       among students, faculty and staff members</li>
  <li>Identifying and utilizing the services of       resource persons for the training of&nbsp; the students in various sports       &amp; Games</li>
  <li>Promoting team spirit by making healthy       competition.</li>
  <li>To organize regular sports events in order to       train students for state and national level competitions.</li>
  <li>To arrange for better coaching facilities.</li>
  <li>Proper maintenance of sports accessories.</li>
  <li>To provide       necessary infrastructure for the sports.</li>
</ul>
							</div>
							<div class="tab-pane fade" id="complaint" role="tabpanel" aria-labelledby="home-tab">
								<h5>Roles of  the Sports and Game Assistant </h5>
<ul type="disc">
  <li>To maintain a stock ledger of all available       items and equipment&rsquo;s related to the cell.</li>
  <li>To ensure the purchase and service of any item       or equipment&rsquo;s related to the cell.</li>
  <li>To maintain and upkeep the sports facilities       of the college including the ground.</li>
  <li>To provide First Aid facility       during the sports and games activities. </li>
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