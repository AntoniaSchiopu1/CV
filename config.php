// Conectare la baza de date MySQL 
<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'portofoliu_antonia';

$conn = @new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    $eroare_conexiune = true; 
} else {
   
    $conn->set_charset('utf8mb4'); 
}

?>
