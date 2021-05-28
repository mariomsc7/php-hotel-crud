<?php

// GET ROOM INFO BY ID

require_once __DIR__ . '/database.php';

// GET ROOM ID

$id = empty($_GET['id']) ? false : $_GET['id'];

if($id) {
    "SELECT * FROM `stanze` WHERE `id` = '$id'";

    // PREPARED STATEMENTS

    $stmt = $conn->prepare("SELECT `id`, `room_number`, `floor`, `beds` FROM `stanze` WHERE `id` = ?");
    $stmt->bind_param('s', $id);

    // EXECUTE 
    $stmt->execute();

    // GET RESULT
    $result = $stmt->get_result();

    if($result && $result->num_rows > 0) {
        $room = $result->fetch_assoc(); // non eseguiamo il loop perche' l'id e' univoco
    }
}
$conn->close();