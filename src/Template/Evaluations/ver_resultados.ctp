
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
							if(!empty($rows1[0])):
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
							if(empty(!$rows2[0])):
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
							if(empty(!$rows3[0])):
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
							if(empty(!$rows4[0])):
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
							if(empty(!$rows5[0])):
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
							if(empty(!$rows6[0])):
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
							if(empty(!$rows7[0])):
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
							if(empty(!$rows8[0])): 
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
							if(empty(!$rows9[0])): 
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
							if(empty(!$rows10[0])): 
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
			</div>
		</div>