<?php
$username = 'root';
$password = '';
try {
    $conn = new PDO('mysql:host=localhost;dbname=carro', $username, $password);

} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
