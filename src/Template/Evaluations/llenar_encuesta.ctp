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
						</div>
						<!--logo-->
						<ul class="menu panel-group" id="accordion" aria-multiselectable="true">
							<li><a href="/UXTest/">Home</a></li>
							<li><a href="">Acerca de nosotros</a></li>
							<li><a href="">Contáctanos</a></li>
						</ul>
						<!--menu-->
					</div>
					<!--inside-->
				</div>
				<!--mobile-menu-->
			</div>
		</header>
		<!--===================== End of Header ========================-->
		<!--===================== Llenar encuesta ========================-->



		<!-- end page title end breadcrumb -->

		<div class="wrapper1">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-5">
						<h1 class="text-center"><strong>Test SUS</strong></h1>
						<div id="wizard_container">
							<?= $this->Form->create(null, ['url' => ['action' => 'enviar_encuesta']]) ?>
							<input id="website" name="website" type="text" value="">
							<div id="middle-wizard">
								<div class="step">
									<h3 class="main_question"><strong>1/11</strong>Creo que usaría este sistema con frecuencia</h3>
									<div class="form-group radio_questions ">

										<?= $this->Form->radio(
											'rtas-pregunta1',
											[
												['value' => '1', 'text' => ' 1. Totalmente en desacuerdo'],
												['value' => '2', 'text' => ' 2. En desacuerdo'],
												['value' => '3', 'text' => ' 3. Ni en desacuerdo ni de acuerdo'],
												['value' => '4', 'text' => ' 4. De acuerdo'],
												['value' => '5', 'text' => ' 5. Totalmente de acuerdo'],
											]
										); ?>
									</div>
								</div><!-- step 1-->
								<div class="step">
									<h3 class="main_question"><strong>2/11</strong>Encuentro este sistema innecesariamente complejo</h3>
									<div class="form-group radio_questions ">

										<?= $this->Form->radio(
											'rtas-pregunta1',
											[
												['value' => '1', 'text' => ' 1. Totalmente en desacuerdo'],
												['value' => '2', 'text' => ' 2. En desacuerdo'],
												['value' => '3', 'text' => ' 3. Ni en desacuerdo ni de acuerdo'],
												['value' => '4', 'text' => ' 4. De acuerdo'],
												['value' => '5', 'text' => ' 5. Totalmente de acuerdo'],
											]
										); ?>
									</div>
								</div><!-- step 2-->
								<div class="step">
									<h3 class="main_question"><strong>3/11</strong>Creo que el sistema es fácil de usar</h3>
									<div class="form-group radio_questions ">

										<?= $this->Form->radio(
											'rtas-pregunta3',
											[
												['value' => '1', 'text' => ' 1. Totalmente en desacuerdo'],
												['value' => '2', 'text' => ' 2. En desacuerdo'],
												['value' => '3', 'text' => ' 3. Ni en desacuerdo ni de acuerdo'],
												['value' => '4', 'text' => ' 4. De acuerdo'],
												['value' => '5', 'text' => ' 5. Totalmente de acuerdo'],
											]
										); ?>
									</div>
								</div><!-- step 3-->
								<div class="step">
									<h3 class="main_question"><strong>4/11</strong>Creo que necesitaría ayuda de una persona con conocimientos técnicos para usar este sistema</h3>
									<div class="form-group radio_questions ">

										<?= $this->Form->radio(
											'rtas-pregunta4',
											[
												['value' => '1', 'text' => ' 1. Totalmente en desacuerdo'],
												['value' => '2', 'text' => ' 2. En desacuerdo'],
												['value' => '3', 'text' => ' 3. Ni en desacuerdo ni de acuerdo'],
												['value' => '4', 'text' => ' 4. De acuerdo'],
												['value' => '5', 'text' => ' 5. Totalmente de acuerdo'],
											]
										); ?>
									</div>
								</div><!-- step 4-->
								<div class="step">
									<h3 class="main_question"><strong>5/11</strong>Las funciones de esta página web están bien integradas</h3>
									<div class="form-group radio_questions ">

										<?= $this->Form->radio(
											'rtas-pregunta5',
											[
												['value' => '1', 'text' => ' 1. Totalmente en desacuerdo'],
												['value' => '2', 'text' => ' 2. En desacuerdo'],
												['value' => '3', 'text' => ' 3. Ni en desacuerdo ni de acuerdo'],
												['value' => '4', 'text' => ' 4. De acuerdo'],
												['value' => '5', 'text' => ' 5. Totalmente de acuerdo'],
											]
										); ?>
									</div>
								</div><!-- step 5-->
								<div class="step">
									<h3 class="main_question"><strong>6/11</strong>Creo que este sistema es muy inconsistente</h3>
									<div class="form-group radio_questions ">

										<?= $this->Form->radio(
											'rtas-pregunta1',
											[
												['value' => '1', 'text' => ' 1. Totalmente en desacuerdo'],
												['value' => '2', 'text' => ' 2. En desacuerdo'],
												['value' => '3', 'text' => ' 3. Ni en desacuerdo ni de acuerdo'],
												['value' => '4', 'text' => ' 4. De acuerdo'],
												['value' => '5', 'text' => ' 5. Totalmente de acuerdo'],
											]
										); ?>
									</div>
								</div><!-- step 6-->
								<div class="step">
									<h3 class="main_question"><strong>7/11</strong>Imagino que la mayoría de la gente aprendería a usar este sistema rápidamente</h3>
									<div class="form-group radio_questions ">

										<?= $this->Form->radio(
											'rtas-pregunta1',
											[
												['value' => '1', 'text' => ' 1. Totalmente en desacuerdo'],
												['value' => '2', 'text' => ' 2. En desacuerdo'],
												['value' => '3', 'text' => ' 3. Ni en desacuerdo ni de acuerdo'],
												['value' => '4', 'text' => ' 4. De acuerdo'],
												['value' => '5', 'text' => ' 5. Totalmente de acuerdo'],
											]
										); ?>
									</div>
								</div><!-- step 7-->
								<div class="step">
									<h3 class="main_question"><strong>8/11</strong>Encuentro que esta página web es muy difícil de usar</h3>
									<div class="form-group radio_questions ">

										<?= $this->Form->radio(
											'rtas-pregunta1',
											[
												['value' => '1', 'text' => ' 1. Totalmente en desacuerdo'],
												['value' => '2', 'text' => ' 2. En desacuerdo'],
												['value' => '3', 'text' => ' 3. Ni en desacuerdo ni de acuerdo'],
												['value' => '4', 'text' => ' 4. De acuerdo'],
												['value' => '5', 'text' => ' 5. Totalmente de acuerdo'],
											]
										); ?>
									</div>
								</div><!-- step 8-->
								<div class="step">
									<h3 class="main_question"><strong>9/11</strong>Me siento confiado al usar este sistema</h3>
									<div class="form-group radio_questions ">

										<?= $this->Form->radio(
											'rtas-pregunta1',
											[
												['value' => '1', 'text' => ' 1. Totalmente en desacuerdo'],
												['value' => '2', 'text' => ' 2. En desacuerdo'],
												['value' => '3', 'text' => ' 3. Ni en desacuerdo ni de acuerdo'],
												['value' => '4', 'text' => ' 4. De acuerdo'],
												['value' => '5', 'text' => ' 5. Totalmente de acuerdo'],
											]
										); ?>
									</div>
								</div><!-- step 9-->
								<div class="step">
									<h3 class="main_question"><strong>10/11</strong>Necesité aprender muchas cosas antes de ser capaz de usar este dispositivo</h3>
									<div class="form-group radio_questions ">

										<?= $this->Form->radio(
											'rtas-pregunta1',
											[
												['value' => '1', 'text' => ' 1. Totalmente en desacuerdo'],
												['value' => '2', 'text' => ' 2. En desacuerdo'],
												['value' => '3', 'text' => ' 3. Ni en desacuerdo ni de acuerdo'],
												['value' => '4', 'text' => ' 4. De acuerdo'],
												['value' => '5', 'text' => ' 5. Totalmente de acuerdo'],
											]
										); ?>
									</div>
								</div><!-- step 10-->
								<div class="submit step">
									<h3 class="main_question"><strong>11/11</strong>Por favor complete con sus datos</h3>
									<div class="row">

										<div class="col-sm-12">
											<h4>Ingresa tu edad</h4>
											<div class="form-group">
												<?= $this->Form->text('edad', array('type' => 'number', 'min' => '1', 'max' => '120', 'class' => 'form-control required', 'placeholder' => 'Ingresa tu edad')); ?>

											</div>
											<h4>Selecciona tu género</h4>
											<div class="form-group radio_questions">
												<?= $this->Form->radio(
													'genero',
													[
														['value' => 'F', 'text' => ' Femenino'],
														['value' => 'M', 'text' => ' Masculino'],
													]
												); ?>
											</div>

											<h4>Selecciona tu país</h4>
											<div class="form-group select">
												<div class="styled-select">
													<?= $this->Form->select(
														'Pais',
														[1, 2, 3, 4, 5],
														['empty' => '(Selecciona un pais)']
													); ?>
												</div>
											</div>

										</div>
									</div>
								</div>

							</div> <!-- middle-wizard-->

							<div id="bottom-wizard">
								<?=$this->Form->button('Anterior', ['name'=> 'backward', 'class'=> 'backward'])?>
								<?=$this->Form->button('Siguiente', ['name'=> 'forward', 'class'=> 'forward'])?>
								<?=$this->Form->button('Enviar', ['type'=>'submit', 'name'=> 'process', 'class'=> 'submit'])?>
								
							</div><!-- /bottom-wizard -->
							
							<?= $this->Form->end() ?>


						</div><!-- /Wizard container -->
					</div> <!-- col-md 5 -->
					<div class="col-md-7">
						<a href="http://<?=$url_pagina?>" target="_blank"> Pagina </a>
						<iframe src="https://<?=$url_pagina?>" frameborder="0"></iframe>
					</div>
				</div><!-- row -->


			</div> <!-- end container -->
		</div>