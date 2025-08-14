<?php
// create_todos_db.php
// Crea il DB 'todos' e la tabella 'todo_items', poi mostra le tabelle esistenti

$host = 'localhost';
$port = 8889;
$user = 'root';
$pass = 'root';
$dbname = 'todos';

try {
  // Connessione al server MySQL
  $pdo = new PDO("mysql:host=$host;port=$port", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Crea il database
  $pdo->exec("CREATE DATABASE IF NOT EXISTS `$dbname` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
  echo "Database '$dbname' creato o già esistente.<br>";

  // Seleziona il DB
  $pdo->exec("USE `$dbname`");

  // Crea la tabella
  $sql = "CREATE TABLE IF NOT EXISTS todo_items (
        id INT AUTO_INCREMENT PRIMARY KEY,
        text TEXT NOT NULL,
        status TINYINT(1) NOT NULL DEFAULT 0,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB";
  $pdo->exec($sql);
  echo "Tabella 'todo_items' creata o già esistente.<br>";

  // Mostra le tabelle esistenti
  $stmt = $pdo->query("SHOW TABLES");
  $tables = $stmt->fetchAll(PDO::FETCH_COLUMN);

  echo "<br>Tabelle nel database '$dbname':<br>";
  foreach ($tables as $table) {
    echo "- $table<br>";
  }
} catch (PDOException $e) {
  die("❌ Errore: " . $e->getMessage());
}
