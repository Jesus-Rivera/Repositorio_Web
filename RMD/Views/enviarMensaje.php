<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/mensaje.css">
</head>

<body>

  <div class="container">
    <form>
      <h1></h1>

      <div class="form-group">
        <input type="text" required="required" />
        <label for="input" class="control-label">Destinatario</label><i class="bar"></i>
      </div>
      <div class="form-group">
        <textarea placeholder="Escribe tu mensaje" rows="20" name="comment[text]" id="comment_text" cols="40" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true"></textarea>
      </div>

    </form>
    <div class="button-container">
      <button type="button" class="button"><span>Enviar</span></button>
    </div>
  </div>
</body>
</html>