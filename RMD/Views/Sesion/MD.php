        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="searchProduct">
                            <i class="zmdi zmdi-search"></i>
            </label>
        <div class="mdl-textfield__expandable-holder">
                <input class="mdl-textfield__input" type="text" id="searchProduct">
                   <label class="mdl-textfield__label"></label>
            </div>
        </div>
        <section id="resultados">
        
        </section>


        <section class="full-width header-well">
            <div class="full-width header-well-icon">
                <i class="fas fa-book"></i>
            </div>
            <div class="full-width header-well-text">
                <p class="text-condensedLight">
                    Bienvenido al catálogo del repositorio, aqui podras encontrar todos los materiales que han sido subidos por los profesores y coordinadores.
                </p>
            </div>
        </section>
        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
            <div class="main">
                <h3 class="text-center tittles" style=" letter-spacing: 0;">Catalogo</h3>
                <ul class="cards">
                    <?php 
                        foreach (catalogo as $value) {
                            echo '
                            <li class="cards_item">
                                <div class="card">
                                    <a href="'.URL.'material/view?id='.$value[0].'"><div class="card_image"><img src="'.URL.'Resources/img/material/'.$value[3].".gif".'" width="350" height="400"></div></a>
                                    <div class="card_content">
                                        <h2 class="card_title">'.substr($value[2],0,15).'</h2>
                                        <p class="card_text">'.substr($value[2],0,30)."...".'</p>
                                        <button class="btn card_btn">Ver '.$value[3].'</button>
                                    </div>
                                </div>
                            </li>';
                        }
                    ?>
                </ul>
            </div>
        </div>