<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>EngineHosting</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.5">
	<!-- Framework Css -->
	<link rel="stylesheet" type="text/css" href="assets/css/lib/bootstrap.min.css">
	<!-- Font Awesome / Icon Fonts -->
	<link rel="stylesheet" type="text/css" href="assets/css/lib/font-awesome.min.css">
	<!-- Owl Carousel / Carousel- Slider -->
	<link rel="stylesheet" type="text/css" href="assets/css/lib/owl.carousel.min.css">
	<!-- Animations -->
	<link rel="stylesheet" type="text/css" href="assets/css/lib/animations.min.css">
	<!-- Style Theme -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<!-- Responsive Theme -->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>
<body>
    
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>



<footer>
	<div class="container">
		<div class="widget-footer">
			<h4>Product</h4>
			<ul>
				<li><a href="service-page.html">Web Hosting</a></li>
				<li><a href="service-page.html">Shared Hosting</a></li>
				<li><a href="service-page.html">Dedicated Server</a></li>
				<li><a href="service-page.html">Private Cloud</a></li>
			</ul>
		</div><!--widget-footer-->
		<div class="widget-footer">
			<h4>Company</h4>
			<ul>
				<li><a href="about.html">About Us</a></li>
				<li><a href="service-page.html">Careers</a></li>
				<li><a href="blog-list.html">Blog</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div><!--widget-footer-->
		<div class="widget-footer">
			<h4>Support</h4>
			<ul>
				<li><a href="service-page.html">FAQ</a></li>
				<li><a href="contact.html">Contact Us</a></li>
			</ul>
		</div><!--widget-footer-->
		<div class="widget-footer">
			<h4>Contact Us</h4>
			<ul>
				<li><a href="#">+123-333-123</a></li>
				<li><a href="#">support@enginehosting.com</a></li>
			</ul>
		</div><!--widget-footer-->
		<div class="widget-footer last">
			<a href="index.html"><img src="assets/images/logo.svg" alt="logo"></a>
			<p>There are many variations of passages of Lorem Ipsum </p>
			<ul class="social-icon">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
			</ul>
		</div><!--widget-footer-->
		<div class="copyright">
			<p>&copy; Copyright 2017 Hosting, All Rights Reserved</p>
		</div><!--copyright-->
    </div>
    </footer>  
<script src="assets/js/lib/jquery.js"></script>
<script src="assets/js/lib/bootstrap.min.js"></script>
<script src="assets/js/lib/owl.carousel.min.js"></script>
<script src="assets/js/lib/css3-animate-it.js"></script>
<script src="assets/js/lib/counter.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>
