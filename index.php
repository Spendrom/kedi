<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Kedi.tk</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div id="back">
  <canvas id="canvas" class="canvas-back"></canvas>
  <div class="backRight">    
  </div>
  <div class="backLeft">
  </div>
</div>

<div id="slideBox">
  <div class="topLayer">
    <div class="right">
      <div class="content">
        <h2>Hesap <b>Kedi</b>si.</h2>
        <form id="form-login" method="POST" action="panel.php">
          <div class="form-element form-stack">
            <label for="username-login" class="form-label">Email Adresi veya Kelime</label>
            <input id="username-login" type="text" name="mail">
          </div>
            <button id="logIn" class="login" type="submit">Giriş Yap</button>
            <a href="sss.php">Nasıl Çalışır?</a>
        </form>
      </div>
    </div>
  </div>
</div>

  	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.11.3/paper-full.min.js'></script>
	<script src="js/index.js"></script>

</body>
</html>