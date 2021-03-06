<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Pastely</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" type="image/png" href="icon.png"/>

</head>

<body>
  <div id="back">
  <canvas id="canvas" class="canvas-back"></canvas>
  <div class="backRight"> 
  </div>
  <div class="backLeft">
  	<div style="text-align:center;vertical-align:middle;margin-top:90%;opacity: 0.2;">
  		Powered by<br><img src="LogoB.png" width="100">©
  	</div>
  </div>
</div>

<div id="slideBox">
  <div class="topLayer">
    <div class="right">
      <div class="content">
        <h2>Pastely 🔮</h2>
        <form id="form-login" method="POST" action="result.php">
          <div class="form-element form-stack">
            <label for="username-login" class="form-label">Email or Keyword</label>
            <input id="username-login" type="text" name="mail" pattern=".{3,}"   required title="Please enter value." maxlength="65" autocomplete="off">
          </div>
            <button id="logIn" class="login" type="submit">Search</button>
                    </form>
      </div>
    </div>
  </div>
</div>

  	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.11.3/paper-full.min.js'></script>
	<script src="js/index.js"></script>

	<style type="text/css">
		a{
			text-decoration: none;
		}
	</style>

</body>
</html>
