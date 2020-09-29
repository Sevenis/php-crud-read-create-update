<?php

include __DIR__ . '/../database.php';

$sql = "SELECT id, room_number, floor FROM stanze";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0){
    $results = [];
    while ($row = $result->fetch_assoc()){
        // echo "Stanza N. " . $row['room_number'] . " piano: " . $row['floor'];
        $results[] = $row;
    }
} elseif ($result) {
    echo "0 results";
} else {
    echo "query error";
}

$conn->close();

 ?>
