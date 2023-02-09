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
					   <h3><span class="text-warning">Exam Time Table</span></h3>
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
					<div class="card-header"></div>
					<div class="card-body">
															<table class="table table-bordered"> 
																									<thead> 
								<tr> 
									<th>S.No</th>
									<th>Exam Name</th>
									<th>Download</th>
								</tr>
							</thead>
							<tbody> 
								<tr> 
									<td>1</td>
									<td>II SEM TIME TABLE </td>
									<td><a href="assets/II_SEM_TIME_TABLE_26-09-2022.pdf" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
								</tr>
								<tr> 
									<td>2</td>
									<td>IV SEM TIME TABLE (R) </td>
									<td><a href="assets/IV_SEM_TIME_TABLE_R_SEP_2022.pdf" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
								</tr>
								<tr> 
																		<td>3</td>
																		<td>VI sem JULY 2022</td>
																		<td><a href="assets/VI_sem_JULY_2022.pdf" class="btn btn-info btn-sm" target="_blank">VIEW</a> </td>
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