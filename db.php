<?php
// db.php
$host = 'localhost';
$port = 8889; // porta MySQL
$user = 'root';
$pass = 'root';
$dbname = 'todos';

try {
  $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Errore connessione DB: " . $e->getMessage());
}
