<?php

include __DIR__ . '/../database.php';

if(empty($_POST['id'])){
    die('Nessun ID!');
}

$id = $_POST['id'];

$sql = "DELETE FROM stanze WHERE id = $id";
$result = $conn->query($sql);

if($result){
    echo "Stanza cancellata!";
} else {
    echo "Stanza non cancellata!";
}


$conn->close();

 ?>
