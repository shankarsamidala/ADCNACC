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
					   <h3><span class="text-warning">NSS</span></h3>
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
						<h4 class="title text-warning">National Service Scheme</h4>
					</div>
					<div class="card-body">
						<p>The <strong>National Service Scheme (NSS)</strong> is an Indian Government -sponsored public Service program conducted by the Department of Youth Affairs and Sports of the Government of India. Popularly known as NSS, the scheme was launched in Gandhiji's Centenary year, 1969. Aimed at developing student's personality through community service, NSS is a voluntary association of young people in College working for a campus-community linkage. To recognize the voluntary service rendered by NSS volunteers, Programme Officers (POs), NSS Units and the University NSS Cells, it has been proposed to provide suitable awards under the scheme. The programme aims to inculcate social welfare in students, and to provide service to society without bias. NSS volunteers work to ensure that everyone who is needy gets help to enhance their standard of living and lead a life of dignity. In doing so, volunteers learn from people in villages how to lead a good life despite a scarcity of resources. It also provides help in natural and man-made disasters by providing food, clothing and first aid to the disaster victims.</p>
   
   <div data-code="example-2">
                                <div class="row">
                                    <a href="pop-img/nss-1.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="pop-img/nss-1.jpg" class="img-fluid">
                                    </a>
                                    <a href="pop-img/nss-2.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="pop-img/nss-2.jpg" class="img-fluid">
                                    </a>
                                    <a href="pop-img/nss-3.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="pop-img/nss-3.jpg" class="img-fluid">
                                    </a>
									<a href="pop-img/nss-4.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="pop-img/nss-4.jpg" class="img-fluid">
                                    </a>
                                </div>
								
								<div class="row">
                                    <a href="pop-img/nss-5.JPG" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="pop-img/nss-5.JPG" class="img-fluid">
                                    </a>
                                    <a href="pop-img/nss-6.JPG" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="pop-img/nss-6.JPG" class="img-fluid">
                                    </a>
                                    <a href="pop-img/nss-7.JPG" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="pop-img/nss-7.JPG" class="img-fluid">
                                    </a>
									<a href="pop-img/nss-8.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="pop-img/nss-8.jpg" class="img-fluid">
                                    </a>
                                </div>
				
				
				<div class="row">
                                    <a href="pop-img/nss-9.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="pop-img/nss-9.jpg" class="img-fluid">
                                    </a>
                                    <a href="pop-img/nss-10.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="pop-img/nss-10.jpg" class="img-fluid">
                                    </a>
                                    <a href="pop-img/nss-11.JPG" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="pop-img/nss-11.JPG" class="img-fluid">
                                    </a>
									<a href="pop-img/nss-12.JPG" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="pop-img/nss-12.JPG" class="img-fluid">
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