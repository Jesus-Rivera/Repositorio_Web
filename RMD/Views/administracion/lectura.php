
        
            <div class="mdl-tabs__panel is-active" id="received_messages">
                <div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
						<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
							<thead>
								<tr>
									<th class="mdl-data-table__cell--non-numeric">Usuario</th>
									<th>Correo</th>
									<th>Fecha</th>
									<th>Opciones</th>
								</tr>
								<tr>
									<td class="mdl-data-table__cell--non-numeric">
									<?php
										$fotografia = "ficheros/usuarios/".Remitente[8]."/".Remitente[0]."/".Remitente[0].".jpg";
											if (file_exists($fotografia)) {
											    echo '<img class="round" src="../'.$fotografia.'" ';
											} else {
											    echo '<img class="round" src="'.URL.'Resources/img/usuario/'.Direccion_picture.'" ';
											}
									?>" alt="usuario" width="30" height="30" style="border-radius: 50%">
									 <?=Remitente[1]." ".Remitente[2]." - "?><a href="<?=URL."material/profile?id=".Remitente[0]?>"><?=Remitente[3]?></a></td>
									<td><?=Remitente[4]?></td>
									<td><?=Remitente[5]?></td>
									<td><button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"><i class="zmdi zmdi-more"></i></button></td>
								</tr>
								<tr>
									<td class="mdl-data-table__cell--non-numeric" colspan="5" style="margin: 10%;"><p style="padding: 2%;">
										<?php
										for ($i = 0; $i < strlen(Remitente[7]); $i++) { 
											if ($i % 100 == 0) {
												echo "<br>";
											}
											echo Remitente[7][$i];
										}
									?></p></td>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
						</table>
					</div>
				</div>
            </div>
        </div>