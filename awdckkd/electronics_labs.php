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
					   <h3><span class="text-warning">ELECTRONICS LABS</span></h3>
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
							 
							<p>Electronics Lab is fully equipped with Digital Electronics  &amp; Analog Electronics Circuit, Electronic Circuit Simulation and  Microprocessor and Micro controller.<br>
																	The experiments related to Circuit  Analysis, Electronic Devices, Analog Circuits, Digital electronics,  Microprocessor, Embedded systems and Communications are performed in the  laboratory. The laboratory is well equipped with advanced apparatus like signal  generators and DC regulated power supplies with digital display, digital  millimeters, Cathode ray Oscilloscopes, microprocessor and microcontroller kits  with accessories like stepper motor, DAC and ADC etc, analog and digital logic  trainer kits with inbuilt RPS and pulsar of different clock frequencies. </p>
</div> 
						<div class="tab-pane fade" id="staff" role="tabpanel" aria-labelledby="staff-tab"> 
							<div class="table-responsive">
							<table class="table table-bordered table-hover table-responsive">
										<col width="76">
										<col width="479">
										<col width="112">
										<tr>
																				<th width="76">S. No.</th>
																				<th width="479">Name of the    Equipment</th>
																				<th width="112">Quantity</th>
										</tr>
										<tr>
																				<td>1</td>
																				<td>Digital Multimeter</td>
																				<td width="112">21</td>
										</tr>
										<tr>
																				<td>2</td>
																				<td width="479">Cathode    ray oscilloscope type 520 dues trace</td>
																				<td width="112">4</td>
										</tr>
										<tr>
																				<td>3</td>
																				<td width="479">Cathode    ray oscilloscope MPC P02025 duel channel</td>
																				<td>2</td>
										</tr>
										<tr>
																				<td>4</td>
																				<td width="479">CRO,    GW INSTEK GOS-630FC</td>
																				<td>4</td>
										</tr>
										<tr>
																				<td>5</td>
																				<td width="479">CRO,    dual trace 30MHZ</td>
																				<td>5</td>
										</tr>
										<tr>
																				<td>6</td>
																				<td width="479">Transisterised    regulated power supply 0-30V 1A</td>
																				<td>6</td>
										</tr>
										<tr>
																				<td>7</td>
																				<td width="479">Transisterised    regulated power supply  duel channel    0-30V  1A</td>
																				<td>7</td>
										</tr>
										<tr>
																				<td>8</td>
																				<td>Bread boards model Wb    102</td>
																				<td width="112">10<br>
																														21</td>
										</tr>
										<tr>
																				<td>9</td>
																				<td>Bread boards</td>
																				<td width="112">20</td>
										</tr>
										<tr>
																				<td>10</td>
																				<td>DRB in 6 decades    model : DRB 606</td>
																				<td>12</td>
										</tr>
										<tr>
																				<td>11</td>
																				<td width="479">Decarde    resistence Box in 5 decards, Range 10 Dbms - 1 Mega, Aer -45</td>
																				<td>2</td>
										</tr>
										<tr>
																				<td>12</td>
																				<td>DCB in 6 decades    model : DCB 415</td>
																				<td width="112">6<br>
																														6</td>
										</tr>
										<tr>
																				<td>13</td>
																				<td>DIB in 6 decades    model : DIB 505</td>
																				<td width="112">6<br>
																														6</td>
										</tr>
										<tr>
																				<td>14</td>
																				<td>Digital DC ammeter    (31/2 )/- 20 mA</td>
																				<td>6</td>
										</tr>
										<tr>
																				<td>15</td>
																				<td>Digital DC ammeter 0-    200 mA</td>
																				<td>3</td>
										</tr>
										<tr>
																				<td>16</td>
																				<td>Digital DC ammeter 0-    200 mecro A</td>
																				<td>2</td>
										</tr>
										<tr>
																				<td>17</td>
																				<td>Analog DC ammeter    0-25 mA</td>
																				<td>6</td>
										</tr>
										<tr>
																				<td>18</td>
																				<td>31/2 Digital DC    voltmeter 0-20V</td>
																				<td>14</td>
										</tr>
										<tr>
																				<td>19</td>
																				<td>Soldering iron (25w)</td>
																				<td>6</td>
										</tr>
										<tr>
																				<td>20</td>
																				<td>Soldering stand</td>
																				<td>6</td>
										</tr>
										<tr>
																				<td>21</td>
																				<td>Screw driver set    &amp; cutting plies</td>
																				<td>1</td>
										</tr>
										<tr>
																				<td>22</td>
																				<td>Cutlers</td>
																				<td>17</td>
										</tr>
										<tr>
																				<td>23</td>
																				<td>Stripper</td>
																				<td>5</td>
										</tr>
										<tr>
																				<td>24</td>
																				<td width="479">Function    generator Coligitall + 4 given to physics lab</td>
																				<td>10</td>
										</tr>
										<tr>
																				<td>25</td>
																				<td width="479">Function    generator 1 HZ - 1 MHZ degital FGC -18 Model Pecific</td>
																				<td>5</td>
										</tr>
										<tr>
																				<td>26</td>
																				<td width="479">Conversion    of galvanometer to Voltmeter</td>
																				<td>3</td>
										</tr>
										<tr>
																				<td>27</td>
																				<td>Nortns theorems Kits</td>
																				<td>3</td>
										</tr>
										<tr>
																				<td>28</td>
																				<td>LDR Characterisitcs    kits</td>
																				<td>3</td>
										</tr>
										<tr>
																				<td>29</td>
																				<td>Thevenins theorem    Kits</td>
																				<td>3</td>
										</tr>
										<tr>
																				<td>30</td>
																				<td>Colpits &amp; Hartly</td>
																				<td>3</td>
										</tr>
										<tr>
																				<td>31</td>
																				<td width="479">Conversion    of galvanometer  into ammeter</td>
																				<td>3</td>
										</tr>
										<tr>
																				<td>32</td>
																				<td>R-S, J-K, D, T &amp;    Lip Kits</td>
																				<td>3</td>
										</tr>
										<tr>
																				<td>33</td>
																				<td>Micro Processer Kits</td>
																				<td>8</td>
										</tr>
										<tr>
																				<td>34</td>
																				<td>Micro Processer Kits    (from Physics Lab)</td>
																				<td>4</td>
										</tr>
										<tr>
																				<td>35</td>
																				<td>Power Bupplies for    VM5 -8051</td>
																				<td>7</td>
										</tr>
										<tr>
																				<td>36</td>
																				<td>5V Regulated Power    Supply</td>
																				<td>4</td>
										</tr>
										<tr>
																				<td>37</td>
																				<td>Logic Controller    interface</td>
																				<td>2</td>
										</tr>
										<tr>
																				<td>38</td>
																				<td>Traffic  Controller interface</td>
																				<td>2</td>
										</tr>
										<tr>
																				<td>39</td>
																				<td>Stepper moter inter    with its equipment</td>
																				<td>2</td>
										</tr>
										<tr>
																				<td>40</td>
																				<td>16 * 1 Multiplexer</td>
																				<td>3</td>
										</tr>
										<tr>
																				<td>41</td>
																				<td>4 * 16 de 1    Multiplexer</td>
																				<td>3</td>
										</tr>
										<tr>
																				<td>42</td>
																				<td>Binary to gray    convertor</td>
																				<td>3</td>
										</tr>
										<tr>
																				<td>43</td>
																				<td>FX : 991ms calculator</td>
																				<td>1</td>
										</tr>
										<tr>
																				<td>44</td>
																				<td>Micro controller kit    (8051)</td>
																				<td>6</td>
										</tr>
										<tr>
																				<td>45</td>
																				<td>Power Supply for 8051</td>
																				<td>6</td>
										</tr>
										<tr>
																				<td>46</td>
																				<td>Battery Back up for    RAM</td>
																				<td>6</td>
										</tr>
										<tr>
																				<td>47</td>
																				<td>ADC interface</td>
																				<td>2</td>
										</tr>
										<tr>
																				<td>48</td>
																				<td>DAC interface</td>
																				<td>2</td>
										</tr>
										<tr>
																				<td>49</td>
																				<td>Digital multileter    3.50 digits KM 603</td>
																				<td>10</td>
										</tr>
										<tr>
																				<td>50</td>
																				<td>Lenovo Computer    Systems</td>
																				<td>12</td>
										</tr>
										<tr>
																				<td>51</td>
																				<td width="479">Bread    boards Trainer system for PDC &amp; LC Lab - AE7 -201</td>
																				<td>6</td>
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