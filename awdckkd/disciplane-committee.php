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
					   <h3><span class="text-warning">Disciplane-Committee</span></h3>
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
								<a class="nav-link" id="home-tab" data-toggle="tab" href="#functions" role="tab" aria-controls="home" aria-selected="true">Functions</a>
							</li> 
						</ul>
					</div>
					<div class="card-body">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab"> 
								<h5>OBJECTIVE:</h5> 
								<p>Disciplinary Committee maintains discipline, dignity, decorum and rapport of the institute. Controlling the students through rules and regulations and channelization their youth energy into positive and creative direction and promotion of the manners, personality, character and civilization</p>
								<ul>
									<li> To maintain the activities of college joint venture in regards to disciplinary act.</li>
									<li> To uplift the student's potential and to develop them as a balanced citizen in the society.</li>
									<li>The institute is driven with a passion and mission for imparting peaceful, safe and friendly environment.</li>
									<li>To scrutinize and prevent any indisciplinary activities (lack of attendance, unpunctuality, misbehaving with staff, patients or colleague, damage to hospital and college property) and riots.</li>
									<li>To provide a medium through which the committee can monitor and control the discipline of its students.</li> 
								</ul> 
							</div>
							<div class="tab-pane fade" id="functions" role="tabpanel" aria-labelledby="profile-tab">
								<h5>Key functions of the committee</h5>
								<ul>
								  <li>To make the rules and regulations as per the disciplinary requirement.</li>
								  <li> To make the student aware about the discipline.</li>
								  <li>To make the student follow the disciplinary rules.</li>
								  <li>To take disciplinary action against any of the misconduct.</li> 
								  <li>To coordinate with legal cell of People's Group in case of any major indisciplinary activity.</li>
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