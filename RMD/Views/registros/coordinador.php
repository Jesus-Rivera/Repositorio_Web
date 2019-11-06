        <section class="full-width header-well">
            <div class="full-width header-well-icon">
                <i class="zmdi zmdi-accounts"></i>
            </div>
            <div class="full-width header-well-text">
                <p class="text-condensedLight">
                    Bienvenido a la sección para registrar nuevos coordinadores del sistema, debes de llenar todos los campos del siguiente formulario para registrar un coordinador.
                </p>
            </div>
        </section>
        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
            <div class="mdl-tabs__tab-bar">
                <a href="#tabNewClient" class="mdl-tabs__tab is-active">NUEVO</a>
                <a href="#tabListClient" class="mdl-tabs__tab">LISTA</a>
            </div>
            <div class="mdl-tabs__panel is-active" id="tabNewClient">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
                        <div class="full-width panel mdl-shadow--2dp">
                            <div class="full-width panel-tittle bg-primary text-center tittles">
                                Nuevo Coordinador
                            </div>
                            <div class="full-width panel-content">
                                <form>
                                    <h5 class="text-condensedLight">Datos del Coordinador</h5>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="DNIClient">
                                        <label class="mdl-textfield__label" for="DNIClient">Matricula</label>
                                        <span class="mdl-textfield__error">No valido</span>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameClient">
                                        <label class="mdl-textfield__label" for="NameClient">Nombre(s)</label>
                                        <span class="mdl-textfield__error">No valido</span>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="LastNameClient">
                                        <label class="mdl-textfield__label" for="LastNameClient">Apellidos</label>
                                        <span class="mdl-textfield__error">No valido</span>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="addressClient1">
                                        <label class="mdl-textfield__label" for="addressClient1">Título Académico</label>
                                        <span class="mdl-textfield__error">No valido</span>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="addressClient2">
                                        <label class="mdl-textfield__label" for="addressClient2">Escuela de Procedencia</label>
                                        <span class="mdl-textfield__error">No valido</span>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="tel" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="phoneClient">
                                        <label class="mdl-textfield__label" for="phoneClient">Phone</label>
                                        <span class="mdl-textfield__error">No valido</span>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="email" id="emailClient">
                                        <label class="mdl-textfield__label" for="emailClient">E-mail</label>
                                        <span class="mdl-textfield__error">No valido</span>
                                    </div>
                                    <p class="text-center">
                                        <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addClient">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                        <div class="mdl-tooltip" for="btn-addClient">Add client</div>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mdl-tabs__panel" id="tabListClient">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
                        <div class="full-width panel mdl-shadow--2dp">
                            <div class="full-width panel-tittle bg-success text-center tittles">
                                Lista de Coordinadores
                            </div>
                            <div class="full-width panel-content">
                                <form action="#">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                                        <label class="mdl-button mdl-js-button mdl-button--icon" for="searchClient">
                                            <i class="zmdi zmdi-search"></i>
                                        </label>
                                        <div class="mdl-textfield__expandable-holder">
                                            <input class="mdl-textfield__input" type="text" id="searchClient">
                                            <label class="mdl-textfield__label"></label>
                                        </div>
                                    </div>
                                </form>
                                <div class="mdl-list">
                                    <li class="full-width divider-menu-h"></li>
									<?php
									for ($i = 0; $i < sizeof(Registros); $i++) {
                                    echo '<div class="mdl-list__item mdl-list__item--two-line">
                                        <span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-account mdl-list__item-avatar"></i>
											<span>'.($i+1).'. '.Registros[$i][0].' '.Registros[$i][1].'</span>
                                        <span class="mdl-list__item-sub-title">'.Registros[$i][2].'</span>
                                        </span>
                                        <a class="mdl-list__item-secondary-action" href="#!"><i
												class="zmdi zmdi-more"></i></a>
                                    </div>
                                    <li class="full-width divider-menu-h"></li>';}
                                    ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>