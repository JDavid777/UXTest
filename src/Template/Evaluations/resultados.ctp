<body class="login-page">
<div class="wrapper">
		<!--===================== Header ========================-->
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="logo"><a href="../tests/testsdisponibles"><img src="/UXTest/img/imagesUxtest/logoP.png" alt="logo"></a></div>
					</div>
					<div class="col-md-5">
						<ul class="menu">
                            <li><a href="../tests/testsdisponibles">Home</a></li>
                            <li><a href="../tests/testsus">Crear nueva encuesta</a></li>
						</ul>
					</div>
					<div class="col-md-3">

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
        <div class="container">
            <div class="">
                <div class="form-group">
                    <h3>Ingrese la url del sitio del que quiere ver los resultados</h3>
                    <?=$this->Form->control('url', ['class' => 'form-control rounded-0']);?> 
                    <button id="btnCargar" class= 'btn btn-primary pull-right'>Cargar</button>
                    
                </div>    
            </div>
            <div id="ajax-content">
            </div>

            <br>
        </div>
        
        <script>
            $('document').ready(function(){
                var boton = document.getElementById("btnCargar");
                boton.onclick = function(){
                    var url = document.getElementById("url").value;
                    console.log(url);
                    cargarDatos(url);  
                };

                function cargarDatos(url){
                    var data = url;
                    $.ajax({
                        type: "GET",
                        url: "<?php echo $this->Url->build(['controller' => 'Evaluations','action' => 'verResultados']);?>",
                        data: {url:data},
                        success: function(response){
                        $('#ajax-content').html(response);}
                
                    });
                };
            });
        </script>
</body>