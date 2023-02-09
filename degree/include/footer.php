<img src="assets/img/placements.jpg" width="100%">
				
				<div class="section std-info">
					<div class="container">
						<div class="row justify-content-center">
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
											<!--<li><a href="mpc.php">B.Sc : Maths, Physics, Chemistry</a></li>-->
											<li><a href="mpcs.php">B.Sc : Maths, Physics, Computer Science</a></li>
											<li><a href="mecs.php">B.Sc : Maths, Electronics, Computer Science</a></li>
											<li><a href="mscs.php">B.Sc : Maths, Statistics, Computer Science</a></li>
											<li><a href="mccs.php">B.Sc : Maths, Chemistry, Computer Science</a></li>
											<li><a href="datascience.php">B.Sc : Data Science, Statistics, Computer Science</a></li>
											<li><a href="ai-robotics.php">B.Sc : Maths, Computer Science, Artificial Intelligence & Robotics</a></li>
											<li><a href="forensic.php">B.Sc : Forensic Science</a></li>
										</div>
										<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											  BIO Science Courses 
										</div>
										<div id="collapseTwo" class="card-block collapse">
											<!--<li><a href="bbc.php">B.Sc : Biotechnology, Biochemistry, Chemistry</a></li>
											<li><a href="bmc.php">B.Sc : Biotechnology, Microbiology, Chemistry</a></li>-->
											<li><a href="mbc.php">B.Sc : Microbiology, Biochemistry , Chemistry</a></li>
										</div>
										<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
											  Professional Courses 
										</div>
										<div id="collapseFour" class="card-block collapse">
											<li><a href="bcom.php">B.Com : Computers Applications</a></li>
											<!--<li><a href="hotel-management.php">B.Sc : Hotel Management</a></li>-->
											<li><a href="digital-marketing.php">BBA : DIGITAL MARKETING</a></li>
											<li><a href="bba.php">BBA    : Bachelor of Business Administration</a></li>
											<li><a href="bba-plus.php">BBA+ : An Integrated Program with TISS Certification</a></li>
											<li><a href="bca.php">BCA    : Bachelor of Computer Applications </a></li>
											<li><a href="animation.php">B.Sc    : Animation</a></li>
										</div>
										<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
											  PG Courses  
										</div>
										<div id="collapseFive" class="card-block collapse">
											<li><a href="organic-chemistry.php">M.Sc : Organic Chemistry</a></li>
											<li><a href="analytical-chemistry.php">M.Sc : Analytical Chemistry</a></li>
											<li><a href="microbiology.php">M.Sc : Microbiology</a></li>
											<li><a href="bio-chemistry.php">M.Sc : Bio-chemistry</a></li>
											<!--<li><a href="mba.php">MBA : Master of Business Administration</a></li>
											<li><a href="mca.php">MCA : Master of Computer Applications</a></li>-->
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
							<!--<div class="col-md-12 col-lg-4 wow slideInRight">
								<div class="card acc-body">
									<div class="text-center">
										<img src="assets/img/news.png" /><br>
										<h3 class="title text-info">Latest <span class="text-primary">News</span></h3>
									</div>
									<ol class="events-list">
									 <?php /*?><?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "Boss@8055";
$dbname = "aditya_blog17";

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);


	 $sql = "SELECT * FROM wp_posts,wp_users WHERE wp_posts.post_author=wp_users.ID and post_type='post' AND post_status='publish' and post_author in (25,64) ORDER BY wp_posts.ID DESC LIMIT 4";
	$result = mysqli_query($conn, $sql);
	$resultcheck = mysqli_num_rows($result);
	
	 while ($row = mysqli_fetch_array($result)){ ?>

		<li><a href="<?php echo $row['guid']; ?>"><?php echo $row['post_title']; ?></a><span><?php echo $row['user_login']; ?></span></li>

	<?php }
	
?>		<?php */?>							</ol>
								</div>
							</div>-->	 
					</div>
				</div>					
            </div>
		</div>	
        <footer class="footer" data-background-color="orange">
            <div class="container">
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed by
                    <a href="http://aditya.ac.in/" target="_blank">IT Division</a>.
                </div>
            </div>
        </footer>