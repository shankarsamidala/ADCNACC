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
					   <h3><span class="text-warning">College Academic</span></h3>
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
							<li class="nav-item">
								<a class="nav-link" id="home-tab" data-toggle="tab" href="#nonacademic" role="tab" aria-controls="home" aria-selected="true">NON-Academic</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab"> 
								<h5>OBJECTIVE:</h5> 
								<ul>
									<li> To stimulate the Academic Environment towards Quality teaching, learning and evaluate in the institution.</li>
									<li> To encourage self-evaluation, accountability &amp; innovation education.</li>
									<li>To arrange for periodic assessment of academic programmes, non-education programmes and projects.</li>
									<li>Will oversee the better co-ordination between various department &amp; committees regarding academic concerns.</li>
									<li> Will look into the problems / difficulties of failed students &amp; design additional assistance</li> 
								</ul> 
							</div>
							<div class="tab-pane fade" id="functions" role="tabpanel" aria-labelledby="profile-tab">
								<h5>Functions Of Committee</h5>
								<ul>
								  <li> Academic Committee will design Curriculum for all courses</li>
								  <li> Committee will verify the schedules &amp; protocol of all the internal assessment exams.</li>
								  <li> Committee will monitor the attendance &amp; progress of the students.</li>
								  <li> Committee will conduct periodic academic audit.</li> 
								</ul>  
							</div>
							<div class="tab-pane fade" id="nonacademic" role="tabpanel" aria-labelledby="profile-tab">
								<h5>NON-Academic Committee</h5>
								<ul>
								  <li> To conduct various Sports &amp; Cultural events, CMEs…</li>
								  <li> To organize Educational Trips, Medical Camps at remote areas &amp; to co-ordinate with NCC Programme etc.</li>  
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