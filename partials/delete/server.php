<?php

include __DIR__ . '/../database.php';
include __DIR__ . '/../functions.php';


if(empty($_POST['id'])){
    die('Nessun ID!');
}
// dichiaro la $id
$id = $_POST['id'];

removeId($conn, 'stanze', $id, $basepath);

 ?>
