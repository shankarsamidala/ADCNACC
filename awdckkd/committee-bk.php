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
						<table class="table table-bordered"> 
								<thead> 
									<tr> 
										<th>S.No</th>
										<th>Committee</th>
										<th>View</th>
									</tr>
								</thead>
								<tbody> 
									<tr> 
										<td>1</td>
										<td>Grievance & Redressal Committee</td>
										<td><a href="grievance.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
									</tr> 
									<tr> 
										<td>2</td>
										<td>Social welfare Cell</td>
										<td><a href="social-welfare-cell.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
									</tr>
									<tr> 
										<td>3</td>
										<td>Anti-Ragging</td>
										<td><a href="anti-ragging.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
									</tr> 
									<tr> 
										<td>4</td>
										<td>Admission</td>
										<td><a href="admission-committee.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
									</tr>
									<tr> 
										<td>5</td>
										<td>Internal Complaint</td>
										<td><a href="internal-complaint.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
									</tr>
									<tr> 
										<td>6</td>
										<td>Placement and Career</td>
										<td><a href="placement-and-career.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
									</tr>
									<tr> 
										<td>7</td>
										<td>Alumni Coordination cell</td>
										<td><a href="alumni-coordination-cell.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
									</tr>
									<tr> 
										<td>8</td>
										<td>Campus Maintenance</td>
										<td><a href="campus-maintenance.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
									</tr>
									<tr> 
										<td>9</td>
										<td>Central Library</td>
										<td><a href="central-library.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
									</tr>
									<tr> 
										<td>10</td>
										<td>College Time Table</td>
										<td><a href="college-time-table.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
									</tr>
									<tr> 
										<td>11</td>
										<td>Cultural</td>
										<td><a href="cultural.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
									</tr>
									<tr> 
										<td>12</td>
										<td>Examination Cell</td>
										<td><a href="examination-cell.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
									</tr>
									<tr> 
										<td>13</td>
										<td>National Service Scheme</td>
										<td><a href="national-service-scheme.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
									</tr>
									<tr> 
										<td>14</td>
										<td>Press-Media & Publicity Cell</td>
										<td><a href="press-media-and-publicity-cell.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
									</tr>
									<tr> 
										<td>15</td>
										<td>Sports and Games</td>
										<td><a href="sports-and-games.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
									</tr>
									<tr> 
										<td>16</td>
										<td>Student Association Coordination Cell</td>
										<td><a href="student-association-coordination-cell.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
									</tr>
									<tr> 
										<td>17</td>
										<td>Unnath Bharat Abhiyan (2.0)</td>
										<td><a href="unnath-bharat-abhiyan-2.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
									</tr>
									<tr> 
										<td>18</td>
										<td>Website Development & Maintenance</td>
										<td><a href="website-development-and-maintenance.php" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
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