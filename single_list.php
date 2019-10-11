<?php 	session_start(); ?>
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
<!-- PNotify -->
<link href="admin/pnotify/dist/pnotify.css" rel="stylesheet">
<link href="admin/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
<link href="admin/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
/* pnotify */
.bg-fblue, .callout.callout-info, .alert-info, .label-info, .modal-info .modal-body {
   background-color: #30caa0 !important;
   color: white;
   border: none;
}
.single-list-content .price-btn {
    display: inline-block;
    font-size: 22px;
    font-weight: 600;
    text-align: center;
    padding: 9px;
    background: #30caa0;
    color: #fff;
    min-width: 200px;
    border-radius: 2px;
    margin-bottom: 70px;
}
</style>

</head>
<?php
$sssData=array();
$sssData=$_SESSION['sessData'];
if($sssData!=''):
?>
<body onpageshow="new PNotify({
								title: 'Notification',
								text: '<?php echo $sssData['status']['msg'];?>',
								type: 'info',
								styling: 'bootstrap3'
						});">
</body>
<?php endif; ?>
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
</ul>
</div>
</div>
</div>
</div>
</header>
<!-- Header section end -->

<!-- Page top section -->
<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
<div class="container text-white">
<h2>SINGLE LISTING</h2>
</div>
</section>
<!--  Page top end -->

<br>

<!-- Page -->
<section class="page-section">
<div class="container">
<div class="row">
<div class="col-lg-8 single-list-page">
<div class="single-list-slider owl-carousel" id="sl-slider">
<div class="sl-item set-bg" data-setbg="img/single-list-slider/1.jpg">
<div class="sale-notic">FOR SALE</div>
</div>
<div class="sl-item set-bg" data-setbg="img/single-list-slider/2.jpg">
<div class="rent-notic">FOR Rent</div>
</div>
<div class="sl-item set-bg" data-setbg="img/single-list-slider/3.jpg">
<div class="sale-notic">FOR SALE</div>
</div>
<div class="sl-item set-bg" data-setbg="img/single-list-slider/4.jpg">
<div class="rent-notic">FOR Rent</div>
</div>
<div class="sl-item set-bg" data-setbg="img/single-list-slider/5.jpg">
<div class="sale-notic">FOR SALE</div>
</div>
</div>
<div class="owl-carousel sl-thumb-slider" id="sl-slider-thumb">
<div class="sl-thumb set-bg" data-setbg="img/single-list-slider/1.jpg"></div>
<div class="sl-thumb set-bg" data-setbg="img/single-list-slider/2.jpg"></div>
<div class="sl-thumb set-bg" data-setbg="img/single-list-slider/3.jpg"></div>
<div class="sl-thumb set-bg" data-setbg="img/single-list-slider/4.jpg"></div>
<div class="sl-thumb set-bg" data-setbg="img/single-list-slider/5.jpg"></div>
</div>
<div class="single-list-content">
<div class="row">
<div class="col-xl-8 sl-title">
<h2>305 North Palm Drive</h2>
<p><i class="fa fa-map-marker"></i>Beverly Hills, CA 90210</p>
</div>
<div class="col-xl-4">
<a href="#" class="price-btn">Rwfs4,500,000</a>
<a href="admin/signin.php" class="price-btn pull-right"  style="background: #34574d;">Book This House</a>
</div>
</div>
<h3 class="sl-sp-title">Property Details</h3>
<div class="row property-details-list">
<div class="col-md-4 col-sm-6">
<p><i class="fa fa-th-large"></i> 1500 Square foot</p>
<p><i class="fa fa-bed"></i> 16 Bedrooms</p>
<p><i class="fa fa-user"></i> Gina Wesley</p>
</div>
<div class="col-md-4 col-sm-6">
<p><i class="fa fa-car"></i> 2 Garages</p>
<p><i class="fa fa-building-o"></i> Family Villa</p>
<p><i class="fa fa-clock-o"></i> 1 days ago</p>
</div>
<div class="col-md-4">
<p><i class="fa fa-bath"></i> 8 Bathrooms</p>
<p><i class="fa fa-trophy"></i> 5 years age</p>
</div>
</div>
<h3 class="sl-sp-title">Description</h3>
<div class="description">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus egestas fermentum ornareste. Donec index lorem. Vestibulum  aliquet odio, eget tempor libero. Cras congue cursus tincidunt. Nullam venenatis dui id orci egestas tincidunt id elit. Nullam ut vuputate justo. Integer lacnia pharetra pretium. Casan ante ipsum primis in faucibus orci luctus et ultrice.</p>
</div>
<h3 class="sl-sp-title">Property Details</h3>
<div class="row property-details-list">
<div class="col-md-4 col-sm-6">
<p><i class="fa fa-check-circle-o"></i> Air conditioning</p>
<p><i class="fa fa-check-circle-o"></i> Telephone</p>
<p><i class="fa fa-check-circle-o"></i> Laundry Room</p>
</div>
<div class="col-md-4 col-sm-6">
<p><i class="fa fa-check-circle-o"></i> Central Heating</p>
<p><i class="fa fa-check-circle-o"></i> Family Villa</p>
<p><i class="fa fa-check-circle-o"></i> Metro Central</p>
</div>
<div class="col-md-4">
<p><i class="fa fa-check-circle-o"></i> City views</p>
<p><i class="fa fa-check-circle-o"></i> Internet</p>
<p><i class="fa fa-check-circle-o"></i> Electric Range</p>
</div>
</div>


