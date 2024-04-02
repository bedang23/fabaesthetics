		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header floating-header dark custom-header-size" data-sticky-shrink="false">
			<div id="header-wrap" class="border-bottom-0">
				<div class="container pe-md-0">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo" class="me-lg-4 pe-lg-4">
							<a href="{{ '/' }}">
								<img class="logo-default" src="assets/images/logo.png"  alt="Canvas Logo">
							</a>
						</div><!-- #logo end -->

						<div class="primary-menu-trigger">
							<button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
								<span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
							</button>
						</div>

						<div class="header-misc ms-lg-auto">
							<a href="#" class="fw-medium font-primary" data-scrollto="#section-appointment"a>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container style-2 one-page-menu">
								<li class="menu-item border-light {{ request()->is('/') ? ' current' : '' }}">
									 <a class="menu-link" href="{{ '/' }}">
										  <div class="overflow-hidden">
												<div data-animate="fadeInDownSmall">Home</div>
										  </div>
									 </a>
								</li>
								<li class="menu-item border-light {{ request()->is('about') ? ' current' : '' }}">
									 <a class="menu-link" href="{{ '/about' }}">
										  <div class="overflow-hidden">
												<div data-animate="fadeInDownSmall" data-delay="200">About</div>
										  </div>
									 </a>
								</li>
								<li class="menu-item border-light">
									<a class="menu-link" href="#" id="skin-treatment-dropdown-toggle">
										 <div class="overflow-hidden">
											  <div data-animate="fadeInDownSmall" data-delay="200">Skin Treatment</div>
										 </div>
									</a>
									<!-- Dropdown menu -->
									<ul class="submenu" id="skin-treatment-dropdown">
										 <li><a href="#">Acne Treatment</a></li>
										 <li><a href="#">Acne Scars</a></li>
										 <li><a href="#">Pigmentation Treatment</a></li>
										 <li><a href="#">Skin Whitening Treatment</a></li>
										 <!-- Add more service items as needed -->
									</ul>
							  </li>
							  <li class="menu-item border-light">
									<a class="menu-link" href="#" id="hair-treatment-dropdown-toggle">
										 <div class="overflow-hidden">
											  <div data-animate="fadeInDownSmall" data-delay="200">Hair Treatment</div>
										 </div>
									</a>
									<!-- Dropdown menu -->
									<ul class="submenu" id="hair-treatment-dropdown">
										 <li><a href="#">Hair fall Treatment</a></li>
										 <li><a href="#">Dandruff Treatment</a></li>
										 <li><a href="#">Hair Regrowth Treatment</a></li>
										 <li><a href="#">GFC Hair Treatment</a></li>
										 <li><a href="#">Hair Transplant</a></li>
										 <!-- Add more service items as needed -->
									</ul>
							  </li>

								<li class="menu-item border-light">
									 <a class="menu-link" href="#">
										  <div class="overflow-hidden">
												<div data-animate="fadeInDownSmall" data-delay="400">Price</div>
										  </div>
									 </a>
								</li>
								<li class="menu-item border-light {{ request()->is('contact') ? ' current' : '' }}">
									 <a class="menu-link" href="{{ '/contact' }}">
										  <div class="overflow-hidden">
												<div data-animate="fadeInDownSmall" data-delay="800">Contact</div>
										  </div>
									 </a>
								</li>
						  </ul>

						</nav>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header>
		<!-- #header end -->