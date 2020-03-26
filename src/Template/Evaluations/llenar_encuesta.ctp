<body class="login-page">
<div class="wrapper">
	<!--===================== Header ========================-->
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<div class="logo"><a href="/UXTest/tests/testdisponibles"><img src="/UXTest/img/imagesUxtest/logoP.png" alt="logo"></a></div>
			</div>
			<div class="col-md-7">
				
			</div>
			<div class="col-md-3">
				<div class="menu-extras topbar-custom navbar p-0">
					<!-- Search input -->
					<ul class="list-inline ml-auto mb-0">
						
						<!-- User-->
						<li class="list-inline-item dropdown notification-list">
							<a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
							aria-haspopup="false" aria-expanded="false">
								<img class="smalluser" src="/UXTest/img/imagesUxtest/icon-user.png" alt="user" class="rounded-circle">
								<span class="d-none d-md-inline-block text-white "><?$this->Auth->user('username')?><i class="mdi mdi-chevron-down"></i> </span>
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
		<div class="logo-mobile"><a href=""><img src="/UXTest/img/imagesUxtest/logoP.png" alt="logo"></a></div>
		<a href="#" class="mobile-menu-btn"><span></span></a>
		<div class="mobile-menu">
			<div class="inside">
				<div class="logo">
					<a href=""><img src="/UXTest/img/imagesUxtest/logoP.png" alt="logo"></a>
				</div><!--logo-->
					<!-- Search input -->
					<ul class="menu panel-group" id="accordion" aria-multiselectable="true">
						<li><span class="d-none d-md-inline-block ml-1 text-white"><?$this->Auth->user('username')?><i class="mdi mdi-chevron-down"></i> </span></li>
						<li><a href="blog-list-light.html">Perfil</a></li>
						<li><a href="contact-light.html">Salir</a></li>
					</ul>
			</div><!--inside-->
		</div><!--mobile-menu-->
	</div>
