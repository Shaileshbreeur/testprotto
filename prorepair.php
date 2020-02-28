<?php
error_reporting(0);
session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="AutoCare is well designed creating websites of automotive repair shops, stores with spare parts and accessories for car repairs, car washes, car danting and panting, service stations, car showrooms painting, major auto centers and other sites related to cars and car services." />
    <meta property="og:title" content="Auto Care - Car Services Template" />
    <meta property="og:description" content="AutoCare is well designed creating websites of automotive repair shops, stores with spare parts and accessories for car repairs, car washes, car danting and panting, service stations, car showrooms painting, major auto centers and other sites related to cars and car services." />
    <meta property="og:image" content="http://autocare.dexignlab.com/xhtml/social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>Auto Care - Car Services Template</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
    <link rel="stylesheet" type="text/css" href="css/templete.min.css">
    <link class="skin"  rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
    <!-- Revolution Slider Css -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="plugins/revolution/css/navigation.css">

</head>
<body id="bg"><div id="loading-area"></div>
<div class="page-wraper">
    <!-- header -->
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
                    <div class="logo-header mostion"><a href="index.html"><img src="images/logo.png" width="193" height="89" alt=""></a></div>
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
                            <li class="active"> <a href="index.php">Home<i class="fa fa-chevron-down"></i></a>
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
	<!-- Content -->
    <div class="page-content">
		<!-- Main Slider -->
        <div class="rev-slider">
			<div id="rev_slider_265_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container errow-style-1" data-alias="" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
				<!-- START REVOLUTION SLIDER 5.4.6.3 fullwidth mode -->
				<div id="rev_slider_265_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.6.3">
					<ul>
						<!-- SLIDE  -->
						<li data-index="rs-200" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="images/main-slider/slide7.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
							<!-- MAIN IMAGE -->
							<img src="images/main-slider/slide7.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
							<!-- LAYER NR. 1 [ for overlay ] -->
							<div class="tp-caption tp-shape tp-shapewrapper"
								id="slide-200-layer-1"
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
								data-width="full"
								data-height="full"
								data-whitespace="nowrap"
								data-type="shape"
								data-basealign="slide"
								data-responsive_offset="off"
								data-responsive="off"
								data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
								data-textAlign="['left','left','left','left']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 1;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;">
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption tp-resizeme text-primary"
								id="slide-200-layer-2"
								data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
								data-y="['top','top','top','top']" data-voffset="['200','200','200','200']"
								data-fontsize="['76','76','56','40']"
								data-lineheight="['86','86','66','46']"
								data-width="['800','800','800','800']"
								data-type="text"
								data-responsive_offset="on"
								data-frames='[{"delay":"+500","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
								data-textAlign="['left','left','left','left']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 7; white-space: nowrap; font-size: 76px; color:#fff; font-family: 'Poppins',sans-serif; line-height: 50px; font-weight: bold; letter-spacing: 0px;">
									<span class="text-primary">CAR </span>PENTING
							</div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption tp-resizeme"
								id="slide-200-layer-4"
								data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
								data-y="['top','top','top','top']" data-voffset="['300','250','280','260']"
								data-fontsize="['20','20','18','16']"
								data-lineheight="['30','30','28','26']"
								data-width="['800','800','700','420']"
								data-type="text"
								data-responsive_offset="on"
								data-frames='[{"delay":"+1990","speed":2000,"frame":"0","from":"opacity:0;","color":"#e5452b","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
								data-textAlign="['inherit','inherit','inherit','inherit']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 6; font-size: 22px; line-height: 28px; font-weight: 500; color: #fff; white-space: inherit; font-family:Nunito;">We offer a full range of hairdressing services for men and women, eyebrow and eyelash care, the services of make-up artists and stylists. Entrust your beauty to professionals who really care about...
							</div>

							<!-- LAYER NR. 6 -->
							<div class="tp-caption tp-resizeme"
								id="slide-200-layer-5"
								data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
								data-y="['top','top','top','top']" data-voffset="['420','370','400','400']"
								data-fontsize="['none','none','none','none']"
								data-lineheight="['none','none','none','none']"
								data-width="['none','none','none','none']"
								data-type="button"
								data-actions=''
								data-responsive_offset="on"
								data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
								data-textAlign="['inherit','inherit','inherit','inherit']"
								data-paddingtop="[0]"
								data-paddingright="[0]"
								data-paddingbottom="[0]"
								data-paddingleft="[0]"
								style="z-index: 10; white-space: nowrap; font-size: 22px; line-height: 30px; font-weight: 600;  font-family:Montserrat; border-radius:3px 3px 3px 3px; outline:none; box-shadow:none; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box; cursor:pointer; text-decoration: none;">
									<a href="my-booking-repair.php" class="site-button button-lg">Read More</a>
							</div>

							<div class="tp-caption tp-resizeme"
								id="slide-200-layer-6"
								data-x="['left','left','left','left']" data-hoffset="['230','230','230','210']"
								data-y="['top','top','top','top']" data-voffset="['420','370','400','400']"
								data-fontsize="['none','none','none','none']"
								data-lineheight="['none','none','none','none']"
								data-width="['none','none','none','none']"
								data-type="button"
								data-actions=''
								data-responsive_offset="on"
								data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
								data-textAlign="['inherit','inherit','inherit','inherit']"
								data-paddingtop="[0]"
								data-paddingright="[0]"
								data-paddingbottom="[0]"
								data-paddingleft="[0]"
								style="z-index: 11; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:Montserrat; border-radius:3px 3px 3px 3px; outline:none; box-shadow:none; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box; cursor:pointer; text-decoration: none;">
									<a href="#" class="site-button-secondry button-lg">Our Solutions</a>
							</div>
						</li>
					</ul>
					<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
				</div>
			</div>
		</div>
        <!-- Main Slider -->
		<!-- About Section -->
		<div class="section-full bg-img-fix p-tb40 overlay-primary-dark get-a-quote" style="background-image:url(images/background/bg5.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<h2 class="pull-left m-b0 text-white m-t5">“Take care of your car in the garage, and the car will take care of you on the road.”</h2>
					</div>
					<div class="col-lg-3">
						<div class="pull-right"><a href="my-booking-repair.php" class="site-button white radius-sm">About Us</a></div>
					</div>
				</div>
			</div>
		</div>
	    <!-- About Section End -->
		<!-- Our Services -->
		<div class="section-full bg-img-fix overlay-white-dark content-inner" style="background-image:url(images/background/bg7.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 m-b30">
						<div class="icon-bx-wraper p-a30 center bg-white">
							<div class=" text-primary icon-md m-b20">
								<a href="#" class="icon-cell"><i class="ti-car"></i></a>
							</div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-uppercase">Car Denting</h5>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
								<a href="#" class="text-primary">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 m-b30 ">
						<div class="icon-bx-wraper p-a30 center bg-white">
							<div class=" text-primary icon-md m-b20">
								<a href="#" class="icon-cell"><i class="ti-paint-roller"></i></a>
							</div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-uppercase">Car Penting</h5>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
								<a href="#" class="text-primary">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 m-b30">
						<div class="icon-bx-wraper p-a30 center bg-white">
							<div class=" text-primary icon-md m-b20">
								<a href="#" class="icon-cell"><i class="ti-bar-chart"></i></a>
							</div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-uppercase">Smart Technology</h5>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
								<a href="#" class="text-primary">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	    <!-- Our Services END-->
	    <!-- Our Awesome Services -->
        <div class="section-full awesome-services-4 bg-white">
            <div class="clearfix">

							<div class="p-a30 bg-white m-b30 p-b0">
									<!-- <div class="section-head">
											<h2 class="text-uppercase">Icon box with circle and all size</h2>
									</div> -->
                  <div class="section-head text-center">
                      <h2 class="text-uppercase">Icon box with circle and all size</h2>
                      <div class="dlab-separator-outer ">
                          <div class="dlab-separator bg-primary style-skew"></div>
                      </div>
 
                     </div>

									<div class="section-content">
											<div class="row">
													<div class="col-lg-4 col-md-6 col-sm-12 m-b30">
															<div class="icon-bx-wraper left">
																	<div class="icon-bx-md bg-primary radius"> <a href="#" class="icon-cell"><i class="ti-user"></i></a> </div>
																	<div class="icon-content">
																			<h5 class="dlab-tilte text-uppercase">Content title</h5>
																			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat </p>
																	</div>
															</div>
													</div>
													<div class="col-lg-4 col-md-6 col-sm-12 m-b30">
															<div class="icon-bx-wraper left">
																	<div class="icon-bx-md bg-primary radius"> <a href="#" class="icon-cell"><i class="ti-user"></i></a> </div>
																	<div class="icon-content">
																			<h5 class="dlab-tilte text-uppercase">Content title</h5>
																			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat </p>
																	</div>
															</div>
													</div>
													<div class="col-lg-4 col-md-6 col-sm-12 m-b30">
															<div class="icon-bx-wraper left">
																	<div class="icon-bx-md bg-primary radius"> <a href="#" class="icon-cell"><i class="ti-user"></i></a> </div>
																	<div class="icon-content">
																			<h5 class="dlab-tilte text-uppercase">Content title</h5>
																			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat </p>
																	</div>
															</div>
													</div>
											</div>
											<div class="row">
													<div class="col-lg-4 col-md-6 col-sm-12 m-b30">
															<div class="icon-bx-wraper left">
																	<div class="icon-bx-md bg-primary radius"> <a href="#" class="icon-cell"><i class="ti-user"></i></a> </div>
																	<div class="icon-content">
																			<h5 class="dlab-tilte text-uppercase">Content title</h5>
																			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat </p>
																	</div>
															</div>
													</div>
													<div class="col-lg-4 col-md-6 col-sm-12 m-b30">
															<div class="icon-bx-wraper left">
																	<div class="icon-bx-md bg-primary radius"> <a href="#" class="icon-cell"><i class="ti-user"></i></a> </div>
																	<div class="icon-content">
																			<h5 class="dlab-tilte text-uppercase">Content title</h5>
																			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat </p>
																	</div>
															</div>
													</div>
													<div class="col-lg-4 col-md-6 col-sm-12 m-b30">
															<div class="icon-bx-wraper left">
																	<div class="icon-bx-md bg-primary radius"> <a href="#" class="icon-cell"><i class="ti-user"></i></a> </div>
																	<div class="icon-content">
																			<h5 class="dlab-tilte text-uppercase">Content title</h5>
																			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat </p>
																	</div>
															</div>
													</div>
											</div>
									</div>
