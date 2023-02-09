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
                     <h3><span class="text-warning">Infrastructure</span></h3>
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
                        <h4 class="title text-warning">Infrastructure</h4>
                     </div>
                     <div class="card-body">
                        <div data-code="example-2">
										<div class="row"> <a href="pop-img/infra1.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group"> <img src="pop-img/infra1.jpg" class="img-fluid"> </a> <a href="pop-img/infra2.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group"> <img src="pop-img/infra2.jpg" class="img-fluid"> </a> <a href="pop-img/infra3.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group"> <img src="pop-img/infra3.jpg" class="img-fluid"> </a> <a href="pop-img/infra4.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group"> <img src="pop-img/infra4.jpg" class="img-fluid"> </a> </div>
										<div class="row"> <a href="pop-img/infra5.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group"> <img src="pop-img/infra5.jpg" class="img-fluid"> </a> <a href="pop-img/infra6.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group"> <img src="pop-img/infra6.jpg" class="img-fluid"> </a> <a href="pop-img/infra7.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group"> <img src="pop-img/infra7.jpg" class="img-fluid"> </a> <a href="pop-img/infra8.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group"> <img src="pop-img/infra8.jpg" class="img-fluid"> </a> </div>
										<div class="row"> <a href="pop-img/infra9.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group"> <img src="pop-img/infra9.jpg" class="img-fluid"> </a> <a href="pop-img/infra10.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group"> <img src="pop-img/infra10.jpg" class="img-fluid"> </a> <a href="pop-img/infra11.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group"> <img src="pop-img/infra11.jpg" class="img-fluid"> </a> <a href="pop-img/infra12.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group"> <img src="pop-img/infra12.jpg" class="img-fluid"> </a> 
																									</div>
																									
<div class="row"> <a href="pop-img/infra13.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group"> <img src="pop-img/infra13.jpg" class="img-fluid"> </a> <a href="pop-img/infra14.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group"> <img src="pop-img/infra14.jpg" class="img-fluid"> </a> <a href="pop-img/infra15.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group"> <img src="pop-img/infra15.jpg" class="img-fluid"> </a> <a href="pop-img/infra16.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group"> <img src="pop-img/infra16.jpg" class="img-fluid"> </a> 
																									
																									</div>
																									<div class="row"> 
																										<a href="pop-img/infra17.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group"> 
																											<img src="pop-img/infra17.jpg" class="img-fluid">
																										</a>
																										<a href="pop-img/infra18.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 form-group"> 
																											<img src="pop-img/infra18.jpg" class="img-fluid">
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