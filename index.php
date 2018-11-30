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

     ?>

     <p> il fait <?php echo $data->temperature;?>°C avec <?php echo $data->humidite ?>% d'humidité. le 30/11/2018 </p>
     <img src="img/thermometer.jpg" alt="thermometre">
     <div></div>
  </body>
</html>