</div>
            </div>
        </div>
        <!-- Our Awesome Services END -->
        <!-- Services -->

        <!-- Services End -->
		<!-- Meet Our Team -->

        <!-- Meet Our Team END -->
        <!-- Testimoniyal -->
		<div class="section-full bg-img-fix content-inner overlay-white-dark" style="background-image:url(images/background/bg5.jpg); margin-top:-1px">
            <div class="container">


              <div class="section-head text-center">
                  <h2 class="text-uppercase">Our <span class="text-primary">Testimonial</span></h2>
                  <div class="dlab-separator-outer ">
                      <div class="dlab-separator bg-primary style-skew"></div>
                  </div>
                  <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>

                 </div>
				<!-- <div class="section-head text-center ">
                    <h2 class="text-uppercase">Our <span class="text-primary">Testimonial</span></h2>
					<p>There are many variations of passages of Lorem Ipsum typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div> -->
				<div class="section-content">
					<div class="testimonial-three owl-carousel owl-theme">
							<div class="item">
									<div class="testimonial-3">
											<div class="quote-left"></div>
											<div class="testimonial-text">
													<p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
											</div>
											<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
											<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
									</div>
							</div>
							<div class="item">
									<div class="testimonial-3">
											<div class="quote-left"></div>
											<div class="testimonial-text">
													<p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
											</div>
											<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
											<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
									</div>
							</div>
							<div class="item">
									<div class="testimonial-3">
											<div class="quote-left"></div>
											<div class="testimonial-text">
													<p>There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
											</div>
											<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
											<div class="testimonial-pic radius shadow"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
									</div>
							</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Testimoniyal End -->
        <!-- Client logo -->
        <div class="section-full dlab-we-find bg-img-fix p-t50 p-b50 ">
            <div class="container">
                <div class="section-content">
                    <div class="client-logo-carousel owl-carousel mfp-gallery gallery owl-btn-center-lr">
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"><a href="#"><img src="images/client-logo/logo1.jpg" alt=""></a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="images/client-logo/logo2.jpg" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="images/client-logo/logo1.jpg" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="images/client-logo/logo3.jpg" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="images/client-logo/logo4.jpg" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="images/client-logo/logo3.jpg" alt=""></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client logo END -->
    </div>
    <!-- Content END-->
    <!-- Footer -->
    <footer class="site-footer">
        <!-- footer top part -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget widget_about">
                            <div class="logo-footer"><img src="images/logo-dark2.png" alt=""></div>
                            <p><strong>Auto Care</strong> ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore agna aliquam erat . wisi enim ad minim veniam, quis tation. sit amet, consec tetuer.ipsum dolor sit amet, consectetuer.</p>
                            <ul class="dlab-social-icon dez-border">
                                <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                                <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
                                <li><a class="fa fa-linkedin" href="javascript:void(0);"></a></li>
                                <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget recent-posts-entry">
                            <h4 class="m-b15 text-uppercase">Recent Post</h4>
                            <div class="dlab-separator-outer m-b10">
                                <div class="dlab-separator bg-white style-skew"></div>
                            </div>
                            <div class="widget-post-bx">
                                <div class="widget-post clearfix">
                                    <div class="dlab-post-media"> <img src="images/blog/recent-blog/pic1.jpg" alt="" width="200" height="143"> </div>
                                    <div class="dlab-post-info">
                                        <div class="dlab-post-header">
                                            <h6 class="post-title text-uppercase"><a href="blog-single.html">Title of first blog</a></h6>
                                        </div>
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <li class="post-author">By <a href="#">Admin<a/></li>
                                                <li class="post-comment"><i class="fa fa-comments-o"></i> 28</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-post clearfix">
                                    <div class="dlab-post-media"> <img src="images/blog/recent-blog/pic2.jpg" alt="" width="200" height="160"> </div>
                                    <div class="dlab-post-info">
                                        <div class="dlab-post-header">
                                            <h6 class="post-title text-uppercase"><a href="blog-single.html">Title of first blog</a></h6>
                                        </div>
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <li class="post-author">By <a href="#">Admin<a/></li>
                                                <li class="post-comment"><i class="fa fa-comments-o"></i> 28</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-post clearfix">
                                    <div class="dlab-post-media"> <img src="images/blog/recent-blog/pic3.jpg" alt="" width="200" height="160"> </div>
                                    <div class="dlab-post-info">
                                        <div class="dlab-post-header">
                                            <h6 class="post-title  text-uppercase"><a href="blog-single.html">Title of first blog</a></h6>
                                        </div>
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <li class="post-author">By <a href="#">Admin<a/></li>
                                                <li class="post-comment"><i class="fa fa-comments-o"></i> 28</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget widget_services">
                            <h4 class="m-b15 text-uppercase">Our services</h4>
                            <div class="dlab-separator-outer m-b10">
                                <div class="dlab-separator bg-white style-skew"></div>
                            </div>
                            <ul>
                                <li><a href="services-2.html">Engine Diagnostics</a></li>
                                <li><a href="services-2.html">Lube, Oil and Filters</a></li>
                                <li><a href="services-2.html">Belts and Hoses</a></li>
                                <li><a href="services-2.html">Air Conditioning</a></li>
                                <li><a href="services-2.html">Brake Repair</a></li>
                                <li><a href="services-2.html">Lube, Oil and Filters</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget widget_getintuch">
                            <h4 class="m-b15 text-uppercase">Contact us</h4>
                            <div class="dlab-separator-outer m-b10">
                                <div class="dlab-separator bg-white style-skew"></div>
                            </div>
                            <ul>
                                <li><i class="ti-location-pin"></i><strong>address</strong> demo address #8901 Marmora Road Chi Minh City, Vietnam </li>
                                <li><i class="ti-mobile"></i><strong>phone</strong>0800-123456 (24/7 Support Line)</li>
                                <li><i class="ti-printer"></i><strong>FAX</strong>(123) 123-4567</li>
                                <li><i class="ti-email"></i><strong>email</strong>info@demo.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom footer-line">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 text-left">
						<span>© Copyright 2020</span>
					</div>
					<div class="col-lg-4 col-md-4 text-center">
						<span> Design With <i class="ti-heart text-primary heart"></i> By DexignLab </span>
					</div>
					<div class="col-lg-4 col-md-4 text-right">
						<a href="about-1.html"> About Us</a>
						<a href="faq-1.html"> FAQs</a>
						<a href="contact.html"> Contact Us</a>
					</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END -->
    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up style4" ></button>
</div>
<!-- JavaScript  files ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="js/custom.min.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="js/dz.carousel.min.js"></script><!-- SORTCODE FUCTIONS  -->

<script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->
<!-- REVOLUTION JS FILES -->
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script src="js/rev.slider.js"></script>
<script>
jQuery(document).ready(function() {
	'use strict';
	dz_rev_slider_3();
});	/*ready*/
</script>
</body>
</html>
