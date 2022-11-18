
<!DOCTYPE html>
<html lang="zxx"> 
	<head>
		<!-- meta tag -->
		<meta charset="utf-8">
		<base href="/">
		@yield('meta_tag')
		<meta name="description" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
		@include('includes.css')
	</head>
	<body class="defult-home">
		
		<div class="offwrap"></div>

		<!--Preloader start here-->
	   	<div id="pre-load">
            <div id="loader" class="loader">
                <div class="loader-container">
                    <div class="loader-icon"><img src="assets/images/fav.png" alt="Fintax -- Tax Filer Consultant "></div>
                </div>
            </div>              
        </div>
		<!--Preloader area end here-->
			
		<!-- Main content Start -->
		<div class="main-content">

			<!--Full width header Start-->
			@include('includes.header')
			<!--Full width header End-->
			@yield('main_content')
		</div> 
		<!-- Main content End -->
	 
		<!-- Footer Start -->
		@include('includes.footer')
		
		<!-- Footer End -->

		<!-- start scrollUp  -->
		<div id="scrollUp">
			<i class="fa fa-angle-up"></i>
		</div>
		<!-- End scrollUp  -->


		<!-- Search Modal Start -->
		<div class="modal fade search-modal" id="searchModal" tabindex="-1">
			<button type="button" class="close" data-bs-dismiss="modal">
				<i class="fi fi-rr-cross-small"></i>
			</button>
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="search-block clearfix">
						<form>
							<div class="form-group">
								<input class="form-control" placeholder="Searching..." type="text">
								<button type="submit" value="Search"><i class="fi fi-rr-search"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Search Modal End -->

		<!-- modernizr js -->
		@include('includes.scripts')
	</body>
</html>