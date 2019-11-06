		<br>
		<p class="text-center">
            <a href="<?=URL."administracion/new"?>">
            <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addClient" data-upgraded=",MaterialButton,MaterialRipple" tabindex="0">
                <i class="zmdi zmdi-plus"></i>
                <span class="mdl-button__ripple-container"><span class="mdl-ripple is-animating" style="width: 160.392px; height: 160.392px; transform: translate(-50%, -50%) translate(37px, 14px);"></span></span></button></a>
        </p>

        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
            <div class="mdl-tabs__tab-bar">
	                <a href="#received_messages" class="mdl-tabs__tab is-active">Mensajes recibidos</a>
	                <a href="#sent_messages" class="mdl-tabs__tab">Mensajes enviados</a>
	            </div>
            <div class="mdl-tabs__panel is-active" id="received_messages">
                <div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
						<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
							<thead>
								<tr>
									<th class="mdl-data-table__cell--non-numeric">Contenido</th>
									<th>Usuario</th>
									<th>Fecha</th>
									<th>Opciones</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									foreach (mensajes_recibido as $value) {
										echo '
										<tr>
											<td class="mdl-data-table__cell--non-numeric"  onClick="leer('.$value[5].');">'.substr($value[0],0,40)." ... ".'</td>
											<td>'.$value[4].'</td>
											<td>'.$value[2].'</td>
											<td><button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"><i class="zmdi zmdi-more"></i></button></td>
										</tr>';
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
            </div>
            <div class="mdl-tabs__panel" id="sent_messages">
                <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
						<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
							<thead>
								<tr>
									<th class="mdl-data-table__cell--non-numeric">Contenido</th>
									<th>Usuario</th>
									<th>Fecha</th>
									<th>Opciones</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									foreach (mensaje_enviado as $value) {
										echo '
										<tr>
											<td class="mdl-data-table__cell--non-numeric" onClick="leer('.$value[5].');">'.substr($value[0],0,40)." ... ".'</td>
											<td>'.$value[4].'</td>
											<td>'.$value[2].'</td>
											<td><button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"><i class="zmdi zmdi-more"></i></button></td>
										</tr>';
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
            </div>
        </div>

        <script>
        	function leer(id) {
        		window.location = "<?=URL?>administracion/read?msg="+id;
        	}
        </script>