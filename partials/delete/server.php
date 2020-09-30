<?php

include __DIR__ . '/../database.php';

if(empty($_POST['id'])){
    die('Nessun ID!');
}
// dichiaro la $id
$id = $_POST['id'];

$sql = "SELECT room_number FROM stanze WHERE id = $id";
$result_room_number = $conn->query($sql);

$sql = "DELETE FROM stanze WHERE id = ?";
//prepariamo la nostra sql con un bind stmt
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

$stmt->execute();

if($stmt && $stmt->affected_rows > 0){
    header("Location:$basepath/index2.php?roomId=$id&&roomNr=$result_room_number");
} else {
    echo "Stanza non cancellata!";
}


$conn->close();

 ?>
