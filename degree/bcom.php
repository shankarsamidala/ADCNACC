<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/css.php";?>
</head>

	<body class="sidebar-collapse" ng-app="degree" ng-controller="projects">
    <!-- Navbar -->
    <?php include "include/header.php";?>
  	<div class="page-top">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-md-8 align-self-end">
					<div class="title-bg">
					   <h3><a href="index.php" class="text-info">Home</a></h3>
					   <h3><span class="text-warning">B.Com : Computers Applications</span></h3>
					</div>
				</div>
			</div>
		</div>			 
	</div>
	<div class="page-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<div class="card card-warning2">
					<div class="card-header card-page-warning">
						<h4 class="title">B.Com : Computers Applications</h4>
					</div>
					<div class="card-body std-info">
						<p><strong>BCom</strong>&nbsp;or Bachelor of  Commerce is a three-year undergraduate course. In the B.Com course,  candidates are taught core subjects related to commerce and finance. The  program is usually spread over six semesters during which the student is taught  topics like financial accounting, corporate tax, economics, Business Statistics,  auditing, business management, etc.</p>
<p>B.Com is the best option for students who  want to make a career in commerce, accounting, finance, banking and insurance.  B.Com is also ideal for those who wish to pursue <strong>Chartered Accountancy</strong>, Cost Accounting and <strong>Company Secretaryship</strong>.</p>
<p>After completing  B.Com, students can also pursue career in management, teaching, advertising,  law, journalism, mass communication, law, design, etc. The average starting  salary of a B.Com graduate is Rs 3 lakh and upwards.</p>

		<h4 class="text-warning">COURSES AFTER B.COM</h4>
		<ul>
		  <li>Chartered       Accountant (CA)</li>
		  <li>Masters of       Commerce (M.Com)</li>
		  <li>Masters of       Business Administration (MBA in Finance)</li>
		  <li>Certified       Management Accountant (CMA)</li>
		  <li>Certified Public       Accounting (CPA)</li>
		  <li>Association of       Chartered Certified Accountants (ACCA)</li>
		  <li>Business       Accounting and Taxation (BAT)</li>
		  <li>BAT Course </li>
		</ul>
	
		<h4 class="text-warning">CAREER OPTIONS AFTER  BCOM</h4>
		<ul>
		  <li>Accountant</li>
		  <li>Tax Consultant</li>
		  <li>Human Resource</li>
		  <li>Banker</li>
		  <li>BPO / KPO</li>
		  <li>Auditor</li>
		  <li>Stock Broker</li>
		  <li>Lecturer</li>
		  <li>Export Import       Manager</li>
		  <li>Finance       Consultant</li>
		  <li>Insurance       Consultant</li>
		  <li>CA / Cost &amp;       Work Accountant / Company Secretary</li>
		  <li>Event Manager</li>
		  <li>Travel Agent /       Travel Manager</li>
		  <li>Government Jobs</li>
		  <li>Lawyer</li>
		  <li>Market       Researcher</li>
		  <li>Entrepreneur</li>
		  <li>Hotel Management</li>
		  <li>Economist</li>
		  <li>Administrative       Job</li>
		</ul>
	

				</div>
				</div>
			</div>
			<div class="col-md-8 content-pt" ng-init="loadprojects('bcom')">
				<?php include "include/projects.php";?>
			</div>
		</div>
		</div>		
				<?php include "include/footer.php";?>
    </div>
	 <?php include "include/js.php";?>
</body>
</html>