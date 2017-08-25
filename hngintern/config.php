<?php
try{
    $db = new PDO('mysql:host=localhost;dbname=hngintern;charset=utf8','root','Akinrujomu2');
}
catch (Exception $e){
    echo "Error Connecting To Database";
}

?>