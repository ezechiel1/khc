<?php 	session_start();
	//load and initialize database class
	require_once 'admin/core/db.php';
	$db = new DB();
  //Include Ajax
  include('ajax.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>KIGALI HOUSE CONNECT - Page Template</title>
<meta charset="UTF-8">
<meta name="description" content="KIGALI HOUSE Landing Page Template">
<meta name="keywords" content="KIGALI HOUSE, unica, creative, html">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Favicon -->
<link href="img/favicon.ico" rel="shortcut icon"/>
<link rel="icon" type="img/png" href="img/icons/favicon.ico"/>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

<!-- Stylesheets -->
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/font-awesome.min.css"/>
<link rel="stylesheet" href="css/animate.css"/>
<link rel="stylesheet" href="css/owl.carousel.css"/>
<link rel="stylesheet" href="css/style.css"/>
<style media="screen">
.filter-form {
	padding: 31px;
	background: #30caa0;
	border-radius: 3px;
}
.site-breadcrumb {
    padding: 10px 0;
}
</style>
</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
<div class="loader"></div>
</div>

<!-- Header section -->
<header class="header-section">
<div class="header-top">
<div class="container">
<div class="row">
<div class="col-lg-6 header-top-left">
<div class="top-info">
<i class="fa fa-phone"></i>
(+250) 784 077 896
</div>
<div class="top-info">
<i class="fa fa-envelope"></i>
info.kigalihouses@gmail.com
</div>
</div>

<div class="col-lg-6 text-lg-right header-top-right">
<div class="top-social">
<a href=""><i class="fa fa-facebook"></i></a>
<a href=""><i class="fa fa-twitter"></i></a>
<a href=""><i class="fa fa-instagram"></i></a>
<a href=""><i class="fa fa-pinterest"></i></a>
<a href=""><i class="fa fa-linkedin"></i></a>
</div>
<div class="user-panel">
<a href="admin/register.php"><i class="fa fa-user-circle-o"></i> Register</a>
<a href="admin/index.php"><i class="fa fa-sign-in"></i> Login</a>
</div>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-12">
<div class="site-navbar">
<div class="nav-switch">
<i class="fa fa-bars"></i>
</div>
<ul class="main-menu">
<li><a href="index.php">Home</a></li>
<li><a href="categories.php">FEATURED LISTING</a></li>
<li><a href="about.php">ABOUT US</a></li>
<!-- <li><a href="single-list.html">Pages</a></li> -->
<!-- <li><a href="blog.html">Blog</a></li> -->
<li><a href="contact.php">Contact</a></li>
<!-- <li><a href="single-blog.html">CHAT WITH US</a></li> -->
</div>
</div>
</div>
</div>
</header>
<!-- Header section end -->


<!-- Page top section -->
<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
<div class="container text-white">
<h2>Featured Listings</h2>
</div>
</section>
<!--  Page top end -->
<center>
<!-- Filter form section -->
<div style="margin-top: -5%;}" class="filter-search">
<div class="container">
<form class="filter-form">
<div class="form-group row">
    <select name="district" id="district" onchange="getSectors();" class="col-md-3">
        <option value="" hidden>District</option>
<?php $alld=$db->getRows('district',array('Order by'=>'district_name desc'));
if(!empty($alld)): foreach($alld as $getd):?>
        <option value="<?php echo $getd['id']; ?>" ><?php echo $getd['district_name']; ?></option>
<?php endforeach; endif; ?>
    </select>
    <select id="display" class="col-md-3">
        <option value="" hidden>Sector</option>
    </select>
    <input type="text" class="col-md-3" placeholder="Enter a street name, address number or keyword">
    <style media="screen">
      .n:hover{ background: #30caa0; color: grey; border: 1px solid gray;}
    </style>
    <button class="btn btn-sm n col-md-2 fa fa-search" style="background: black; color: white;" > SEARCH</button>
</div>
</form>
</div>
</div>
<!-- Filter form section end -->
<a href="categories-for-sale.php"><div class="sale-notic">FOR Sale</div></a>
<a href="categories-for-rent.php"><div class="rent-notic">FOR Rent</div></a>

</center>
<!-- Breadcrumb -->
<br>
<!-- page -->
<section class="page-section categories-page">
<div class="container">
<div class="row">

<div class="col-lg-4 col-md-6">
				<div class="feature-item">
					<a href="single_list.php">
						<div class="feature-pic set-bg" data-setbg="img/feature/1.jpg">
						<div class="sale-notic">FOR SALE</div>
						</div>
						<div class="feature-text">
								<div class="text-center feature-title">
								<h5>Kimisagara, KN 175 AV</h5>
								<p><i class="fa fa-map-marker"></i>Nyarugenge, Kigali City</p>
								</div>
								<div class="room-info-warp">
								<div class="room-info">
								<div class="rf-left">
								<p><i class="fa fa-th-large"></i> 800 Square foot</p>
								<p><i class="fa fa-bed"></i> 10 Bedrooms</p>
								</div>
								<div class="rf-right">
								<p><i class="fa fa-car"></i> 2 Garages</p>
								<p><i class="fa fa-bath"></i> 6 Bathrooms</p>
								</div>
								</div>
								<div class="room-info">
								<div class="rf-left">
								<p><i class="fa fa-user"></i> Tony Holland</p>
								</div>
								<div class="rf-right">
								<p><i class="fa fa-clock-o"></i> 1 days ago</p>
								</div>
								</div>
								</div>
								<a href="#" class="room-price">$1,200,000</a>
						</div>
					</a>
				</div>
</div>
<div class="col-lg-4 col-md-6">
<!-- feature -->
<div class="feature-item">
<div class="feature-pic set-bg" data-setbg="img/feature/2.jpg">
<div class="sale-notic">FOR SALE</div>
</div>
<div class="feature-text">
<div class="text-center feature-title">
<h5>Muhima , KN 145 AV</h5>
<p><i class="fa fa-map-marker"></i>Nyarugenge , Kigali City</p>
</div>
<div class="room-info-warp">
<div class="room-info">
<div class="rf-left">
<p><i class="fa fa-th-large"></i> 1500 Square foot</p>
<p><i class="fa fa-bed"></i> 16 Bedrooms</p>
</div>
<div class="rf-right">
<p><i class="fa fa-car"></i> 2 Garages</p>
<p><i class="fa fa-bath"></i> 8 Bathrooms</p>
</div>
</div>
<div class="room-info">
<div class="rf-left">
<p><i class="fa fa-user"></i> Gina Wesley</p>
</div>
<div class="rf-right">
<p><i class="fa fa-clock-o"></i> 1 days ago</p>
</div>
</div>
</div>
<a href="#" class="room-price">$4,500,000</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<!-- feature -->
<div class="feature-item">
<div class="feature-pic set-bg" data-setbg="img/feature/3.jpg">
<div class="rent-notic">FOR Rent</div>
</div>
<div class="feature-text">
<div class="text-center feature-title">
<h5>Nyamirambo , KN 158 AV</h5>
<p><i class="fa fa-map-marker"></i>Nyarugenge , Kigali City</p>
</div>
<div class="room-info-warp">
<div class="room-info">
<div class="rf-left">
<p><i class="fa fa-th-large"></i> 1500 Square foot</p>
<p><i class="fa fa-bed"></i> 16 Bedrooms</p>
</div>
<div class="rf-right">
<p><i class="fa fa-car"></i> 2 Garages</p>
<p><i class="fa fa-bath"></i> 8 Bathrooms</p>
</div>
</div>
<div class="room-info">
<div class="rf-left">
<p><i class="fa fa-user"></i> Gina Wesley</p>
</div>
<div class="rf-right">
<p><i class="fa fa-clock-o"></i> 1 days ago</p>
</div>
</div>
</div>
<a href="#" class="room-price">$2,500/month</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<!-- feature -->
<div class="feature-item">
<div class="feature-pic set-bg" data-setbg="img/feature/4.jpg">
<div class="sale-notic">FOR SALE</div>
</div>
<div class="feature-text">
<div class="text-center feature-title">
<h5>Kimihurura , KG 258 AV</h5>
<p><i class="fa fa-map-marker"></i>Gasabo , Kigali City</p>
</div>
<div class="room-info-warp">
<div class="room-info">
<div class="rf-left">
<p><i class="fa fa-th-large"></i> 1200 Square foot</p>
<p><i class="fa fa-bed"></i> 12 Bedrooms</p>
</div>
<div class="rf-right">
<p><i class="fa fa-car"></i> 3 Garages</p>
<p><i class="fa fa-bath"></i> 8 Bathrooms</p>
</div>
</div>
<div class="room-info">
<div class="rf-left">
<p><i class="fa fa-user"></i> Sasha Gordon </p>
</div>
<div class="rf-right">
<p><i class="fa fa-clock-o"></i> 8 days ago</p>
</div>
</div>
</div>
<a href="#" class="room-price">$5,600,000</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<!-- feature -->
<div class="feature-item">
<div class="feature-pic set-bg" data-setbg="img/feature/5.jpg">
<div class="rent-notic">FOR Rent</div>
</div>
<div class="feature-text">
<div class="text-center feature-title">
<h5>Kimironko KG 365 AV</h5>
<p><i class="fa fa-map-marker"></i>Gasabo , Kigali City</p>
</div>
<div class="room-info-warp">
<div class="room-info">
<div class="rf-left">
<p><i class="fa fa-th-large"></i> 500 Square foot</p>
<p><i class="fa fa-bed"></i> 4 Bedrooms</p>
</div>
<div class="rf-right">
<p><i class="fa fa-car"></i> 1 Garages</p>
<p><i class="fa fa-bath"></i> 2 Bathrooms</p>
</div>
</div>
<div class="room-info">
<div class="rf-left">
<p><i class="fa fa-user"></i> Gina Wesley</p>
</div>
<div class="rf-right">
<p><i class="fa fa-clock-o"></i> 8 days ago</p>
</div>
</div>
</div>
<a href="#" class="room-price">$1,600/month</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<!-- feature -->
<div class="feature-item">
<div class="feature-pic set-bg" data-setbg="img/feature/6.jpg">
<div class="sale-notic">FOR SALE</div>
</div>
<div class="feature-text">
<div class="text-center feature-title">
<h5>Kacyiru KG 58 AV</h5>
<p><i class="fa fa-map-marker"></i>Gasabo , Kigali City</p>
</div>
<div class="room-info-warp">
<div class="room-info">
<div class="rf-left">
<p><i class="fa fa-th-large"></i> 700 Square foot</p>
<p><i class="fa fa-bed"></i> 7 Bedrooms</p>
</div>
<div class="rf-right">
<p><i class="fa fa-car"></i> 1 Garages</p>
<p><i class="fa fa-bath"></i> 7 Bathrooms</p>
</div>
</div>
<div class="room-info">
<div class="rf-left">
<p><i class="fa fa-user"></i> Sasha Gordon </p>
</div>
<div class="rf-right">
<p><i class="fa fa-clock-o"></i> 8 days ago</p>
</div>
</div>
</div>
<a href="#" class="room-price">$1,600,000</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<!-- feature -->
<div class="feature-item">
<div class="feature-pic set-bg" data-setbg="img/feature/7.jpg">
<div class="sale-notic">FOR SALE</div>
</div>
<div class="feature-text">
<div class="text-center feature-title">
<h5>1476 Harvard St NW Unit Ph</h5>
<p><i class="fa fa-map-marker"></i> Washington, DC 20009</p>
</div>
<div class="room-info-warp">
<div class="room-info">
<div class="rf-left">
<p><i class="fa fa-th-large"></i> 550 Square foot</p>
<p><i class="fa fa-bed"></i> 7 Bedrooms</p>
</div>
<div class="rf-right">
<p><i class="fa fa-car"></i> 1 Garages</p>
<p><i class="fa fa-bath"></i> 3 Bathrooms</p>
</div>
</div>
<div class="room-info">
<div class="rf-left">
<p><i class="fa fa-user"></i> Adam Johnson</p>
</div>
<div class="rf-right">
<p><i class="fa fa-clock-o"></i> 1 days ago</p>
</div>
</div>
</div>
<a href="#" class="room-price">$1,250,000</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<!-- feature -->
<div class="feature-item">
<div class="feature-pic set-bg" data-setbg="img/feature/8.jpg">
<div class="sale-notic">FOR SALE</div>
</div>
<div class="feature-text">
<div class="text-center feature-title">
<h5>9633 Weathered Oak Ct</h5>
<p><i class="fa fa-map-marker"></i> Bethesda, MD 208179</p>
</div>
<div class="room-info-warp">
<div class="room-info">
<div class="rf-left">
<p><i class="fa fa-th-large"></i> 1000 Square foot</p>
<p><i class="fa fa-bed"></i> 6 Bedrooms</p>
</div>
<div class="rf-right">
<p><i class="fa fa-car"></i> 2 Garages</p>
<p><i class="fa fa-bath"></i> 8 Bathrooms</p>
</div>
</div>
<div class="room-info">
<div class="rf-left">
<p><i class="fa fa-user"></i> Ann Hathaway</p>
</div>
<div class="rf-right">
<p><i class="fa fa-clock-o"></i> 1 days ago</p>
</div>
</div>
</div>
<a href="#" class="room-price">$1,230,000</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<!-- feature -->
<div class="feature-item">
<div class="feature-pic set-bg" data-setbg="img/feature/9.jpg">
<div class="rent-notic">FOR Rent</div>
</div>
<div class="feature-text">
<div class="text-center feature-title">
<h5>2529 Marsh Hill Henry Rd Unit Mc</h5>
<p><i class="fa fa-map-marker"></i> McHenry, MD 21541</p>
</div>
<div class="room-info-warp">
<div class="room-info">
<div class="rf-left">
<p><i class="fa fa-th-large"></i> 550 Square foot</p>
<p><i class="fa fa-bed"></i> 4 Bedrooms</p>
</div>
<div class="rf-right">
<p><i class="fa fa-car"></i> 1 Garages</p>
<p><i class="fa fa-bath"></i> 2 Bathrooms</p>
</div>
</div>
<div class="room-info">
<div class="rf-left">
<p><i class="fa fa-user"></i>  McHenry, MD 21541</p>
</div>
<div class="rf-right">
<p><i class="fa fa-clock-o"></i> 1 days ago</p>
</div>
</div>
</div>
<a href="#" class="room-price">$1,000/month</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<!-- feature -->
<div class="feature-item">
<div class="feature-pic set-bg" data-setbg="img/feature/10.jpg">
<div class="sale-notic">FOR SALE</div>
</div>
<div class="feature-text">
<div class="text-center feature-title">
<h5>6335 N Magnolia Ave Apt 1S</h5>
<p><i class="fa fa-map-marker"></i> Chicago, IL 60660</p>
</div>
<div class="room-info-warp">
<div class="room-info">
<div class="rf-left">
<p><i class="fa fa-th-large"></i> 2200 Square foot</p>
<p><i class="fa fa-bed"></i> 16 Bedrooms</p>
</div>
<div class="rf-right">
<p><i class="fa fa-car"></i> 3 Garages</p>
<p><i class="fa fa-bath"></i> 10 Bathrooms</p>
</div>
</div>
<div class="room-info">
<div class="rf-left">
<p><i class="fa fa-user"></i> Tony Holland </p>
</div>
<div class="rf-right">
<p><i class="fa fa-clock-o"></i> 8 days ago</p>
</div>
</div>
</div>
<a href="#" class="room-price">$1,600,000</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<!-- feature -->
<div class="feature-item">
<div class="feature-pic set-bg" data-setbg="img/feature/11.jpg">
<div class="rent-notic">FOR Rent</div>
</div>
<div class="feature-text">
<div class="text-center feature-title">
<h5>441 E Maywood Ct</h5>
<p><i class="fa fa-map-marker"></i> Decatur, IL 62526</p>
</div>
<div class="room-info-warp">
<div class="room-info">
<div class="rf-left">
<p><i class="fa fa-th-large"></i>   750 Square foot</p>
<p><i class="fa fa-bed"></i> 5 Bedrooms</p>
</div>
<div class="rf-right">
<p><i class="fa fa-car"></i> 1 Garages</p>
<p><i class="fa fa-bath"></i> 3 Bathrooms</p>
</div>
</div>
<div class="room-info">
<div class="rf-left">
<p><i class="fa fa-user"></i> Chris Brown</p>
</div>
<div class="rf-right">
<p><i class="fa fa-clock-o"></i> 8 days ago</p>
</div>
</div>
</div>
<a href="#" class="room-price">$1,800/month</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<!-- feature -->
<div class="feature-item">
<div class="feature-pic set-bg" data-setbg="img/feature/12.jpg">
<div class="sale-notic">FOR SALE</div>
</div>
<div class="feature-text">
<div class="text-center feature-title">
<h5>712 Southland Circle Dr</h5>
<p><i class="fa fa-map-marker"></i> Tuscola, IL 61953</p>
</div>
<div class="room-info-warp">
<div class="room-info">
<div class="rf-left">
<p><i class="fa fa-th-large"></i>   200 Square foot</p>
<p><i class="fa fa-bed"></i> 2 Bedrooms</p>
</div>
<div class="rf-right">
<p><i class="fa fa-car"></i> 1 Garages</p>
<p><i class="fa fa-bath"></i> 2 Bathrooms</p>
</div>
</div>
<div class="room-info">
<div class="rf-left">
<p><i class="fa fa-user"></i>  Gina Wesley</p>
</div>
<div class="rf-right">
<p><i class="fa fa-clock-o"></i> 8 days ago</p>
</div>
</div>
</div>
<a href="#" class="room-price">$235,000</a>
</div>
</div>
</div>
</div>
<div class="site-pagination">
<a href="categories1.html">1</a>
<a href="categories2.html">2</a>
<a href="categories3.html">3</a>
<a href="categories4.html">4</a>
<a href="categories5.html">5</a>
</div>
</div>
</section>
<!-- page end -->


<!-- Clients section -->
<div class="clients-section">
<div class="container">
<div class="clients-slider owl-carousel">
<a href="#">
<img src="img/partner/1.png" alt="">
</a>
<a href="#">
<img src="img/partner/2.png" alt="">
</a>
<a href="#">
<img src="img/partner/3.png" alt="">
</a>
<a href="#">
<img src="img/partner/4.png" alt="">
</a>
<a href="#">
<img src="img/partner/5.png" alt="">
</a>
</div>
</div>
</div>
<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6 footer-widget">
<h5 class="fw-title">KIGALI HOUSE CONNECT</h5>
<p>Lorem ipsum dolo sit azmet, consecter dipise consult  elit. Maecenas mamus antesme non anean a dolor sample tempor nuncest erat.</p>
<div class="social">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-instagram"></i></a>
<a href="#"><i class="fa fa-pinterest"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
</div>
</div>
<div class="col-lg-3 col-md-6 footer-widget">
<div class="contact-widget">
<h5 class="fw-title">CONTACT US</h5>
<p><i class="fa fa-map-marker"></i>3711-2880 Kabuguru St, Nyamirambo, Nyarugenge </p>
<p><i class="fa fa-phone"></i>(+250) 784 077 896</p>
<p><i class="fa fa-envelope"></i>info.kigalihouses@gmail.com</p>
<p><i class="fa fa-clock-o"></i>Mon - Sat, 08 AM - 06 PM</p>
</div>
</div>
<div class="col-lg-3 col-md-6 footer-widget">
<div class="double-menu-widget">
<h5 class="fw-title">POPULAR PLACES</h5>
<ul>
<li><a href="">Remera</a></li>
<li><a href="">Gikondo</a></li>
<li><a href="">Kanombe</a></li>
<li><a href="">Kicukiro</a></li>
<li><a href="">Nyamirambo</a></li>
<li><a href="">Nyarugenge</a></li>

</ul>
<ul>
<li><a href="">Kinyinya</a></li>
<li><a href="">Kacyiru</a></li>
<li><a href="">Kimihurura</a></li>
<li><a href="">Kimironko</a></li>
<li><a href="">Gisozi</a></li>
<li><a href="">Masaka</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-6  footer-widget">
<div class="newslatter-widget">
<h5 class="fw-title">NEWSLETTER</h5>
<p>Subscribe your email to get the latest news and new offer also discount</p>
<form class="footer-newslatter-form">
<input type="text" placeholder="Email address">
<button><i class="fa fa-send"></i></button>
</form>
</div>
</div>
</div>
<div class="footer-bottom">
<div class="footer-nav">
<ul>
<li><a href="index.html">Home</a></li>
<li><a href="categories.html">Featured Listing</a></li>
<li><a href="about.html">About us</a></li>
<li><a href="single-list.html">Pages</a></li>
<li><a href="blog.html">Blog</a></li>
<li><a href="contact.html">Contact</a></li>
</ul>
</div>
<div class="copyright">
<p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">kigalihouseconnect</a>
</p>
</div>
</div>
</div>
</footer>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
