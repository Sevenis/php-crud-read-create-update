<?php

include __DIR__ . '/../database.php';
include __DIR__ . '/../functions.php';

if(empty($_GET['id'])){
    die('Nessun ID!');
}

$id = $_GET['id'];

//chiamo la variabile $row come usato nella pagina SHOW in modo tale
//da non dover cambiare nulla.

$row = getId($conn, 'stanze', $id);
