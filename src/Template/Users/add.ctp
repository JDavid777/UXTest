<body class="login-page">
<div class="wrapper">
	<!--===================== Header ========================-->
    <header>
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<div class="logo"><a href="../"><img src="../img/imagesUxtest/logoP.png" alt="logo"></a></div>
                </div>
				<div class="col-md-6">
                    <ul class="menu">
                            <li><a href="../">Home</a></li>
                            <li><a href="">Acerca de nosotros</a></li>
                            <li><a href="">Contáctanos</a></li>
                        </ul>
				</div>
			</div>
		</div>
		<div class="mobile-block">
			<div class="logo-mobile"><a href="../"><img src="../img/imagesUxtest/logoP.png" alt="logo"></a></div>
			<a href="#" class="mobile-menu-btn"><span></span></a>
			<div class="mobile-menu">
				<div class="inside">
					<div class="logo">
						<a href="../"><img src="../img/imagesUxtest/logoP.png" alt="logo"></a>
					</div><!--logo-->
					<ul class="menu panel-group" id="accordion" aria-multiselectable="true">
						<li><a href="../">Home</a></li>
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
			<h2>Registrar</h2>
            <div class="animated growIn">
				<div class="form-group">
			        <?= $this->Form->control('idn',['class'=> 'form-control input-lg','placeholder'=> 'Identificacion','label' => false, 'required']);?>
                    <?= $this->Form->control('first_name',['class'=> 'form-control input-lg','placeholder'=> 'Nombres','label' => false, 'required']);?>  
                    <?= $this->Form->control('last_name',['class'=> 'form-control input-lg','placeholder'=> 'Apellidos','label' => false, 'required']);?>
                    <?= $this->Formx->control('username',['class'=> 'form-control input-lg','placeholder'=> 'Username','label' => false, 'required']);?> 
                    <?= $this->Form->control('password',['class'=> 'form-control input-lg','placeholder'=> 'Contrasena','label' => false, 'required']);?>
                <</div>
			    <?= $this->Form->button('Registrar',['class' => 'btn btn-primary form-group']);?>     
            </div>          

        <?= $this->Form->end() ?>
	</div>

</body>