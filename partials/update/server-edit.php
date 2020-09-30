<?php
include __DIR__ . '/../database.php';

$sql = "UPDATE stanze SET room_number = ?, beds = ?, floor = ? WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param('iiii', $roomNumber, $beds, $floor, $id);

$roomNumber= $_POST['roomNumber'];
$floor = $_POST['floor'];
$beds = $_POST['beds'];
$id = $_POST['id'];

$stmt->execute();

if($stmt && $stmt->affected_rows > 0) {
    header("Location: $basepath/show.php?id=$id");
} elseif ($stmt && $stmt->affected_rows == 0) {
    echo "Non hai modificato nessun dato!";
} else {
    die('ERRORE! Hai provato ad inserire un dato non valido.');
}

$conn->close();
