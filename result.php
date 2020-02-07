<?php 
    $json = json_decode(file_get_contents("https://psbdmp.ws/api/search/".$_POST["mail"]));
    $data['sonuc'] = $json->count;
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Pastely - Results</title>
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
        <h2>Results <a onclick="window.history.back();" href="#back" title="Back">👈</a></h2>
        <form id="form-login" method="post" onsubmit="return false;">
          <div class="form-element form-stack">
            <b><?php echo $data['sonuc']; ?> results found about <?= $_POST['mail']; ?></b>
            <br>

            <?php
  $json = json_decode(file_get_contents("https://psbdmp.ws/api/search/".$_POST["mail"]));


  $saydir = count($json->data);
    for ($i=0; $i < $saydir; $i++) { 
  $data['guncel'] = $json->data[$i]->id;
  $data['guncel_tarih'] = $json->data[$i]->time;
?>
    
      <p>Data ID: <a href="content.php?id=<?= $data['guncel']; ?>"><?= $data['guncel']; ?></a> - Date: <?= $data['guncel_tarih']; ?></p>

<?php } ?>

<?php 
  if($data['sonuc']<1){
 echo "No results were found about this data.";
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