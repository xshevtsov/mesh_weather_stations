<?php

$node = $_GET["node_id"];

require_once './MeraniaController.php';
$meraniaController = new MeraniaController();

$merania =  $meraniaController->getMeraniaForUser($node);

$pole = [];
$pole1 = [];
forEach($merania as $meranie){

    array_push($pole1, $meranie['date'], $meranie['pressure']);
    array_push($pole,  $pole1);
    $pole1 = [];
}

echo json_encode($pole);


?>