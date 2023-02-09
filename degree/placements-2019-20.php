<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/css.php";?>
	<script src="angular/angular.min.js"></script> 
	<style type="text/css">
	table {font-size:12px;}

	.btn-sm {font-size:12px;}
	</style>
	<script>
 var app = angular.module("placement", []);
 app.controller('report', function($scope, $http) {

        $scope.loading=true;
		$scope.selcampus='all';
		$http.get('get_placements.php?action=company').success(function(data) {
		console.log(data);
		$scope.company=data;
		$scope.myform='company';
		$scope.loading = false;	
			 
		});
		
		
		$http.get('get_placements.php?action=collegelist20').success(function(data) {
		console.log(data);
		$scope.collegelist=data;
			 
		});
	
		$scope.get_company_std= function(company,cname){	
		    $scope.report=2;
			$scope.companyname=cname;
			$http.get('get_placements.php?action=companystd&company_id='+company).success(function(data) {
			//console.log(data);
			$scope.companystd=data;
			$scope.loading = false;	
				 
			});
		}
		$scope.get_collegelistall= function(){
				$scope.selcampus='all';
				$http.get('get_placements.php?action=company').success(function(data) {
				console.log(data);
				$scope.company=data;
				$scope.myform='company';
				$scope.loading = false;	
					 
				});
		 
		}
		$scope.get_collegewiselist= function(col_id){
			$scope.loading=true;	
			$scope.selcampus=col_id;
			$scope.campuswise=null;
			$http.get('json/2019-20.json').success(function(data) {
				//console.log(data);
				$scope.totaldata = data;
				
				$scope.campusarray = $scope.totaldata.filter(e=>e.branchid == $scope.selcampus);
				$scope.campuswise = $scope.campusarray[0].submenu;
				//console.log($scope.campusarray[0].submenu);	
				$scope.myform='college_company';
				$scope.loading = false;	
				 
			});
		}
		$scope.get_college_company_std= function(company,cname,colg,colgcode){	
		  // alert(colgcode);
		    $scope.report=2;
			$scope.companyname=cname;
			$http.get('get_placements.php?action=colg_companystd&company_id='+company+'&colg_id='+colg).success(function(data) {
			console.log(data);
			$scope.companystd=data;
			$scope.loading = false;	
				 
			});
		}
		
	

});
</script>
</head>

