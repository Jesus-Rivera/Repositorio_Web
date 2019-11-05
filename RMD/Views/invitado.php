<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/sweetalert2.css">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/main.css">
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
    <!-- 
    	en esta vista solo se mostrara contenido restringido para un usuario invitado 
    -->
    <section class="full-width navLateral">
        <div class="full-width navLateral-bg btn-menu"></div>
        <div class="full-width navLateral-body">
            <div class="full-width navLateral-body-logo text-center tittles">
                <i class="zmdi zmdi-close btn-menu"></i> RMD
            </div>
            
            <div class="full-width tittles navLateral-body-tittle-menu">
                <i class="zmdi zmdi-desktop-mac"></i><span class="hide-on-tablet">&nbsp; Repositorio de Material Didactico</span>
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
                                    <i class="fas fa-book-open"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">
                                MATERIAS
                            </div>
                            <span class="zmdi zmdi-chevron-left"></span>
                        </a>
                        <ul class="full-width menu-principal sub-menu-options">
                            <li class="full-width">
                                <a href="company.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="fas fa-database"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Base de Datos
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="providers.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="fab fa-html5"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Aplicaciones Web
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="payments.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="fas fa-brain"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Inteligencia Artificial
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="categories.html" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="fab fa-android"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Programación en Android
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                            <a href="home.html" class="full-width">
                                <div class="navLateral-body-cl">
                                    <i class="fas fa-address-card"></i>
                                </div>
                                <div class="navLateral-body-cr hide-on-tablet">
                                    REGISTRATE
                                </div>
                            </a>
                        </li>
                    <li class="full-width divider-menu-h"></li>
                </ul>
    </section>

    <section class="full-width pageContent">
        <section class="full-width header-well">
            <div class="full-width header-well-icon">
                <i class="fas fa-database"></i>
            </div>
            <div class="full-width header-well-text">
                <p class="text-condensedLight">
                    Las bases de datos son un elemento fundamental en el entorno informático hoy en día y tienen aplicación en la práctica totalidad de campos. Concebidas con un propósito general, son de utilidad para toda disciplina o área de aplicación en la que exista una necesidad de gestionar datos, tanto más cuanto más voluminosos sean estos. 
                </p>
            </div>
        </section>
        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
            <div class="main">
                <h3 class="text-center tittles" style=" letter-spacing: 0;">BBDD</h3>
                <ul class="cards">
                    <li class="cards_item">
                        <div class="card">
                            <div class="card_image"><img src="https://picsum.photos/500/300/?image=10"></div>
                            <div class="card_content">
                                <h2 class="card_title">Título del archivo</h2>
                                <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout
                                </p>
                                <button class="btn card_btn">Ver Archivo</button>
                            </div>
                        </div>
                    </li>
                    <li class="cards_item">
                        <div class="card">
                            <div class="card_image"><img src="https://picsum.photos/500/300/?image=5"></div>
                            <div class="card_content">
                                <h2 class="card_title">Título del archivo</h2>
                                <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout
                                </p>
                                <button class="btn card_btn">Ver Archivo</button>
                            </div>
                        </div>
                    </li>
                    <li class="cards_item">
                        <div class="card">
                            <div class="card_image"><img src="https://picsum.photos/500/300/?image=11"></div>
                            <div class="card_content">
                                <h2 class="card_title">Título del archivo</h2>
                                <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout
                                </p>
                                <button class="btn card_btn">Ver Archivo</button>
                            </div>
                        </div>
                    </li>
                    <li class="cards_item">
                        <div class="card">
                            <div class="card_image"><img src="https://picsum.photos/500/300/?image=14"></div>
                            <div class="card_content">
                                <h2 class="card_title">Título del archivo</h2>
                                <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout
                                </p>
                                <button class="btn card_btn">Ver Archivo</button>
                            </div>
                        </div>
                    </li>
                    <li class="cards_item">
                        <div class="card">
                            <div class="card_image"><img src="https://picsum.photos/500/300/?image=17"></div>
                            <div class="card_content">
                                <h2 class="card_title">Título del archivo</h2>
                                <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout
                                </p>
                                <button class="btn card_btn">Ver Archivo</button>
                            </div>
                        </div>
                    </li>
                    <li class="cards_item">
                        <div class="card">
                            <div class="card_image"><img src="https://picsum.photos/500/300/?image=2"></div>
                            <div class="card_content">
                                <h2 class="card_title">Card Grid Layout</h2>
                                <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout
                                </p>
                                <button class="btn card_btn">Ver Archivo</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</body>

</html>