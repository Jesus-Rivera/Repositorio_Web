  <div class="container">
    <form action="<?=URL?>administracion/send" method="POST">
      <h1></h1>

      <div class="form-group">
        <input type="text" required="required" name="Destinatario" <?php
          if (isset($_GET['user'])) {
            echo 'value="'.$_GET['user'].'"';
          }
          ?>/>
        <label for="input" class="control-label">Destinatario</label><i class="bar"></i>
      </div>

	<?php
	if (isset($_GET['ERROR'])) {
		echo '<div class="form-group">
            	<label style="color:red; padding-left: 5%;">No se encontro al usuario</label>
            </div>';	
	}
    ?>
      <div class="form-group">
        <textarea placeholder="Escribe tu mensaje" rows="20" name="comment" id="comment_text" cols="40" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true"></textarea>
      </div>
		<div class="button-container">
	      <button type="submit" class="button"><span>Enviar</span></button>
	    </div>
    </form>
    
  </div>