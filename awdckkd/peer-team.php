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
					   <h3><span class="text-warning">Peer Team Visit Photos</span></h3>
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
						<h4 class="title text-warning">Peer Team Visit Photos</h4>
					</div>
					<div class="card-body">
							<div data-code="example-2">
                                <div class="row">
                                    <a href="assets/img/peer-team/large/1.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="assets/img/peer-team/large/1.jpg" class="img-fluid">
                                    </a>
                                    <a href="assets/img/peer-team/large/2.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="assets/img/peer-team/large/2.jpg" class="img-fluid">
                                    </a>
                                    <a href="assets/img/peer-team/large/3.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="assets/img/peer-team/large/3.jpg" class="img-fluid">
                                    </a>
									<a href="assets/img/peer-team/large/4.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="assets/img/peer-team/large/4.jpg" class="img-fluid">
                                    </a>
                                </div>
								<div class="row">
                                    <a href="assets/img/peer-team/large/5.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="assets/img/peer-team/large/5.jpg" class="img-fluid">
                                    </a>
                                    <a href="assets/img/peer-team/large/6.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="assets/img/peer-team/large/6.jpg" class="img-fluid">
                                    </a>
                                    <a href="assets/img/peer-team/large/7.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="assets/img/peer-team/large/7.jpg" class="img-fluid">
                                    </a>
									<a href="assets/img/peer-team/large/8.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="assets/img/peer-team/large/8.jpg" class="img-fluid">
                                    </a>
                                </div>
								<div class="row">
                                    <a href="assets/img/peer-team/large/9.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="assets/img/peer-team/large/9.jpg" class="img-fluid">
                                    </a>
                                    <a href="assets/img/peer-team/large/10.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="assets/img/peer-team/large/10.jpg" class="img-fluid">
                                    </a>
                                    <a href="assets/img/peer-team/large/11.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="assets/img/peer-team/large/11.jpg" class="img-fluid">
                                    </a>
									<a href="assets/img/peer-team/large/12.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group">
                                        <img src="assets/img/peer-team/large/12.jpg" class="img-fluid">
                                    </a>
                                </div>
							</div>	
							 <code class="html" data-code="example-2"></code>
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