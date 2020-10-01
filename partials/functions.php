<?php
//le variabili esterne non si vedono all'interno della funzione
//quindi dobbiamo passarle come argomento
//quindi chiaramente $conn passato come parametro è un valore
//segnaposto, possiamo anche chiamarlo $connection


//FUNZIONE CHE MI RESTITUISCE I VALORI DELLA QUERY
function getAll($connection, $table){
    $sql = "SELECT * FROM $table";
    $result = $connection->query($sql);

    if ($result && $result->num_rows > 0){
        $results = [];
        while ($row = $result->fetch_assoc()){
            // echo "Stanza N. " . $row['room_number'] . " piano: " . $row['floor'];
            $results[] = $row;
        }
    } elseif ($result) {
        $results = [];
    } else {
        $results = false;
    }
    $connection->close();
    return $results;
}
//gli argomenti della funzione sono semplici segnaposto
//NON SONO I VALORI REALI

//FUNZIONE CHE CANCELLA UNA RIGA DEL DB E NON RESTITUISCE NULLA
function removeId($connection, $table, $id, $path){

    // estrapolo in base all'ID il numero della stanza da cancellare per poterla
    // poi passare tramite URL all'index
    $sql = "SELECT * FROM $table WHERE id = $id";
    $result = $connection->query($sql);
    if ($result && $result->num_rows > 0){
        $row = $result->fetch_assoc();
        $rn = $row['room_number'];
    } elseif ($result) {
        echo "0 results";
    } else {
        echo "query error";
    }

    // cancello la riga del database associata all'ID estrapolato
    $sql = "DELETE FROM $table WHERE id = ?";
    //prepariamo la nostra sql con un bind stmt
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    //rimando all'index passandogli il numero della stanza
    if($stmt && $stmt->affected_rows > 0){
        header("Location:$path/index2.php?roomNr=$rn");
    } else {
        echo "Stanza non cancellata!";
    }

    $stmt->close();
    $connection->close();
}


//FUNZIONE CHE MI RESTITUISCE l'ID
function getId($connection, $table, $id){
    $sql = "SELECT * FROM $table WHERE id = $id";
    $result = $connection->query($sql);

    if ($result && $result->num_rows > 0){
        $row = $result->fetch_assoc();
    } elseif ($result) {
        $row = "";
    } else {
        $row = false;
    }
    $connection->close();
    return $row;
}

 ?>
