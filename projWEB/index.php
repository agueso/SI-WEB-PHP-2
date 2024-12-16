<?php

include './controller/ClienteController.php';

$classe = $_GET['classe'] . 'Controller';
$metodo = $_GET['acao'];


$controller = new $classe();


if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $controller->$metodo($id);
}

else {
    $controller->$metodo(); 
}