
        <section class="full-width header-well">
            <div class="full-width header-well-icon">
                <i class="fas fa-file-pdf"></i>
            </div>
            <div class="full-width header-well-text">
                <p class="text-condensedLight">
                    <?php 
                        echo Datos[0]."<br><br>".Datos[2]."<br><br>".Datos[1];
                    ?>
                </p>
                        
            </div>
        </section>
        <pre>
            Autor:
            <?php 
                echo Datos[5]." ".Datos[6]."
                ".Datos[7];
            ?>
        </pre>
        <hr>
        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect"></div>
        <div id="Iframe-Cicis-Menu-To-Go" class="set-margin-cicis-menu-to-go set-padding-cicis-menu-to-go set-border-cicis-menu-to-go set-box-shadow-cicis-menu-to-go center-block-horiz">
            <div class="responsive-wrapper 
				   responsive-wrapper-padding-bottom-90pct" style="-webkit-overflow-scrolling: touch; overflow: auto;">
                <iframe src="file:///C:/xampp/htdocs/RepWeb/Repositorio_Web/RMD/ficheros/usuarios/<?=Datos[8]."/".Datos[4]."/".Datos[3]?>" allowFullScreen>
                </iframe>
            </div>

        </div>
        <div class="contenedor-boton">
            <?php 
                if (isset($_SESSION['ID'])) {
                    echo '<button class="button download">Descargar</button>
                           <button class="button save">Guardar</button>';
                    if ($_SESSION['ID'] == Datos[4]) {
                        echo ' <button class="button delete">Eliminar</button>';
                    }
                }
            ?>
        </div>
        <hr>
        <!-- seccion de comentarios -->
        <h1>Sección de comentarios</h1>
        <form method="post" action="<?=URL.'material/new_comment?id='.$_GET['id']?>">
          <label for="textarea"></label>
          <center>
            <p>
              <textarea required name="comentario" cols="50" rows="5" id="textarea"></textarea>
            </p>
            <p>
              <input class="bubbly-button" type="submit" name="comentar" value="Comentar">
            </p>
          </center>
        </form>


        <div id="container">
      <ul id="comments">
        <?php 
            foreach (Comentarios as $value) {
                echo '<li class="cmmnt">
                        <div class="avatar">
                          <img src="" height="55" width="55">
                        </div>
                        <div class="cmmnt-content">
                          <header>
                            <a href="'.URL."material/profile?id=".$value[2].'" class="userlink">'.$value[3].'</a> - <span class="pubdate">'.$value[1].'</span>
                          </header>
                          <p>
                            '.$value[0].'
                          </p>
                        </div>
                      </li>
                ';
            }


        ?>
      </ul>
    </div>
<!-- 
    iconos para los archivos

    video
        <i class="fas fa-file-video"></i>
    
    doc
        <i class="fas fa-file-word"></i>
    
    ppt
        <i class="fas fa-file-powerpoint"></i>
    
    xls
        <i class="fas fa-file-excel"></i>
    
    jpg
        <i class="fas fa-file-image"></i>


-->