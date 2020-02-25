<?php

?>

<body class="login-page">
<div class="wrapper">
	<!--===================== Header ========================-->
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<div class="logo"><a href="index.html"><img src="assets/images/logo.svg" alt="logo"></a></div>
			</div>
			<div class="col-md-7">
				<ul class="menu">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About Us</a></li>
					<li class="children">
						<a href="#">Hosting</a>
						<ul class="sub-menu">
							<li><a href="service-page.html">Service page 1</a></li>
							<li><a href="service-page-light.html">Service page 2</a></li>
							<li><a href="service-page-dark.html">Service page 3</a></li>
							<li><a href="service-page-images.html">Service page 4</a></li>
						</ul><!--sub-menu-->
					</li><!--children-->
					<li class="children">
						<a href="user-interface.html">Pages</a>
						<ul class="sub-menu">
							<li><a href="404.html">404 Page</a></li>
							<li><a href="order.html">Order</a></li>
							<li><a href="user-interface.html">User Interface</a></li>
						</ul><!--sub-menu-->
					</li>
					<li><a href="blog-list.html">Blog</a></li>
					<li><a href="contact.html">Contact Us</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<div class="button-header">
					<a href="/UXTest/users/login" class="custom-btn login">Login</a>
					<a href="sign-up.html" class="custom-btn">Sign Up</a>
				</div>
			</div>
		</div>
	</div>
	<div class="mobile-block">
		<div class="logo-mobile"><a href="index.html"><img src="assets/images/logo.svg" alt="logo"></a></div>
		<a href="#" class="mobile-menu-btn"><span></span></a>
		<div class="mobile-menu">
			<div class="inside">
				<div class="logo">
					<a href="index.html"><img src="assets/images/logo.svg" alt="logo"></a>
				</div><!--logo-->
				<ul class="menu panel-group" id="accordion" aria-multiselectable="true">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About Us</a></li>
					<li class="children panel">
						<a href="#menu1" class="collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="menu1">Hosting</a>
						<ul class="sub-menu panel-collapse collapse" id="menu1">
							<li><a href="service-page.html">Service page 1</a></li>
							<li><a href="service-page-light.html">Service page 2</a></li>
							<li><a href="service-page-dark.html">Service page 3</a></li>
							<li><a href="service-page-images.html">Service page 4</a></li>
						</ul><!--sub-menu-->
					</li>
					<li class="children panel">
						<a href="#menu2" class="collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="menu2">Pages</a>
						<ul class="sub-menu panel-collapse collapse" id="menu2">
							<li><a href="404.html">404 Page</a></li>
							<li><a href="order.html">Order</a></li>
							<li><a href="user-interface.html">User Interface</a></li>
						</ul><!--sub-menu-->
					</li>
					<li><a href="blog-list.html">Blog</a></li>
					<li><a href="contact.html">Contact Us</a></li>
				</ul><!--menu-->
				<div class="button-header">
					<a href="/UXTest/users/login" class="custom-btn login">Login</a>
					<a href="#" class="custom-btn">Sign Up</a>
				</div><!--button-header-->
			</div><!--inside-->
		</div><!--mobile-menu-->
	</div>
</header>
<!--===================== End of Header ========================-->
	<!--===================== Login Bg ========================-->

<?= $this->Form->create()?>
    
    <div class="login-bg animatedParent animated growIn">

            <?= $this->Form->input('username',['class'=> 'form-control mb-2','placeholder'=> ['Nombre de Usuario','label' => false, 'required']]);?>  
            <?= $this->Form->input('password',['class'=> 'form-control mb-2','placeholder'=> ['Contraseña','label' => false, 'required']]);?>
            <?= $this->Form->button('Ingresar',['class' => 'btn btn-primary']);?>
    </div>
<?= $this->Form->end()?>
<?= $this->Flash->render('auth')?>

</body>
