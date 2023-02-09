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
					   <h3><span class="text-warning">CHEMISTRY & LIFE SCIENCE</span></h3>
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
							<a class="nav-link active" id="profile-tab" data-toggle="tab" href="#chelifesci" role="tab" aria-controls="profile" aria-selected="false">About Department</a>
						</li> 
						<li class="nav-item">
							<a class="nav-link " id="home-tab" data-toggle="tab" href="#staff" role="tab" aria-controls="staff" aria-selected="true">Staff</a>
						</li> 
					</ul>
					</div>
					<div class="card-body">
					
					<div class="tab-content" id="myTabContent"> 
						<div class="tab-pane fade show active" id="chelifesci" role="tabpanel" aria-labelledby="profile-tab">
							<!-- <h5>About Department</h5> -->
							 <p>
							 	The mission of the Department of Chemistry and Life Science is to educate students with a firm foundation in the fields of chemistry, life science so that each graduate is a commissioned leader of character who can leverage their understanding of science to implement solutions using appropriate problem-solving skills.
							</p>
							<p> 
								This Course takes the students through the fascinating world of various techniques and technologies used to study the multifaceted aspects of life. The course includes animal and plant sciences, microbiology, biochemistry and molecularbiology all of which enable the students to strengthen their knowledge in respective branches and understand the scope of the subject as an employment opportunity in the fields of labs, pharma companies and a life time of personal growth and service to the nation.
							</p>  
						</div> 
						<div class="tab-pane fade" id="staff" role="tabpanel" aria-labelledby="staff-tab"> 
							<table  class="table table-bordered table-hover table-responsive">
								<thead>
								<tr>
									<th>SNO</th>
									<th>NAME OF THE    EMPLOYEE</th>
									<th>GENDER</th>
									<th>DESIGNATION</th>
									<th>DEPARTMENT</th>
								</tr>
								</thead>  
								<tbody>
								<tr>
									<td>1</td>
									<td>SMT.    B. NAGA VALLI</td>
									<td>F</td>
									<td>Lecturer</td>
									<td>Chemistry    &amp; Life Science</td>
								</tr>
								<tr>
									<td>2</td>
									<td>KUM.    ANUSURI DEVI</td>
									<td>F</td>
									<td>Lecturer</td>
									<td>Chemistry    &amp; Life Science</td>
								</tr>
								<tr>
									<td>3</td>
									<td>SMT.    NEELAPU DURGA DEVI</td>
									<td>F</td>
									<td>Lecturer</td>
									<td>Chemistry    &amp; Life Science</td>
								</tr>
								<tr>
									<td>4</td>
									<td>SRI.    K.VEERABABU</td>
									<td>M</td>
									<td>Lecturer</td>
									<td>Chemistry    &amp; Life Science</td>
								</tr>
								<tr>
									<td>5</td>
									<td>SRI.    M.SUDHEER</td>
									<td>M</td>
									<td>Lecturer</td>
									<td>Chemistry    &amp; Life Science</td>
								</tr>
								<tr>
									<td>6</td>
									<td>SMT.&nbsp; P. KASTURI</td>
									<td>F</td>
									<td>Lecturer</td>
									<td>Chemistry    &amp; Life Science</td>
								</tr>
								<tr>
									<td>7</td>
									<td>SMT.    DONU ANUSHA</td>
									<td>F</td>
									<td>Lecturer</td>
									<td>Chemistry    &amp; Life Science</td>
								</tr>
								<tr>
									<td>8</td>
									<td>SMT.    K.GANGA BHAVANI</td>
									<td>F</td>
									<td>Lecturer</td>
									<td>Chemistry    &amp; Life Science</td>
								</tr>
								<tr>
									<td>9</td>
									<td>KUM.    K.NAVYA</td>
									<td>F</td>
									<td>Lecturer</td>
									<td>Chemistry    &amp; Life Science</td>
								</tr>
								<tr>
									<td>10</td>
									<td>KUM    P.VENKATA LAKSHMI</td>
									<td>F</td>
									<td>Lecturer</td>
									<td>Chemistry    &amp; Life Science</td>
								</tr>
								<tr>
									<td>11</td>
									<td>SMT.    B. ARUNA</td>
									<td>F</td>
									<td>Lecturer</td>
									<td>Chemistry    &amp; Life Science</td>
								</tr>
								<tr>
									<td>12</td>
									<td>SMT.    S RATNAM</td>
									<td>F</td>
									<td>Lecturer</td>
									<td>Chemistry    &amp; Life Science</td>
								</tr>
								<tr>
									<td>13</td>
									<td>SRI    HARI KRISHNA VARMA</td>
									<td>M</td>
									<td>Lecturer</td>
									<td>Chemistry    &amp; Life Science</td>
								</tr>
								</tbody>  
							</table>
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