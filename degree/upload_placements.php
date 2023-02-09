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


		$http.get('get_placements.php?action=collegelist').success(function(data) {
			//console.log(data);
			$scope.campuslist=data;
			 
		});
		
		$http.get('get_placements.php?action=industrylist').success(function(data) {
		//console.log(data);
		$scope.indwiselist=data;
			 
		});
		
		$scope.getcompany = function(indid){
		//console.log(indid);
			$http.get('get_placements.php?action=companylist&industryid='+indid).success(function(data) {
				//console.log(data);
				$scope.companylist = data;
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
	
	
	<div class="container mt-4">	
	
		
		<form action="http://w.aditya.ac.in/csvmysql/csvmysql.php" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label>Select Campus</label>
						<select ng-model="campusid" name="campusid" class="form-control" required>  
								<option value="">Select Campus</option>  
								  <option ng-repeat="x in campuslist" value="{{x.id}}">{{x.campus_code}}</option>  
							 </select>
					</div>
					<div class="form-group">
						<label>Select Year</label>
						<select ng-model="yearid" name="yearid" class="form-control" required>  
							<option value="">Select Year</option>  
							  <option value="51">2019-20</option>  
						 </select>
					</div>
				<div class="form-group">
					<label>Select Industry</label>
					<select ng-model="industryid" name="industryid" class="form-control" ng-change="getcompany(industryid)" required>  
							<option value="">Select Industry</option>  
							  <option ng-repeat="x in indwiselist" value="{{x.id}}">{{x.industry_name}}</option>  
						 </select>
				</div>
				<div class="form-group">
					<label>Select Company</label>
					<select ng-model="campanyid" name="campanyid" class="form-control" required>  
							<option value="">Select Company</option>  
							  <option ng-repeat="x in companylist" value="{{x.id}}">{{x.company_name}}</option>  
						 </select>
				</div>
				<div class="form-group">
					<label>Choose File</label>
					<input type="file" name="file" required>
				</div>
			
				<input type="submit" class="btn btn-primary" name="Submit" value="Submit">
			</div>

	  </form>
	
		
	</div>
	

	 <?php include "include/js.php";?>
</body>
</html>