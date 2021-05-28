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