</div>
</div>
<!-- sidebar -->
<div class="col-lg-4 col-md-7 sidebar">
<div class="author-card">
<div class="author-img set-bg" data-setbg="img/author.jpg"></div>
<div class="author-info">
<h5>Gina Wesley</h5>
<p>Real Estate Agent</p>
</div>
<div class="author-contact">
<p><i class="fa fa-phone"></i>(567) 666 121 2233</p>
<p><i class="fa fa-envelope"></i>ginawesley26@gmail.com</p>
</div>
</div>
<div class="contact-form-card">
<h5>Do you have any question?</h5>
<form method="post" action="admin/class/feedbackControler.php">
<input type="text" name="name" placeholder="Your name">
<input type="text"  name="email" placeholder="Your email">
<textarea  name="message" placeholder="Your question"></textarea>
<input type="hidden" name="house_id" value="1">
<input type="hidden" name="link" value="../../single_list.php">
<button type="submit" name="send_feedback">SEND</button>
</form>
</div>
<div class="related-properties">
<h2>Related Property</h2>
<div class="rp-item">
<div class="rp-pic set-bg" data-setbg="img/feature/1.jpg">
<div class="sale-notic">FOR SALE</div>
</div>
<div class="rp-info">
<h5>1963 S Crescent Heights Blvd</h5>
<p><i class="fa fa-map-marker"></i>Los Angeles, CA 90034</p>
</div>
<a href="#" class="rp-price">$1,200,000</a>
</div>
<div class="rp-item">
<div class="rp-pic set-bg" data-setbg="img/feature/2.jpg">
<div class="rent-notic">FOR Rent</div>
</div>
<div class="rp-info">
<h5>17 Sturges Road, Wokingham</h5>
<p><i class="fa fa-map-marker"></i> Newtown, CT 06470</p>
</div>
<a href="#" class="rp-price">$2,500/month</a>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Page end -->

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
<!-- Clients section end -->


<!-- Footer section -->
<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6 footer-widget">
<h4 class="fw-title">KGALI HOUSE CONNECT</h4><br/>
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
<li><a href="">Remera,</a></li>
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
<li><a href="">Home</a></li>
<li><a href="">Featured Listing</a></li>
<li><a href="">About us</a></li>
<li><a href="">Pages</a></li>
<li><a href="">Blog</a></li>
<li><a href="">Contact</a></li>
</ul>

</div>
<div class="copyright">
<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
</div>
</div>
</div>
</footer>
<!-- Footer section end -->


<!--====== Javascripts & Jquery ======-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/main.js"></script>


<!-- load for map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
<script src="js/map-2.js"></script>
<!-- PNotify -->
<script src="admin/pnotify/dist/pnotify.js"></script>
<script src="admin/pnotify/dist/pnotify.buttons.js"></script>
<script src="admin/pnotify/dist/pnotify.nonblock.js"></script>

<!-- Register New Admin -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content modal-lg">
  <div class="modal-header">
    <h5 class="modal-title" style="color: #272930" id="exampleModalLabel">KHC <span class="text-muted"> | <small> CLIENT REGISTRATION AND PAYMENT</small> </span> </h5>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
  <form class="" action="class/houseOwnersControler.php" method="post">
    <div class="modal-body">
      <div class="row">
          <div class="col-md-7" style="border-right: 1px solid gray;">
            <input type="text" name="fname" placeholder="First Name" class="form-control">
            <br>
            <input type="text" name="lname" placeholder="Last Name" class="form-control">
            <br>
            <input type="email" name="email" placeholder="Email" class="form-control">
            <br>
            <input type="number" name="phone" placeholder="Telephone" class="form-control">
            <br>
            <input type="text" name="adress" placeholder="Adress" class="form-control">
            <br>
            <select name="status"  value="<?php echo $show['adress'];?>" class="form-control">
                <option value="1">Activate</option>
                <option value="0">Desactivate</option>
            </select>
          </div>
          <div class="col-md-5">
            <input type="text" name="fname" placeholder="First Name" class="form-control">
            <br>
            <input type="text" name="lname" placeholder="Last Name" class="form-control">
            <br>
            <input type="email" name="email" placeholder="Email" class="form-control">
            <br>
            <input type="number" name="phone" placeholder="Telephone" class="form-control">
            <br>
            <input type="text" name="adress" placeholder="Adress" class="form-control">
            <br>
            <select name="status"  value="<?php echo $show['adress'];?>" class="form-control">
                <option value="1">Activate</option>
                <option value="0">Desactivate</option>
            </select>
          </div>
      </div>
    </div>
    <div class="modal-footer">
      <button style="background: lightgrey; Color: white;" class="btn-t  btn-secondary" type="button" data-dismiss="modal">Cancel</button>
      <button type="submit" name="add"  style="background: #4e73df;" class="btn-t  btn-primary">Register</button>
    </div>
  </form>
</div>
</div>
</div>
<?php $_SESSION['sessData']=''; ?>
</body>
</html>
