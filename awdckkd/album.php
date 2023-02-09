<?php
	        		
	include('config.txt');

	//CURL Function which gets the data from FB
	 function curl_get_contents($url)
		{
		  $ch = curl_init($url);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		  $data = curl_exec($ch);
		  curl_close($ch);
		  return $data;
		}
		
	//If the Album ID is set in the URL, get it and get  the data from facebook
	if(isset($_GET['id'])){
			$fields = "count,created_time,description,link,name";
			$id = $_GET['id'];
			$json_link = "https://graph.facebook.com/".$_GET['id']."/?access_token={$access_token}&fields={$fields}";
			
			$album = json_decode(curl_get_contents($json_link));
	}
	else{
		//If there's no ID set, DIE
		die();
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/css.php";?>
	<script type="text/javascript">
			
			function getAlbum(param){

				$.ajax({
			        type: 'post',
			        url: 'assets/scripts/loadAlbum.php',
			        data: {
			        	id: '<?php echo $id;?>',
			           	extra_params: param,
			           	album_name: '<?php echo $album->name;?>'
			        },
			        success: function( data ) {
			            document.getElementById("spinner").style.display = "none";
			            document.getElementById("galleryDiv").innerHTML = data;
			        }
			    });
			}
		</script>
</head>
<?php 

		/*
			Pagination
		*/
		if(isset($_GET['position']) && isset($_GET['ref']))
		{
			if($_GET['position'] == "a"){
				$quer = "&after=".$_GET['ref'];
			}
			else{
				$quer = "&before=".$_GET['ref'];
			}
		}
		else{
			$quer = "";
		}

	?>
<body class="sidebar-collapse" onLoad="getAlbum('<?php echo $quer; ?>')">
    <!-- Navbar -->
    <?php include "include/header.php";?>
  	<div class="page-top">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-md-8 align-self-end">
					<div class="title-bg">
					   <h3><a href="index.php" class="text-info">Home</a></h3>
					   <h3><span class="text-warning"><a href="index.php#gallery" class="text-info">Gallery</a> / <?php echo $album->name; ?></span></h3>
				  </div>
				</div>
			</div>
		</div>		   
	</div>
	<div class="page-content">
	<div class="container content-pt">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-warning">
					<div class="card-header">
						<h4 class="title text-warning"><a href="index.php#gallery" class="text-info">Gallery</a> / <?php echo $album->name; ?></h4>
					</div>
					<div class="card-body">
						<div id="galleryDiv">
							<div class="row justify-content-center">
									<div class="col-sm-4" id="spinner">
										<h4 class="loader" ><i class="fa fa-spinner fa-pulse fa-fw"></i> Loading Photos...</h4>
									</div>
							</div> <!--End Row -->
						</div>
					</div>
				</div>
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