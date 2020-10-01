<?php
include __DIR__ . '/../database.php';


if(empty($_POST['roomNumber'])){
    die('Non hai inserito il numero della stanza');
}

if(empty($_POST['beds'])){
    die('Non hai inserito i posti letto');
}

if(empty($_POST['floor'])){
    die('Non hai inserito il piano della stanza');
}

$sql = "INSERT INTO stanze (room_number, beds, floor, created_at, updated_at)
VALUES(?, ?, ?, NOW(), NOW())";

$stmt = $conn->prepare($sql);
//istanziamo il comando parametrico sostituendo
//i valori effettivi al posto dei ???
//bind_param mi restituisce un valore booleano (true o false)
$stmt->bind_param("iii", $roomNr, $beds, $floor);

$roomNr = $_POST['roomNumber'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];

$stmt->execute();

if($stmt && $stmt->affected_rows > 0){
    header("Location:$basepath/show.php?id=$stmt->insert_id");

} elseif($stmt){
    die('Nessun inserimento!');
} else {
    die ('errore');
}

$stmt->close();
$conn->close();
