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
					   <h3><span class="text-warning">Staff</span></h3>
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
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#teaching" role="tab" aria-controls="home" aria-selected="true">Teaching Staff</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#supporting" role="tab" aria-controls="profile" aria-selected="false">Supporting Staff</a>
						</li>
					</ul>
					</div>
					<div class="card-body">
					
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="teaching" role="tabpanel" aria-labelledby="home-tab">
							
							<h5>COMPUTER SCIENCE</h5>
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
								<td>Dr.    SHAHID ALI</td>
								<td>M</td>
								<td>PRINCIPAL</td>
								<td>Computer    Science</td>
							  </tr>
							  <tr>
								<td>2</td>
								<td>SMT    K.KARUNA</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Computer    Science</td>
							  </tr>
							  <tr>
								<td>3</td>
								<td>Dr.    REGELLA VENKATA SATYA LALITHA</td>
								<td>F</td>
								<td>Associate    Professor</td>
								<td>Computer    Science</td>
							  </tr>
							  <tr>
								<td>4</td>
								<td>SRI    GANTI NAGA SRIKANTH</td>
								<td>M</td>
								<td>Lecturer</td>
								<td>Computer    Science</td>
							  </tr>
							  <tr>
								<td>5</td>
								<td>SRI    . A . SAMYUL</td>
								<td>M</td>
								<td>Lecturer</td>
								<td>Computer    Science</td>
							  </tr>
							  <tr>
								<td>6</td>
								<td>SRI.    G CHIRANJEEVI</td>
								<td>M</td>
								<td>Lecturer</td>
								<td>Computer    Science</td>
							  </tr>
							  <tr>
								<td>7</td>
								<td>SRI.    U BALA SUBHARAHMANYAM</td>
								<td>M</td>
								<td>Lecturer</td>
								<td>Computer    Science</td>
							  </tr>
							  <tr>
								<td>8</td>
								<td>SMT.    K UMA DEVI</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Computer    Science</td>
							  </tr>
							  <tr>
								<td>9</td>
								<td>SRI.    P RAMESH KUMAR ( RJY)</td>
								<td>M</td>
								<td>Lecturer</td>
								<td>Computer    Science</td>
							  </tr>
							  <tr>
								<td>10</td>
								<td>SRI    PUVVALA VEERA VENKATA DURGA PRASAD</td>
								<td>M</td>
								<td>Lecturer</td>
								<td>Computer    Science</td>
							  </tr>
							  <tr>
								<td>11</td>
								<td>KUM.    G. SATYA SRI</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Computer    Science</td>
							  </tr>
							  <tr>
								<td>12</td>
								<td>SRI.    PULIGEDDA VEERABABU</td>
								<td>M</td>
								<td>Lecturer</td>
								<td>Computer    Science</td>
							  </tr>
							  <tr>
								<td>13</td>
								<td>SMT.    P SHARMILA</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Computer    Science</td>
							  </tr>
							  <tr>
								<td>14</td>
								<td>SMT.    SAMPARA SIRISHA</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Computer    Science</td>
							  </tr>
							  <tr>
								<td>15</td>
								<td>SMT.P    SRI HARINI NETHI KONDA</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Computer    Science</td>
							  </tr>
							  <tr>
								<td>16</td>
								<td>SMT    T.BRAMARAMBICA</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Mathematics    &amp; Statistics</td>
							  </tr>
							  <tr>
								<td>17</td>
								<td>SRI.    P VENKATA SAI KUMAR</td>
								<td>M</td>
								<td>Lecturer</td>
								<td>Mathematics    &amp; Statistics</td>
							  </tr>
							  <tr>
								<td>18</td>
								<td>KUM.    G VIJAYA LAKSHMI</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Mathematics    &amp; Statistics</td>
							  </tr>
							  <tr>
								<td>19</td>
								<td>KUM.    K.SAI SUNEESHA</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Mathematics    &amp; Statistics</td>
							  </tr>
							  <tr>
								<td>20</td>
								<td>SRI.    K VIJAYA LAKSHMI</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Mathematics    &amp; Statistics</td>
							  </tr>
							  <tr>
								<td>21</td>
								<td>SMT.    G DEVI</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Mathematics    &amp; Statistics</td>
							  </tr>
							  <tr>
								<td>22</td>
								<td>KUM    G. SAI NAGA DEVI</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Mathematics    &amp; Statistics</td>
							  </tr>
							  <tr>
								<td>23</td>
								<td>SMT.    P RAJA RAJESWARI</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Mathematics    &amp; Statistics</td>
							  </tr>
							  <tr>
								<td>24</td>
								<td>SMT.    L. SUNEETHA DEVI</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Mathematics    &amp; Statistics</td>
							  </tr>
							  <tr>
								<td>25</td>
								<td>Dr.    ANGAJALA RAMA KRISHNA</td>
								<td>M</td>
								<td>Associate    Professor</td>
								<td>Physics    &amp; Electronics</td>
							  </tr>
							  <tr>
								<td>26</td>
								<td>Dr.    VEMURI RAGHAVENDRA</td>
								<td>M</td>
								<td>Associate    Professor</td>
								<td>Physics    &amp; Electronics</td>
							  </tr>
							  <tr>
								<td>27</td>
								<td>Dr.    TIRUMALA SAMPATH KARTHIK</td>
								<td>M</td>
								<td>Associate    Professor</td>
								<td>Physics    &amp; Electronics</td>
							  </tr>
							  <tr>
								<td>28</td>
								<td>Dr.    GUDIVADA A ARUN KUMAR</td>
								<td>M</td>
								<td>Associate    Professor</td>
								<td>Physics    &amp; Electronics</td>
							  </tr>
							  <tr>
								<td>29</td>
								<td>SRI.    G SN MURTHY</td>
								<td>M</td>
								<td>Lecturer</td>
								<td>Physics    &amp; Electronics</td>
							  </tr>
							  <tr>
								<td>30</td>
								<td>SRI.M    SRINIVASA RAO</td>
								<td>M</td>
								<td>Lecturer</td>
								<td>Physics    &amp; Electronics</td>
							  </tr>
							  <tr>
								<td>31</td>
								<td>SRI.    H MURALI KRISHNA ( RJY)</td>
								<td>M</td>
								<td>Lecturer</td>
								<td>Physics    &amp; Electronics</td>
							  </tr>
							  <tr>
								<td>32</td>
								<td>SMT.    PONAGANTI B T S SUREKHA</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Physics    &amp; Electronics</td>
							  </tr>
							  <tr>
								<td>33</td>
								<td>SMT.    K.PADMAJA RANI</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Physics    &amp; Electronics</td>
							  </tr>
							  <tr>
								<td>34</td>
								<td>KUM.    S.SWAPNA</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Physics    &amp; Electronics</td>
							  </tr>
							  <tr>
								<td>35</td>
								<td>SMT.    B K VIJAYA LAKSHMI</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Physics    &amp; Electronics</td>
							  </tr>
							  <tr>
								<td>36</td>
								<td>SRI    K. V K R VAMSI</td>
								<td>M</td>
								<td>Lecturer</td>
								<td>Physics    &amp; Electronics</td>
							  </tr>
							  <tr>
								<td>37</td>
								<td>SRI.    G V R MURTHY</td>
								<td>M</td>
								<td>Lecturer</td>
								<td>Humanites</td>
							  </tr>
							  <tr>
								<td>38</td>
								<td>SRI.    M.RAJENDRA KUMAR</td>
								<td>M</td>
								<td>Lecturer</td>
								<td>Humanites</td>
							  </tr>
							  <tr>
								<td>39</td>
								<td>SMT    P. HARITHA</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Humanites</td>
							  </tr>
							  <tr>
								<td>40</td>
								<td>SRI.    U SURESH</td>
								<td>M</td>
								<td>Lecturer</td>
								<td>Humanites</td>
							  </tr>
							  <tr>
								<td>41</td>
								<td>SMT.    N. RAJA RAJESWARI</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Humanites</td>
							  </tr>
							  <tr>
								<td>42</td>
								<td>SMT.    CH. DIVYA BHARATHI</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Humanites</td>
							  </tr>
							  <tr>
								<td>43</td>
								<td>KUM    N. HEMA SRI</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Humanites</td>
							  </tr>
							  <tr>
								<td>44</td>
								<td>SRI.    KADA SURYA NARAYANA</td>
								<td>M</td>
								<td>Lecturer</td>
								<td>Library    Science</td>
							  </tr>
							</tbody>  
							</table>
							<h5>CHEMISTRY & LIFE SCIENCE</h5>
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
							<h5>COMMERCE & MANAGEMENT</h5>
							<table class="table table-bordered table-hover table-responsive">
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
								<td>SRI.    P.V.S.V PRASAD</td>
								<td>M</td>
								<td>Lecturer</td>
								<td>Commerce    &amp; Management</td>
							  </tr>
							  <tr>
								<td>2</td>
								<td>SRI.    S. SADA SIVA RAO</td>
								<td>M</td>
								<td>Lecturer</td>
								<td>Commerce    &amp; Management</td>
							  </tr>
							  <tr>
								<td>3</td>
								<td>SRI.    G ABRAHAM</td>
								<td>M</td>
								<td>Lecturer</td>
								<td>Commerce    &amp; Management</td>
							  </tr>
							  <tr>
								<td>4</td>
								<td>SRI.    S. SRINIVASA RAO</td>
								<td>M</td>
								<td>Lecturer</td>
								<td>Commerce    &amp; Management</td>
							  </tr>
							  <tr>
								<td>5</td>
								<td>Dr.    S.V.V.S.N MURTHY</td>
								<td>M</td>
								<td>Associate    Professor</td>
								<td>Commerce    &amp; Management</td>
							  </tr>
							  <tr>
								<td>6</td>
								<td>SMT.    M LAKSHMI</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Commerce    &amp; Management</td>
							  </tr>
							  <tr>
								<td>7</td>
								<td>SMT.    PONNAGANTI KEERTHI</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Commerce    &amp; Management</td>
							  </tr>
							  <tr>
								<td>8</td>
								<td>SRI.    Y SATYANARAYANA</td>
								<td>M</td>
								<td>Ad    hoc Teacher</td>
								<td>Commerce    &amp; Management</td>
							  </tr>
							  <tr>
								<td>9</td>
								<td>SMT.    K. ARUNA KUMARI</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Commerce    &amp; Management</td>
							  </tr>
							  <tr>
								<td>10</td>
								<td>SMT.    KADALI PAVANI</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Commerce    &amp; Management</td>
							  </tr>
							  <tr>
								<td>11</td>
								<td>KUM    U. JYOTHSNA</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Commerce    &amp; Management</td>
							  </tr>
							  <tr>
								<td>12</td>
								<td>SMT.    PONNADA ARUNA</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Commerce    &amp; Management</td>
							  </tr>
							  <tr>
								<td>13</td>
								<td>SMT.    R. RIZWANA</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Commerce    &amp; Management</td>
							  </tr>
							  <tr>
								<td>14</td>
								<td>P    LAHARI PRIYA</td>
								<td>F</td>
								<td>Lecturer</td>
								<td>Commerce    &amp; Management</td>
							  </tr>
							</tbody>  
							</table>
							
						</div>
						<div class="tab-pane fade" id="supporting" role="tabpanel" aria-labelledby="profile-tab">
							<table class="table table-bordered table-hover table-responsive">
								<thead>
								  <tr>
									<th>S.NO</th>
									<th>NAME OF THE    STAFF</th>
									<th>GENDER</th>
									<th>DESIGNATION</th>
								  </tr>
								</thead>
								<tbody>  
								  <tr>
									<td>1</td>
									<td>SMT    AKUNURI. NEERAJA</td>
									<td>F</td>
									<td>ADMINISTRATIVE    OFFICER</td>
								  </tr>
								  <tr>
									<td>2</td>
									<td>SRI.    CHILLA&nbsp; YEDUKONDALU</td>
									<td>M</td>
									<td>SUPERINTENDENT</td>
								  </tr>
								  <tr>
									<td>3</td>
									<td>SMT. A.VIJAYA LAKSHMI</td>
									<td>F</td>
									<td>ASST.    LIBRARIAN</td>
								  </tr>
								  <tr>
									<td>4</td>
									<td>SMT. GOPI&nbsp; DHANAVARALAKSHMI&nbsp;</td>
									<td>F</td>
									<td>CASHIER</td>
								  </tr>
								  <tr>
									<td>5</td>
									<td>N    SATYAVATHI</td>
									<td>F</td>
									<td>PHYSICAL    DIRECTOR</td>
								  </tr>
								  <tr>
									<td>6</td>
									<td>SMT. P. RADHA MADHAVI</td>
									<td>F</td>
									<td>RECEPTION</td>
								  </tr>
								  <tr>
									<td>7</td>
									<td>T. M. SAI PRASANNA</td>
									<td>F</td>
									<td>ASST.    CASHIER</td>
								  </tr>
								  <tr>
									<td>8</td>
									<td>SMT. R.MALAVI    PRASANTHI</td>
									<td>F</td>
									<td>SCHOLARSHIP    INCHARGE</td>
								  </tr>
								  <tr>
									<td>9</td>
									<td>SRI V ANIL SIVA RAJ    KUMAR</td>
									<td>M</td>
									<td>HARDWARE    ENGINEER</td>
								  </tr>
								  <tr>
									<td>10</td>
									<td>SRI. LLLINGI GANGA    RAJU</td>
									<td>M</td>
									<td>OFFICE    ASSISTANT</td>
								  </tr>
								  <tr>
									<td>11</td>
									<td>SMT. D. KEERTHI</td>
									<td>F</td>
									<td>OFFICE    ASSISTANT</td>
								  </tr>
								  <tr>
									<td>12</td>
									<td>SRI. N. SIVA KUMAR</td>
									<td>M</td>
									<td>FLOOR    INCHARGE</td>
								  </tr>
								  <tr>
									<td>13</td>
									<td>SMT. PULIGEDDA    LAKSHMI BHUVANESWARI</td>
									<td>F</td>
									<td>OFFICE    ASSISTANT</td>
								  </tr>
								  <tr>
									<td>14</td>
									<td>SMT. A NOOKA MANI</td>
									<td>F</td>
									<td>FLOOR    INCHARGE</td>
								  </tr>
								  <tr>
									<td>15</td>
									<td>SMT. K.ASHA JYOTHI</td>
									<td>F</td>
									<td>FLOOR    INCHARGE</td>
								  </tr>
								  <tr>
									<td>16</td>
									<td>T.P.VIJAYA</td>
									<td>F</td>
									<td>DTP    OPERATOR</td>
								  </tr>
								  <tr>
									<td>17</td>
									<td>SHAMEEN BHANU</td>
									<td>F</td>
									<td>STORE    INCHARGE</td>
								  </tr>
								  <tr>
									<td>18</td>
									<td>SRI    V ANIL SIVA RAJ KUMAR</td>
									<td>M</td>
									<td>FLOOR    INCHARGE</td>
								  </tr>
								  <tr>
									<td>19</td>
									<td>KUM.    A. UMA PARVATHI</td>
									<td>F</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>20</td>
									<td>KUM.    S. SIVA DURGA</td>
									<td>F</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>21</td>
									<td>KUM.    T SUDHARJINI</td>
									<td>F</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>22</td>
									<td>A    ANUSHA</td>
									<td>F</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>23</td>
									<td>SRI.    CHERUKUPALLI&nbsp; VENKATA SUBBA RAO</td>
									<td>F</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>24</td>
									<td>SMT.    LALITHA PARVATHI</td>
									<td>F</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <!--<tr>
									<td>25</td>
									<td>SRI.    K.V.K.R.VAMSI</td>
									<td>F</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>-->
								  <tr>
									<td>25</td>
									<td>K    MADHAVA RAO</td>
									<td>F</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>26</td>
									<td>KUM.    V. PADMINI</td>
									<td>F</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>27</td>
									<td>V    PRASUNNA</td>
									<td>F</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>28</td>
									<td>U    DEVI</td>
									<td>F</td>
									<td>LADIES    SUPERVISOR</td>
								  </tr>
								  <tr>
									<td>29</td>
									<td>SRI. KANDULA SRI RAMA    ANJANEYULU</td>
									<td>M</td>
									<td>SUPERVISOR</td>
								  </tr>
								  <tr>
									<td>30</td>
									<td>SRI P MURALI KRISHNA</td>
									<td>M</td>
									<td>SUPERVISOR</td>
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