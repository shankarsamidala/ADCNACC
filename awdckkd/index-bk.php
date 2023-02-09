<!DOCTYPE html>
<html lang="en">

<head>
     <?php include "include/css.php";?>
	 <script type="text/javascript">

			function getAlbums(param){
				//Makes An AJAX Request On Load which retrieves the albums
				$.ajax({
			        type: 'post',
			        url: 'assets/scripts/loadGallery.php',
			        data: {
			           extra_params: param
			        },
			        success: function( data ) {
			        	//Hide The Spinner
			            document.getElementById("spinner").style.display = "none";
			            //Put the Data in the Div
			            document.getElementById("galleryDiv").innerHTML = data;
			        }
			    });
			}
		</script>
</head>
<?php 
		/* PAGINATION
			Proccess and Pagination 
			 - B: before
			 - A: after
			 They contain the photo_id of the image that was loaded before/after it, for pagination	
		*/
		
		
		if(isset($_GET['b']))
		{
			$quer = "&before=".$_GET['b'];
		}
		else if(isset($_GET['a']))
		{
			$quer = "&after=".$_GET['a'];
		}
		else{
			$quer = ""; //If It's blank it loads from the start of the album
		}
		//if they've already been navigating
	?>
<body class="sidebar-collapse" onLoad="getAlbums('<?php echo $quer; ?>')">
    <!-- Navbar -->
	<nav class="navbar navbar-expand-lg bg-info fixed-top navbar-transparent" color-on-scroll="200">
   	 <?php include "include/header.php";?>
	</nav> 
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header clear-filter">
            <div class="page-header-image wow fadeIn">	
            </div>
				<div class="banner-quat hidden-xs">
						
					<h3 class="text-white">
					<div class="cap-icon">
						<i class="fa fa-graduation-cap"></i>
					</div>
					"Aditya Degree Colleges is a part of the prestigious Aditya Educational Group"</h3>
				</div>
        </div>
        <div class="main">
			
			<div class="aboutus">
				<div class="container-fluid">				
								<div class="row justify-content-md-center align-items-end">
									<div class="col-lg-4 col-md-6 slidemargin wow fadeInLeft">
										<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner" role="listbox">
												<div class="carousel-item active">
													<img class="d-block img-fluid img-thumbnail img-raised" src="assets/img/slides/sl1.jpg" alt="First slide">
												</div>
												<div class="carousel-item">
													<img class="d-block img-fluid img-thumbnail img-raised" src="assets/img/slides/sl3.jpg" alt="Second slide">
												</div>
												<div class="carousel-item">
													<img class="d-block img-fluid img-thumbnail img-raised" src="assets/img/slides/sl2.jpg" alt="Second slide">
												</div>
											</div>
											<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
												<i class="now-ui-icons arrows-1_minimal-left"></i>
											</a>
											<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
												<i class="now-ui-icons arrows-1_minimal-right"></i>
											</a>
										</div>
										<!--<img src="assets/img/aboutus.jpg" alt="Thumbnail Image" class="img-fluid img-thumbnail img-raised">-->
									</div>
									<div class="col-md-4 col-md-6">
										<h2 class="title text-primary wow slideInUp">Welcome to Aditya</h2>
										<p class="title text-left text-white wow fadeInRight">"Fulfilled the hopes and aspirations of many graduates"</p>
										<p class="text-left text-white wow fadeInRight">Aditya Degree colleges are the precious gifts presented to the twin Godavari Districts by ADITYA. Educational group ADITYA Degree College which was established in 1998 in Kakinada.</p>
										<a href="about.php" class="btn btn-primary hvr-bounce-to-right-or wow slideInDown">Read More...</a>
								<!--<p class="text-white">Needless to say, in the present scenario girls excel more than boys in education and they give tough competition to boys. Owing to their diffidence and inhibition, girls find difficulty in expressing their doubts in a classroom of Co-ed College. Moreover, parents have many objections in sending their daughters to a co-ed college. Realizing this, ADITYA successfully leads Degree colleges for girls to prove their talents in curricular, co-curricular and extra-curricular activities. ADITYA started P.G College also for Women to encourage them for higher education.</p>-->
									</div>
								</div>
					</div>			
			</div>
			<div class="vission-mission">
					<div class="container">
						<div class="row">
							<div class="col-md-4 wow fadeInLeft">
								<h3 class="title text-white">VISION</h3>
								<p class="text-white">To provide inclusive education with innovative methods and strenuous efforts for inculcating human values, professionalism and scientific instillation in the realm of Degree Education to all sections of students irrespective of race, region and religion with special focus to stand independently and to emerge as centre for Research and Development.</p>
							</div>
							<div class="col-md-4 wow fadeInUp"><img src="assets/img/v-and-m.png" class="img-fluid"></div>
							<div class="col-md-4 wow fadeInRight">
								<h3 class="title text-white">MISSION</h3>
								<div class="list-type5 text-white">
									<ol>
									<li> To provide ample scope for multifaceted development of local youth.</li>
									<li>To provide quality higher education to student community.</li>
									<li>To Recruit Highly Qualified and Experienced Faculty to provide Quality Education.</li>
									</ol>
								</div>
							</div>
						</div>		
					</div>
				</div>
			
					
					<div class="section section-team text-center">
						<div class="container">
							<h2 class="title text-info">Highlights</h2><br />
							<div class="team">
								<div class="row">
									<div class="col-md-4 wow fadeInLeft" data-wow-delay=".1s">
										<div class="team-player card">
											<div class="header">
											</div>
											<img src="assets/img/faculty.png" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
											<div class="card-body">	
												<h4 class="title text-info">Faculty</h4>
												<p class="description">ADITYA proudly boasts of its highly qualified, experienced, dedicated and committed faculty which plays a significant for people to be able to follow them outside the site.</p>
												<a href="../degreecolleges/faculty.php" class="btn btn-info hvr-bounce-to-right">Read more...</a>
											</div>	
										</div>
									</div>
									<div class="col-md-4 wow fadeIn" data-wow-delay=".3s">
										<div class="team-player card">
											<div class="header0">
											</div>
											<img src="assets/img/library.png" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
											<div class="card-body">
												<h4 class="title text-primary">Library</h4>
												<p class="description">Libraries are considered to be the sources of the dissemination of knowledge and information.The Library at Aditya for people to be able to follow them outside the site.</p>
												<a href="library.php" class="btn btn-primary hvr-bounce-to-right-or">Read more...</a>
											</div>	
										</div>
									</div>
									<div class="col-md-4 wow fadeInRight" data-wow-delay=".3s">
										<div class="team-player card">
											<div class="header">
											</div>
											<img src="assets/img/hotel.png" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
											<div class="card-body">	
												<h4 class="title text-info">Hostels</h4>
												<p class="description">The hostels at aditya are provided with the state-of-the art infrastructural facilities to create such an excellent for people to be able to follow them outside the site.</p>
												<a href="../degreecolleges/hostels.php" class="btn btn-info hvr-bounce-to-right">Read more...</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
        		</div>
				
				
				<img src="assets/img/placements.jpg" width="100%">
				
				<div class="section std-info">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-lg-4 wow slideInLeft">
								<div class="card acc-body">
								<div class="text-center">
									<img src="assets/img/courses.png" /><br>
									<h3 class="title text-info">Courses <span class="text-primary">Offered</span></h3>
								</div>	
								<div id="accordion" class="accordion">
										<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
												Science And Computer
										</div>
										<div id="collapseOne" class="card-block collapse">
											<li>Maths, Electronics, Computer Science</li>
											<li>Maths, Physics, Computer Science</li>
											<li>Maths, Statistics, Computer Science</li>
											<li>Maths, Physics, Chemistry</li>
										</div>
										<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											  BIO Science Courses 
										</div>
										<div id="collapseTwo" class="card-block collapse">
											<li>Biotechnology, Biochemistry, Chemistry</li>
											<li>Microbiology, Biochemistry, Chemistry</li>
											<li>Food Technology</li>
											<li>Forensic Science</li>
										</div>
										<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
											  Professional Courses 
										</div>
										<div id="collapseFour" class="card-block collapse">
											<li>B.Com : Computers Applicationsr</li>
									   		<li>BBA : Bachelor of Bussiness Administration</li>
									    	<li>BBA+ an integrated program with TISS Certification</li>
									   		<li>BCA : Bachelor of Computer Application</li>
											<li>B.Sc. ANIMATION</li>
											<li>BHM : Bachelor of Hotel Management</li>
										</div>
										<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
											  PG Courses  
										</div>
										<div id="collapseFive" class="card-block collapse">
											<li>M.Sc : Organic Chemistry</li>
                                        	<li>M.Sc : Analytical Chemistry</li>
                                        	<li>M.Sc : Bio Chemistry</li>
											<li>M.Sc : Microbiology</li>
										</div>
								</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 wow slideInUp">
								<div class="card" data-background-color="orangegray">
									<form class="card-body" action="//b.aditya.ac.in/analysis/website_studentlogin_code.php" method="post" name="frmDefault" onSubmit="return check_mobile()">
										<div class="text-center">
											<img src="assets/img/logo.png" /><br>
											<h3 class="title">Student Login</h3>
										</div>	
										<div class="input-group input-lg"> <span class="input-group-addon"> <i class="now-ui-icons users_single-02"></i> </span>
											<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Mobile No...">
										</div>
										<div class="input-group input-lg"> <span class="input-group-addon"> <i class="now-ui-icons objects_key-25"></i> </span>
											<input type="password" name="pass_word" id="pass_word" class="form-control" placeholder="Password...">
										</div>
										<div class="text-center">
											<input type="submit" value="Log in" name="submit" class="btn btn-neutral btn-block btn-round btn-lg">
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-12 col-lg-4 wow slideInRight">
								<div class="card acc-body">
									<div class="text-center">
										<img src="assets/img/news.png" /><br>
										<h3 class="title text-info">Latest <span class="text-primary">News</span></h3>
									</div>
									<ol class="events-list">
									<?php include "../degreecolleges/include/news.php";?>
									</ol>
								</div>
							</div>	 
					</div>
				</div>					
            </div>
			
			<span class="anchor" id="gallery"></span> 
			<div class="content-pt text-center">
				<div class="container">
					<h2 class="title text-info">Gallery</h2>
					<div class="card card-warning">
					<div class="card-body">
						<div id="galleryDiv">
							<div class="row justify-content-center">
									<div class="col-sm-4" id="spinner">
										<h4 class="loader" ><i class="fa fa-spinner fa-pulse fa-fw"></i> Loading Albums...</h4>
									</div>
							</div> <!--End Row -->
				
							
						</div>
					</div>
				</div>
				</div>
			</div>							
			
			
		</div>	
        <footer class="footer" data-background-color="orange">
            <div class="container">
				<!--<nav>
                    <ul>
                        <li>
                            <a href="http://aditya.ac.in/degreelibrary/" title="Library" target="_blank">
                                Library
                            </a>
                        </li>
                        <li>
                            <a href="index.php#gallery">
                                Gallery
                            </a>
                        </li>
                        <li>
                            <a href="downloads.php" title="Downloads">
                                Downloads
                            </a>
                        </li>
                        <li>
                            <a href="contact.php">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </nav>-->
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed by
                    <a href="http://aditya.ac.in/" target="_blank">IT Division</a>.
                </div>
            </div>
        </footer>
    </div>
</div>	
	 <?php include "include/js.php";?>
</body>
</html>