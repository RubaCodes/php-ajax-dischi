<?php

require './database.php';
header('Content-Type: application/json');

$genre = $_GET['genre'];

if ($genre === 'All' || $genre === '') {
    echo json_encode($database);
} elseif ($genre === 'Rock') {
    $response = [];
    foreach ($database as $album) {
        if (array_search('Rock', $album)) {
            $response[] = $album;
        }
    }
    echo json_encode($response);
} elseif ($genre === 'Pop') {
    $response = [];
    foreach ($database as $album) {
        if (array_search('Pop', $album)) {
            $response[] = $album;
        }
    }
    echo json_encode($response);
} elseif ($genre === 'Metal') {
    $response = [];
    foreach ($database as $album) {
        if (array_search('Metal', $album)) {
            $response[] = $album;
        }
    }
    echo json_encode($response);
} elseif ($genre === 'Jazz') {
    $response = [];
    foreach ($database as $album) {
        if (array_search('Jazz', $album)) {
            $response[] = $album;
        }
    }
    echo json_encode($response);
}


//print della risposta
// $response = 
// echo $response;
