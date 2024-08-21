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

<!-- Mirrored from preview.colorlib.com/theme/original/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jun 2023 21:28:49 GMT -->
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<title>SCEJ</title>

<link rel="icon" href="img/core-img/favicon.ico">

<link rel="stylesheet" href="style.css">
<script nonce="57d1bb4a-41db-4515-969e-ba0042ec1650">(function(w,d){!function(Y,Z,_,ba){Y[_]=Y[_]||{};Y[_].executed=[];Y.zaraz={deferred:[],listeners:[]};Y.zaraz.q=[];Y.zaraz._f=function(bb){return function(){var bc=Array.prototype.slice.call(arguments);Y.zaraz.q.push({m:bb,a:bc})}};for(const bd of["track","set","debug"])Y.zaraz[bd]=Y.zaraz._f(bd);Y.zaraz.init=()=>{var be=Z.getElementsByTagName(ba)[0],bf=Z.createElement(ba),bg=Z.getElementsByTagName("title")[0];bg&&(Y[_].t=Z.getElementsByTagName("title")[0].text);Y[_].x=Math.random();Y[_].w=Y.screen.width;Y[_].h=Y.screen.height;Y[_].j=Y.innerHeight;Y[_].e=Y.innerWidth;Y[_].l=Y.location.href;Y[_].r=Z.referrer;Y[_].k=Y.screen.colorDepth;Y[_].n=Z.characterSet;Y[_].o=(new Date).getTimezoneOffset();if(Y.dataLayer)for(const bk of Object.entries(Object.entries(dataLayer).reduce(((bl,bm)=>({...bl[1],...bm[1]})),{})))zaraz.set(bk[0],bk[1],{scope:"page"});Y[_].q=[];for(;Y.zaraz.q.length;){const bn=Y.zaraz.q.shift();Y[_].q.push(bn)}bf.defer=!0;for(const bo of[localStorage,sessionStorage])Object.keys(bo||{}).filter((bq=>bq.startsWith("_zaraz_"))).forEach((bp=>{try{Y[_]["z_"+bp.slice(7)]=JSON.parse(bo.getItem(bp))}catch{Y[_]["z_"+bp.slice(7)]=bo.getItem(bp)}}));bf.referrerPolicy="origin";bf.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(Y[_])));be.parentNode.insertBefore(bf,be)};["complete","interactive"].includes(Z.readyState)?zaraz.init():Y.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
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


<div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/b1.jpg);">
<div class="container h-100">
<div class="row h-100 align-items-center">
<div class="col-12">
<div class="breadcumb-content text-center">
<h2>about us</h2>
</div>
</div>
</div>
</div>
</div>


<div class="blog-wrapper section-padding-100-0 clearfix">
<div class="container">
<div class="row align-items-end">

<div class="col-12 col-lg-4">
<div class="single-blog-area clearfix mb-100">

<div class="single-blog-content">
<div class="line"></div>
<a href="#" class="post-tag">Lifestyle</a>
<h4><a href="#" class="post-headline">Welcome to this Lifestyle blog</a></h4>
<p class="mb-3">Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Morbi sodales, dolor id ultricies dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus.slacus sit amet augue sodales, vel cursus enim tristique.</p>
</div>
</div>
</div>

<div class="col-12 col-lg-4">
<div class="single-blog-area clearfix mb-100">

<div class="single-blog-content">
<p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus. Quisque molestie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum. Donec sagittis lacus sit amet augue sodales, vel cursus enim tristique. Maecenas vitae massa ut est consectetur sagittis quis vitae tortor.</p>
</div>
</div>
</div>

<div class="col-12 col-md-6 col-lg-4">
<div class="single-catagory-area clearfix mb-100">
<img src="img/blog-img/1.jpg" alt="">

<div class="catagory-title">
<a href="#">Lifestyle posts</a>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="cool-facts-area section-padding-100-0 bg-img background-overlay" style="background-image: url(img/bg-img/gwp.jpg);">
<div class="container">
<div class="row">
<div class="col-12">
<div class="single-blog-area blog-style-2 text-center mb-100">

