<body class="login-page">
<div class="wrapper">
		<!--===================== Header ========================-->
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="logo"><a href="testsdisponibles"><img src="/UXTest/img/imagesUxtest/logoP.png" alt="logo"></a></div>
					</div>
					<div class="col-md-5">
						<ul class="menu">
                            <li><a href="../tests/testsdisponibles">Home</a></li>
                            <li><a href="../tests/testsus">Crear nueva encuesta</a></li>
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
										<span class="d-none d-md-inline-block text-white "><?= $this->request->getSession()->read('Auth.User.first_name'). " " .$this->request->getSession()->read('Auth.User.last_name') ?><i class="mdi mdi-chevron-down"></i> </span>
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
							<a href="index.html"><img src="/UXTest/img/imagesUxtest/logoP.png" alt="logo"></a>
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

        <!--===================== Login Bg ========================-->
			
		<!-- Page-Title -->

		<div class="wrapper1">
			<div class="container-fluid">
				<h2 class="text-center"><strong>Resultados Test SUS</strong></h2>
                <p><hr>
                </p>
				<div class="table-responsive-md">
                    <h4 class="text-left"><b>Pregunta 1: </b>Creo que usaría este sistema con frecuencia</h4>
                    <table class="table table-sm table-striped">
						<thead>
						  <tr>
							<th scope="col">Pais</th>
							<th scope="col">Edad</th>
							<th scope="col">Genero</th>
							<th scope="col">Respuesta</th>
						  </tr>
						</thead>
						<tbody>
							<?php 
							if(empty($rows1)):
								foreach ($rows1 as $row):?>
									<tr>									
										<td><?php echo $row[0]['location']?></td>
										<td><?php echo $row[0]['age']?></td>
										<td><?php echo $row[0]['gender']?></td>
										<td><?php echo $row[0]['value']?></td>
									</tr>
								<?php 
								endforeach;
							endif;?>
						</tbody>
					  </table>
				</div>
				<?php ?><p><hr>
                </p>
				<div class="table-responsive-md">
                    <h4 class="text-left"><b>Pregunta 2: </b>Encuentro este sistema innecesariamente complejo</h4>
                    <table class="table table-striped">
						<thead>
						  <tr>
							<th scope="col">Pais</th>
							<th scope="col">Edad</th>
							<th scope="col">Genero</th>
							<th scope="col">Respuesta</th>
						  </tr>
						</thead>
						<tbody>
							<?php 
							if(empty($rows2)):
								foreach ($rows2 as $row):?>
									<tr>
										<td><?php echo $row[0]['location']?></td>
										<td><?php echo $row[0]['age']?></td>
										<td><?php echo $row[0]['gender']?></td>
										<td><?php echo $row[0]['value']?></td>
									</tr>
								<?php 
								endforeach;
							endif;?>
						</tbody>
					  </table>
				</div>
				<p><hr>
                </p>
				<div class="table-responsive-md">
                    <h4 class="text-left"><b>Pregunta 3: </b>Creo que el sistema es fácil de usar</h4>
                    <table class="table table-striped">
						<thead>
						  <tr>
							<th scope="col">Pais</th>
							<th scope="col">Edad</th>
							<th scope="col">Genero</th>
							<th scope="col">Respuesta</th>
						  </tr>
						</thead>
						<tbody>
							<?php 
							if(empty($rows3)):
								foreach ($rows3 as $row):?>
									<tr>
										<td><?php echo $row[0]['location']?></td>
										<td><?php echo $row[0]['age']?></td>
										<td><?php echo $row[0]['gender']?></td>
										<td><?php echo $row[0]['value']?></td>
									</tr>
								<?php 
								endforeach;
							endif?>
						</tbody>
					  </table>
				</div>
				<p><hr>
                </p>
				<div class="table-responsive-md">
                    <h4 class="text-left"><b>Pregunta 4: </b>Creo que necesitaría ayuda de una persona con conocimientos técnicos para usar este sistema</h4>
                    <table class="table table-striped">
						<thead>
						  <tr>
							<th scope="col">Pais</th>
							<th scope="col">Edad</th>
							<th scope="col">Genero</th>
							<th scope="col">Respuesta</th>
						  </tr>
						</thead>
						<tbody>
							<?php 
							if(empty($rows4)):
								foreach ($rows4 as $row):?>
									<tr>
										<td><?php echo $row[0]['location']?></td>
										<td><?php echo $row[0]['age']?></td>
										<td><?php echo $row[0]['gender']?></td>
										<td><?php echo $row[0]['value']?></td>
									</tr>
								<?php 
								endforeach;
							endif?>
						</tbody>
					  </table>
				</div>
				<p><hr>
                </p>
				<div class="table-responsive-md">
                    <h4 class="text-left"><b>Pregunta 5: </b>Las funciones de esta página web están bien integradas</h4>
                    <table class="table table-striped">
						<thead>
						  <tr>
							<th scope="col">Pais</th>
							<th scope="col">Edad</th>
							<th scope="col">Genero</th>
							<th scope="col">Respuesta</th>
						  </tr>
						</thead>
						<tbody>
							<?php 
							if(empty($rows5)):
								foreach ($rows5 as $row):?>
									<tr>
										<td><?php echo $row[0]['location']?></td>
										<td><?php echo $row[0]['age']?></td>
										<td><?php echo $row[0]['gender']?></td>
										<td><?php echo $row[0]['value']?></td>
									</tr>
								<?php 
								endforeach;
							endif?>
						</tbody>
					  </table>
				</div>
				<p><hr>
                </p>
				<div class="table-responsive-md">
                    <h4 class="text-left"><b>Pregunta 6: </b>Creo que este sistema es muy inconsistente</h4>
                    <table class="table table-striped">
						<thead>
						  <tr>
							<th scope="col">Pais</th>
							<th scope="col">Edad</th>
							<th scope="col">Genero</th>
							<th scope="col">Respuesta</th>
						  </tr>
						</thead>
						<tbody>
							<?php 
							if(empty($rows6)):
								foreach ($rows6 as $row):?>
									<tr>
										<td><?php echo $row[0]['location']?></td>
										<td><?php echo $row[0]['age']?></td>
										<td><?php echo $row[0]['gender']?></td>
										<td><?php echo $row[0]['value']?></td>
									</tr>
								<?php 
								endforeach;
							endif?>
						</tbody>
					  </table>
				</div>
				<p><hr>
                </p>
				<div class="table-responsive-md">
                    <h4 class="text-left"><b>Pregunta 7: </b>Imagino que la mayoría de la gente aprendería a usar este sistema rápidamente</h4>
                    <table class="table table-striped">
						<thead>
						  <tr>
							<th scope="col">Pais</th>
							<th scope="col">Edad</th>
							<th scope="col">Genero</th>
							<th scope="col">Respuesta</th>
						  </tr>
						</thead>
						<tbody>
							<?php 
							if(empty($rows7)):
								foreach ($rows7 as $row):?>
									<tr>
										<td><?php echo $row[0]['location']?></td>
										<td><?php echo $row[0]['age']?></td>
										<td><?php echo $row[0]['gender']?></td>
										<td><?php echo $row[0]['value']?></td>
									</tr>
								<?php 
								endforeach;
							endif?>
						</tbody>
					  </table>
				</div>
				<p><hr>
                </p>
				<div class="table-responsive-md">
                    <h4 class="text-left"><b>Pregunta 8: </b>Encuentro que esta página web es muy difícil de usar</h4>
                    <table class="table table-striped">
						<thead>
						  <tr>
							<th scope="col">Pais</th>
							<th scope="col">Edad</th>
							<th scope="col">Genero</th>
							<th scope="col">Respuesta</th>
						  </tr>
						</thead>
						<tbody>
							<?php
							if(empty($rows8)): 
								foreach ($rows8 as $row):?>
									<tr>
										<td><?php echo $row[0]['location']?></td>
										<td><?php echo $row[0]['age']?></td>
										<td><?php echo $row[0]['gender']?></td>
										<td><?php echo $row[0]['value']?></td>
									</tr>
								<?php 
								endforeach;
							endif;?>
						</tbody>
					  </table>
				</div>
				<p><hr>
                </p>
				<div class="table-responsive-md">
                    <h4 class="text-left"><b>Pregunta 9: </b>Me siento confiado al usar este sistema</h4>
                    <table class="table table-striped">
						<thead>
						  <tr>
							<th scope="col">Pais</th>
							<th scope="col">Edad</th>
							<th scope="col">Genero</th>
							<th scope="col">Respuesta</th>
						  </tr>
						</thead>
						<tbody>
							<?php 
							if(empty($rows9)): 
								foreach ($rows9 as $row):?>
									<tr>
										<td><?php echo $row[0]['location']?></td>
										<td><?php echo $row[0]['age']?></td>
										<td><?php echo $row[0]['gender']?></td>
										<td><?php echo $row[0]['value']?></td>
									</tr>
								<?php endforeach; 
							endif;?>
						</tbody>
					  </table>
				</div>
				<p><hr>
                </p>
				<div class="table-responsive-md">
                    <h4 class="text-left"><b>Pregunta 10: </b>Necesité aprender muchas cosas antes de ser capaz de usar este sitio web</h4>
                    <table class="table table-striped">
						<thead>
						  <tr>
							<th scope="col">Pais</th>
							<th scope="col">Edad</th>
							<th scope="col">Genero</th>
							<th scope="col">Respuesta</th>
						  </tr>
						</thead>
						<tbody>
							<?php 
							if(empty($rows10)): 
							foreach ($rows10 as $row):?>
								<tr>
									<td><?php echo $row[0]['location']?></td>
									<td><?php echo $row[0]['age']?></td>
									<td><?php echo $row[0]['gender']?></td>
									<td><?php echo $row[0]['value']?></td>
								</tr>
							<?php endforeach; endif;?>
						</tbody>
					  </table>
				</div>
			</div> <!-- end container -->
		</div>

    </div>
</body>