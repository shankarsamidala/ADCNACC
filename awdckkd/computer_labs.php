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
					   <h3><span class="text-warning">COMPUTER LABS</span></h3>
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
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#cmpsci" role="tab" aria-controls="home" aria-selected="true">About Labs</a>
						</li> 
						<li class="nav-item">
							<a class="nav-link " id="home-tab" data-toggle="tab" href="#staff" role="tab" aria-controls="staff" aria-selected="true">Equipment</a>
						</li> 
					</ul>
					</div>
					<div class="card-body">
					
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="cmpsci" role="tabpanel" aria-labelledby="home-tab">
							 <!-- <h5>About Department</h5> -->
							 <p>
								 Aditya Degree College for Women has 7 computer labs with over 465 computer systems. We have the most modern, state of the art computer labs. A 1:1 computer to student ratio is managed to the comfort level of the student. The entire campus has a switch based Local Area Network operating under Windows-NT. The systems are supported with high-speed network, laser printers. Latest versions of software's, internet facility and online demos help in constant up-gradation of the students. The expertise of the faculty guides the students to use various softwares.
							</p>
							<h5 class="mb-0">Wi-Fi</h5>
							
							<p>The campus is enabled for wireless connectivity. All the laptop users and Smart devices are getting connected to the resources with DHCP enabled access points. Free yet Secure and controlled internet connection is provided to all.
							</p>
						</div> 
						<div class="tab-pane fade" id="staff" role="tabpanel" aria-labelledby="staff-tab"> 
							<h5>Systems</h5>
							<div class="table-responsive">
							<table class="table table-bordered table-hover table-responsive">
										<col width="47">
										<col width="197">
										<col width="85">
										<col width="145">
										<col width="250">
										<tr>
																				<th width="47">S.NO</th>
																				<th width="197">NAME OF THE LAB</th>
																				<th width="85">SYSTEMS</th>
																				<th width="145">BRAND</th>
																				<th width="250">SYSTEM    CONFIGURATION</th>
										</tr>
										<tr>
																				<td width="47">1</td>
																				<td width="197">COMPUTER    LAB 1</td>
																				<td width="85">45</td>
																				<td width="145">LENOVO    TINY</td>
																				<td width="250">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD,18.5 MONITOR</td>
										</tr>
										<tr>
																				<td width="47">2</td>
																				<td width="197">COMPUTER    LAB 2</td>
																				<td width="85">49</td>
																				<td width="145">LENOVO</td>
																				<td width="250">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD,18.5 MONITOR</td>
										</tr>
										<tr>
																				<td width="47">3</td>
																				<td width="197">COMPUTER    LAB 3</td>
																				<td width="85">48</td>
																				<td width="145">LENOVO    TINY</td>
																				<td width="250">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD,18.5 MONITOR</td>
										</tr>
										<tr>
																				<td width="47">4</td>
																				<td width="197">COMPUTER    LAB 4</td>
																				<td width="85">58</td>
																				<td width="145">DELL    TINY</td>
																				<td width="250">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD,18.5 MONITOR</td>
										</tr>
										<tr>
																				<td width="47">5</td>
																				<td width="197">COMPUTER    LAB 5</td>
																				<td width="85">30</td>
																				<td width="145">LENOVO</td>
																				<td width="250">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD,18.5 MONITOR</td>
										</tr>
										<tr>
																				<td width="47">6</td>
																				<td width="197">COMPUTER    LAB 6</td>
																				<td width="85">30</td>
																				<td width="145">LENOVO</td>
																				<td width="250">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD,18.5 MONITOR</td>
										</tr>
										<tr>
																				<td width="47">7</td>
																				<td width="197">COMPUTER    LAB 7</td>
																				<td width="85">30</td>
																				<td width="145">LENOVO    TINY</td>
																				<td width="250">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD,19 INCH MONITOR</td>
										</tr>
										<tr>
																				<td width="47">8</td>
																				<td width="197">ELECTRONICS    LAB</td>
																				<td width="85">12</td>
																				<td width="145">LENOVO    TINY</td>
																				<td width="250">INTEL    PENTIUM 2020,4GB RAM,500GB HARD DISK,18.5 MONITORS</td>
										</tr>
										<tr>
																				<td width="47">9</td>
																				<td width="197">DIGITAL    LIBRARY</td>
																				<td width="85">10</td>
																				<td width="145">LENOVO    THINK</td>
																				<td width="250">INTEL    PENTIUM,4GB RAM 240 GB SSD,18.5 MONITOR</td>
										</tr>
										<tr>
																				<td>&nbsp;</td>
																				<td>TOTAL</td>
																				<td>312</td>
																				<td>&nbsp;</td>
																				<td>&nbsp;</td>
										</tr>
										<tr>
																				<td colspan="5" width="724">SYSTEM USAGE IN ACADEMIC &amp; ADMINISTRATIVE DEPARTMENTS</td>
										</tr>
										<tr>
																				<td width="47">S.NO</td>
																				<td width="197">NAME    OF THE LAB</td>
																				<td width="85">SYSTEMS</td>
																				<td width="145">BRAND</td>
																				<td width="250">SYSTEM    CONFIGURATION</td>
										</tr>
										<tr>
																				<td width="47">1</td>
																				<td width="197">CHAIRMAN    ROOM</td>
																				<td width="85">1</td>
																				<td width="145">LENOVO    TINY</td>
																				<td width="250">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD,18.5 MONITOR</td>
										</tr>
										<tr>
																				<td width="47">2</td>
																				<td width="197">PRINCIPAL    ROOM</td>
																				<td width="85">2</td>
																				<td width="145">LENOVO</td>
																				<td width="250">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD,18.5 MONITOR</td>
										</tr>
										<tr>
																				<td width="47">3</td>
																				<td width="197">VICE    PRINCIPAL CABIN</td>
																				<td width="85">1</td>
																				<td width="145">LENOVO</td>
																				<td width="250">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD 500GB HDD,19inch MONITOR</td>
										</tr>
										<tr>
																				<td width="47">4</td>
																				<td width="197">FRONT    OFFICE</td>
																				<td width="85">1</td>
																				<td width="145">LENOVO</td>
																				<td width="250">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD,18.5 MONITOR</td>
										</tr>
										<tr>
																				<td width="47">5</td>
																				<td width="197">DTP    ROOM</td>
																				<td width="85">2</td>
																				<td width="145">HP</td>
																				<td width="250">Workstation    Xeon® E3 4GB GRAPHIC,16GB RAM,240SSD,1TB HDD,19 INCH MONITOR</td>
										</tr>
										<tr>
																				<td width="47">6</td>
																				<td width="197">CASH    COUNTER</td>
																				<td width="85">1</td>
																				<td width="145">LENOVO</td>
																				<td width="250">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD,18.5 MONITOR</td>
										</tr>
										<tr>
																				<td width="47">7</td>
																				<td width="197">OFFICE</td>
																				<td width="85">2</td>
																				<td width="145">LENOVO</td>
																				<td width="250">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD,18.5 MONITOR</td>
										</tr>
										<tr>
																				<td width="47">8</td>
																				<td width="197">LIBRARY</td>
																				<td width="85">1</td>
																				<td width="145">LENOVO</td>
																				<td width="250">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD,18.5 MONITOR</td>
										</tr>
										<tr>
																				<td width="47">9</td>
																				<td width="197">LIBRARY    INFO PC</td>
																				<td width="85">1</td>
																				<td width="145">LENOVO</td>
																				<td width="250">INTEL    PENTIUM 2020,4GB RAM,500GB HARD DISK,18.5 MONITORS</td>
										</tr>
										<tr>
																				<td width="47">10</td>
																				<td width="197">HARDWARE    ENG</td>
																				<td width="85">1</td>
																				<td width="145">LENOVO</td>
																				<td width="250">INTEL    PENTIUM 2020,8GB RAM,240SSD,500GB HARD DISK,18.5 MONITORS</td>
										</tr>
										<tr>
																				<td>&nbsp;</td>
																				<td>TOTAL</td>
																				<td>13</td>
																				<td>&nbsp;</td>
																				<td>&nbsp;</td>
										</tr>
										<tr>
																				<td colspan="5">ADITYA DEGREE    COLLEGE FOR WOMEN'S COMPUTERS AND PROJECTORS </td>
										</tr>
										<tr>
																				<td>1</td>
																				<td>PC FOR PROJECTORS</td>
																				<td>20</td>
																				<td>LENOVO</td>
																				<td width="250">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD,18.5 MONITOR</td>
										</tr>
										<tr>
																				<td colspan="2">TOTAL SYSTEMS </td>
																				<td>345</td>
																				<td>&nbsp;</td>
																				<td>&nbsp;</td>
										</tr>
										<tr>
																				<td colspan="5" rowspan="4" width="724">1) Total Number of Computers for Student usage: 332<br>
																														2) Total Number of Computers for other usage: 13<br>
																														3) Total Number of Students in 2022-2023:     1860<br>
																														4) Student Computer Ratio of Students:     5.6</td>
										</tr>
										<tr> </tr>
										<tr> </tr>
										<tr> </tr>
