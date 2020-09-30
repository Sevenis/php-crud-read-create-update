<?php

include __DIR__ . '/../database.php';

if(empty($_POST['id'])){
    die('Nessun ID!');
}
// dichiaro la $id
$id = $_POST['id'];

// estrapolo in base all'ID il numero della stanza da cancellare per poterla
// poi passare tramite URL all'index
$sql = "SELECT * FROM stanze WHERE id = $id";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0){
    $row = $result->fetch_assoc();
    $rn = $row['room_number'];
} elseif ($result) {
    echo "0 results";
} else {
    echo "query error";
}

// cancello la riga del database associata all'ID estrapolato
$sql = "DELETE FROM stanze WHERE id = ?";
//prepariamo la nostra sql con un bind stmt
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
//rimando all'index passandogli il numero della stanza
if($stmt && $stmt->affected_rows > 0){
    header("Location:$basepath/index2.php?roomNr=$rn");
} else {
    echo "Stanza non cancellata!";
}

$conn->close();

 ?>
