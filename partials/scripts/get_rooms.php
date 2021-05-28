<?php

// GET DATA FROM ROOM DATABASE

require_once __DIR__ . '/database.php';

// GET ROOMS
$sql = "SELECT `id`, `room_number`, `floor`, `beds` FROM `stanze`";
$result = $conn->query($sql);

if($result && $result->num_rows > 0) {
    $rooms = []; // array nel quale salviamo le row
    while($row = $result->fetch_assoc()) {
        // popolare array $rooms
        $rooms[] = $row;
    }
} else {
    echo "Query error";
}

// CLOSE CONNECTION
$conn->close();