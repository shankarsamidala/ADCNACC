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
					   <h3><span class="text-warning">Grievance & Redressal</span></h3>
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
								<a class="nav-link" id="home-tab" data-toggle="tab" href="#function" role="tab" aria-controls="home" aria-selected="true">Functions</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab">
								<p>On  imparting professional education, it&rsquo;s our foremost care to consider comfort of  all stake holders to keep amicable environment in the campus. We, ADCKKD  (Aditya Degree College, Kakinada) take practice of transparency, justice and  professional ethics in all happenings so that stake holders are not grieved.  Grievance and Redressal Committee is to deal with the discontent,  dissatisfaction expressed in person or through formal letter complaint.</p>
								<p>Generally Grievant means a student,  parent, staff member, group of students or staff members or combination of any  of these stakeholders of the Institution.</p>
								<h5>Objective :-</h5>
								<p>
								<ul>
								  <li>To  ensure harmonious environment in the campus to all staff members</li>
								  <li>To  provide the equal opportunity and hassle free resort to their grievances</li>
								  <li>To  maintain supervision on all activities of grievance and redressal mechanism</li>
								</ul>
								</p>  
							</div>
							<div class="tab-pane fade" id="function" role="tabpanel" aria-labelledby="profile-tab">
								<ul>
								  <li>To make  awareness on the grievances among faculty and staff community</li>
								  <li>To be a part in  imparting the quality environment by addressing issues of employees</li>
								  <li>To demand  issues/complaints, investigate by committee recommended and document the  activities.</li>
								  <li>To analyze,  comply and forward all received complaints to the concerned departments for  necessary action.</li>
								  <li>To compile and  record documents as per department wise and semester wise, also keep the  information of the parties involved in safe custody</li>
								  <li>To disclose  pending cases and act to resolve it amicably, and notify the parties of their  status</li>
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