<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/sweetalert2.css">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/mi_main.css">
    <script src="https://kit.fontawesome.com/f8b2926d66.js" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script src="js/material.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.js"></script>
</head>

<body>
    <!-- Notifications area -->
    <section class="full-width navLateral">
        <div class="full-width navLateral-bg btn-menu"></div>
        <div class="full-width navLateral-body">
            <div class="full-width navLateral-body-logo text-center tittles">
                <i class="zmdi zmdi-close btn-menu"></i> RMD
            </div>
            <figure class="full-width" style="height: 77px;">
                <div class="navLateral-body-cl">
                    <img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
                </div>
                <figcaption class="navLateral-body-cr hide-on-tablet">
                    <span>
						Full Name Admin<br>
						<small>Profesor</small>
					</span>
                </figcaption>
            </figure>
            <div class="full-width tittles navLateral-body-tittle-menu">
                <i class="zmdi zmdi-desktop-mac"></i><span class="hide-on-tablet">&nbsp; Repositorio de Material
					Didactico</span>
            </div>
            <nav class="full-width">
                <ul class="full-width list-unstyle menu-principal">
                    <li class="full-width">
                        <a href="home.html" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-view-dashboard"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">
                                INICIO
                            </div>
                        </a>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="#!" class="full-width btn-subMenu">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-case"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">
                                ADMINISTRACIÓN
                            </div>
                            <span class="zmdi zmdi-chevron-left"></span>
                        </a>
                        <ul class="full-width menu-principal sub-menu-options">
                            <li class="full-width">
                                <a href="company.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-balance"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        PROFESORES
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="providers.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-truck"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        PROVIDERS
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="payments.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-card"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        PAYMENTS
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="categories.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-label"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        CATEGORIES
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="#!" class="full-width btn-subMenu">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-account-add zmdi-hc-fw"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">
                                REGISTRO DE USUARIOS
                            </div>
                            <span class="zmdi zmdi-chevron-left"></span>
                        </a>
                        <ul class="full-width menu-principal sub-menu-options">
                            <li class="full-width">
                                <a href="client.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-face zmdi-hc-fw"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        NUEVO COORDINADOR
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="client.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        NUEVO PROFESOR
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="#!" class="full-width btn-subMenu">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">
                                MATERIAL
                            </div>
                            <span class="zmdi zmdi-chevron-left"></span>
                        </a>
                        <ul class="full-width menu-principal sub-menu-options">
                            <li class="full-width">
                                <a href="products.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="fas fa-book"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        NUEVO MATERIAL
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="catalogo.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        CATALOGO
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="full-width divider-menu-h"></li>
    </section>
    <!-- navBar -->
    <div class="full-width navBar">
        <div class="full-width navBar-options">
            <i class="zmdi zmdi-more-vert btn-menu" id="btn-menu"></i>
            <div class="mdl-tooltip" for="btn-menu">Menu</div>
            <nav class="navBar-options-list">
                <ul class="list-unstyle">
                    <li class="btn-Notification" id="notifications">
                        <i class="zmdi zmdi-notifications"></i>
                        <!-- <i class="zmdi zmdi-notifications-active btn-Notification" id="notifications"></i> -->
                        <div class="mdl-tooltip" for="notifications">Notifications</div>
                    </li>
                    <li class="btn-exit" id="btn-exit">
                        <i class="zmdi zmdi-power"></i>
                        <div class="mdl-tooltip" for="btn-exit">LogOut</div>
                    </li>
                    <li class="text-condensedLight noLink"><small>User Name</small></li>
                    <li class="noLink">
                        <figure>
                            <img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
                        </figure>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- navLateral -->
    <section class="full-width navLateral">
        <div class="full-width navLateral-bg btn-menu"></div>
        <div class="full-width navLateral-body">
            <div class="full-width navLateral-body-logo text-center tittles">
                <i class="zmdi zmdi-close btn-menu"></i> RMD
            </div>
            <figure class="full-width" style="height: 77px;">
                <div class="navLateral-body-cl">
                    <img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
                </div>
                <figcaption class="navLateral-body-cr hide-on-tablet">
                    <span>
						Full Name Admin<br>
						<small>Admin</small>
					</span>
                </figcaption>
            </figure>
            <div class="full-width tittles navLateral-body-tittle-menu">
                <i class="zmdi zmdi-desktop-mac"></i><span class="hide-on-tablet">&nbsp; Repositorio de Material
					Didactico</span>
            </div>
            <nav class="full-width">
                <ul class="full-width list-unstyle menu-principal">
                    <li class="full-width">
                        <a href="home.html" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-view-dashboard"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">
                                INICIO
                            </div>
                        </a>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="#!" class="full-width btn-subMenu">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-case"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">
                                ADMINISTRACIÓN
                            </div>
                            <span class="zmdi zmdi-chevron-left"></span>
                        </a>
                        <ul class="full-width menu-principal sub-menu-options">
                            <li class="full-width">
                                <a href="company.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-balance"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        PROFESORES
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="providers.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-truck"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        PROVIDERS
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="payments.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-card"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        PAYMENTS
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="categories.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-label"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        CATEGORIES
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="#!" class="full-width btn-subMenu">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-account-add zmdi-hc-fw"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">
                                REGISTRO DE USUARIOS
                            </div>
                            <span class="zmdi zmdi-chevron-left"></span>
                        </a>
                        <ul class="full-width menu-principal sub-menu-options">
                            <li class="full-width">
                                <a href="coordinador.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-face zmdi-hc-fw"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        NUEVO COORDINADOR
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="profesor.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        NUEVO PROFESOR
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="#!" class="full-width btn-subMenu">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">
                                MATERIAL
                            </div>
                            <span class="zmdi zmdi-chevron-left"></span>
                        </a>
                        <ul class="full-width menu-principal sub-menu-options">
                            <li class="full-width">
                                <a href="subirArchivo.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="fas fa-book"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        NUEVO MATERIAL
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="catalogo.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        CATALOGO
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="full-width divider-menu-h"></li>
    </section>
    <!-- pageContent -->
    <section class="full-width pageContent">
        <section class="full-width header-well">
            <div class="full-width header-well-icon">
                <i class="zmdi zmdi-accounts"></i>
            </div>
            <div class="full-width header-well-text">
                <p class="text-condensedLight">
                    Bienvenido a la sección para registrar nuevos prefesores del sistema, debes de llenar todos los campos del siguiente formulario para registrar un profesor.
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
                                Nuevo Profesor
                            </div>
                            <div class="full-width panel-content">
                                <form>
                                    <h5 class="text-condensedLight">Datos del Profesor</h5>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="DNIClient">
                                        <label class="mdl-textfield__label" for="DNIClient">Matricula</label>
                                        <span class="mdl-textfield__error">Invalid number</span>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameClient">
                                        <label class="mdl-textfield__label" for="NameClient">Nombre(s)</label>
                                        <span class="mdl-textfield__error">Invalid name</span>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="LastNameClient">
                                        <label class="mdl-textfield__label" for="LastNameClient">Apellidos</label>
                                        <span class="mdl-textfield__error">Invalid last name</span>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="addressClient1">
                                        <label class="mdl-textfield__label" for="addressClient1">Escuela de Procedencia</label>
                                        <span class="mdl-textfield__error">Invalid address</span>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="addressClient2">
                                        <label class="mdl-textfield__label" for="addressClient2">Título Académico</label>
                                        <span class="mdl-textfield__error">Invalid address</span>
                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="email" id="emailClient">
                                        <label class="mdl-textfield__label" for="emailClient">E-mail</label>
                                        <span class="mdl-textfield__error">Invalid E-mail</span>
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
                                Lista de Profesores
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
                                    <div class="mdl-list__item mdl-list__item--two-line">
                                        <span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-account mdl-list__item-avatar"></i>
											<span>1. Client name</span>
                                        <span class="mdl-list__item-sub-title">DNI</span>
                                        </span>
                                        <a class="mdl-list__item-secondary-action" href="#!"><i
												class="zmdi zmdi-more"></i></a>
                                    </div>
                                    <li class="full-width divider-menu-h"></li>
                                    <div class="mdl-list__item mdl-list__item--two-line">
                                        <span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-account mdl-list__item-avatar"></i>
											<span>2. Client name</span>
                                        <span class="mdl-list__item-sub-title">DNI</span>
                                        </span>
                                        <a class="mdl-list__item-secondary-action" href="#!"><i
												class="zmdi zmdi-more"></i></a>
                                    </div>
                                    <li class="full-width divider-menu-h"></li>
                                    <div class="mdl-list__item mdl-list__item--two-line">
                                        <span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-account mdl-list__item-avatar"></i>
											<span>3. Client name</span>
                                        <span class="mdl-list__item-sub-title">DNI</span>
                                        </span>
                                        <a class="mdl-list__item-secondary-action" href="#!"><i
												class="zmdi zmdi-more"></i></a>
                                    </div>
                                    <li class="full-width divider-menu-h"></li>
                                    <div class="mdl-list__item mdl-list__item--two-line">
                                        <span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-account mdl-list__item-avatar"></i>
											<span>4. Client name</span>
                                        <span class="mdl-list__item-sub-title">DNI</span>
                                        </span>
                                        <a class="mdl-list__item-secondary-action" href="#!"><i
												class="zmdi zmdi-more"></i></a>
                                    </div>
                                    <li class="full-width divider-menu-h"></li>
                                    <div class="mdl-list__item mdl-list__item--two-line">
                                        <span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-account mdl-list__item-avatar"></i>
											<span>5. Client name</span>
                                        <span class="mdl-list__item-sub-title">DNI</span>
                                        </span>
                                        <a class="mdl-list__item-secondary-action" href="#!"><i
												class="zmdi zmdi-more"></i></a>
                                    </div>
                                    <li class="full-width divider-menu-h"></li>
                                    <div class="mdl-list__item mdl-list__item--two-line">
                                        <span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-account mdl-list__item-avatar"></i>
											<span>6. Client name</span>
                                        <span class="mdl-list__item-sub-title">DNI</span>
                                        </span>
                                        <a class="mdl-list__item-secondary-action" href="#!"><i
												class="zmdi zmdi-more"></i></a>
                                    </div>
                                    <li class="full-width divider-menu-h"></li>
                                    <div class="mdl-list__item mdl-list__item--two-line">
                                        <span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-account mdl-list__item-avatar"></i>
											<span>7. Client name</span>
                                        <span class="mdl-list__item-sub-title">DNI</span>
                                        </span>
                                        <a class="mdl-list__item-secondary-action" href="#!"><i
												class="zmdi zmdi-more"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>