</table>
							</div>
							<h5>Projectors</h5>
							<div class="table-responsive">
							<table class="table table-bordered table-hover table-responsive">
    																				<col width="64">
    																				<col width="154">
    																				<col width="166">
    																				<col width="181">
    																				<col width="91">
    																				<col width="115">
    																				<tr>
    																														<th width="64">SNO</th>
    																														<th width="154">PARTICULARS</th>
    																														<th width="166">PRODUCTS    DETAILS</th>
    																														<th width="181">CONFIGURATION</th>
    																														<th width="91">AUDIO</th>
    																														<th width="115">SCREEN</th>
    																														</tr>
    																				<tr>
    																														<td>1</td>
    																														<td width="154">ROOM-16  <br>
    																																								(GF CLASS ROOM)</td>
    																														<td width="166">DESKTOP/PROJECTOR    (OPTIMA)</td>
    																														<td width="181">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD</td>
    																														<td>YES</td>
    																														<td>YES</td>
    																														</tr>
    																				<tr>
    																														<td>2</td>
    																														<td>SEMINAR HALL</td>
    																														<td width="166">DESKTOP/PROJECTOR    (EPSON)/MONITOR</td>
    																														<td width="181">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD</td>
    																														<td>YES</td>
    																														<td>YES</td>
    																														</tr>
    																				<tr>
    																														<td>3</td>
    																														<td width="154"><br>
    																																								GROUND FLOOR<br>
    																																								ROOM-9</td>
    																														<td width="166">PROJECTOR    (VIVITEK)</td>
    																														<td width="181">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD</td>
    																														<td>YES</td>
    																														<td>YES</td>
    																														</tr>
    																				<tr>
    																														<td>4</td>
    																														<td width="154">GROUND    FLOOR<br>
    																																								ROOM-20</td>
    																														<td width="166">PROJECTOR    (VIVITEK)</td>
    																														<td width="181">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD</td>
    																														<td>YES</td>
    																														<td>YES</td>
    																														</tr>
    																				<tr>
    																														<td>5</td>
    																														<td width="154">GROUND    FLOOR<br>
    																																								ROOM-2</td>
    																														<td width="166">PROJECTOR    (OPTIMA)</td>
    																														<td width="181">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD</td>
    																														<td>YES</td>
    																														<td>YES</td>
    																														</tr>
    																				<tr>
    																														<td>6</td>
    																														<td width="154">GROUND    FLOOR<br>
    																																								ROOM-4</td>
    																														<td width="166">PROJECTOR    (OPTIMA)</td>
    																														<td width="181">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD</td>
    																														<td>YES</td>
    																														<td>YES</td>
    																														</tr>
    																				<tr>
    																														<td>7</td>
    																														<td width="154">1ST    FLOOR<br>
    																																								COMPUTER LAB - 4</td>
    																														<td width="166">DESKTOP/PROJECTOR    (EPSON)</td>
    																														<td width="181">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD</td>
    																														<td>YES</td>
    																														<td>YES</td>
    																														</tr>
    																				<tr>
    																														<td>8</td>
    																														<td width="154">3RD    FLOOR ROOM <br>
    																																								APSSDC ROOM (COMP LAB 7)</td>
    																														<td width="166">DESKTOP/TV</td>
    																														<td width="181">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD</td>
    																														<td colspan="2" width="206">&nbsp;</td>
    																														</tr>
    																				<tr>
    																														<td>9</td>
    																														<td width="154">3RD    FLOOR CLASS<br>
    																																								ROOM 31</td>
    																														<td width="166">DESKTOP/PROJECTOR    (OPTIMA)</td>
    																														<td width="181">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD</td>
    																														<td>YES</td>
    																														<td>YES</td>
    																														</tr>
    																				<tr>
    																														<td>10</td>
    																														<td width="154">4TH    FLOOR CLASS<br>
    																																								ROOM 33</td>
    																														<td width="166">DESKTOP/PROJECTOR    (OPTIMA)</td>
    																														<td width="181">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD</td>
    																														<td>YES</td>
    																														<td>YES</td>
    																														</tr>
    																				<tr>
    																														<td>11</td>
    																														<td width="154">4TH    FLOOR CLASS<br>
    																																								ROOM 34</td>
    																														<td width="166">DESKTOP/PROJECTOR-(SMART    PROJECT)</td>
    																														<td width="181">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD</td>
    																														<td>YES</td>
    																														<td>YES</td>
    																														</tr>
    																				<tr>
    																														<td>12</td>
    																														<td width="154">4TH    FLOOR CLASS<br>
    																																								ROOM 37</td>
    																														<td width="166">PROJECTOR    (VIVITEK)</td>
    																														<td width="181">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD</td>
    																														<td>YES</td>
    																														<td>YES</td>
    																														</tr>
    																				<tr>
    																														<td>13</td>
    																														<td width="154">4TH    FLOOR <br>
    																																								CLASSROOM 38</td>
    																														<td width="166">PROJECTOR    (VIVITEK)</td>
    																														<td width="181">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD</td>
    																														<td>YES</td>
    																														<td>YES</td>
    																														</tr>
    																				<tr>
    																														<td>14</td>
    																														<td width="154">4TH    FLOOR CLASS<br>
    																																								ROOM 39</td>
    																														<td width="166">PROJECTOR(VIVITEK)</td>
    																														<td width="181">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD</td>
    																														<td>YES</td>
    																														<td>YES</td>
    																														</tr>
    																				<tr>
    																														<td>15</td>
    																														<td width="154">5TH    FLOOR CLASS<br>
    																																								ROOM 40</td>
    																														<td width="166">PROJECTOR(VIVITEK)</td>
    																														<td width="181">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD</td>
    																														<td>YES</td>
    																														<td>YES</td>
    																														</tr>
    																				<tr>
    																														<td>16</td>
    																														<td width="154">5TH    FLOOR CLASS<br>
    																																								ROOM 41</td>
    																														<td width="166">DESKTOP/PROJECTOR    (OPTIMA)</td>
    																														<td width="181">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD</td>
    																														<td>YES</td>
    																														<td>YES</td>
    																														</tr>
    																				<tr>
    																														<td>17</td>
    																														<td width="154">5TH    FLOOR CLASS<br>
    																																								ROOM 44</td>
    																														<td width="166">PROJECTOR    (VIVITEK)</td>
    																														<td width="181">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD</td>
    																														<td>YES</td>
    																														<td>YES</td>
    																														</tr>
    																				<tr>
    																														<td>18</td>
    																														<td width="154">5TH    FLOOR CLASS<br>
    																																								ROOM 45</td>
    																														<td width="166">DESKTOP/PROJECTOR    (EPSON)</td>
    																														<td width="181">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD</td>
    																														<td>YES</td>
    																														<td>YES</td>
    																														</tr>
    																				<tr>
    																														<td>19</td>
    																														<td width="154">5TH    FLOOR CLASS<br>
    																																								ROOM 47</td>
    																														<td width="166">DESKTOP/PROJECTOR    (EPSON)</td>
    																														<td width="181">Core    i3 4th Gen Processor,4GB RAM,240 GB SSD</td>
    																														<td>YES</td>
    																														<td>YES</td>
    																														</tr>
    																				<tr>
    																														<td>20</td>
    																														<td width="154">COMPUTER    LAB-1<br>
    																																								MOVABLE</td>
    																														<td width="166">PROJECTOR    (OPTIMA)</td>
    																														<td width="181">MODEL:-    HD 142X<br>
    																																								Full HD 1920*1080<br>
    																																								INPUT:- VGA AND HDMI</td>
    																														<td>&nbsp;</td>
    																														<td>&nbsp;</td>
    																														</tr>
    																				<tr>
    																														<td>21</td>
    																														<td width="154">COMPUTER    LAB-2<br>
    																																								MOVABLE</td>
    																														<td width="166">PROJECTOR    (OPTIMA)</td>
    																														<td width="181">MODEL:-DX263<br>
    																																								FULL HD 1920*1080<br>
    																																								INPUT:- VGA AND HDMI</td>
    																														<td>&nbsp;</td>
    																														<td>&nbsp;</td>
    																														</tr>
    																				<tr>
    																														<td colspan="4">TOTAL PROJECTORS IN    COLLEGE</td>
    																														<td colspan="2">20</td>
    																														</tr>
    																				</table>
							</div>
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