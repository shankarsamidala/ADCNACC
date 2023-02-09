<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/css.php";?>
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
					   <h3><span class="text-warning">labs</span></h3>
				  </div>
				</div>
			</div>
		</div>		   
	</div>
	<div class="page-content">
	<div class="container content-pt">
		<div class="row">
			<div class="col-md-8">
				<div class="card card-warning">
					<div class="card-header">
						<h4 class="title text-warning">labs</h4>
					</div>
					<div class="card-body">
						<h5>Computer lab</h5>
<p>Aditya Degree College for Women has 3 computer labs with over 150 computer systems. We have the most modern, state of the art computer labs. A 1:1 computer to student ratio is managed to the comfort level of the student. The entire campus has a switch based Local Area Network operating under Windows-NT. The systems are supported with high speed network, laser printers. Latest versions of software's, internet facility and online demos help in constant up-gradation of the students. The expertise of the faculty guides the students to use various softwares.</p>

<h5>Science lab</h5>

   <p>Aditya Degree College for Women takes pride in providing the most technically designed labs, equipped with chemicals, specimens and the most expensive raw materials. Highly sophisticated instrumentation like spectrophometer, laminar air flow cooling centrifuge, microscopes, incubators, hot air oven, pH meter and autoclave are available in the labs.</p>
   
   <div data-code="example-2">
                                <div class="row">
                                    <a href="pop-img/lab-1.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="pop-img/lab-1.jpg" class="img-fluid">
                                    </a>
                                    <a href="pop-img/lab-2.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="pop-img/lab-2.jpg" class="img-fluid">
                                    </a>
                                    <a href="pop-img/lab-3.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="pop-img/lab-3.jpg" class="img-fluid">
                                    </a>
									<a href="pop-img/lab-4.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="pop-img/lab-4.jpg" class="img-fluid">
                                    </a>
                                </div>
								
								
							</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<?php include "include/placements.php";?>
			</div>
		</div>
	</div>
				
				<?php include "include/footer.php";?>
    </div>
	 <?php include "include/js.php";?>
	 <script src="assets/js/ekko-lightbox.min.js"></script>
		<!-- Javascript to Initialise the Lightbox -->
        <script type="text/javascript">
            $(document).ready(function ($) {
                // delegate calls to data-toggle="lightbox"
                $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
                    event.preventDefault();
                    return $(this).ekkoLightbox({
                        onShown: function() {
                            if (window.console) {
                                return console.log('Checking our the events huh?');
                            }
                        },
						onNavigate: function(direction, itemIndex) {
                            if (window.console) {
                                //return console.log('Navigating '+direction+'. Current item: '+itemIndex);
                            }
						}
                    });
                }); 
				// navigateTo
                $(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
                    event.preventDefault();

                    var lb;
                    return $(this).ekkoLightbox({
                        onShown: function() {

                            lb = this;

							$(lb.modal_content).on('click', '.modal-footer a', function(e) {

								e.preventDefault();
								lb.navigateTo(2);

							});

                        }
                    });
                });


            });
        </script>
</body>
</html>