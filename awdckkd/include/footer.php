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
											<li><a href="mpc.php">B.Sc : Maths, Physics, Chemistry</a></li>
											<li><a href="mpcs.php">B.Sc : Maths, Physics, Computer Science</a></li>
											<li><a href="mecs.php">B.Sc : Maths, Electronics, Computer Science</a></li>
											<li><a href="mscs.php">B.Sc : Maths, Statistics, Computer Science</a></li>
											<li><a href="datascience.php">B.Sc : Data Science, Statistics, Computer Science</a></li>
											<li><a href="ai-robotics.php">B.Sc : Maths, Physics, Artificial Intelligence & Robotics</a></li>
										</div>
										<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											  BIO Science Courses 
										</div>
										<div id="collapseTwo" class="card-block collapse">
											<li><a href="bbc.php">B.Sc : Biotechnology, Biochemistry, Chemistry</a></li>
											<li><a href="mbc.php">B.Sc : Microbiology, Biochemistry , Chemistry</a></li>
										</div>
										<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
											  Professional Courses 
										</div>
										<div id="collapseFour" class="card-block collapse">
											<li><a href="bcom.php">B.Com : Computers Applications</a></li>
											<li><a href="digital-marketing.php">BBA : DIGITAL MARKETING</a></li>
											<li><a href="bba.php">BBA    : Bachelor of Business Administration</a></li>
											<li><a href="bba-plus.php">BBA+ : An Integrated Program with TISS Certification</a></li>
											<li><a href="bca.php">BCA    : Bachelor of Computer Applications </a></li>
										</div>
										<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
											  PG Courses  
										</div>
										<div id="collapseFive" class="card-block collapse">
											<li><a href="organic-chemistry.php">M.Sc : Organic Chemistry</a></li>
											<li><a href="analytical-chemistry.php">M.Sc : Analytical Chemistry</a></li>
											<li>M.Sc : Microbiology</li>
											<li><a href="bio-chemistry.php">M.Sc : Bio-chemistry</a></li>
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
	
	for($i=0; $i< $num_rows; $i++){ 
	
	$blog_date = mysql_result($query_result, $i, "post_date");
	$blog_title = mysql_result($query_result, $i, "post_title");
	$blog_author = mysql_result($query_result, $i, "display_name");
	$blog_content = mysql_result($query_result, $i, "post_content");
	$blog_permalink = mysql_result($query_result, $i, "guid");
	
	$blog_date = strtotime($blog_date);
	$blog_date = strftime("%b %e", $blog_date);
	$blog_date=date('M d Y', strtotime($blog_date));
	
	?>
	<li><a href="<?php echo $blog_permalink; ?>" target="_blank"><?php echo substr($blog_title, 0, 25); ?>...</a> <span><?php echo $blog_date; ?></span> &nbsp; <span><?php echo $blog_author; ?></span>
            </li>
            <?php
	}
	?><?php */?>
									</ol>
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