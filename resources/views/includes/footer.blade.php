<footer id="rs-footer" class="rs-footer footer-main-home">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 md-mb-20">
					<div class="footer-logo mb-51 md-mb-30">
						<a href="index.html"><img src="assets/images/logo-dark1.png" alt=""></a>
					</div>
					<div class="textwidget mb-33">
						We provide the best tax services in Lahore. <br>
						The initiative aims to simplify the tax filing process for individuals and to promote the culture of documentation in Pakistan.
					</div>
					<!-- <ul class="app-store">
						<li><a href="#"><img src="assets/images/footer/playstore.png" alt=""></a></li>
						<li><a href="#"><img src="assets/images/footer/appstore.png" alt=""></a></li>
					</ul> -->
				</div>
				<div class="col-lg-3 pl-76 md-pl-15 md-mb-10">
					<h3 class="footer-title">Contact Info</h3>
					<ul class="address-widget">
						<li>
							<i class="fi fi-rr-map-marker-home"></i>
							<div class="desc">Thokar Niaz Baig, 81 Canal Breeze, Ali Town Lahore, Punjab 54000
							</div>
						</li>
						<li>
							<i class="fi fi-rr-phone-call"></i>
							<div class="desc">
								<a href="tel:+923374009582">(+92) 337 4009582</a>
							</div>
						</li>
						<li>
							<i class="fi fi-rr-envelope-plus"></i>
							<div class="desc">
								<a href="mailto:info@fintax.pk">info@fintax.pk</a>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-lg-3 pl-75 md-pl-15 md-mb-10">
					<h3 class="footer-title">Services</h3>
					<ul class="site-map">
						<li><a href="/services">NTN registration</a></li>
						<li><a href="/services">Company registration</a></li>
						<li><a href="/services">WeBoc Registration</a></li>
						<li><a href="/services">Trademark registration</a></li>
					</ul>
				</div>
				<div class="col-lg-3">
					<h3 class="footer-title">Subscribe Newsletter</h3>
					<form id="subscription-form" method="post" action="{{ route('user.subscribe')}}">
						@csrf
						<div class="form-group">
							<p>
								<input type="email" name="email" placeholder="Your Email Address" required="">
								<input type="submit" value="Subscribe Now">
							</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row y-middle">
				<div class="col-lg-6 md-mb-10 text-lg-end text-center order-last">
					<ul class="footer-social md-mb-7">
						<li>
							<a href="#" target="_blank"><span><i class="fa fa-facebook"></i></span></a>
						</li>
						<li>
							<a href="# " target="_blank"><span><i class="fa fa-twitter"></i></span></a>
						</li>

						<li>
							<a href="# " target="_blank"><span><i class="fa fa-pinterest-p"></i></span></a>
						</li>
						<li>
							<a href="# " target="_blank"><span><i class="fa fa-instagram"></i></span></a>
						</li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="copyright text-lg-start text-center ">
						<p>Copyright © 2022 Fintax.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>