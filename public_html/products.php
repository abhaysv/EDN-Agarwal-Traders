
 <?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
//----------------------------------- DATABASE CONFIG END ------------------------------------------------------



if (isset($_POST['subcat'])) { $subcat = $_POST['subcat'];} else $subcat = "default";
if (isset($_GET['page'])) { $page = $_GET['page'];} else $page = 1;
if (isset($_GET['company'])) { $company = $_GET['company'];} else $company = "default";
if (isset($_GET['category'])) { $category = $_GET['category'];} else $category = "default";

?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.ansonika.com/homealarms/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jun 2018 18:19:36 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="HOMEALARMS - Alarms and security systems site template">
	<meta name="author" content="Ansonika">
	<title><?php echo $category; ?></title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/elegant_font/elegant_font.min.css" rel="stylesheet">
	<link href="css/fontello/css/fontello.min.css" rel="stylesheet">
	<link href="css/magnific-popup.min.css" rel="stylesheet">
	
	<!-- SPECIFIC CSS -->
	<link href="css/shop.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<div id="preloader">
		<div class="sk-spinner sk-spinner-wave">
			<div class="sk-rect1"></div>
			<div class="sk-rect2"></div>
			<div class="sk-rect3"></div>
			<div class="sk-rect4"></div>
			<div class="sk-rect5"></div>
		</div>
	</div><!-- End Preload -->

	<div class="layer"></div><!-- Mobile menu overlay mask -->

	<!-- Header================================================== -->
	<header>
		<div id="top_line">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 hidden-xs">
						<span id="tag_line">"Authorized Distributer Of CP Plus & Ajhua"</span>
					</div>
					<div class="col-sm-8">
						<ul id="top_links">
							<li><span id="opening">Mon - Sat 8.00/18.00</span><a href="tel://918839642405" id="phone_top">+91 8839642405</a></li>
							<li class="hidden-xs"><a href="mailto:agrawaltraders@hotmail.com">agrawaltraders@hotmail.com</a></li>
						</ul>
					</div>
				</div><!-- End row -->
			</div><!-- End container-->
		</div><!-- End top line-->

		<div class="container">
			<div class="row">
				<div class="col-xs-3">
					<div id="logo">
						<a href="index.html"><img src="img/logo.png" width="190" height="49" alt="Agarwal Traders" data-retina="true"></a>
					</div>
				</div>
				<nav class="col-xs-9">
					<a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
					<div class="main-menu">
						<div id="header_menu">
							<img src="img/logo.png" width="190" height="49" alt="Agarwal Traders" data-retina="true">
						</div>
						<a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
						<ul>
							<li><a href="contacts.html"> Home Page </a></li>
							<li class="submenu">
								<a href="javascript:void(0);" class="show-submenu"> Our Product Catelog<i class="icon-down-open-mini"></i></a>
								<ul>
									<li>
										<a href="#">Security&nbsp; Surveillance</a>
										<ul>
											<li>
												<a href="#"> CCTV </a>
												<ul>
													<li>
														<a href="#">CP Plus</a>
														<ul>
															<li><a href="products.php?company=CP_Plus&&category=HD_Cam">HD Cam</a></li>
															<li><a href="products.php?company=CP_Plus&&category=IP_Cam">Ip Cam</a></li>
															<li><a href="products.php?company=CP_Plus&&category=PTZ">PTZ</a></li>
														</ul>
													</li>
													<li>
														<a href="#">Dahua</a>
														<ul>
															<li><a href="products.php?company=Dahua&&category=ultra">Ultra Series</a></li>
															<li><a href="products.php?company=Dahua&&category=pro">Pro Series</a></li>
															<li><a href="products.php?company=Dahua&&category=light">Light Series</a></li>
														</ul>													
													</li>
												</ul>
											</li>
											<li>
												<a href="#">DVR</a>
												<ul>
													<li>
														<a href="#">CP Plus</a>
														<ul>
															<li><a href="products.php?company=CP_Plus&&category=4ch_dvr">4 CH DVR</a></li>
															<li><a href="products.php?company=CP_Plus&&category=8ch_dvr">8 CH DVR</a></li>
															<li><a href="products.php?company=CP_Plus&&category=16ch_dvr">16 CH DVR</a></li>
															<li><a href="products.php?company=CP_Plus&&category=24ch_dvr">24 CH DVR</a></li>
															<li><a href="products.php?company=CP_Plus&&category=32ch_dvr">32 CH DVR</a></li>
														</ul>
													</li>
													<li>
														<a href="#">Dahua</a>
														<ul>
															<li><a href="products.php?company=Dahua&&category=ultra_dvr">Ultra Series</a></li>
															<li><a href="products.php?company=Dahua&&category=pro_dvr">Pro Series</a></li>
															<li><a href="products.php?company=Dahua&&category=light_dvr">Light Series</a></li>
														</ul>													
													</li>
												</ul>												
											
											</li>
											<li>
												<a href="#">NVR</a>
												<ul>
															<li><a href="products.php?company=CP_Plus&&category=4ch_nvr">4 CH NVR</a></li>
															<li><a href="products.php?company=CP_Plus&&category=8ch_nvr">8 CH NVR</a></li>
															<li><a href="products.php?company=CP_Plus&&category=16ch_nvr">16 CH NVR</a></li>
															<li><a href="products.php?company=CP_Plus&&category=24ch_nvr">24 CH NVR</a></li>
															<li><a href="products.php?company=CP_Plus&&category=32ch_nvr">32 CH NVR</a></li>
												</ul>											
											
											</li>
											<li><a href="downloads/brochure-01_paramount-brochure.pdf">Cables</a></li>
											<li><a href="#">Elecronic Safes</a></li>
											<li>
												<a href="#">Video Phone Door</a>
												<ul>
															<li><a href="products.php?company=CP_Plus&&category=villa">Villa</a></li>
															<li><a href="products.php?company=CP_Plus&&category=mvilla">Multi Villa</a></li>
															<li><a href="products.php?company=CP_Plus&&category=apartment">Apartment</a></li>
												</ul>												
											</li>
										</ul>
									</li>
									<li>
										<a href="services_layout_2.html">Peripherals</a>
										<ul>
															<li><a href="http://www.dlink.co.in/products/category/?cid=3">Dlink</a></li>
															<li><a href="https://www.tp-link.com/no/products/list-9.html">TP-Link</a></li>
															<li><a href="http://tendacn.com/en/service/download.html">Tenda</a></li>
															<li><a href="https://www.seagate.com/in/en/internal-hard-drives/surveillance/)">Seagate</a></li>
															<li><a href="https://storage.toshiba.com/consumer-hdd/internal">Toshiba</a></li>
															<li><a href="https://www.iball.co.in/Category/Technology-Accessories/282">iBall</a></li>															
										</ul>											
									
									</li>
									<li>
										<a href="#">Paints</a>
										<ul>
											<li><a href="https://www.jotun.com/in/en/b2c/products/">Jotun</a></li>
										</ul>
									</li>
									<li>
										<a href="#">Hardware</a>
										<ul>
											<li><a href="http://www.fluke.com/fluke/inen/Products/">Fluke</a></li>
										</ul>
									</li>
								</ul>
							</li>

							<li><a href="quotation.html"> Request A Quote </a></li>
							<li><a href="about.html"> About us </a></li>
							<li><a href="contacts.html"> Contact us</a></li>
						</ul>
					</div><!-- End main-menu -->
				</nav>
			</div>
		</div><!-- container -->
	</header>
	<!-- End Header -->
	
	<section class="parallax_window_in short" data-parallax="scroll" data-image-src="img/subheader_in_2.jpg" data-natural-width="1400" data-natural-height="350">
		<div id="sub_content_in">
			<div class="container">
				<h1><?php echo $category; ?></h1>
				<p>"See our vast catelog of products"</p>
			</div>
		</div>
	</section><!-- End section -->
        
	 <main>
        <div class="container margin_60_35">
    	<div class="row">
            <div class="col-md-12">
                <div class="shop-section">
                    
                    <div class="items-sorting">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="results_shop">
                                    The page <?php echo $page; ?> of <?php echo $company; ?>/<?php echo $category ?>/<?php echo $subcat; ?> .
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
								<form method="post" action="products.php?category=<?php echo $category; ?>&company=<?php echo $company; ?>">
                                    <select name='subcat' onchange='if(this.value != 0) { this.form.submit(); }'>
										<option>Select Type</option>
										<?php
										$product_array_temp = "SELECT DISTINCT `sub_type` FROM tblproduct WHERE `category` LIKE '$category' AND `Company` LIKE '$company' ORDER BY id ASC";
										$product_array = $db_handle->runQuery($product_array_temp);
										
										if (!empty($product_array)) { 
											foreach($product_array as $key=>$value){
										?>
                                        
                                        <option><?php echo $product_array[$key]["sub_type"]; ?></option>


										<?php
													}
											}
										?>
                                    </select>
								</form>	
                                </div>
                            </div>
                        </div>
                    </div><!--End Sort By-->
                    
                        <div class="row">
							<?php
							$product_array_temp = "SELECT * FROM tblproduct WHERE `category` LIKE '$category' AND `Company` LIKE '$company' AND `sub_type` LIKE '$subcat' ORDER BY id ASC";
							$product_array = $db_handle->runQuery($product_array_temp);
							
							if (!empty($product_array)) { 
								foreach($product_array as $key=>$value){
							?>

								<!--Start Shop Item-->
								<div class="shop-item col-lg-3 col-md-3 col-sm-6">
									<div class="inner-box">
										<div class="image-box">
											<figure class="image"><a href="<?php echo $product_array[$key]["product_link"]; ?>"><img src="<?php echo $product_array[$key]["image"]; ?>" width="400" height="485" alt=""></a></figure>
											<div class="item-options clearfix">
												<a href="quotation.html" class="btn_shop"><span class="icon-basket"></span>
												<div class="tool-tip">
													Request A Quote
												</div>
												</a>
												<a href="<?php echo $product_array[$key]["product_link"]; ?>" class="btn_shop"><span class="icon-eye"></span>
												<div class="tool-tip">
													View
												</div>
												</a>
											</div>
										</div>
										<div class="product_description">

											<h3><a href="<?php echo $product_array[$key]["product_link"]; ?>"><?php echo $product_array[$key]["name"]; ?></a></h3>
											<div class="price">
											<?php echo $product_array[$key]["code"]; ?>
											</div>
										</div>
									</div>
								</div>
								
								<!--End Shop Item-->


							<?php
										}
								}
							?>                           

                        </div><!--End Shop Row-->
                        
                    <hr>
                    
                    <div class="text-center">
                        <ul class="pagination">
                            <li><a href="products.php">First</a></li>
                            <li><a href="?page=1">1</a></li>
                            <li><a href="?page=2">2</a></li>
                            <li><a href="?page=3">3</a></li>
                            <li><a href="?page=4">4</a></li>
                            <li><a href="?page=5">5</a></li>
                            <li><a href="?page=5">Last</a></li>
                        </ul>
                    </div><!-- End pagination-->
                </div><!-- End row -->
            </div><!-- End col -->
            
            
        </div><!--/row-->
    </div><!--/container--> 
			
	</main><!-- End main -->

    <footer>
		<div class="container">
			<div class="row ">
				<div class="col-md-4 col-sm-6">
					<img src="img/logo-footer.png" width="190" height="44" alt="Home Alarms" data-retina="true" id="logo_footer">
					<p>Id pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. Libris hendrerit ex sea. Duo legere evertitur an, pri hinc doctus definitiones an, vix id dicam putent. Ius ornatus instructior in.</p>
				</div>
				<div class="col-md-3 col-md-offset-1 col-sm-3">
					<h3>Discover</h3>
					<ul>
						<li><a href="#0">About us</a></li>
						<li><a href="#0">FAQ</a></li>
						<li><a href="#0">Quotation</a></li>
						<li><a href="#0">Contacts</a></li>
						<li><a href="#0">Shop</a></li>
						<li><a href="#0">Terms and condition</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-3" id="contact_bg">
					<h3>Contacts</h3>
					<ul id="contact_details_footer">
						<li id="address_footer">4 West 31st Street New York, New York - 10001<br>United States</li>
						<li id="phone_footer"><a href="tel://004542344599">+45 423 445 99</a> / <a href="tel://004542344599">+45 423 445 99</a></li>
						<li id="email_footer"><a href="#0"><span class="__cf_email__" data-cfemail="bed7d0d8d1fed6d1d3dbdfd2dfccd3cd90ddd1d3">[email&#160;protected]</span></a></li>
					</ul>
				</div>
			</div><!-- End row -->	
			<div id="social_footer">
				<ul>
					<li><a href="#0"><i class="icon-facebook"></i></a></li>
					<li><a href="#0"><i class="icon-twitter"></i></a></li>
					<li><a href="#0"><i class="icon-google"></i></a></li>
					<li><a href="#0"><i class="icon-vimeo"></i></a></li>
				</ul>
			</div>
		</div><!-- End container -->
		<div id="copy">
			<div class="container">
				© Home Alarms 2018 - All rights reserved.

			</div>
		</div><!-- End copy -->
	</footer><!-- End footer -->

	<div id="toTop"></div><!-- Back to top button -->

	<!-- Common scripts -->
	<script data-cfasync="false" src="../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts_min.js"></script>
	<script src="js/functions.js"></script>

</body>

<!-- Mirrored from www.ansonika.com/homealarms/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jun 2018 18:19:40 GMT -->
</html>