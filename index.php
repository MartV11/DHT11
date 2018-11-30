<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <title>mon thermometre</title>
  </head>
  <body>

    <h1>Températures</h1>
    <?php
    $json_url = "data.txt";
    $json=file_get_contents("data.txt");
    $data=json_decode($json);
    print_r($data);

    $bargraph_height = 161 + $data->temperature*4;
    $bargraph_top= 315 - $data->temperature*4;


     ?>

     <p> il fait <?php echo $data->temperature;?>°C avec <?php echo $data->humidite ?>% d'humidité. le 30/11/2018 </p>

     <div id="thermometer">
     <div id="bargraph" style:"height:<?php echo $bargraph_height ?>px" style:"top:<?php echo $bargraph_top ?>px"></div>
      </div>
</img>
  </body>
</html>
