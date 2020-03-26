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
	<title>UXTest</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.5">
	<!-- Framework Css -->
	<?php echo $this->Html->css('stylesUxtest/lib/bootstrap.min');?>
	<!-- Font Awesome / Icon Fonts -->
	<?php echo $this->Html->css('stylesUxTest/lib/font-awesome.min');?>
	<!-- Owl Carousel / Carousel- Slider -->
	<?php echo $this->Html->css('stylesUxtest/lib/owl.carousel.min');?>
	<!-- Animations -->
	<?php echo $this->Html->css('stylesUxtest/lib/animations.min');?>
	<!-- Style Theme -->
	<?php echo $this->Html->css('stylesUxtest/style.css');?>

	<!-- Responsive Theme -->
	<?php echo $this->Html->css('stylesUxtest/responsive');?>



	<?= $this->Html->meta('icon') ?>

	<?= $this->Html->css('stylesUxtest/lib/bootstrap.min.css')?>
	<?= $this->Html->script('jsUxtest/lib/bootstrap.min.js')?>

	<?= $this->fetch('meta') ?>
	<?= $this->fetch('css') ?>
	<?= $this->fetch('script') ?>
</head>
<body>
<div class="wrapper">
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>



<footer>
	<div class="container">
		<div class="widget-footer">
			<h4>Product</h4>
			<ul>
				<li><a href="">Usability Tester</a></li>
			</ul>
		</div><!--widget-footer-->
		<div class="widget-footer">
			<h4>Company</h4>
			<ul>
				<li><a href="">About Us</a></li>
				<li><a href="">Careers</a></li>
				<li><a href="">Blog</a></li>
				<li><a href="">Contact</a></li>
			</ul>
		</div><!--widget-footer-->
		<div class="widget-footer">
			<h4>Support</h4>
			<ul>
				<li><a href="">FAQ</a></li>
				<li><a href="">Contact Us</a></li>
			</ul>
		</div><!--widget-footer-->
		<div class="widget-footer">
			<h4>Contact Us</h4>
			<ul>
				<li><a href="#">+57-123-456-7890</a></li>
				<li><a href="#">support@uxtest.com</a></li>
			</ul>
		</div><!--widget-footer-->
		<div class="widget-footer last">
			<a href="index.html"><img src="/UXTest/img/imagesUxtest/logoP.png" alt="logo"></a>
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
	</footer>  

	</div><!--wrapper-->
	<?php echo $this->Html->script('jsUxtest/lib/jquery');?>
	<?php echo $this->Html->script('jsUxtest/lib/bootstrap.min');?>
	<?php echo $this->Html->script('jsUxtest/lib/owl.carousel.min');?>
	<?php echo $this->Html->script('jsUxtest/lib/css3-animate-it');?>
	<?php echo $this->Html->script('jsUxtest/lib/counter');?>
	<?php echo $this->Html->script('jsUxtest/main');?>
	<?php echo $this->Html->script('jsUxtest/survey_func.js');?>
	<?php echo $this->Html->script('jsUxtest/common_scripts.min.js');?>
	
</body>

</html>
