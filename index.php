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
<title>KIGALI HOUSE CONNECT</title>
<meta charset="UTF-8">
<meta name="description" content="KIGALI Landing Page Template">
<meta name="keywords" content="KIGALI, unica, creative, html">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="icon" type="img/png" href="img/icons/favicon.ico"/>
<!-- Favicon -->
<link href="img/favicon.ico" rel="shortcut icon"/>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

<!-- Stylesheets -->
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/font-awesome.min.css"/>
<link rel="stylesheet" href="css/animate.css"/>
<link rel="stylesheet" href="css/owl.carousel.css"/>
<link rel="stylesheet" href="css/style.css"/>
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
<li><a href="index.php"><b>Home</b></a></li>
<li><a href="categories.php"><b>FEATURED LISTING</b></a></li>
<li><a href="about.php"><b>ABOUT US</b></a></li>
<!-- <li><a href="single-list.html"><b>Pages</b></a></li> -->
<!-- <li><a href="blog.html"><b>Blog</a></li> -->
<li><a href="contact.php"><b>Contact</b></a></li>
<!-- <li><a href="single-blog.html"><b>CHAT WITH US</b></a></li> -->
</ul>
</div>
</div>
</div>
</div>
</header>
<!-- Header section end -->


<!-- Hero section -->
<section class="hero-section set-bg" data-setbg="img/index3.jpg">
<div class="container hero-text text-white">
<h1>KIGALI HOUSE CONNECT</h1>
<p>Search real estate property records, houses, condos, land and more on kigalihouseconnect.com®.<br>Find property info from the most comprehensive source data.</p>
<a href="#" class="site-btn">VIEW DETAIL</a>
</div>
</section>
<!-- Hero section end -->


<!-- Filter form section -->
<div class="filter-search">
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


<!-- Properties section -->
<section class="properties-section spad">
<div class="container">
<div class="section-title text-center">
<h3>RECENT PROPERTIES</h3>
<p>Discover how much the latest properties have been sold for</p>
</div>
<div class="row">
<div class="col-md-6">
<div class="propertie-item set-bg" data-setbg="img/propertie/1.jpg">
<div class="sale-notic">FOR SALE</div>
<div class="propertie-info text-white">
<div class="info-warp">
<h5>Nyakabanda, KN 167 AV</h5>
<p><i class="fa fa-map-marker"></i>Nyarugenge , Kigali City</p>
</div>
<div class="price">Rwfs 51,777,000</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="propertie-item set-bg" data-setbg="img/propertie/2.jpg">
<div class="rent-notic">FOR RENT</div>
<div class="propertie-info text-white">
<div class="info-warp">
<h5>Gisozi, KG 7 AV</h5>
<p><i class="fa fa-map-marker"></i>Gasabo , Kigali City</p>
</div>
<div class="price">Rwfs 550,000/month</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="propertie-item set-bg" data-setbg="img/propertie/3.jpg">
<div class="sale-notic">FOR SALE</div>
<div class="propertie-info text-white">
<div class="info-warp">
<h5>Kimihurura KG 7 AV</h5>
<p><i class="fa fa-map-marker"></i>Gasabo , Kigali City</p>
</div>
<div class="price">Rwfs 51,000,000</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="propertie-item set-bg" data-setbg="img/propertie/4.jpg">
<div class="rent-notic">FOR RENT</div>
<div class="propertie-info text-white">
<div class="info-warp">
<h5>Kanombe KK 7 AV</h5>
<p><i class="fa fa-map-marker"></i>Kicukiro , Kigali city</p>
</div>
<div class="price">Rwfs 300,000/month</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Properties section end -->


<!-- Services section -->
<section class="services-section spad set-bg" data-setbg="img/service-bg.jpg">
<div class="container">
<div class="row">
<div class="col-lg-6">
<img src="img/service.jpg" alt="">
</div>
<div class="col-lg-5 offset-lg-1 pl-lg-0">
<div class="section-title text-white">
<h3>OUR SERVICES</h3>
<p>We provide the perfect service for </p>
</div>
<div class="services">
<div class="service-item">
<i class="fa fa-comments"></i>
<div class="service-text">
<h5>Consultant Service</h5>
<p>In Aenean purus, pretium sito amet sapien denim consectet sed urna placerat sodales magna leo.</p>
</div>
</div>
<div class="service-item">
<i class="fa fa-home"></i>
<div class="service-text">
<h5>Properties Management</h5>
<p>In Aenean purus, pretium sito amet sapien denim consectet sed urna placerat sodales magna leo.</p>
</div>
</div>
<div class="service-item">
<i class="fa fa-briefcase"></i>
<div class="service-text">
<h5>Renting and Selling</h5>
<p>In Aenean purus, pretium sito amet sapien denim consectet sed urna placerat sodales magna leo.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Services section end -->


