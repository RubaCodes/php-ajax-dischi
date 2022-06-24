<?php

require './database.php';
header('Content-Type: application/json');

$genre = $_GET['genre'];


//print della risposta
$response = json_encode($database);
echo $response;
