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
					   <h3><span class="text-warning">COMPUTER SCIENCE</span></h3>
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
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#cmpsci" role="tab" aria-controls="home" aria-selected="true">About Department</a>
						</li> 
					</ul>
					</div>
					<div class="card-body">
					
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="cmpsci" role="tabpanel" aria-labelledby="home-tab">
							 <!-- <h5>About Department</h5> -->
							 <p>
								 The main objective of the department is to provide a forum in which the participants obtain information about the advanced emerging technologies. Department is involved and aiming at the collaboration process from both industry and academics.The Department has dedicated laboratories with latest hardware and software and also has sufficient well qualified and experienced technical and supporting staff. The labs were complemented by the latest software's.
							</p>
							<p> 
								The department is organizing various technical activities, professional activities, workshops, seminars, coding contests and project development activities.
							</p>
							<p> 
								The Department focuses on preparing the students for wide range of IT careers equipping them with unique enriching experience.
							</p>
							<p> 
								Not only in Computer Science we are exposing them to a broad spectrum of subjects and disciplines like Mathematics, Physics, Chemistry, Environmental Sciences and Management studies in addition to extensive training in Language and Communication Skills. The creative, critical, analytical and communicative faculties of the students are sharpened and fine-tuned.
							</p> 
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