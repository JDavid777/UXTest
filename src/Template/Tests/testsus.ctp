<body class="login-page">
	<div class="wrapper">
		<!--===================== Header ========================-->
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="logo"><a href="testsdisponibles"><img src="/UXTest/img/imagesUxtest/logoP.png" alt="logo"></a></div>
					</div>
					<div class="col-md-1">
						<ul class="menu">
							<li><a href="testsdisponibles">Home</a></li>
						</ul>
					</div>
					<div class="col-md-7">
					
					</div>
					<div class="col-md-2">
						<div class="menu-extras topbar-custom navbar p-0">
							<!-- Search input -->
							<ul class="list-inline ml-auto mb-0">

								<!-- User-->
								<li class="list-inline-item dropdown notification-list">
									<a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
										<img class="smalluser" src="/UXTest/img/imagesUxtest/icon-user.png" alt="user" class="rounded-circle">
										<span class="d-none d-md-inline-block text-white "><?= $this->request->getSession()->read('Auth.User.first_name')?><i class="mdi mdi-chevron-down"></i> </span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
										<a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Perfil</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="../users/logout"><i class="dripicons-exit text-muted"></i> Salir</a>
									</div>
								</li>

							</ul>

						</div>
					</div>
				</div>
			</div>
			<div class="mobile-block">
				<div class="logo-mobile"><a href="index.html"><img src="../img/imagesUxtest/logoP.png" alt="logo"></a></div>
				<a href="#" class="mobile-menu-btn"><span></span></a>
				<div class="mobile-menu">
					<div class="inside">
						<div class="logo">
							<a href="index.html"><img src="../img/imagesUxtest/logoP.png" alt="logo"></a>
						</div>
						<!--logo-->

						<!-- Search input -->
						<ul class="menu panel-group" id="accordion" aria-multiselectable="true">
							<li><span class="d-none d-md-inline-block ml-1 text-white"><?= $this->request->getSession()->read('Auth.User.first_name'). " " .$this->request->getSession()->read('Auth.User.last_name') ?><i class="mdi mdi-chevron-down"></i> </span></li>
							<li><a href="">Perfil</a></li>
							<li><a href="../users/logout">Salir</a></li>
						</ul>
					</div>
					<!--inside-->
				</div>
				<!--mobile-menu-->
			</div>
		</header>
		<!--===================== End of Header ========================-->
		<div class="wrapper1">
			<div class="container-fluid">
				<div class="row ">
					
					<div class="col-md-5 ">
					<p class="h1 text-center">Test SUS</p>
						<img class="media-object bigimg center-block" src="../img/imagesUxtest/icon-testsus.png" alt="...">
					</div>
					
					<div class="col-md-5 justify-content-center">
						<p class="h1 text-center">Ingresa los datos</p>	
						<?= $this->Form->create(null, ['url' => ['action' => 'enviar_email']])?>
							<div class="form-group">
								<?= $this->Form->input('text',['class'=> 'form-control','name'=> 'url', 'placeholder'=> 'URL','label' => 'URL página a evaluar', 'required']);?>
							</div>
							<div class="form-group">
								<?= $this->Form->input('text',['class'=> 'form-control','id'=>'inputxls','name'=> 'destinatarios', 'placeholder'=> 'Destinatarios','label' => 'Destinatarios', 'required']);?>
								<input type="file" id="my_file_input" />
							</div>
							<div class="form-group">
								<label for="fecha">Fecha límite</label>
								<?=$this->Form->text('fecha', array('type' => 'date','label' => 'Fecha límite', 'required'));?>
							</div>
							<div class="form-group">
								<label for="txtmensaje">Mensaje</label>
								<?= $this->Form->textarea('txtmensaje', ['class'=> 'form-control rounded-0','id'=> 'txtmensaje', 'rows' => '10', 'placeholder'=> 'Mensaje','label' => 'Mensaje', 'required']);?>
							</div>

							<?= $this->Form->button('Enviar Encuesta',['class'=> 'btn btn-primary pull-right']);?>

						<?= $this->Form->end()?>
						<hr>
						<hr>
						<hr>
					</div>
					
				</div>

			</div>

		</div> <!-- end container -->
	</div>

	</div>
	<!--wrapper-->
</body>