</header>
<!--===================== End of Header ========================-->
	<!--===================== Llenar encuesta ========================-->
			
		<!-- Page-Title -->
		
		<!-- end page title end breadcrumb -->

		<div class="wrapper1">
			<div class="container-fluid">
				<h1 class="text-center"><strong>Encuesta</strong></h1>
				<div id="wizard_container">
					<form name="example-1" id="wrapped" method="POST">
						<input id="website" name="website" type="text" value=""><!-- Leave for security protection, read docs for details -->
						<div id="middle-wizard">
							<div class="step">
								<h3 class="main_question"><strong>1/4</strong>What is your budget?</h3>
								
								<div class="form-group radio_questions ">
									<label>1. My budget is under $500
										<div class="iradio_square-yellow checked">
											<input name="question_1" type="radio" value="My budget is between $500 and $1000" class="icheck required">
										</div>
									</label>
								</div>
								<div class="form-group radio_questions">
									<label>2. My budget is between $500 and $1000
										<div class="iradio_square-yellow checked">
											<input name="question_1" type="radio" value="My budget is between $500 and $1000" class="icheck required">
										</div>
									</label>
								</div>
								<div class="form-group radio_questions">
									<label>3. My budget is between $1000 and $1500
										<div class="iradio_square-yellow checked">
											<input name="question_1" type="radio" value="My budget is between $500 and $1000" class="icheck required">
										</div>
									</label>
								</div>
								<div class="form-group radio_questions input-group-append">
									<label>4. My budget is over $1500
										<div class="iradio_square-yellow checked">
											<input name="question_1" type="radio" value="My budget is between $500 and $1000" class="icheck required">
										</div>
									</label>
								</div>
								
							</div><!-- /step 1-->

							<div class="step">
								<h3 class="main_question"><strong>2/4</strong>What is your budget?</h3>
								
								<div class="form-group radio_questions">
									<label>1. My budget is under $500
										<div class="iradio_square-yellow checked">
											<input name="question_2" type="radio" value="My budget is between $500 and $1000" class="icheck required">
										</div>
									</label>
								</div>
								<div class="form-group radio_questions">
									<label>2. My budget is between $500 and $1000
										<div class="iradio_square-yellow checked">
											<input name="question_2" type="radio" value="My budget is between $500 and $1000" class="icheck required">
										</div>
									</label>
								</div>
								<div class="form-group radio_questions">
									<label>3. My budget is between $1000 and $1500
										<div class="iradio_square-yellow checked">
											<input name="question_2" type="radio" value="My budget is between $500 and $1000" class="icheck required">
										</div>
									</label>
								</div>
								<div class="form-group radio_questions">
									<label>4. My budget is over $1500
										<div class="iradio_square-yellow checked">
											<input name="question_2" type="radio" value="My budget is between $500 and $1000" class="icheck required">
										</div>
									</label>
								</div>
								
							</div><!-- /step 1-->

							<div class="step">
								<h3 class="main_question"><strong>3/4</strong>What is your budget?</h3>
								
								<div class="form-group radio_questions">
									<label>1. My budget is under $500
										<div class="iradio_square-yellow checked">
											<input name="question_3" type="radio" value="My budget is between $500 and $1000" class="icheck required">
										</div>
									</label>
								</div>
								<div class="form-group radio_questions">
									<label>2. My budget is between $500 and $1000
										
											<div class="iradio_square-yellow checked">
												<input name="question_3" type="radio" value="My budget is between $500 and $1000" class="icheck required">
											</div>
										
									</label>
								</div>
								<div class="form-group radio_questions">
									<label>3. My budget is between $1000 and $1500
										<div class="iradio_square-yellow checked">
											<input name="question_3" type="radio" value="My budget is between $500 and $1000" class="icheck required">
										</div>
									</label>
								</div>
								<div class="form-group radio_questions">
									<label>4. My budget is over $1500
										<div class="iradio_square-yellow checked">
											<input name="question_3" type="radio" value="My budget is between $500 and $1000" class="icheck required">
										</div>
									</label>
								</div>
								
							</div><!-- /step 1-->

							<div class="submit step">
								<h3 class="main_question"><strong>4/4</strong>Por favor complete con sus datos</h3>
								<div class="row">
								   
									<div class="col-sm-12">
										<h6>Ingresa tu edad</h6>
										<div class="form-group">
											<input type="number" name="edad" min="1" max="120" class="form-control required" placeholder="Ingresa tu edad">
										</div>
										
										<h6>Selecciona tu genero</h6>
										<div class="form-group radio_questions">
											<label>Masculino
												<div class="iradio_square-yellow checked">
													<input name="question_4" type="radio" value="My budget is between $500 and $1000" class="icheck required">
												</div>
											</label>
										</div>
										<div class="form-group radio_questions">
											<label>Femenino
												<div class="iradio_square-yellow checked">
													<input name="question_4" type="radio" value="My budget is between $500 and $1000" class="icheck required">
												</div>
											</label>
										</div>
										<h6>Selecciona tu región</h6>
										<div class="form-group select">
											
											<div class="styled-select">
												<select class="required" name="country">
													<option value="" selected>Seleccione su región</option>
													<option value="Europa">Europa</option>
													<option value="Asia">Asia</option>
													<option value="Norte America">Norte America</option>
													<option value="Sur America">Sur America</option>
												</select>
											</div>
										</div><!-- /select-->
									</div><!-- /col-sm-6 -->
								</div><!-- /row -->
							</div><!-- /step 4-->
						</div><!-- /middle-wizard -->
						<div id="bottom-wizard">
							<button type="button" name="backward" class="backward">Anterior </button>
							<button type="button" name="forward" class="forward">Siguiente</button>
							<button type="submit" name="process" class="submit">Enviar</button>
						</div><!-- /bottom-wizard -->
					</form>
				</div><!-- /Wizard container -->
				
			</div> <!-- end container -->
		</div>