<body class="sidebar-collapse" ng-app="placement" ng-controller="report">
    <!-- Navbar -->
    <?php include "include/header.php";?>
  	<div class="page-top">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-md-8 align-self-end">
					<div class="title-bg">
					   <h3><a href="index.php" class="text-info">Home</a></h3>
					   <h3><span class="text-warning">Placements</span></h3>
				  </div>
				</div>
			</div>
		</div>		   
	</div>
	
	
	<div class="container">	
	
		
			<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<h6 class="title p-2 m-0" data-background-color="orange">
							<button type="button" class="close white" data-dismiss="modal" aria-hidden="true">
								&times;
							</button>
							{{companyname}}
						</h6>
						<div class="modal-body p-1">
							<table class="table table-responsive table-striped table-bordered table-sm mb-0">
														<thead>
															<tr>
																<th>#</th>
																<th class="text-center">Name</th>
																<th class="text-center">Course</th>
																<th class="text-center">College</th>
															</tr>
														</thead>
														<tbody>
																<tr ng-repeat="x in companystd">
																<td>{{$index+1}}</td>
																<td>{{x.student_name}}</td>
																<td>{{x.course}}</td>
																<td>{{x.college_name}}-{{x.college_code}}</td>
															</tr>														</tbody>
													</table>
						</div>
					</div>
				</div>
			</div>
	
			<div class="row justify-content-center">
    			<div class="col-10">
					<h5 class="title text-center pt-3 pb-3">"Our placement training program is very well-knit into the curriculum. We start from solving real life problems from day-1 at college under the guidance of our professors."</h5>
				</div>
			</div>		
		<div class="m-3 text-center">
		     <a href="#" class="btn btn-info btn-sm" ng-class="selcampus=='all'?'btn btn-primary btn-sm':'btn btn-info btn-sm'" ng-click="get_collegelistall()">All</a>
			<a href="#" ng-click="get_collegewiselist(x.id)" ng-class="selcampus==x.id?'btn btn-primary btn-sm':'btn btn-info btn-sm'" ng-repeat="x in collegelist">{{x.college_code}}</a>
			
		</div>
		
		<div class="m-3" ng-if="myform=='company'">
			<div class="row">
		
				<div class="col-lg-2 col-md-3">
					<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								  <img src="logos/deloitte.png" id="slidecaption" class="img-responsive">
								  
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="#" target="_blank" class="text-dark"> 
									<div class="inner text-center"> 
									  <h3 class="m-0 pt-4"><strong>60</strong></h3><p class="m-0 text-center">Selections</p>
									</div>
								  </a>
							</div>
						</div>
					</div>
					
				</div>
				<div class="col-lg-2 col-md-3">
					<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								  <img src="logos/lti.png" id="slidecaption" class="img-responsive">
								  
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="#" target="_blank" class="text-dark"> 
									<div class="inner text-center"> 
									  <h3 class="m-0 pt-4"><strong>93</strong></h3><p class="m-0 text-center">Selections</p>
									</div>
								  </a>
							</div>
						</div>
					</div>
					
				</div>
				
				<div class="col-lg-2 col-md-3">
					<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								  <img src="logos/infosys.png" id="slidecaption" class="img-responsive">
								  
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="#" target="_blank" class="text-dark"> 
									<div class="inner text-center"> 
									  <h3 class="m-0 pt-4"><strong>375</strong></h3><p class="m-0 text-center">Selections</p>
									</div>
								  </a>
							</div>
						</div>
					</div>
					
				</div>
				
				<div class="col-lg-2 col-md-3">
					<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								  <img src="logos/infosys-bpo.png" id="slidecaption" class="img-responsive">
								  
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="#" target="_blank" class="text-dark"> 
									<div class="inner text-center"> 
									  <h3 class="m-0 pt-4"><strong>184</strong></h3><p class="m-0 text-center">Selections</p>
									</div>
								  </a>
							</div>
						</div>
					</div>
					
				</div>
				<div class="col-lg-2 col-md-3">
					<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								  <img src="logos/genpact.png" id="slidecaption" class="img-responsive">
								  
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="#" class="text-dark"> 
									<div class="inner text-center"> 
									  <h3 class="m-0 pt-4"><strong>110</strong></h3><p class="m-0 text-center">Selections</p>
									</div>
								  </a>
							</div>
						</div>
					</div>
					
				</div>
				
				<div class="col-lg-2 col-md-3">
					<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								  <img src="logos/Cognizant.png" id="slidecaption" class="img-responsive">
								  
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="#" class="text-dark"> 
									<div class="inner text-center"> 
									  <h3 class="m-0 pt-4"><strong>197</strong></h3><p class="m-0 text-center">Selections</p>
									</div>
								  </a>
							</div>
						</div>
					</div>
					
				</div>
				
				<div class="col-lg-2 col-md-3">
					<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								  <img src="logos/wipro.png" id="slidecaption" class="img-responsive">
								  
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="#" class="text-dark"> 
									<div class="inner text-center"> 
									  <h3 class="m-0 pt-4"><strong>672</strong></h3><p class="m-0 text-center">Selections</p>
									</div>
								  </a>
							</div>
						</div>
					</div>
					
				</div>
				
				
				<div class="col-lg-2 col-md-3">
					<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								  <img src="logos/toppr.png" id="slidecaption" class="img-responsive">
								  
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="#" class="text-dark"> 
									<div class="inner text-center"> 
									  <h3 class="m-0 pt-4"><strong>8</strong></h3><p class="m-0 text-center">Selections</p>
									</div>
								  </a>
							</div>
						</div>
					</div>
					
				</div>
				
				
				<div class="col-lg-2 col-md-3">
					<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								  <img src="logos/24-7-ai.jpg" id="slidecaption" class="img-responsive">
								  
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="#" class="text-dark"> 
									<div class="inner text-center"> 
									  <h3 class="m-0 pt-4"><strong>62</strong></h3><p class="m-0 text-center">Selections</p>
									</div>
								  </a>
							</div>
						</div>
					</div>
					
				</div>
				
				
				<div class="col-lg-2 col-md-3">
				<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								  <img src="logos/L-and-T.png" id="slidecaption" class="img-responsive">
								  
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="#" target="_blank" class="text-dark"> 
									<div class="inner text-center"> 
									  <h3 class="m-0 pt-4"><strong>93</strong></h3><p class="m-0 text-center">Selections</p>
									</div>
								  </a>
							</div>
						</div>
					</div>
					</div>
				<div class="col-lg-2 col-md-3">
					<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								  <img src="logos/tcs.png" id="slidecaption" class="img-responsive">
								  
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="#" target="_blank" class="text-dark"> 
									<div class="inner text-center"> 
									  <h3 class="m-0 pt-4"><strong>182</strong></h3><p class="m-0 text-center">Selections</p>
									</div>
								  </a>
							</div>
						</div>
					</div>
					
				</div>
				<div class="col-lg-2 col-md-3">		
				<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								  <img src="logos/concentrix.png" id="slidecaption" class="img-responsive">
								  
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="#" target="_blank" class="text-dark"> 
									<div class="inner text-center"> 
									  <h3 class="m-0 pt-4"><strong>702</strong></h3><p class="m-0 text-center">Selections</p>
									</div>
								  </a>
							</div>
						</div>
					</div>
					</div>
				<div class="col-lg-2 col-md-3">
					<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								  <img src="logos/css-corp.jpg" id="slidecaption" class="img-responsive">
								  
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="#" target="_blank" class="text-dark"> 
									<div class="inner text-center"> 
									  <h3 class="m-0 pt-4"><strong>81</strong></h3><p class="m-0 text-center">Selections</p>
									</div>
								  </a>
							</div>
						</div>
					</div>
					
				</div>
				
				
				<div class="col-lg-2 col-md-3">
					<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								  <img src="logos/ILM.png" id="slidecaption" class="img-responsive">
								  
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="" class="text-dark"> 
									<div class="inner text-center"> 
									  <h3 class="m-0 pt-4"><strong>827</strong></h3><p class="m-0 text-center">Selections</p>
									</div>
								  </a>
							</div>
						</div>
					</div>
					
				</div>
				
				
				<div class="col-lg-2 col-md-3">
					<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								 <img src="logos/visionary.png" id="slidecaption" class="img-responsive">
								  
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="#" target="_blank" class="text-dark"> 
									<div class="inner text-center"> 
									  <h3 class="m-0 pt-4"><strong>27</strong></h3><p class="m-0 text-center">Selections</p>
									</div>
								  </a>
							</div>
						</div>
					</div>
					
				</div>
				
				<div class="col-lg-2 col-md-3">
					<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								  <img src="logos/Hetero-Drugs.png" id="slidecaption" class="img-responsive">
								  
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="#" target="_blank" class="text-dark"> 
									<div class="inner text-center"> 
									  <h3 class="m-0 pt-4"><strong>220</strong></h3><p class="m-0 text-center">Selections</p>
									</div>
								  </a>
							</div>
						</div>
					</div>
					
				</div>
				
				
				<div class="col-lg-2 col-md-3">
					<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								  <img src="logos/IHC.jpg" id="slidecaption" class="img-responsive">
								  
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="#" target="_blank" class="text-dark"> 
									<div class="inner text-center"> 
									  <h3 class="m-0 pt-4"><strong>191</strong></h3><p class="m-0 text-center">Selections</p>
									</div>
								  </a>
							</div>
						</div>
					</div>
					
				</div>
				
				
				<div class="col-lg-2 col-md-3">
					<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								  <img src="logos/divis.png" id="slidecaption" class="img-responsive">
								  
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="#" target="_blank" class="text-dark"> 
									<div class="inner text-center"> 
									  <h3 class="m-0 pt-4"><strong>439</strong></h3><p class="m-0 text-center">Selections</p>
									</div>
								  </a>
							</div>
						</div>
					</div>
					
				</div>
				
				<div class="col-lg-2 col-md-3">
					<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								  <img src="logos/tech-mahindra.png" id="slidecaption" class="img-responsive">
								  
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="#" target="_blank" class="text-dark"> 
									<div class="inner text-center"> 
									  <h3 class="m-0 pt-4"><strong>94</strong></h3><p class="m-0 text-center">Selections</p>
									</div>
								  </a>
							</div>
						</div>
					</div>
					
				</div>
				
				
				<div class="col-lg-2 col-md-3">
					<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								  <img src="logos/mphasis.jpg" id="slidecaption" class="img-responsive">
								  
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="#" target="_blank" class="text-dark"> 
									<div class="inner text-center"> 
									  <h3 class="m-0 pt-4"><strong>542</strong></h3><p class="m-0 text-center">Selections</p>
									</div>
								  </a>
							</div>
						</div>
					</div>
					
				</div>
				
				
				<div class="col-lg-2 col-md-3">
					<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								  <img src="logos/NICE-Education.png" id="slidecaption" class="img-responsive">
								  
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="#" class="text-dark"> 
									<div class="inner text-center"> 
									  <h3 class="m-0 pt-4"><strong>2894</strong></h3><p class="m-0 text-center">Selections</p>
									</div>
								  </a>
							</div>
						</div>
					</div>
					
				</div>
				
				
				
					<div class="col-lg-2 col-md-3">
			<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								  <img src="logos/MYLAS.png" id="slidecaption" class="img-responsive">
								  
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="#" target="_blank" class="text-dark"> 
									<div class="inner text-center"> 
									  <h3 class="m-0 pt-4"><strong>6</strong></h3><p class="m-0 text-center">Selections</p>
									</div>
								  </a>
							</div>
						</div>
					</div>
					</div>
					
					<div class="col-lg-2 col-md-3">
					<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								  <img src="logos/TEKWISSEN.jpg" id="slidecaption" class="img-responsive">
								  
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="#" target="_blank" class="text-dark"> 
									<div class="inner text-center"> 
									  <h3 class="m-0 pt-4"><strong>34</strong></h3><p class="m-0 text-center">Selections</p>
									</div>
								  </a>
							</div>
						</div>
					</div>
					</div>
					<div class="col-lg-2 col-md-3">
					<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								<strong><p>&nbsp;</p>BROADRIDGE</strong> <h2></h2>
								  
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="#" target="_blank" class="text-dark"> 
									<div class="inner text-center"> 
									  <h3 class="m-0 pt-4"><strong>6</strong></h3><p class="m-0 text-center">Selections</p>
									</div>
								  </a>
							</div>
						</div>
					</div>
					</div>
					<div class="col-lg-2 col-md-3">
					<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								 <img src="logos/MAITHRI_CHEMICHALS.jpg" id="slidecaption" class="img-responsive">
								  
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="#" target="_blank" class="text-dark"> 
									<div class="inner text-center"> 
									  <h3 class="m-0 pt-4"><strong>16</strong></h3><p class="m-0 text-center">Selections</p>
									</div>
								  </a>
							</div>
						</div>
					</div>
					</div>
			</div>
		</div>
	
		<div class="m-3" ng-if="myform=='college_company'">
			<div class="row">
		
				<div class="col-lg-2 col-md-3" ng-repeat="x in campuswise">
					<div class="card-flip2">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								  <span ng-if="x.imageurl!=''"><img src="{{x.imageurl}}" id="slidecaption" class="img-responsive"></span>
								  <span ng-if="x.imageurl==''"><br /><br />
								<!-- front content -->
								  <strong>{{x.companyname}}</strong>
								  
								</span>
							</div>
							<div class="back">
								<!-- back content -->
								  <a href="{{x.pdfpath}}" class="text-dark"> 
									<div class="inner text-center" data-toggle="modal" data-target="#myModal22"> 
									  <a href="{{x.pdfpath}}" target="_blank" title="{{x.companyname}}"><h3 class="m-0 pt-4"><strong>{{x.selectcount}}</strong></h3><p class="m-0 text-center">Selections</p></a>
									</div>
								  </a>
							</div>
						</div>
					</div>
					
				</div>
				
				
		
			</div>
		</div>
	</div>
	
	
	
	
	
	<footer class="footer pt-3 pb-3" data-background-color="orange">
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
	 <?php include "include/js.php";?>
</body>
</html>