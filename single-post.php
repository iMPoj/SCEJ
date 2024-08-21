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
<!-- Mirrored from preview.colorlib.com/theme/original/single-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jun 2023 21:28:49 GMT -->
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<title>SCEJ</title>

<link rel="icon" href="img/core-img/favicon.ico">

<link rel="stylesheet" href="style.css">
<script nonce="01b1ec38-7e85-4c62-9b64-ac7a5614e3f0">(function(w,d){!function(Y,Z,_,ba){Y[_]=Y[_]||{};Y[_].executed=[];Y.zaraz={deferred:[],listeners:[]};Y.zaraz.q=[];Y.zaraz._f=function(bb){return function(){var bc=Array.prototype.slice.call(arguments);Y.zaraz.q.push({m:bb,a:bc})}};for(const bd of["track","set","debug"])Y.zaraz[bd]=Y.zaraz._f(bd);Y.zaraz.init=()=>{var be=Z.getElementsByTagName(ba)[0],bf=Z.createElement(ba),bg=Z.getElementsByTagName("title")[0];bg&&(Y[_].t=Z.getElementsByTagName("title")[0].text);Y[_].x=Math.random();Y[_].w=Y.screen.width;Y[_].h=Y.screen.height;Y[_].j=Y.innerHeight;Y[_].e=Y.innerWidth;Y[_].l=Y.location.href;Y[_].r=Z.referrer;Y[_].k=Y.screen.colorDepth;Y[_].n=Z.characterSet;Y[_].o=(new Date).getTimezoneOffset();if(Y.dataLayer)for(const bk of Object.entries(Object.entries(dataLayer).reduce(((bl,bm)=>({...bl[1],...bm[1]})),{})))zaraz.set(bk[0],bk[1],{scope:"page"});Y[_].q=[];for(;Y.zaraz.q.length;){const bn=Y.zaraz.q.shift();Y[_].q.push(bn)}bf.defer=!0;for(const bo of[localStorage,sessionStorage])Object.keys(bo||{}).filter((bq=>bq.startsWith("_zaraz_"))).forEach((bp=>{try{Y[_]["z_"+bp.slice(7)]=JSON.parse(bo.getItem(bp))}catch{Y[_]["z_"+bp.slice(7)]=bo.getItem(bp)}}));bf.referrerPolicy="origin";bf.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(Y[_])));be.parentNode.insertBefore(bf,be)};["complete","interactive"].includes(Z.readyState)?zaraz.init():Y.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
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


<div class="single-blog-wrapper section-padding-0-100">

<div class="single-blog-area blog-style-2 mb-50">
<div class="single-blog-thumbnail">
<img src="img/bg-img/bb44.jpg" alt="">
<div class="post-tag-content">
<div class="container">
<div class="row">
<div class="col-12">
<div class="post-date">
<a href="#">  31  <span>May</span></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">

<div class="col-12 col-lg-9">

<div class="single-blog-area blog-style-2 mb-50">

<div class="single-blog-content">
<div class="line"></div>
<a href="#" class="post-tag">Lifestyle</a>
<h4><a href="#" class="post-headline mb-0">Educational Tour 2023</a></h4>
<div class="post-meta mb-50">
<p>By <a href="#">Poj</a></p>
<p>3 comments</p>
</div>
<p>From May 30 to June 3, 2023, a group of bright and inquisitive students from Cor Jesu College embarked on an educational odyssey that would broaden their horizons and equip them with the latest technological knowledge. This immersive tour took them on a captivating journey, leading them through the realms of AI, anime studios, robotics, full-stack web development, IT management, and the intricate workings of NLEX. Their passion for learning was ignited, and their enthusiasm for the future of work soared as they absorbed invaluable insights from industry experts.</p>
<p>The students' first destination was an AI-focused company at the forefront of intelligent systems development. Here, they were introduced to the awe-inspiring world of artificial intelligence. Accompanied by experts, they delved into the intricate workings of machine learning, natural language processing, and computer vision. Witnessing AI's profound impact on diverse industries, such as healthcare and finance, the students recognized its potential to shape the future. Moreover, they gained firsthand knowledge about the ethical considerations surrounding AI, laying the foundation for responsible and conscientious technological advancement.</p>
<p>Transitioning from the realm of artificial intelligence to the captivating world of anime, the students found themselves immersed in the harmonious blend of artistry and technology. In an anime studio, they bore witness to the meticulous process of bringing vibrant and engaging animations to life. Through the guidance of industry professionals, the students discovered the software and techniques employed in character design, storyboarding, and animation production. They marveled at the collaborative spirit and attention to detail that define this visually enchanting medium. Departing with a newfound appreciation for the seamless integration of art and technology, the students were inspired to explore their own creative potential.</p>
<p>At the robotics on UP, the students were introduced to the cutting-edge field of automation and witnessed firsthand the transformative power of robotics across various industries. Engaging with an array of robots, each engineered for a distinct purpose, the students witnessed the remarkable possibilities that arise from the convergence of hardware and software. They grasped the intricacies of robotic engineering, and experts enlightened them about the challenges and triumphs of developing autonomous systems. The students left with a deep appreciation for the potential of robotics to streamline processes, enhance productivity, and revolutionize the world around them.</p>
<p>Moving seamlessly from the physical realm to the digital sphere, the students were immersed in the realm of full-stack web development. They explored the art of creating dynamic websites and applications by gaining insights into front-end and back-end development. Experts imparted knowledge about programming languages, frameworks, and the importance of user-centric design. Through hands-on exercises, the students honed their coding skills, mastering the art of crafting captivating digital experiences. This comprehensive understanding of web development provided them with a solid foundation for their future endeavors in the tech industry.</p>
<p>Understanding that technology is not only about development but also about effective management, the students had the opportunity to learn about the crucial role of IT managers. They gained insights into the strategic planning, team coordination, and decision-making processes that underpin successful IT management. Industry professionals shared their experiences and offered valuable advice on how to navigate this dynamic field. The students left with a comprehensive understanding of the skills, knowledge, and leadership qualities necessary to become proficient IT managers.</p>
<p>To complete their educational journey, the students were introduced to the intricate operations of NLEX, a major toll road network. They gained an appreciation for the behind-the-scenes efforts required to ensure smooth</p>
<p></p>

</div>
</div>

<div class="blog-post-author mt-100 d-flex">
<div class="author-thumbnail">
<img src="img/bg-img/fb1 (3).jpg" alt="">
</div>
<div class="author-info">
<div class="line"></div>
<span class="author-role">Author</span>
<h4><a href="#" class="author-name">John Lloyd Pojadas</a></h4>
<p>John Lloyd L. Pojadas is a versatile individual who excels as a web designer, game developer, designer, and programmer. With a keen eye for aesthetics and a strong technical foundation, he brings creativity and functionality together to create captivating digital experiences.</p>
</div>
</div>

<div class="comment_area clearfix mt-70">
<h5 class="title">Comments</h5>
<ol>

<li class="single_comment_area">

<div class="comment-content d-flex">

<div class="comment-author">
<img src="img/bg-img/3.jpg" alt="author">
</div>

<div class="comment-meta">
<a href="#" class="post-date">10 hours ago</a>
<p><a href="#" class="post-author">Cledelyn Joy Arciaga</a></p>
<p>This vlog documenting Cor Jesu College's educational tech tour was incredibly insightful and inspiring! It's impressive to see how these students were exposed to a diverse range of cutting-edge technologies, from AI to robotics and web development. The passion and enthusiasm they showcased throughout the tour were truly infectious.</p>
<a href="#" class="comment-reply">Reply</a>
</div>
</div>
<ol class="children">
<li class="single_comment_area">

<div class="comment-content d-flex">

<div class="comment-author">
<img src="img/bg-img/7.jpg" alt="author">
</div>

<div class="comment-meta">
<a href="#" class="post-date">6 min ago</a>
<p><a href="#" class="post-author">Shiver Joy Villadores Raboy</a></p>
<p>I loved how this vlog highlighted the importance of interdisciplinary learning and its impact on preparing students for the future of work. The exposure to AI, anime studios, and IT management showcased the diverse career paths available in the tech industry, empowering these students to explore their interests and unleash their potential.</p>
<a href="#" class="comment-reply">Reply</a>
</div>
</div>
</li>
</ol>
</li>

<li class="single_comment_area">

<div class="comment-content d-flex">

<div class="comment-author">
<img src="img/bg-img/8.jpg" alt="author">
</div>

<div class="comment-meta">
 <a href="#" class="post-date">5 hours ago  </a>
<p><a href="#" class="post-author">Ex-Ryn Jave Cabonita</a></p>
<p>The combination of educational content and real-world experiences in this vlog was exceptional. It not only showcased the latest technologies but also emphasized the ethical considerations and the importance of responsible innovation. It's evident that these students have gained invaluable knowledge and skills that will undoubtedly shape their future endeavors and enable them to make a positive impact in the world.</p>
<a href="#" class="comment-reply">Reply</a>
</div>
</div>
</li>
</ol>
</div>
<div class="post-a-comment-area mt-70">
<h5>Leave a reply</h5>

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
<label>Comment</label>
</div>
</div>
<div class="col-12">
<button type="submit" class="btn original-btn">Reply</button>
</div>
</div>
</form>
</div>
</div>

<div class="col-12 col-md-4 col-lg-3">
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
<h5 class="title">Endorsement</h5>
<a href="#"><img src="img/bg-img/qwe.gif" alt=""></a>
</div>

<div class="sidebar-widget-area">
<h5 class="title">Developers</h5>
<div class="widget-content">

<div class="single-blog-post d-flex align-items-center widget-post">


    <div class="post-thumbnail">
<img src="img/blog-img/fb1 (1).jpg" alt="">
</div>

 <div class="post-content">
<a href="https://www.facebook.com/javecabonita" class="post-tag">Manila - Baguio</a>
<h4><a href="https://www.facebook.com/javecabonita" class="post-headline">Ex-Ryn Jave Cabonita</a></h4>
<div class="post-meta">
<p><a href="https://www.facebook.com/javecabonita">Web Designer</a></p>
</div>
</div>
</div>

<div class="single-blog-post d-flex align-items-center widget-post">

<div class="post-thumbnail">
<img src="img/blog-img/fb1 (2).jpg" alt="">
</div>

<div class="post-content">
<a href="https://www.facebook.com/khim.luv.10" class="post-tag">Manila - Baguio</a>
<h4><a href="https://www.facebook.com/khim.luv.10" class="post-headline">Cledelyn Joy Arciaga</a></h4>
<div class="post-meta">
<p><a href="https://www.facebook.com/khim.luv.10">Web Designer</a></p>
</div>
</div>
</div>

<div class="single-blog-post d-flex align-items-center widget-post">

<div class="post-thumbnail">
<img src="img/blog-img/fb1 (3).jpg" alt="">
</div>

<div class="post-content">
<a href="https://www.facebook.com/pojadas40" class="post-tag">Manila - Baguio</a>
<h4><a href="https://www.facebook.com/pojadas40" class="post-headline">John Lloyd L. Pojadas</a></h4>
<div class="post-meta">
<p><a href="https://www.facebook.com/pojadas40">Web Designer</a></p>
</div>
</div>
</div>

<div class="single-blog-post d-flex align-items-center widget-post">

<div class="post-thumbnail">
<img src="img/blog-img/fb1 (4).jpg" alt="">
</div>

<div class="post-content">
<a href="https://www.facebook.com/ShiVerJOY" class="post-tag">Educ Tour 2023</a>
<h4><a href="https://www.facebook.com/ShiVerJOY" class="post-headline">Shiver Joy Villadores Raboy</a></h4>
<div class="post-meta">
<p><a href="https://www.facebook.com/ShiVerJOY">Web Designer</a></p>
</div>
</div>
</div>

</div>
</div>

<div class="sidebar-widget-area">
<h5 class="title">Tags</h5>
<div class="widget-content">
<ul class="tags">
<li><a href="#">design</a></li>
<li><a href="#">fashion</a></li>
<li><a href="#">travel</a></li>
<li><a href="#">music</a></li>
<li><a href="#">party</a></li>
<li><a href="#">video</a></li>
<li><a href="#">photography</a></li>
<li><a href="#">adventure</a></li>
</ul>
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

Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>

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
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7d33bf003c462b90","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/original/single-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jun 2023 21:28:50 GMT -->
</html>