<body class="login-page">
	<div class="wrapper">
		<!--===================== Header ========================-->
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="logo"><a href="index.html"><img src="/UXTest/img/imagesUxtest/logo.svg" alt="logo"></a></div>
					</div>
					<div class="col-md-1">
						<ul class="menu">
							<li><a href="testsdisponibles">Home</a></li>
						</ul>
					</div>
					<div class="col-md-6">
					
					</div>
					<div class="col-md-3">
						<div class="menu-extras topbar-custom navbar p-0">
							<!-- Search input -->
							<ul class="list-inline ml-auto mb-0">

								<!-- User-->
								<li class="list-inline-item dropdown notification-list">
									<a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
										<img class="smalluser" src="/UXTest/img/imagesUxtest/icon-user.png" alt="user" class="rounded-circle">
										<span class="d-none d-md-inline-block text-white ">Donald T.<i class="mdi mdi-chevron-down"></i> </span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
										<a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Perfil</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Salir</a>
									</div>
								</li>

							</ul>

						</div>
					</div>
				</div>
			</div>
			<div class="mobile-block">
				<div class="logo-mobile"><a href="index.html"><img src="/UXTest/img/imagesUxtest/logo.svg" alt="logo"></a></div>
				<a href="#" class="mobile-menu-btn"><span></span></a>
				<div class="mobile-menu">
					<div class="inside">
						<div class="logo">
							<a href="index.html"><img src="/UXTest/img/imagesUxtest/logo.svg" alt="logo"></a>
						</div>
						<!--logo-->


						<!-- Search input -->
						<ul class="menu panel-group" id="accordion" aria-multiselectable="true">
							<li><span class="d-none d-md-inline-block ml-1 text-white">Donald T. <i class="mdi mdi-chevron-down"></i> </span></li>
							<li><a href="">Perfil</a></li>
							<li><a href="users/logout">Salir</a></li>
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

				<p class="h1 text-center">Test SUS</p>
				<div class="row ">

					<div class="col-md-5 ">
						<img class="media-object bigimg" src="/UXTest/img/imagesUxtest/icon-testsus.png" alt="...">
					</div>

					<div class="col-md-5">
						<form action="enviarEmail" method="POST">
							<div class="form-group">
								<label for="url-page">URL página a evaluar</label>
								<input type="text" class="form-control" id="url-page" placeholder="URL">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Destinatarios</label>
								<input type="email" name="data[destinatarios]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mails">
								<small id="emailHelp" class="form-text text-muted">Nunca compartiremos sus correos electrónicos con nadie más</small>
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Mensaje</label>
								<textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10"></textarea>
							</div>
							<input type="submit" class="btn btn-primary pull-right" value="Enviar" id="botonEnviar">
							
						</form>
					</div>


				</div>

			</div>

		</div> <!-- end container -->
	</div>

	</div>
	<!--wrapper-->
</body>