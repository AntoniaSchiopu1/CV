<?php
// config.php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'portofoliu_antonia';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die('Conexiune esuata: ' . $conn->connect_error);
}
$conn->set_charset('utf8');
?>