 <header class="site-header header mo-left header-style-1">
        <!-- top bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="dlab-topbar-left"> </div>



                    <div class="dlab-topbar-right">
                         <?php if($_SESSION['name']){  ?>
                        <ul>
                        
                            <li> Welcome  <?php echo $_SESSION['name']; ?></li>
                          </ul>  
 
<?php }else{ ?> 
                        <ul class="social-bx list-inline pull-right">
                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-google-plus"></a></li>
                        </ul>

<?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- top bar END-->
        <!-- main header -->
        <div class="sticky-header header-curve main-bar-wraper navbar-expand-lg">
            <div class="main-bar bg-primary clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion"><a href="index.php"><img src="images/logo.png" width="193" height="89" alt=""></a></div>
                    <!-- nav toggle button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- extra nav -->
                 <!--    <div class="extra-nav">
                        <div class="extra-cell">
                            <button id="quik-search-btn" type="button" class="site-button bg-primary-dark"><i class="fa fa-login"></i></button>
                        </div>
                    </div> -->
                    <!-- Quik search -->
                    <div class="dlab-quik-search bg-primary">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span id="quik-search-remove"><i class="fa fa-remove"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="nav navbar-nav nav-style">
                            <li class="active"> <a href="javascript:;">Home<i class="fa fa-chevron-down"></i></a>
                             <!--   <ul class="sub-menu">
                                    <li><a href="index.html">Home Car Service</a></li>
                                    <li><a href="index-2.html">Car Washing</a></li>
                                    <li><a href="index-3.html">Car Denting Penting</a></li>
                                    <li><a href="index-4.html">Auto Car Service</a></li>
									<li><a href="index-5.html">Car Maintenance</a></li>
									<li><a href="index-6.html">Swiper Home <span class="new-tag">New</span></a></li>
									<li><a href="index-7.html">Onepage 1 <span class="new-tag">New</span></a></li>
									<li><a href="index-8.html">Onepage 2 <span class="new-tag">New</span></a></li>
                                </ul> -->
                            </li>
                            <li> <a href="javascript:;">Features<i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li> <a href="javascript:;">Header <i class="fa fa-angle-right"></i></a>
                                     <!--    <ul class="sub-menu">
                                            <li><a href="header-style-1.html">Header 1</a></li>
                                            <li><a href="header-style-2.html">Header 2</a></li>
                                            <li><a href="header-style-3.html">Header 3</a></li>
                                            <li><a href="header-style-4.html">Header 4</a></li>
                                            <li><a href="header-style-5.html">Header 5</a></li>
											<li><a href="header-style-6.html">Header 6</a></li>
											<li><a href="header-style-7.html">Header 7</a></li>
                                        </ul> -->
                                    </li>
                                    <li> <a href="javascript:;">Footer <i class="fa fa-angle-right"></i></a>
                                      <!--   <ul class="sub-menu">
                                            <li><a href="footer-fixed.html">Footer Fixed</a></li>
                                            <li><a href="footer-white.html">Footer White</a></li>
                                        </ul> -->
                                    </li>
                                </ul>
                            </li>
							<li class="has-mega-menu "> <a href="javascript:;">Pages<i class="fa fa-chevron-down"></i></a>
                                <ul class="mega-menu">
                                    <li> <a href="javascript:;">Pages</a>
                                      <!--   <ul>
                                            <li><a href="about-1.html">About us 1</a></li>
                                            <li><a href="about-2.html">About us 2</a></li>
											<li><a href="faq-1.html">FAQ 1</a></li>
                                            <li><a href="faq-2.html">FAQ 2</a></li>
											<li><a href="our-team.html">Our Team</a></li>
											<li><a href="testimonials.html">testimonials</a></li>
											<li><a href="career.html">Career</a></li>
											<li><a href="who-we-are.html">Who we are</a></li>
											<li><a href="project.html">Project</a></li>
                                            <li><a href="project-details.html">Project Details</a></li>
										</ul> -->
                                    </li>
                                    <li> <a href="javascript:;">Pages</a>
                                  <!--       <ul>
                                            <li><a href="all-service.html">All Service </a></li>
                                            <li><a href="engine-diagnostics.html">Engine Diagnostics</a>  </li>
											<li><a href="lube-oil-and-filters.html">Lube Oil And Filters</a>  </li>
											<li><a href="belts-and-hoses.html">Belts And Hoses</a>  </li>
											<li><a href="air-conditioning.html">Air Conditioning</a> </li>
											<li><a href="brake-repair.html">Brake Repair</a> </li>
											<li><a href="tire-and-wheel-services.html">Tire And Wheel Services</a> </li>
											<li><a href="service-car-cleaning.html">Car Cleaning</a></li>
											<li><a href="service-car-services.html">Car Services</a></li>
											<li><a href="service-car-wrapping.html">Car Wrapping</a></li>
                                        </ul> -->
                                    </li>
                                    <li> <a href="javascript:;">Pages</a>
                                      <!--   <ul>
                                            <li><a href="service-dent-paint.html">Car Dent Paint</a></li>
											<li><a href="services-1.html">Services 1 </a></li>
											<li><a href="services-2.html">Services 2</a></li>
											<li><a href="services-3.html">Services 3</a></li>
											<li><a href="portfolio-1.html">Portfolio 1</a></li>
                                            <li><a href="portfolio-2.html">Portfolio 2</a></li>
                                            <li><a href="portfolio-3.html">Portfolio 3</a></li>
                                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
											<li><a href="full-page-gallery-dark.html">Gallery Full Page Style 1</a></li>
											<li><a href="full-page-gallery-light.html">Gallery Full Page Style 2</a></li>
                                        </ul> -->
                                    </li>
                                    <li> <a href="javascript:;">Pages</a>
                                    <!--     <ul>
                                            <li><a href="gallery-grid-2.html">Gallery Grid 2</a></li>
                                            <li><a href="gallery-grid-3.html">Gallery Grid 3</a></li>
                                            <li><a href="gallery-grid-4.html">Gallery Grid 4</a></li>
                                            <li><a href="error-404.html">Error 404</a></li>
											<li><a href="coming-soon-1.html">Coming Soon 1</a></li>
											<li><a href="coming-soon-2.html">Coming Soon 2</a></li>
											<li><a href="login-1.html">Login 1</a></li>
											<li><a href="login-2.html">Login 2</a></li>
                                        </ul> -->
                                    </li>
                                </ul>
                            </li>
                            <li> <a href="javascript:;">Shop<i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
									<li> <a href="javascript:;">Product <i class="fa fa-angle-right"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="shop-grid-4.html">Product 1</a></li>
											<li><a href="shop-product.html">Product 2</a></li>
											<li><a href="shop-product-2.html">Product 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-product-details.html">Product details</a></li>
                                    <li><a href="shop-cart.html">Cart</a></li>
									<li><a href="shop-cart-empty.html">Cart Empty</a></li>
									<li><a href="shop-wishlist.html">Wishlist</a></li>
                                    <li><a href="shop-checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                        
                     
                            <li> <a href="javascript:;">Contact us <i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="contact.html">Contact us 1</a></li>
                                    <li><a href="contact-2.html">Contact us 2</a></li>
                                    <li><a href="contact-3.html">Contact us 3</a></li>
                                    <li><a href="contact-4.html">Contact us 4</a></li>
                                </ul>
                            </li>

                                <li  style="padding-top: 12px; padding-bottom: 32px;">
                                    <?php if($_SESSION['name']){  ?>
                                         <a href="logout.php"> <button class="site-button s-r15" type="button"> Logout</button></a>

                                  <?php   }else{ ?>

                                    <a href="login.php"> <button class="site-button s-r15" type="button">Login</button></a>
                              
                           <?php } ?>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->