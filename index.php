<?php
require __DIR__ . '/db.php'; // connessione al DB

$page = $_GET['page'] ?? 'list-todo';
$title = "Todo App";

// Gestione POST dal form "aggiungi todo"
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['todo'])) {
  $todoText = trim($_POST['todo']);
  if ($todoText === '') {
    $error = "TODO vuota o richiesta non valida.";
  } else {
    $stmt = $pdo->prepare("INSERT INTO todo_items (text) VALUES (:text)");
    $stmt->execute(['text' => $todoText]);
    // Dopo inserimento, redirect alla lista per evitare reinvio form
    header('Location: index.php?page=list-todo');
    exit;
  }
}

// Contenuto dinamico in base alla pagina
ob_start();
switch ($page) {
  case 'add-todo':
    include __DIR__ . '/templates/form-add-todo.html.php';
    break;
  case 'list-todo':
  default:
    include __DIR__ . '/templates/list-todo.html.php';
    break;
}
$output = ob_get_clean();

include __DIR__ . '/layout.html.php';
