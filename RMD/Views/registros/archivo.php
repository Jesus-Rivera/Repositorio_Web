        <script type="text/javascript" src="informacion_adicional.js"></script>
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
                                <form method="POST" action="<?=URL?>registro/upload" enctype="multipart/form-data">
                                    <div class="mdl-grid">
                                        <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
                                            <h5 class="text-condensedLight">Información Básica</h5>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="Nombre" name="Nombre">
                                                <label class="mdl-textfield__label" for="Nombre">Nombre</label>
                                                <span class="mdl-textfield__error">Nombre invalido</span>
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="textbox" id="Descripcion" name="Descripcion">
                                                <label class="mdl-textfield__label" for="Descripcion">Descripcion</label>
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <select class="mdl-textfield__input" name="Asignatura">
                                                    <option>Seleccionar categoria</option>

                                                    <?php
                                                        foreach (Categoria as $value) {
                                                        echo '<option value="'.$value[0].'">'.$value[1].'</option>';
                                                     } 
                                                    ?>
                                                </select>
                                            </div>
                                            
                                            <h5 class="text-condensedLight">Tipo de archivo</h5>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                    <label for="file" class="input-label">
                                                        <span id="label_span">Cuestionario</span>
                                                    </label>
                                                    <input id="file" type="button">
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                    <label for="file" class="input-label">
                                                        <span id="label_span">&nbspDocumento&nbsp</span>
                                                    </label>
                                                    <input id="file" type="button">
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                    <label for="file" class="input-label">
                                                        <span id="label_span">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspVideo&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                                    </label>
                                                    <input id="file" type="button">
                                            </div>
                                            
                                        </div>
                                        <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
                                            <h5 class="text-condensedLight">Informacion adicional</h5>
                                            <div id="aditional_information"></div>
                                            <h5 class="text-condensedLight">Dirección</h5>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text" id="modelProduct" name="Direccion">
                                                <label class="mdl-textfield__label" for="modelProduct">Video</label>
                                                <span class="mdl-textfield__error">Dirección no valida</span>
                                            </div>
                                            <h5 class="text-condensedLight">Preguntas</h5>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <label class="mdl-textfield__label" for="numPreguntas">Cantidad</label>
                                                <input type="number" class="mdl-textfield__input" id="numPreguntas" name="Cantidad">
                                            </div>
                                            <h5 class="text-condensedLight">Archivo</h5>
                                            <div class="mdl-textfield mdl-js-textfield">
                                                
                                                    <label for="" class="input-label">
                                                        <i class="fas fa-upload"></i>
                                                        <span id="label_span">Subir Archivo(s)</span>
                                                    </label>
                                                    <input id="" type="file" name="Archivo" accept="
                                                    <?php 
                                                        foreach (Tipo as $value) {
                                                        echo '.'.$value.',';
                                                     } 
                                                    ?>">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-center">
                                        <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addProduct">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                        <div class="mdl-tooltip" for="btn-addProduct">Subir material</div>
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
                        
                        <div class="full-width text-center" style="padding: 30px 0;">

                            <?php
                            for ($i = 0; $i < sizeof(Material) ; $i++) { 
                                echo '
                                <div class="mdl-card mdl-shadow--2dp full-width product-card">
                                <a href="'.URL.'material/view?id='.Material[$i][4].'"><div class="mdl-card__title">
                                    <img src="';
                                echo URL."Resources/img/material/".Material[$i][5].".gif";
                                echo '" alt="product" class="img-responsive">
                                </div></a>
                                <div class="mdl-card__supporting-text">
                                    <small>'.Material[$i][0].'</small>
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    '.Material[$i][1].'
                                    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                        <i class="zmdi zmdi-more"></i>
                                    </button>
                                </div>
                            </div>';
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script>
    
        function ajax() {
        const http = new XMLHttpRequest();
        const url = '';
        http.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("aditional_information").innerHTML = "Hola";
            }
        }
        http.open("GET",url);
        http.send();
    }

    document.getElementByName("Cuestionario").addEventListener("click",function(){
        ajax();
    });
</script>