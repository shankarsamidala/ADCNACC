<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Aditya Degree Colleges</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css" />    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/css/mystyles.css" rel="stylesheet" />
	<link href="./assets/css/flip.css" rel="stylesheet" />
	<link href="./assets/css/hover-min.css" rel="stylesheet" />
	<link rel="stylesheet"  href="./assets/css/ekko-lightbox.min.css">
	<link rel="stylesheet"  href="./assets/css/animate.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
	<script src="angular/angular.min.js" type="text/javascript"></script>
	<script type="text/javascript">
function check_mobile()
{
 
     var phoneNo = document.getElementById("user_name");
 
    if (phoneNo.value == "" || phoneNo.value == null) {
            alert("Please enter your Mobile No.");
			phoneNo.value='';
			phoneNo.focus();
            return false;
        }
		
        if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
            alert("Mobile No. is not valid, Please Enter 10 Digit Mobile No.");
			phoneNo.value='';
			 phoneNo.focus();
            return false;
        }
		
		var password = document.getElementById("pass_word");
		 if (password.value == "" || password.value == null) {
            alert("Please enter your password.");
			password.value='';
			password.focus();
            return false;
        }
  return true;
}
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49980823-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript">
var app = angular.module("degree", []);

 app.controller('projects', function($scope, $http, $filter) {
 	$scope.coursefolder = '';
	$scope.studentlist = [];
	$scope.loadprojects = function(course){  
           $http.get("getData.php?action=getstudentlist&course="+course)  
           .success(function(data){ 
		   		console.log(data); 
				$scope.headers = {"SN":"S.No", "SUC":"SUC Code", "Programme":"Programme Name", "ProCode":"Program Code", "Student":"Name of the Student", "Project":"Project Name", "Document":"Link to the relevant document"};
				$scope.coursefolder = course;
				$(function (data) {
					$('#'+course).DataTable({
						"paging": true,
						"lengthChange": true,
						"searching": true,
						"ordering": true,
						"info": true,
						"autoWidth": false,
						"responsive": false,
						"pageLength": 40,
						// dom: 'Bfrtip',
						// buttons: [
						// 	'copy', 'csv', 'print'
						// ],
					});
				});
				$scope.studentlist = data.filter(e=>e.Student!=null);
				
           })  
      } 

 });
</script>
