<body class="login-page">
	<div class="wrapper">
		<!--===================== Header ========================-->
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="logo"><a href=""><img src="/UXTest/img/imagesUxtest/logoP.png" alt="logo"></a></div>
					</div>
					<div class="col-md-1">
						<ul class="menu">
							<li><a href="../evaluations/ver_resultados">Resultados</a></li>
						</ul>
					</div>
					<div class="col-md-7">
					
					</div>
					<div class="col-md-2">
						<div class="menu-extras topbar-custom navbar p-0">
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
				<div class="logo-mobile"><a href="index.html"><img src="/UXTest/img/imagesUxtest/logoP.png" alt="logo"></a></div>
				<a href="#" class="mobile-menu-btn"><span></span></a>
				<div class="mobile-menu">
					<div class="inside">
						<div class="logo">
							<a href=""><img src="/UXTest/img/imagesUxtest/logoP.png" alt="logo"></a>
						</div>
						<!--logo-->

						<!-- Search input -->
						<ul class="menu panel-group" id="accordion" aria-multiselectable="true">
							<li><span class="d-none d-md-inline-block ml-1 text-white"><?= $this->request->getSession()->read('Auth.User.first_name'). " " .$this->request->getSession()->read('Auth.User.last_name') ?><i class="mdi mdi-chevron-down"></i> </span></li>
							<li><a href="">Perfil</a></li>
							<li><a href="users/logout">Salir</a></li>
						</ul>

					</div> <!--inside-->
				</div> <!--mobile-menu-->
			</div>
		</header>
		<!--===================== End of Header ========================-->

		<div class="wrapper">
			<div class="container-fluid justify-content-center">
				<p class="h1 text-center ">Tests disponibles
					<hr>
				</p>
				<div class="row d-flex justify-content-center">
					<div class="center">
						<div class="offset-lg-2 offset-1"></div>
						<div class="col-md-4  ">
							<div class="media">
								<div class="media-middle">
									<a href="testsus">
										<img class="media-object smallimg center-block" src="/UXTest/img/imagesUxtest/icon-test.png" alt="test">
										<p class="h4 mb-0 explore-item__title text-center">Test SUS
											<button type="button" class="btn-circle" data-toggle="tooltip" data-placement="top" title="System Usability Scale. Escala para medir la usabilidad de un sistema a través de 10 preguntas, que son puntuadas de 1 a 5.">
													?
											</button>
										</p>
										<hr>
									</a>
								</div>
							</div>
						</div>
						<div class="col-md-4  ">
							<div class="media">
								<div class="media-middle">
									<a href="">
										<img class="media-object smallimg center-block" src="/UXTest/img/imagesUxtest/icon-test.png" alt="...">
										<p class="h4 mb-0 explore-item__title text-center">Test ASQ
											<button type="button" class="btn-circle" data-toggle="tooltip" data-placement="top" title="Test para medir usabilidad de un sitio web">
														?
												</button>
										</p>
										<hr>
									</a>
								</div>

							</div>
						</div>
						<div class="col-md-4  ">
							<div class="media">
								<div class="media-middle">
									<a href="testsus1.html">
										<img class="media-object smallimg center-block" src="/UXTest/img/imagesUxtest/icon-test.png" alt="...">
										<p class="h4 mb-0 explore-item__title text-center">Test NASA TLX
											<button type="button" class="btn-circle" data-toggle="tooltip" data-placement="top" title="Test para medir usabilidad de un sitio web">
												?
											</button>
										</p>
										<hr>
									</a>
								</div>

							</div>
						</div>
						<div class="offset-lg-2 offset-1"></div>
						<div class="col-md-4  ">
							<div class="media">
								<div class="media-middle">
									<a href="testsus1.html">
										<img class="media-object smallimg center-block" src="/UXTest/img/imagesUxtest/icon-test.png" alt="...">
										<p class="h4 mb-0 explore-item__title text-center">Test SEQ
											<button type="button" class="btn-circle" data-toggle="tooltip" data-placement="top" title="Test para medir usabilidad de un sitio web">
												?
											</button>
										</p>
										<hr>
									</a>
								</div>

							</div>
						</div>
						<div class="col-md-4  ">
							<div class="media">
								<div class="media-middle">
									<a href="testsus1.html">
										<img class="media-object smallimg center-block" src="/UXTest/img/imagesUxtest/icon-test.png" alt="...">
										<p class="h4 mb-0 explore-item__title text-center">Test SMEQ
											<button type="button" class="btn-circle" data-toggle="tooltip" data-placement="top" title="Test para medir usabilidad de un sitio web">
												?
											</button>
										</p>
										<hr>
									</a>
								</div>

							</div>
						</div>
						<div class="col-md-4  ">
							<div class="media">
								<div class="media-middle">
									<a href="testsus1.html">
										<img class="media-object smallimg center-block" src="/UXTest/img/imagesUxtest/icon-test.png" alt="...">
										<p class="h4 mb-0 explore-item__title text-center">Test UME
											<button type="button" class="btn-circle" data-toggle="tooltip" data-placement="top" title="Test para medir usabilidad de un sitio web">
												?
											</button>
										</p>
										<hr>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- end container -->
		</div>
</body>