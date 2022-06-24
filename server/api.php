<?php

require './database.php';



header('Content-Type: application/json');
$response = json_encode($database);
echo $response;
