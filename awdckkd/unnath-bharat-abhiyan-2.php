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
					   <h3><span class="text-warning">Unnath Bharat Abhiyan (2.0)</span></h3>
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
								<a class="nav-link active" id="profile-tab" data-toggle="tab" href="#about" role="tab" aria-controls="profile" aria-selected="false">Introduction</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="home-tab" data-toggle="tab" href="#roles" role="tab" aria-controls="home" aria-selected="true">History</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="home-tab" data-toggle="tab" href="#Secretary" role="tab" aria-controls="home" aria-selected="true">Vision & Mission</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab">
								<h5>Background and Need</h5>
<p>As  foreseen by Gandhi Ji in his seminal work, &lsquo;Hind Swaraj&rsquo;, the western  developmental paradigm, based on centralized technologies and urbanization, has  given rise to serious problems like increasing inequity (leading to crime and  violence), and climate change due to rapid ecological degradation. To  ameliorate these problems, it is necessary to promote development of rural  areas in tune with Gandhian vision of self-sufficient &lsquo;village republics&rsquo;,  based on local resources and using decentralized, eco-friendly technologies so  that the basic needs of food, clothing, shelter, sanitation, health care,  energy, livelihood, transportation, and education are locally met. This should  be the vision of holistic development of villages. Presently, 70% of the  population in India lives in rural areas engaged in agrarian economy with  agriculture and allied sector employing 51% of the total work-force but  accounting for only 17% of the country&rsquo;s GDP. There are huge developmental  disconnects between the rural and urban sectors such as inequity in health,  education, incomes and basic amenities as well as employment opportunities -  all causing great discontent and large-scale migration to urban areas. The  imperatives of sustainable development which are being felt more and more  acutely all over the world also demand eco-friendly development of the villages  and creation of appropriate employment opportunities locally. Increasing  urbanization is neither sustainable nor desirable. So far, our professional  higher education institutions have largely been oriented to cater to the  mainstream industrial sector and, barring a few exceptions, have hardly  contributed directly to the development of the rural sector. Unnat Bha&#772;rat  Abhiya&#772;n (UBA) is a much needed and highly  challenging initiative in this direction.</p>
							</div>
							<div class="tab-pane fade" id="roles" role="tabpanel" aria-labelledby="profile-tab">
								<p>The  conceptualization of Unnat Bharat Abhiyan started with the initiative of a  group of dedicated faculty members of Indian Institute of Technology (IIT)  Delhi working for long in the area of rural development and appropriate  technology. The concept was nurtured through wide consultation with the  representatives of a number of technical institutions, Rural Technology Action  Group (RuTAG) coordinators, voluntary organizations and government agencies,  actively involved in rural development work, during a National workshop held at  IIT Delhi in September, 2014. The workshop was sponsored by Council for  Advancement of People&rsquo;s Action and Rural Technology (CAPART), Ministry of Rural  Development, Govt. of India. The program was formally launched by the Ministry  of Education (MoE) (formerly Ministry Human Resource Development (MHRD)) in  presence of The President of India on 11th November, 2014.</p>
							</div>
							<div class="tab-pane fade" id="Secretary" role="tabpanel" aria-labelledby="profile-tab">
								<h5>Vision</h5>
<p>Unnat Bharat Abhiyan is inspired by  the vision of transformational change in rural development processes by  leveraging knowledge institutions to help build the architecture of an  Inclusive India.</p>
<h5>Mission</h5>
<p>The Mission of Unnat Bharat Abhiyan  is to enable higher educational institutions to work with the people of rural  India in identifying development challenges and evolving appropriate solutions  for accelerating sustainable growth. It also aims to create a virtuous cycle  between society and an inclusive academic system by providing knowledge and  practices for emerging professions and to upgrade the capabilities of both the  public and the private sectors in responding to the development needs of rural  India.</p>
<h5>Goals</h5>
<ul type="disc">
  <li>To build an understanding of the development       agenda within institutes of Higher Education and an institutional capacity       and training relevant to national needs, especially those of rural India.</li>
  <li>To re-emphasize the need for field work,       stake-holder interactions and design for societal objectives as the basis       of higher education.</li>
  <li>To stress on rigorous reporting and useful       outputs as central to developing new professions.</li>
  <li>To provide rural India and regional agencies       with access to the professional resources of the institutes of higher       education, especially those that have acquired academic excellence in the       field of science, engineering and technology, and management.</li>
  <li>To improve development outcomes as a       consequence of this research. To develop new professions and new processes       to sustain and absorb the outcomes of research.</li>
  <li>To foster a new dialogue within the larger       community on science, society and the environment and to develop a sense       of dignity and collective destiny.</li>
</ul>
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