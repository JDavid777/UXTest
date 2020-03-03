<body class="login-page">
<div class="wrapper">
	<!--===================== Header ========================-->
    <header>
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<div class="logo"><a href="/UXTest/"><img src="/UXTest/img/imagesUxtest/logoP.png" alt="logo"></a></div>
				</div>
				<div class="col-md-7">
					<ul class="menu">
						<li><a href="/UXTest/">Home</a></li>
						<li><a href="">Acerca de nosotros</a></li>
						<li><a href="">Contáctanos</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="mobile-block">
			<div class="logo-mobile"><a href="/UXTest/"><img src="/UXTest/img/imagesUxtest/logoP.png" alt="logo"></a></div>
			<a href="#" class="mobile-menu-btn"><span></span></a>
			<div class="mobile-menu">
				<div class="inside">
					<div class="logo">
						<a href="/UXTest/"><img src="/UXTest/img/imagesUxtest/logoP.png" alt="logo"></a>
					</div><!--logo-->
					<ul class="menu panel-group" id="accordion" aria-multiselectable="true">
						<li><a href="/UXTest/">Home</a></li>
						<li><a href="">Acerca de nosotros</a></li>
						<li><a href="">Contáctanos</a></li>
					</ul><!--menu-->
				</div><!--inside-->
			</div><!--mobile-menu-->
		</div>
	</header>
<!--===================== End of Header ========================-->

    <div class="login-bg animatedParent">
		<?= $this->Form->create()?>
			<h2>Login</h2>
            <div class="animated growIn">
				<div class="form-group">
					<?= $this->Form->input('username',['class'=> 'form-control input-lg','placeholder'=> 'Nombre de Usuario','label' => false, 'required']);?>  
				</div>
				<div class="form-group">
					<?= $this->Form->input('password',['class'=> 'form-control input-lg','placeholder'=> 'Contrasena','label' => false, 'required']);?>
				</div>
			    <?= $this->Form->button('Ingresar',['class' => 'btn btn-primary form-group']);?>     
				</div>
        <?= $this->Form->end()?>
    
    <?= $this->Flash->render('auth')?>

	</div>
</body>