<?php

include __DIR__ . '/../database.php';
include __DIR__ . '/../functions.php';

//$results perché deve avere lo stesso nome della variabile
//presente in index nel foreach!
$results = getAll($conn, 'stanze');
