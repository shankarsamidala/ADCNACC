<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/css.php";?>
	<script type="text/javascript">

			function getAlbums(param){
				//Makes An AJAX Request On Load which retrieves the albums
				$.ajax({
			        type: 'post',
			        url: 'assets/scripts/loadGallery.php',
			        data: {
			           extra_params: param
			        },
			        success: function( data ) {
			        	//Hide The Spinner
			            document.getElementById("spinner").style.display = "none";
			            //Put the Data in the Div
			            document.getElementById("galleryDiv").innerHTML = data;
			        }
			    });
			}
		</script>
</head>
<?php 
		/* PAGINATION
			Proccess and Pagination 
			 - B: before
			 - A: after
			 They contain the photo_id of the image that was loaded before/after it, for pagination	
		*/
		
		
		if(isset($_GET['b']))
		{
			$quer = "&before=".$_GET['b'];
		}
		else if(isset($_GET['a']))
		{
			$quer = "&after=".$_GET['a'];
		}
		else{
			$quer = ""; //If It's blank it loads from the start of the album
		}
		//if they've already been navigating
	?>
<body class="sidebar-collapse" onLoad="getAlbums('<?php echo $quer; ?>')">
    <!-- Navbar -->
    <?php include "include/header.php";?>
  	<div class="page-top">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-md-8 align-self-end">
					<div class="title-bg">
					   <h3><a href="#" class="text-info">Home</a></h3>
					   <h3><span class="text-warning">Gallery</span></h3>
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
						<h4 class="title text-warning">Gallery</h4>
					</div>
					<div class="card-body">
						<div id="galleryDiv">
							<div class="row justify-content-center">
									<div class="col-sm-4" id="spinner">
										<h4 class="loader" ><i class="fa fa-spinner fa-pulse fa-fw"></i> Loading Albums...</h4>
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
</body>
</html>