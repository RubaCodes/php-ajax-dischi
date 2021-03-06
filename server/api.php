<?php

require './database.php';
header('Content-Type: application/json');

$fetchGenres = $_GET['fetchGenres'];

if ($fetchGenres == 'true') {
    $response[] = "All";
    foreach ($database as $album) {
        $response[] = $album['genre'];
    }

    $response = array_unique($response);
    echo json_encode($response);
}



// gestione filtraggio della risposta del genere
$genre = $_GET['genre'];

if (!empty($_GET)) {
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
} else {
    //se non e' stata fatta nessuan richiesta stampa tutto
    echo json_encode($database);
}
