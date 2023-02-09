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
					   <h3><span class="text-warning">Student Corner</span></h3>
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
					<div class="card-body">
                        <div class="row">
                            <div class="col-md-4 form-group">
                                    <video width="100%" height="250" controls>
                                    <source src="videos/Hamsalekha.mp4" type="video/mp4">
                                    </video>
                            </div>
                            <div class="col-md-4 form-group">
                                    <video width="100%" height="250" controls>
                                    <source src="videos/Harshavardhan.mp4" type="video/mp4">
                                    </video>
                            </div>
                            <div class="col-md-4 form-group">
                                    <video width="100%" height="250" controls>
                                    <source src="videos/Keerthi.mp4" type="video/mp4">
                                    </video>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                    <video width="100%" height="250" controls>
                                    <source src="videos/Monika.mp4" type="video/mp4">
                                    </video>
                            </div>
                            <div class="col-md-4 form-group">
                                    <video width="100%" height="250" controls>
                                    <source src="videos/Naga Sruthi.mp4" type="video/mp4">
                                    </video>
                            </div>
                            <div class="col-md-4 form-group">
                                    <video width="100%" height="250" controls>
                                    <source src="videos/Nagamani.mp4" type="video/mp4">
                                    </video>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                    <video width="100%" height="250" controls>
                                    <source src="videos/Poorima.mp4" type="video/mp4">
                                    </video>
                            </div>
                            <div class="col-md-4 form-group">
                                    <video width="100%" height="250" controls>
                                    <source src="videos/Sai Koushik.mp4" type="video/mp4">
                                    </video>
                            </div>
                            <div class="col-md-4 form-group">
                                    <video width="100%" height="250" controls>
                                    <source src="videos/Vasudeva.mp4" type="video/mp4">
                                    </video>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                    <video width="100%" height="250" controls>
                                    <source src="videos/VID-20200331-WA0011.mp4" type="video/mp4">
                                    </video>
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