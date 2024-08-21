<!DOCTYPE html>
<html lang="en">

<?php
session_start();

// Check if a session exists
if(!isset($_SESSION['email'])){
    // Redirect to the login page
    header("Location: login.php");
    exit();
}

// Logout functionality
if(isset($_POST['logout'])){
    // Clear all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect to the login page
    header("Location: login.php");
    exit();
}
?>

<!-- Mirrored from preview.colorlib.com/theme/original/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jun 2023 21:28:50 GMT -->
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<title>SCEJ</title>

<link rel="icon" href="img/core-img/favicon.ico">

<link rel="stylesheet" href="style.css">
<script nonce="ea4c75cb-b94f-4ad5-a3b2-ee56d7b709cc">(function(w,d){!function(Y,Z,_,ba){Y[_]=Y[_]||{};Y[_].executed=[];Y.zaraz={deferred:[],listeners:[]};Y.zaraz.q=[];Y.zaraz._f=function(bb){return function(){var bc=Array.prototype.slice.call(arguments);Y.zaraz.q.push({m:bb,a:bc})}};for(const bd of["track","set","debug"])Y.zaraz[bd]=Y.zaraz._f(bd);Y.zaraz.init=()=>{var be=Z.getElementsByTagName(ba)[0],bf=Z.createElement(ba),bg=Z.getElementsByTagName("title")[0];bg&&(Y[_].t=Z.getElementsByTagName("title")[0].text);Y[_].x=Math.random();Y[_].w=Y.screen.width;Y[_].h=Y.screen.height;Y[_].j=Y.innerHeight;Y[_].e=Y.innerWidth;Y[_].l=Y.location.href;Y[_].r=Z.referrer;Y[_].k=Y.screen.colorDepth;Y[_].n=Z.characterSet;Y[_].o=(new Date).getTimezoneOffset();if(Y.dataLayer)for(const bk of Object.entries(Object.entries(dataLayer).reduce(((bl,bm)=>({...bl[1],...bm[1]})),{})))zaraz.set(bk[0],bk[1],{scope:"page"});Y[_].q=[];for(;Y.zaraz.q.length;){const bn=Y.zaraz.q.shift();Y[_].q.push(bn)}bf.defer=!0;for(const bo of[localStorage,sessionStorage])Object.keys(bo||{}).filter((bq=>bq.startsWith("_zaraz_"))).forEach((bp=>{try{Y[_]["z_"+bp.slice(7)]=JSON.parse(bo.getItem(bp))}catch{Y[_]["z_"+bp.slice(7)]=bo.getItem(bp)}}));bf.referrerPolicy="origin";bf.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(Y[_])));be.parentNode.insertBefore(bf,be)};["complete","interactive"].includes(Z.readyState)?zaraz.init():Y.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>

<div id="preloader">
<div class="preload-content">
<div id="original-load"></div>
</div>
</div>

<div class="subscribe-newsletter-area">
<div class="modal fade" id="subsModal" tabindex="-1" role="dialog" aria-labelledby="subsModal" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<div class="modal-body">
<h5 class="title">Subscribe to my newsletter</h5>
<form action="#" class="newsletterForm" method="post">
<input type="email" name="email" id="subscribesForm2" placeholder="Your e-mail here">
<button type="submit" class="btn original-btn">Subscribe</button>
</form>
</div>
</div>
</div>
</div>
</div>

<header class="header-area">

<div class="top-header">
<div class="container h-100">
<div class="row h-100 align-items-center">

<div class="col-12 col-sm-8">
<div class="breaking-news-area">
<div id="breakingNewsTicker" class="ticker">
<ul>
    <li><a href="#">Hello World!</a></li>
<li><a href="#">Hello Manila!</a></li>
<li><a href="#">Hello Baguio!</a></li>
<li><a href="#">Hello Cor jesu!</a></li>
<li><a href="#">Hello CCIS!</a></li>
</ul>
</div>
</div>
</div>

<div class="col-12 col-sm-4">
<div class="top-social-area">
<a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
<a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
<a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
<a href="#" data-toggle="tooltip" data-placement="bottom" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
<a href="#" data-toggle="tooltip" data-placement="bottom" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
<a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
<form action="index-2.php" method="POST" class="newsletterForm">
        <button type="submit" class="btn original-btn" name="logout">Logout</button>
    </form>

</div>
</div>
</div>
</div>
</div>

<div class="logo-area text-center">
<div class="container h-100">
<div class="row h-100 align-items-center">
<div class="col-12">
<a href="index-2.php" class="original-logo"><img src="img/core-img/logoo.png" alt=""></a>
</div>
</div>
</div>
</div>

<div class="original-nav-area" id="stickyNav">
<div class="classy-nav-container breakpoint-off">
<div class="container">

<nav class="classy-navbar justify-content-between">

<div class="subscribe-btn">
<a href="#" class="btn subscribe-btn" data-toggle="modal" data-target="#subsModal">Subscribe</a>
</div>

<div class="classy-navbar-toggler">
<span class="navbarToggler"><span></span><span></span><span></span></span>
</div>

<div class="classy-menu" id="originalNav">

<div class="classycloseIcon">
<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
</div>

<div class="classynav">
<ul>
<li><a href="index-2.php">Home</a></li>
<li><a href="#">Pages</a>
<ul class="dropdown">
<li><a href="index-2.php">Home</a></li>
<li><a href="about-us.php">About Us</a></li>
<li><a href="single-post.php">Single Post</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="coming-soon.php">Coming Soon</a></li>
</ul>
</li>
<li><a href="#">Catagory</a>
<ul class="dropdown">
<li><a href="#">Catagory 1</a></li>
<li><a href="#">Catagory 1</a></li>
<li><a href="#">Catagory 1</a>
<ul class="dropdown">
<li><a href="#">Catagory 2</a></li>
<li><a href="#">Catagory 2</a></li>
<li><a href="#">Catagory 2</a>
<ul class="dropdown">
<li><a href="#">Catagory 3</a></li>
<li><a href="#">Catagory 3</a></li>
<li><a href="#">Catagory 3</a></li>
<li><a href="#">Catagory 3</a></li>
<li><a href="#">Catagory 3</a></li>
</ul>
</li>
<li><a href="#">Catagory 2</a></li>
<li><a href="#">Catagory 2</a></li>
</ul>
 </li>
<li><a href="#">Catagory 1</a></li>
<li><a href="#">Catagory 1</a></li>
</ul>
</li>
<li><a href="about-us.php">About Us</a></li>
<li><a href="#">Megamenu</a>
<div class="megamenu">
<ul class="single-mega cn-col-4">
<li class="title">Headline 1</li>
<li><a href="#">Mega Menu Item 1</a></li>
<li><a href="#">Mega Menu Item 2</a></li>
<li><a href="#">Mega Menu Item 3</a></li>
<li><a href="#">Mega Menu Item 4</a></li>
<li><a href="#">Mega Menu Item 5</a></li>
</ul>
<ul class="single-mega cn-col-4">
<li class="title">Headline 2</li>
<li><a href="#">Mega Menu Item 1</a></li>
<li><a href="#">Mega Menu Item 2</a></li>
<li><a href="#">Mega Menu Item 3</a></li>
<li><a href="#">Mega Menu Item 4</a></li>
<li><a href="#">Mega Menu Item 5</a></li>
</ul>
<ul class="single-mega cn-col-4">
<li class="title">Headline 3</li>
<li><a href="#">Mega Menu Item 1</a></li>
<li><a href="#">Mega Menu Item 2</a></li>
<li><a href="#">Mega Menu Item 3</a></li>
<li><a href="#">Mega Menu Item 4</a></li>
<li><a href="#">Mega Menu Item 5</a></li>
</ul>
<ul class="single-mega cn-col-4">
<li class="title">Headline 4</li>
<li><a href="#">Mega Menu Item 1</a></li>
<li><a href="#">Mega Menu Item 2</a></li>
<li><a href="#">Mega Menu Item 3</a></li>
<li><a href="#">Mega Menu Item 4</a></li>
<li><a href="#">Mega Menu Item 5</a></li>
</ul>
</div>
</li>
<li><a href="contact.php">Contact</a></li>
</ul>

<div id="search-wrapper">
<form action="#">
<input type="text" id="search" placeholder="Search something...">
<div id="close-icon"></div>
<input class="d-none" type="submit" value="">
</form>
</div>
</div>

</div>
</nav>
</div>
</div>
 </div>
</header>


<div id="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1178.2216505999384!2d125.33915073894707!3d6.640781842591633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1686096286790!5m2!1sen!2sph" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<section class="contact-area section-padding-100">
<div class="container">
<div class="row justify-content-center">

<div class="col-12 col-md-10 col-lg-9">
<div class="contact-form">
<h5>Get in Touch</h5>

<form action="#" method="post">
<div class="row">
<div class="col-12 col-md-6">
<div class="group">
<input type="text" name="name" id="name" required>
<span class="highlight"></span>
<span class="bar"></span>
<label>Name</label>
</div>
</div>
<div class="col-12 col-md-6">
<div class="group">
<input type="email" name="email" id="email" required>
<span class="highlight"></span>
<span class="bar"></span>
<label>Email</label>
</div>
</div>
<div class="col-12">
<div class="group">
<input type="text" name="subject" id="subject" required>
<span class="highlight"></span>
<span class="bar"></span>
<label>Subject</label>
</div>
</div>
<div class="col-12">
<div class="group">
<textarea name="message" id="message" required></textarea>
<span class="highlight"></span>
<span class="bar"></span>
<label>Message</label>
</div>
</div>
<div class="col-12">
<button type="submit" class="btn original-btn">Send Message</button>
</div>
</div>
</form>
</div>
</div>
<div class="col-12 col-md-10 col-lg-3">
<div class="post-sidebar-area">

<div class="sidebar-widget-area">
<form action="#" class="search-form">
<input type="search" name="search" id="searchForm" placeholder="Search">
<input type="submit" value="submit">
</form>
</div>

<div class="sidebar-widget-area">
<h5 class="title subscribe-title">Subscribe to my newsletter</h5>
<div class="widget-content">
<form action="#" class="newsletterForm">
<input type="email" name="email" id="subscribesForm" placeholder="Your e-mail here">
<button type="submit" class="btn original-btn">Subscribe</button>
</form>
</div>
</div>

<div class="sidebar-widget-area">
<div class="widget-content social-widget d-flex justify-content-between">
<a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
<a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<div class="instagram-feed-area">
<div class="container">
<div class="row">
<div class="col-12">
<div class="insta-title">
<h5>Follow us @ Instagram</h5>
</div>
</div>
</div>
</div>

<div class="instagram-slides owl-carousel">

<div class="single-insta-feed">
<img src="img/instagram-img/1.jpg" alt="">

<div class="hover-effects">
<a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
</div>
</div>

<div class="single-insta-feed">
<img src="img/instagram-img/2.jpg" alt="">

<div class="hover-effects">
<a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
</div>
</div>

<div class="single-insta-feed">
<img src="img/instagram-img/3.jpg" alt="">

<div class="hover-effects">
<a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
</div>
</div>

<div class="single-insta-feed">
<img src="img/instagram-img/4.jpg" alt="">

<div class="hover-effects">
<a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
</div>
</div>

<div class="single-insta-feed">
<img src="img/instagram-img/5.jpg" alt="">

<div class="hover-effects">
<a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
</div>
</div>

<div class="single-insta-feed">
<img src="img/instagram-img/6.jpg" alt="">

<div class="hover-effects">
<a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
</div>
</div>

<div class="single-insta-feed">
<img src="img/instagram-img/7.jpg" alt="">

<div class="hover-effects">
<a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
</div>
</div>

<div class="single-insta-feed">
<img src="img/instagram-img/8.jpg" alt="">

<div class="hover-effects">
<a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
</div>
</div>
</div>
</div>


<footer class="footer-area text-center">
<div class="container">
<div class="row">
<div class="col-12">

<div class="classy-nav-container breakpoint-off">

<nav class="classy-navbar justify-content-center">

<div class="classy-navbar-toggler">
<span class="navbarToggler"><span></span><span></span><span></span></span>
</div>

<div class="classy-menu">

<div class="classycloseIcon">
<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
</div>

<div class="classynav">
<ul>
<li><a href="#">Home</a></li>
<li><a href="#">About Us</a></li>
<li><a href="#">Lifestyle</a></li>
<li><a href="#">travel</a></li>
<li><a href="#">Music</a></li>
<li><a href="#">Contact</a></li>
</ul>
</div>

</div>
</nav>
</div>

<div class="footer-social-area mt-30">
<a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
<a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
<a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
<a href="#" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
<a href="#" data-toggle="tooltip" data-placement="top" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
<a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
</div>
</div>
</div>
</div>


</footer>


<script src="js/jquery/jquery-2.2.4.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/plugins.js"></script>

<script src="js/active.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
<script src="js/map-active.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7d33bf020cc608b0","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/original/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jun 2023 21:28:50 GMT -->
</html>