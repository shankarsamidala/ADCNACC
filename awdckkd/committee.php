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
					   <h3><span class="text-warning">Committees</span></h3>
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
						<h4 class="title text-warning">Committees</h4>
					</div>
					<div class="card-body">
						<h5>College Committee</h5>
						<table class="table table-bordered"> 
							<thead> 
								<tr> 
									<th>S.No</th>
									<th>Committee</th>
									<th>Co-ordinator Name</th>
									<th>View</th>
								</tr>
							</thead>
							<tbody> 
								<tr> 
									<td>1</td>
									<td>Admission</td>
									<td>SMT. A. NEERAJA</td>
									<td><a href="admission-committee.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
								</tr>
								<tr> 
									<td>2</td>
									<td>College Academic</td>
									<td>SMT. K.KARUNA</td>
									<td><a href="college-academic.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
								</tr>
								<tr> 
									<td>3</td>
									<td>Anti-Ragging</td>
									<td>SMT B.K. VIJAYA LAKHSMI</td>
									<td><a href="anti-ragging.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
								</tr> 
								<tr> 
									<td>4</td>
									<td>Grievance & Redressal Committee</td>
									<td>KUM G. SAI NAGA DEVI</td>
									<td><a href="grievance.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
								</tr> 
								<tr> 
									<td>5</td>
									<td>Social welfare Cell</td>
									<td>SMT ARUNA KUMARI</td>
									<td><a href="social-welfare-cell.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
								</tr>
								<tr> 
									<td>6</td>
									<td>Internal Complaint</td>
									<td>SRI P.V..S.V PRASAD</td>
									<td><a href="internal-complaint.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
								</tr>
								<tr> 
									<td>7</td>
									<td>Alumni Committee </td>
									<td>SMT T. BRAMARAMBICA</td>
									<td><a href="alumni-coordination-cell.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
								</tr>
								<tr> 
									<td>8</td>
									<td>Library Advisory Committee</td>
									<td>SRI K.SURYA NARAYANA</td>
									<td><a href="central-library.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
								</tr>
								<tr> 
									<td>9</td>
									<td>Campus & Infrastructure </td>
									<td>SRI U . BALA SUBHARAMYAM</td>
									<td><a href="campus-maintenance.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
								</tr>
							</tbody>
						</table>

						<h5>Academic Committee</h5>
						<table class="table table-bordered"> 
							<thead> 
								<tr> 
									<th>S.No</th>
									<th>Committee</th>
									<th>Co-ordinator Name</th>
									<th>View</th>
								</tr>
							</thead>
							<tbody>
								<tr> 
									<td>1</td>
									<td>Time Table and Attendance Committee</td>
									<td>SMT. S. RATNAM</td>
									<td><a href="college-time-table.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
								</tr>
								<tr> 
									<td>2</td>
									<td>Games and Sports Committee  </td>
									<td>SMT. P. SATYAVATHI</td>
									<td><a href="sports-and-games.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
								</tr>
								<tr> 
									<td>3</td>
									<td>Disciplane Committee  </td>
									<td>SRI G.S.N MURTHY</td>
									<td><a href="disciplane-committee.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
								</tr>
								<tr> 
									<td>4</td>
									<td>Examination Cell</td>
									<td>SRI U. BALA SUBHARAMYAM</td>
									<td><a href="examination-cell.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
								</tr>
							</tbody>
						</table>

						<h5>Service Committee</h5>
						<table class="table table-bordered"> 
							<thead> 
								<tr> 
									<th>S.No</th>
									<th>Committee</th>
									<th>Co-ordinator Name</th>
									<th>View</th>
								</tr>
							</thead>
							<tbody> 
								<tr> 
									<td>1</td>
									<td>NSS-(National Service Scheme) Committee</td>
									<td>KUM N. HEMA SRI</td>
									<td><a href="national-service-scheme.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
								</tr>
								<tr> 
									<td>2</td>
									<td>Unnath Bharat Abhiyan </td>
									<td>SMT.P.B.T.S SUREKHA DEVI</td>
									<td><a href="unnath-bharat-abhiyan-2.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
								</tr>
								<tr> 
									<td>3</td>
									<td>Career Guidance &amp; Placement Service Cell Committee</td>
									<td>KUM P. SHARMILA</td>
									<td><a href="placement-and-career.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
								</tr>
								<tr> 
									<td>4</td>
									<td>Cultural Committee</td>
									<td>KUM. K. SAI SUNEESHA</td>
									<td><a href="cultural.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
								</tr>
								<tr> 
									<td>5</td>
									<td>Website Development & Maintenance</td>
									<td>SRI K.V.K R VAMSI</td>
									<td><a href="website-development-and-maintenance.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
								</tr>
								<tr> 
									<td>6</td>
									<td>Student Association Coordination Cell</td>
									<td>SMT. M. LAKSHMI</td>
									<td><a href="student-association-coordination-cell.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
								</tr>
								<tr> 
									<td>7</td>
									<td>Press-Media Cell</td>
									<td>SMT. GOLLAPALLI DEVI</td>
									<td><a href="press-media-and-publicity-cell.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
								</tr>
							</tbody>
						</table>  
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