<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Subir Archivo</title>
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
    <script src="js/uploadFile.js"></script>

</head>

<body>
    <!-- Notifications area -->
    <section class="full-width container-notifications">
        <div class="full-width container-notifications-bg btn-Notification"></div>
        <section class="NotificationArea">
            <div class="full-width text-center NotificationArea-title tittles">Notificaciones<i class="zmdi zmdi-close btn-Notification"></i></div>
            <a href="#" class="Notification" id="notifation-unread-1">
                <div class="Notification-icon"><i class="zmdi zmdi-accounts-alt bg-info"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle"></i>
                        <strong>New User Registration</strong>
                        <br>
                        <small>Just Now</small>
                    </p>
                </div>
                <div class="mdl-tooltip mdl-tooltip--left" for="notifation-unread-1">Notification as UnRead</div>
            </a>
            <a href="#" class="Notification" id="notifation-read-1">
                <div class="Notification-icon"><i class="zmdi zmdi-cloud-download bg-primary"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle-o"></i>
                        <strong>New Updates</strong>
                        <br>
                        <small>30 Mins Ago</small>
                    </p>
                </div>
                <div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-1">Notification as Read</div>
            </a>
            <a href="#" class="Notification" id="notifation-unread-2">
                <div class="Notification-icon"><i class="zmdi zmdi-upload bg-success"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle"></i>
                        <strong>Archive uploaded</strong>
                        <br>
                        <small>31 Mins Ago</small>
                    </p>
                </div>
                <div class="mdl-tooltip mdl-tooltip--left" for="notifation-unread-2">Notification as UnRead</div>
            </a>
            <a href="#" class="Notification" id="notifation-read-2">
                <div class="Notification-icon"><i class="zmdi zmdi-mail-send bg-danger"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle-o"></i>
                        <strong>New Mail</strong>
                        <br>
                        <small>37 Mins Ago</small>
                    </p>
                </div>
                <div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-2">Notification as Read</div>
            </a>
            <a href="#" class="Notification" id="notifation-read-3">
                <div class="Notification-icon"><i class="zmdi zmdi-folder bg-primary"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle-o"></i>
                        <strong>Folder delete</strong>
                        <br>
                        <small>1 hours Ago</small>
                    </p>
                </div>
                <div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-3">Notification as Read</div>
            </a>
        </section>
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
                        <div class="mdl-tooltip" for="notifications">Notificaciones</div>
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
                <i class="zmdi zmdi-washing-machine"></i>
            </div>
            <div class="full-width header-well-text">
                <p class="text-condensedLight">
                    Bienvenido a la sección para agregar nuevos materiales al repositorio, deberas de llenar todos los campos para poder registrar el material.
                </p>
            </div>
        </section>
        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
            <div class="mdl-tabs__tab-bar">
                <a href="#tabNewProduct" class="mdl-tabs__tab is-active">NUEVO MATERIAL</a>
                <a href="#tabListProducts" class="mdl-tabs__tab">LISTA DE MATERIALES</a>
            </div>
            <div class="mdl-tabs__panel is-active" id="tabNewProduct">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
                        <div class="full-width panel mdl-shadow--2dp">
                            <div class="full-width panel-tittle bg-primary text-center tittles">
                                Nuevo Material
                            </div>
                            <div class="full-width panel-content">
                                <form>
                                    <div class="mdl-grid">
                                        <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
                                            <h5 class="text-condensedLight">Información Básica</h5>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="number" pattern="-?[0-9- ]*(\.[0-9]+)?" id="BarCode">
                                                <label class="mdl-textfield__label" for="BarCode">Barcode</label>
                                                <span class="mdl-textfield__error">Invalid barcode</span>
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameProduct">
                                                <label class="mdl-textfield__label" for="NameProduct">Name</label>
                                                <span class="mdl-textfield__error">Invalid name</span>
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <select class="mdl-textfield__input">
                                                    <option value="" disabled="" selected="">Select category</option>
                                                    <option value="">Category 1</option>
                                                    <option value="">Category 2</option>
                                                </select>
                                            </div>
                                            <h5 class="text-condensedLight">Units and Price</h5>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="StrockProduct">
                                                <label class="mdl-textfield__label" for="StrockProduct">Units</label>
                                                <span class="mdl-textfield__error">Invalid number</span>
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9.]*(\.[0-9]+)?" id="PriceProduct">
                                                <label class="mdl-textfield__label" for="PriceProduct">Price</label>
                                                <span class="mdl-textfield__error">Invalid price</span>
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="discountProduct">
                                                <label class="mdl-textfield__label" for="discountProduct">% Discount</label>
                                                <span class="mdl-textfield__error">Invalid discount</span>
                                            </div>
                                        </div>
                                        <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
                                            <h5 class="text-condensedLight">Supplier data and model</h5>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <select class="mdl-textfield__input">
                                                    <option value="" disabled="" selected="">Select provider</option>
                                                    <option value="">Provider 1</option>
                                                    <option value="">Provider 2</option>
                                                </select>
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text" id="modelProduct">
                                                <label class="mdl-textfield__label" for="modelProduct">Model</label>
                                                <span class="mdl-textfield__error">Invalid model</span>
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text" id="markProduct">
                                                <label class="mdl-textfield__label" for="markProduct">Mark</label>
                                                <span class="mdl-textfield__error">Invalid Mark</span>
                                            </div>
                                            <h5 class="text-condensedLight">Other Data</h5>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <input type="date" class="mdl-textfield__input">
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <select class="mdl-textfield__input">
                                                    <option value="" disabled="" selected="">Select status</option>
                                                    <option value="">Active</option>
                                                    <option value="">deactivated</option>
                                                </select>
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <form action="form-div">
                                                    <label for="file" class="input-label">
                                                        <i class="fas fa-upload"></i>
                                                        <span id="label_span">Subir Archivo(s)</span>
                                                    </label>
                                                    <input id="file" type="file" multiple="true">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-center">
                                        <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addProduct">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                        <div class="mdl-tooltip" for="btn-addProduct">Add Product</div>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mdl-tabs__panel" id="tabListProducts">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
                        <form action="#">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                                <label class="mdl-button mdl-js-button mdl-button--icon" for="searchProduct">
                                    <i class="zmdi zmdi-search"></i>
                                </label>
                                <div class="mdl-textfield__expandable-holder">
                                    <input class="mdl-textfield__input" type="text" id="searchProduct">
                                    <label class="mdl-textfield__label"></label>
                                </div>
                            </div>
                        </form>
                        <nav class="full-width menu-categories">
                            <ul class="list-unstyle text-center">
                                <li><a href="#!">Category 1</a></li>
                                <li><a href="#!">Category 2</a></li>
                                <li><a href="#!">Category 3</a></li>
                                <li><a href="#!">Category 4</a></li>
                            </ul>
                        </nav>
                        <div class="full-width text-center" style="padding: 30px 0;">
                            <div class="mdl-card mdl-shadow--2dp full-width product-card">
                                <div class="mdl-card__title">
                                    <img src="assets/img/fontLogin.jpg" alt="product" class="img-responsive">
                                </div>
                                <div class="mdl-card__supporting-text">
                                    <small>Stock</small>
                                    <br>
                                    <small>Category</small>
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    Product name
                                    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                        <i class="zmdi zmdi-more"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="mdl-card mdl-shadow--2dp full-width product-card">
                                <div class="mdl-card__title">
                                    <img src="assets/img/fontLogin.jpg" alt="product" class="img-responsive">
                                </div>
                                <div class="mdl-card__supporting-text">
                                    <small>Stock</small>
                                    <br>
                                    <small>Category</small>
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    Product name
                                    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                        <i class="zmdi zmdi-more"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="mdl-card mdl-shadow--2dp full-width product-card">
                                <div class="mdl-card__title">
                                    <img src="assets/img/fontLogin.jpg" alt="product" class="img-responsive">
                                </div>
                                <div class="mdl-card__supporting-text">
                                    <small>Stock</small>
                                    <br>
                                    <small>Category</small>
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    Product name
                                    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                        <i class="zmdi zmdi-more"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="mdl-card mdl-shadow--2dp full-width product-card">
                                <div class="mdl-card__title">
                                    <img src="assets/img/fontLogin.jpg" alt="product" class="img-responsive">
                                </div>
                                <div class="mdl-card__supporting-text">
                                    <small>Stock</small>
                                    <br>
                                    <small>Category</small>
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    Product name
                                    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                        <i class="zmdi zmdi-more"></i>
                                    </button>
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