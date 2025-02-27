<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>BOSJ | Borno State Judiciary</title>
<!-- Stylesheets -->
<link href="/assets/css/bootstrap.css" rel="stylesheet">
<link href="/assets/css/style.css" rel="stylesheet">
<link href="/assets/css/responsive.css" rel="stylesheet">

<!--link href="https://fonts.googleapis.com/css2?family=Bellefair&family=Open+Sans:wght@300;400;700;800&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet" -->

<link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="/assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
 	<!-- Main Header-->
    <header class="main-header header-style-two">
		<div class="auto-container clearfix">
           
        <!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container clearfix">
            	
				<div class="pull-left logo-box">
					<div class="logo"><a href="index.html"><img src="/assets/images/logo-3.png" alt="" title=""></a></div>
				</div>
				
				<div class="nav-outer clearfix">
					<!-- Mobile Navigation Toggler -->
					<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
					<!-- Main Menu -->
					<nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">About Us</a></li>
                                <li class="dropdown"><a href="#"><span>Courts</span></a>
                                    <ul>
                                        <li><a href="/high-courts">High Courts</a></li>
                                        <li><a href="/sharia-court-of-appeal">Sharia Court of Appeal</a></li>
                                        <li><a href="/magistrate-courts">Magistrate Courts</a></li>
										<li><a href="/small-claims-courts">Small Claims Courts (Magistrates' Courts)</a></li>
                                        <li><a href="/upper-sharia-courts">Upper Sharia Courts</a></li>
                                        <li><a href="/sharia-courts">Sharia Courts</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#"><span>Units</span></a>
                                    <ul>
                                        <li><a href="/litigation">Litigation Registry</a></li>
                                        <li><a href="/appeal-registry">Appeals Registry</a></li>
                                        <li><a href="/probate-registry">Probate Registry</a></li>
                                        <li><a href="/oadr">OADR</a></li>
                                        <li><a href="/adr">Amicable Settlement Corridor</a></li>
                                        <li><a href="/translation">Translation Unit</a></li>
                                        <li><a href="/ict">ICT</a></li>
										<li><a href="/jrc">Judicial Research Centre</a></li>
                                    </ul>
                                </li>
								<li><a href="/jsc">JSC</a></li>
                                <li class="dropdown"><a href="#"><span>Media</span></a>
                                    <ul>
										<li><a href="/news-and-events">News and Events</a></li>
                                		<li><a href="/watch">Watch Event</a></li>
                                        <li><a href="/gallery">Gallery</a></li>
                                       
                                    </ul>
                                </li>

								<li class="dropdown"><a href="#"><span>Resources</span></a>
                                    <ul>
										<li><a href="/ncms-efiling">NCMS E-Filing</a></li>
                                	 
                                        <li><a href="/downloads">Downloads</a></li>
                                    </ul>
                                </li>
                                 
                            </ul>
                        </div>
                    </nav>
					
					<!-- Main Menu End-->
					<div class="outer-box clearfix">
						
						<!-- Btn Box -->
						<div class="btn-box">
							<a href="/contact" class="theme-btn btn-style-one"><span class="txt">Contact US</span></a>
						</div>
						
					</div>
				</div>
				
            </div>
        </div>
        <!--End Header Upper-->
        
		<!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" title=""><img src="/assets/images/logo-small.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->
					
					<!-- Main Menu End-->
					<div class="outer-box clearfix">
						
						<!-- Btn Box -->
						<div class="btn-box">
							<a href="/contact" class="theme-btn btn-style-two"><span class="txt">Contact US</span></a>
						</div>
						
						<!-- Mobile Navigation Toggler -->
						<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
						
					</div>
					
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
	
    </header>
    @yield("content")
    
	<!-- Main Footer -->
    <footer class="main-footer">
		<div class="auto-container">
        	<!-- Widgets Section -->
            <div class="widgets-section">
				<!-- Scroll To Top -->
				<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
            	<div class="row clearfix">
                	
                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
                                    	<a href="index.html"><img src="/assets/images/footer-logo-n.png" alt="" /></a>
                                    </div>
									<div class="text">Borno State Judiciary comprises courts of different jurisdiction and subject matter.</div>
									<!-- Social Nav -->
									<ul class="social-nav">
										<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    </ul>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h5>Quick links</h5>
									<ul class="footer-list">
										<li><a href="https://efiling.courts.gov.ng/" target="_blank">NCMS E-Filing</a></li>
										<li><a href="http://www.nigerianbar.ng"  target="_blank">Nigerian Bar Association</a></li>
										<li><a href="http://mail.nigerianbar.ng"  target="_blank">Legal Mail</a></li>
										<li><a href="http://www.legalaidcouncil.gov.ng"  target="_blank">Legal Aid Council</a></li>
										<li><a href="http://www.courtofappeal.gov.ng/"  target="_blank">Court of Appeal</a></li>
										<li><a href="http://www.supremecourt.gov.ng" target="_blank">Supreme Court of Nigeria</a></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
					<!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget contact-widget">
									<h5>Headquater</h5>
									<ul>
										    
										<li>
											<span class="icon flaticon-call-1"></span>
											<a href="tel:+234 7057600015">+234 7057600015</a>
										</li>
										<li>
											<span class="icon flaticon-email-2"></span>
											<a href="mailto:info.bornohighcourt@courts.gov.ng">info.bornohighcourt@courts.gov.ng</a>
										</li>
										<li>
											<span class="icon flaticon-email-2"></span>
											<a href="/contact">Send Message to Us</a>
										</li>
										<li>
											<span class="icon flaticon-maps-and-flags"></span>
											<a href="/contact">No. 1, Shehu Laminu way, <br> Maiduguri, Borno, Nigeria</a>
										</li>
									</ul>
								</div>
							</div>
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget newsletter-widget">
									<h5>Subscribe Now</h5>

									@if ($errors->any())
    
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul>
    
@endif
									<div class="text">Subscribe to our newsletter.</div>
									<div class="newsletter-form">
										<form method="post" action="/subscribe">
										@csrf
											<div class="form-group">
												<input type="email" name="email" value="" placeholder="Enter Email Address" required>
												<button type="submit" class="theme-btn btn-style-one"><span class="txt">Subscribe now <i class="arrow flaticon-right"></i></span></button>
											</div>
										</form>
									</div>
								</div>
							</div>
						 
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="copyright">Powered by Borno State Judiciary. All Rights Reserved.</div>
			</div>
		</div>
	</footer>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/assets/js/jquery.fancybox.js"></script>
<script src="/assets/js/appear.js"></script>
<script src="/assets/js/parallax.min.js"></script>
<script src="/assets/js/tilt.jquery.min.js"></script>
<script src="/assets/js/jquery.paroller.min.js"></script>
<script src="/assets/js/owl.js"></script>
<script src="/assets/js/wow.js"></script>
<script src="/assets/js/nav-tool.js"></script>
<script src="/assets/js/jquery-ui.js"></script>
<script src="/assets/js/script.js"></script>

</body>
</html>