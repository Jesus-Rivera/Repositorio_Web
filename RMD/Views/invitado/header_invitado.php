<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material</title>
    <link rel="stylesheet" href="<?=URL?>Resources/css/normalize.css">
    <link rel="stylesheet" href="<?=URL?>Resources/css/sweetalert2.css">
    <link rel="stylesheet" href="<?=URL?>Resources/css/material.min.css">
    <link rel="stylesheet" href="<?=URL?>Resources/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?=URL?>Resources/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="<?=URL?>Resources/css/mi_main.css">
    <link rel="stylesheet" href="<?=URL?>Resources/css/perfilStyle.css">
    <link rel="stylesheet" href="<?=URL?>Resources/css/styleVistaArchivo.css">
    <script src="https://kit.fontawesome.com/f8b2926d66.js" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="<?=URL?>Resources/js/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script src="<?=URL?>Resources/js/material.min.js"></script>
    <script src="<?=URL?>Resources/js/sweetalert2.min.js"></script>
    <script src="<?=URL?>Resources/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?=URL?>Resources/js/main.js"></script>
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
                        <a href="<?=URL?>main" class="full-width">
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
                                <a href="<?=URL?>invitado/Database" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="fas fa-database"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Base de Datos
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="<?=URL?>invitado/Web" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="fab fa-html5"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Aplicaciones Web
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="<?=URL?>invitado/IA" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="fas fa-brain"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Inteligencia Artificial
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="<?=URL?>invitado/Android" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="fab fa-android"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Aplicaciones moviles
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                            <a href="<?=URL?>formulario" class="full-width">
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