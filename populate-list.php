<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['todo_text'])) {
  $stmt = $pdo->prepare("INSERT INTO todo_items (text, status) VALUES (:text, 0)");
  $stmt->execute(['text' => $_POST['todo_text']]);
  header("Location: index.php?page=listtodo"); // torna alla lista
  exit;
} else {
  echo "Errore: TODO vuota o richiesta non valida.";
}
