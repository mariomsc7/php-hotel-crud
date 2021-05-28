<?php
/**
 * DATABASE CONNECTION
 */

/**
 * CONNECTION INFO
 */

 $servername = 'localhost';
 $username = 'root';
 $password = 'root';
 $dbname = 'hotel';

// CONNECT

$conn = new mysqli($servername, $username, $password, $dbname);



// CONNECTION CHECK

if($conn && $conn->connect_error) {
    die("Connection failed: $conn->connect_error");
}

// GET DM DATA frin query string - DANGER INJECTION

// $name = "pippo' OR 1 -- "; // "hack by query string"
// $name = $_GET['name'];

// $sql = "SELECT * FROM `ospiti` WHERE `name` = '$name'";
// $result = $conn->query($sql);

//  if($result && $result->num_rows > 0) {
//     echo 'Sei dentro';
//  } else {
//     echo 'accesso negato';
// }
 

// PREPARED STATEMENTS - SAFE
$stmt = $conn->prepare("SELECT * FROM `ospiti` WHERE `name` = ?"); 
$stmt->bind_param('s', $name); // s = stringa i = numeri interi d = numeri doppi(double,float) b = blob - tante unita' quanti sono i ? nella query
// PARAMS
$name = $_GET['name'];
// EXECUTE
$stmt->execute();

// GET Result
$result = $stmt->get_result();


if($result && $result->num_rows > 0) {
    echo 'Sei dentro';
} else {
    echo 'Accesso negato';
}



// $sql = "SELECT `room_number`, `floor`, `beds` FROM `stanze`";
// $result = $conn->query($sql);

//  if($result && $result->num_rows > 0) {
//     // finche ci sono righe esegue il loop while per ottenerle
//     // fetch_assoc() entra in automatico nell'oggetto $result, entra nelle row e automaticamente le legge una ad una e le ritorna a $row
//     while($row = $result->fetch_assoc()) {
//             echo '<h2> Stanza N. ' . $row['room_number'] . ' Piano: ' . $row['floor'] . ' Letti: ' . $row['beds'] . '</h2>';
//         }
//     } else if ($result) {
//         echo '<h2>Result not found.</h2>';
//     } else {
//         echo 'query error';
//     }
//  $conn->close();