<!-- feature section -->
<section class="feature-section spad">
<div class="container">
<div class="section-title text-center">
<h3>Featured Listings</h3>
<p>Browse houses and flats for sale and to rent in your area</p>
</div>
<div class="row">
<div class="col-lg-4 col-md-6">
<!-- feature -->
<div class="feature-item">
<div class="feature-pic set-bg" data-setbg="img/feature/1.jpg">
<div class="sale-notic">FOR SALE</div>
</div>
<div class="feature-text">
<div class="text-center feature-title">
<h5>Kacyiru KN 8 AV</h5>
<p><i class="fa fa-map-marker"></i>Gasabo , Kigali City</p>
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
<a href="#" class="room-price">Rwfs 51,200,000</a>
</div>
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
<h5>Kimironko KG AV 6</h5>
<p><i class="fa fa-map-marker"></i>Gasabo , Kigali City</p>
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
<a href="#" class="room-price">Rwfs 45,500,000</a>
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
<h5>Gikondo KG 8 AV</h5>
<p><i class="fa fa-map-marker"></i>kICUKIRO , Kigali City</p>
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
<a href="#" class="room-price">Rwfs 562,500/month</a>
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
<h5>Kanombe KK 8 AV</h5>
<p><i class="fa fa-map-marker"></i>Kicukiro , Kigali City</p>
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
<a href="#" class="room-price">Rwfs 85,600,000</a>
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
<h5>Muhima KN 6 AV</h5>
<p><i class="fa fa-map-marker"></i>Nyarugenge , Kigali City</p>
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
<a href="#" class="room-price">Rwfs 510,600/month</a>
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
<h5>Kinyinya , KG 8 AV</h5>
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
<a href="#" class="room-price">Rwfs 71,600,000</a>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- feature section end -->


<!-- Gallery section -->
<section class="gallery-section spad">
<div class="container">
<div class="section-title text-center">
<h3>Popular Places</h3>
<p>We understand the value and importance of place</p>
</div>
<div class="gallery">
<div class="grid-sizer"></div>
<a href="#" class="gallery-item grid-long set-bg" data-setbg="img/gallery/1.jpg">
<div class="gi-info">
<h3>Muhima</h3>
<p>Look For Approriate Properties</p>
</div>
</a>
<a href="#" class="gallery-item grid-wide set-bg" data-setbg="img/gallery/2.jpg">
<div class="gi-info">
<h3>Kimironko</h3>
<p>Look For Approriate Properties</p>
</div>
</a>
<a href="#" class="gallery-item set-bg" data-setbg="img/gallery/3.jpg">
<div class="gi-info">
<h3>Kacyiru</h3>
<p>Look For Approriate Properties</p>
</div>
</a>
<a href="#" class="gallery-item set-bg" data-setbg="img/gallery/4.jpg">
<div class="gi-info">
<h3>Gikondo</h3>
<p>Look For Approriate Properties</p>
</div>
</a>

</div>
</div>
</section>
<!-- Gallery section end -->



<!-- Review section -->
<section class="review-section set-bg" data-setbg="img/review-bg.jpg">
<div class="container">
<div class="review-slider owl-carousel">
<div class="review-item text-white">
<div class="rating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
<p>“KHC was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
<h5>Stacy Mc Neeley</h5>
<span>CEP’s Director</span>
<div class="clint-pic set-bg" data-setbg="img/review/1.jpg"></div>
</div>
<div class="review-item text-white">
<div class="rating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
<p>“KHC was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
<h5>Stacy Mc Neeley</h5>
<span>CEP’s Director</span>
<div class="clint-pic set-bg" data-setbg="img/review/1.jpg"></div>
</div>
<div class="review-item text-white">
<div class="rating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
<p>“KHC was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
<h5>Stacy Mc Neeley</h5>
<span>CEP’s Director</span>
<div class="clint-pic set-bg" data-setbg="img/review/1.jpg"></div>
</div>
</div>
</div>
</section>
<!-- Review section end-->



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
