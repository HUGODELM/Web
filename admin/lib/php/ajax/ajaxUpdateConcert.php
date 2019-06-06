<?php
header('Content-Type: application/json');
require '../pgConnect.php';
require '../classes/Connexion.class.php';
require '../classes/Concert.class.php';
require '../classes/ConcertDB.class.php';

$cnx = Connexion::getInstance($dsn,$user,$pass);

try{
   $update= new ConcertDB($cnx);

   extract($_GET,EXTR_OVERWRITE);
    $parametre = 'id='.$id.'&champ='.$champ.'&nouveau='.$nouveau;
    $update->updateConcert($champ, $nouveau, $id);
    $response_array['update']=$parametre;
    echo json_encode($response_array); //facultatif dans ce cas ci
}
catch(PDOException $e){
    print $e->getMessage()." ".$e->getLine()." ".$e->getTrace()." ".$e->getCode();
}
