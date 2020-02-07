<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Pastely - <?php echo $_GET['id']; ?></title>
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
  	<div style="text-align:center;vertical-align:middle;margin-top:90%;opacity: 0.1;">
  		<img src="LogoB.png" width="100">
  	</div>
  </div>
</div>
<style type="text/css">
  a{
    text-decoration: none;
  }
</style>

<div id="slideBox">
  <div class="topLayer">
    <div class="right">
      <div class="content">
        <h2><b><?php echo $_GET['id']; ?></b> Content <a onclick="window.history.back();" href="#back" title="Back">👈</a></h2>
        <form id="form-login" method="post" onsubmit="return false;">
          <div class="form-element form-stack">
            <br>

            <?php
  $json = json_decode(file_get_contents("https://psbdmp.ws/api/dump/get/".$_GET["id"]));

error_reporting(0);

  $saydir = count($json->data);
    for ($i=0; $i < $saydir; $i++) { 
  $data['guncel'] = $json->data;
?>
    
      <p><?= $data['guncel']; ?></a></p>

<?php } ?>

<?php 
  if($data['sonuc']<1){
 echo "Incorrect pastebin data id was entered.";
  }else{
    echo "";
  }
?>
          </div>
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