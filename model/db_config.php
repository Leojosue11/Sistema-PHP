<?php
$host = 'localhost';
$db = 'aldo-proyecto';
$user = 'root';
$pass = '';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Coneection failed:  " . mysqli_connect_error());
} else {
    echo "Conected succesfully";
}