<div class="single-blog-content">
<div class="line"></div>
<a href="#" class="post-tag">Lifestyle</a>
<h4><a href="#" class="post-headline">Welcome to this Lifestyle blog</a></h4>
 <p>From May 30 to June 3, 2023, a group of students from Cor Jesu College embarked on an educational tour to learn about the latest technologies. The tour took them to several different companies, where they met with experts and learned about AI, anime studio, robotics, full stack web development, how to become an IT manager, and how NLEX operates.

The students had a great time on the tour and learned a lot about the latest technologies. They are now more prepared for the future of work and are excited to use their new skills to make a difference in the world.</p>
</div>
</div>
</div>
</div>
<div class="row">

<div class="col-12 col-sm-6 col-lg-3">
<div class="single-cool-facts-area text-center mb-100">
<h2><span class="counter">25</span></h2>
<p>Awards won</p>
</div>
</div>

<div class="col-12 col-sm-6 col-lg-3">
<div class="single-cool-facts-area text-center mb-100">
<h2><span class="counter">12</span>K</h2>
<p>FB Followers</p>
</div>
</div>

<div class="col-12 col-sm-6 col-lg-3">
<div class="single-cool-facts-area text-center mb-100">
<h2><span class="counter">4</span></h2>
<p>Team members</p>
</div>
</div>

<div class="col-12 col-sm-6 col-lg-3">
<div class="single-cool-facts-area text-center mb-100">
<h2><span class="counter">16</span></h2>
<p>Coffes/Day</p>
</div>
</div>
</div>
</div>
</div>


<div class="blog-wrapper section-padding-100-0 clearfix">
<div class="container">
<div class="row">

<div class="col-12 col-md-6 col-lg-4">
<div class="single-blog-area blog-style-2 mb-100">
<div class="single-blog-thumbnail">
<img src="img/blog-img/03a.jpg" alt="">
<div class="post-date">
<a href="#">03 <span>June</span></a>
</div>
</div>

<div class="single-blog-content mt-50">
<div class="line"></div>
<a href="#" class="post-tag">Manila - Baguio</a>
<h4><a href="#" class="post-headline">What a wonderful educational tour!</a></h4>
<p>What a wonderful educational tour! I will surely miss the beautiful tourist spots in Manila and Baguio, as well as the knowledge and experiences I gained.</p>
<div class="post-meta">
<p>By <a href="#">poj</a></p>
<p>3 comments</p>
</div>
</div>
</div>
</div>

<div class="col-12 col-md-6 col-lg-4">
<div class="single-blog-area blog-style-2 mb-100">
<div class="single-blog-thumbnail">
<img src="img/blog-img/fly2.jpg" alt="">
<div class="post-date">
<a href="#">04 <span>June</span></a>
</div> 
</div>

<div class="single-blog-content mt-50">
<div class="line"></div>
<a href="#" class="post-tag">Manila - Baguio</a>
<h4><a href="#" class="post-headline">Saying goodbye to a wonderful trip</a></h4>
<p>It's hard to say goodbye to a wonderful trip, but I'm grateful for the memories and the knowledge I gained. I can't wait to come back and explore more!</p>
<div class="post-meta">
<p>By <a href="#">poj</a></p>
<p>3 comments</p>
</div>
</div>
</div>
</div>

<div class="col-12 col-md-6 col-lg-4">
<div class="single-blog-area blog-style-2 mb-100">
<div class="single-blog-thumbnail">
<img src="img/blog-img/bye.jpg" alt="">
<div class="post-date">
<a href="#">05 <span>June</span></a>
</div>
</div>

<div class="single-blog-content mt-50">
<div class="line"></div>
<a href="#" class="post-tag">Manila - Baguio</a>
<h4><a href="#" class="post-headline">Back to Reality</a></h4>
<p>After an educational tour, it can be hard to go back to the everyday grind. But with the knowledge and skills you gained, you're better prepared to make a difference in the world.</p>
<div class="post-meta">
<p>By <a href="#">poj</a></p>
<p>3 comments</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


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

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7d33befe780e08b0","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/original/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jun 2023 21:28:49 GMT -->
</html>