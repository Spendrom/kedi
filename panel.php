<?php 
    $json = json_decode(file_get_contents("https://psbdmp.ws/api/search/".$_POST["mail"]));
    $data['sonuc'] = $json->count;
?>
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
<style type="text/css">
  a{
    text-decoration: none;
  }
</style>

<div id="slideBox">
  <div class="topLayer">
    <div class="right">
      <div class="content">
        <h2>Hoşgeldin, miyav! <a href="index.php">🐱</a></h2>
        <form id="form-login" method="post" onsubmit="return false;">
          <div class="form-element form-stack">
            <b><?= $_POST['mail']; ?> ile ilgili <?php echo $data['sonuc']; ?> adet veri bulundu.</b>
            <br>

            <?php
  $json = json_decode(file_get_contents("https://psbdmp.ws/api/search/".$_POST["mail"]));


  $saydir = count($json->data);
    for ($i=0; $i < $saydir; $i++) { 
  $data['guncel'] = $json->data[$i]->id;
  $data['guncel_tarih'] = $json->data[$i]->time;
?>
    
      <p>Data ID: <a href="https://pastebin.com/raw/<?= $data['guncel']; ?>" target="_blank"><?= $data['guncel']; ?></a> - Veri Tarihi: <?= $data['guncel_tarih']; ?></p>

<?php } ?>

<?php 
  if($data['sonuc']<1){
 echo "Hiç bir şey bulamadım. Bu maili kimse hacklememiş.";
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