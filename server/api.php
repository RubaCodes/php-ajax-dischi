<?php

require './database.php';
header('Content-Type: application/json');

$genre = $_GET['genre'];

if ($genre === 'All' || $genre === '') {
    echo json_encode($database);
} elseif ($genres === 'Rock') {
} elseif ($genre === 'Pop') {
} elseif ($genre === 'Metal') {
} elseif ($genre === 'Jazz') {
}


//print della risposta
// $response = 
// echo $response;
