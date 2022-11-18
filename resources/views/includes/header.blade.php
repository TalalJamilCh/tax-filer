<div class="full-width-header">
	<!--Header Start-->
	<header id="rs-header" class="rs-header header-style1">
		<!-- Toolbar Area Start -->
		<div class="toolbar-area topbar-style1 topbar-style2 hidden-md">
			<div class="container">
				<div class="row rs-vertical-middle">
					<div class="col-lg-7">
						<div class="toolbar-contact">
							<ul class="rs-contact-info">
								<li>
									<i class="fi fi-rr-envelope-plus"></i>
									<a href="mailto:info@fintax.pk">info@fintax.pk</a>
								</li>
								<li>
									<i class="fi fi-rr-phone-call"></i>
									<a href="tel:+923374009582">(+92) 337 4009582</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="toolbar-sl-share">
							<ul class="clearfix">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-vimeo"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Toolbar Area End -->

		<!-- Menu Start -->
		<div class="menu-area menu-sticky">
			<div class="container">
				<div class="row-table">
					<div class="col-cell header-logo">
						<div class="logo-area">
							<a href="/">
								<img class="normal-logo" src="assets/images/logo-dark.png" alt="logo">
								<img class="sticky-logo" src="assets/images/logo-dark.png" alt="logo">
							</a>
						</div>
					</div>
					<div class="col-cell">
						<div class="rs-menu-area">
							<div class="main-menu">
								<nav class="rs-menu hidden-md">
									<ul class="nav-menu">
										<li>
											<a href="/">Home</a>
										</li>
										<li>
											<a href="/services">Our Services</a>
										</li>
										<li>
											<a href="/blogs">Blogs</a>
										</li>
										<li>
											<a href="/contact">Contact Us</a>
										</li>
										<li>
											<a href="/tax-calculate">Tax Calculate</a>
										</li>
									</ul> <!-- //.nav-menu -->
								</nav>
							</div> <!-- //.main-menu -->
						</div>
					</div>
					<div class="col-cell">
						<div class="expand-btn-inner">
							<ul>
								<li class="sidebarmenu-search">
									<a class="hidden-xs rs-search" data-bs-toggle="modal" data-bs-target="#searchModal" href="#">
										<i class="fi fi-rr-search"></i>
									</a>
								</li>
								<li class="btn-quote"><a class="quote-button" href="#">Get A Quote</a></li>
								<li class="humburger">
									<a id="nav-expander" class="nav-expander bar" href="#">
										<div class="bar">
											<span class="dot1"></span>
											<span class="dot2"></span>
											<span class="dot3"></span>
											<span class="dot4"></span>
											<span class="dot5"></span>
											<span class="dot6"></span>
											<span class="dot7"></span>
											<span class="dot8"></span>
											<span class="dot9"></span>
										</div>
									</a>
								</li>
							</ul>
						</div>


					</div>
				</div>
				@if (\Session::has('success'))
				<div class="alert alert-success">
					<ul>
						<li>{!! \Session::get('success') !!}</li>
					</ul>
				</div>
				@endif
				@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
			</div>
		</div>
		<!-- Menu End -->

		<!-- Canvas Menu start -->
		<nav class="right_menu_togle menu-wrap-off  hidden-md">
			<div class="close-btn">
				<a id="nav-close" class="nav-close">
					<div class="line">
						<span class="line1"></span>
						<span class="line2"></span>
					</div>
				</a>
			</div>
			<div class="rs-offcanvas-inner">
				<div class="canvas-logo">
					<a href="/"><img src="assets/images/logo-dark.png" alt="logo"></a>
				</div>
				<div class="offcanvas-text">
					<p>Teknolab quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor theo lacus egestas etiusto odio data center.</p>
				</div>
				<div class="canvas-contact">
					<div class="address-area">
						<div class="address-list">
							<div class="info-icon">
								<i class="flaticon-location"></i>
							</div>
							<div class="info-content">
								<h4 class="title">Address</h4>
								<em>05 kandi BR. New York</em>
							</div>
						</div>
						<div class="address-list">
							<div class="info-icon">
								<i class="flaticon-email"></i>
							</div>
							<div class="info-content">
								<h4 class="title">Email</h4>
								<em><a href="mailto:Devsdesign">Devsdesign</a></em>
							</div>
						</div>
						<div class="address-list">
							<div class="info-icon">
								<i class="flaticon-call"></i>
							</div>
							<div class="info-content">
								<h4 class="title">Phone</h4>
								<em>+019988772</em>
							</div>
						</div>
					</div>
					<ul class="social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- Canvas Menu end -->

		<!-- Canvas Mobile Menu start -->
		<nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
			<div class="close-btn">
				<a id="nav-close2" class="nav-close">
					<div class="line">
						<span class="line1"></span>
						<span class="line2"></span>
					</div>
				</a>
			</div>
			<ul class="nav-menu">
				<li>
					<a href="/about">About Us</a>
				</li>
				<li>
					<a href="/services">Our Services</a>
				</li>
				<li>
					<a href="/blogs">Blogs</a>
				</li>
				<li>
					<a href="/contact">Contact Us</a>
				</li>
			</ul> <!-- //.nav-menu -->

			<!-- //.nav-menu -->
			<div class="canvas-contact">
				<div class="address-area">
					<div class="address-list">
						<div class="info-icon">
							<i class="flaticon-location"></i>
						</div>
						<div class="info-content">
							<h4 class="title">Address</h4>
							<em>05 kandi BR. New York</em>
						</div>
					</div>
					<div class="address-list">
						<div class="info-icon">
							<i class="flaticon-email"></i>
						</div>
						<div class="info-content">
							<h4 class="title">Email</h4>
							<em><a href="mailto:Devsdesign">Devsdesign</a></em>
						</div>
					</div>
					<div class="address-list">
						<div class="info-icon">
							<i class="flaticon-call"></i>
						</div>
						<div class="info-content">
							<h4 class="title">Phone</h4>
							<em>+019988772</em>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<!-- Canvas Menu end -->
	</header>
	<!--Header End-->
</div>