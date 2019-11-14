
        <section class="full-width header-well">
            <div class="full-width header-well-icon">
                <i class="fas fa-file-pdf"></i>
            </div>
        </section>
        <pre>
            Autor:
            <?php 
                echo Datos[5]." ".Datos[6]."
                ".'<a href="'.URL.'material/profile?id='.Datos[4].'">'.Datos[7].'</a>';
            ?>
        </pre>
        <hr>
        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect"></div>
        <p class="text-condensedLight">
            <?php 
                echo Datos[0]."<br><br>".Datos[2]."<br><br>".Datos[1];
            ?>
        </p>

        </div>
        <div class="contenedor-boton">
            <?php 
                if (isset($_SESSION['ID'])) {
                    echo '<button class="button download">Descargar</button>
                           <a href="'.URL."material/save?archivo=".$_GET['id']."&usuario=".$_SESSION['ID'].'"><button class="button save">Guardar</button></a>';
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