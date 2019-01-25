
<?php
require_once 'config.inc.php';
     try {
         $bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
       }
     catch (PDOException $e) {
         print "Erreur : " . $e->getMessage() . "<br/>";
         die();
      }
class releveArduino
    {
        public function setreleveArduino(){
            $reqInsert = $bdd->prepare('INSERT INTO temp_hum (temperature, humidity, calendar, hour) VALUES (:temperature, :humidity, :calendar, :hour)');
            $reqInsert->execute(array('temperature' => $data->temperature,'humidity' => $data->humidite,'calendar'=> $calendar, 'hour'=> $hour ));
        }
        public function getreleveArduino(){
            return $bdd->query('SELECT id, temperature, humidity, calendar , hour FROM temp_hum ORDER BY id ');
        }
}
