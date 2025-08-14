<h2>Lista TODO</h2>

<?php
$stmt = $pdo->query("SELECT * FROM todo_items ORDER BY created_at DESC");
$todos = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (!$todos) {
  echo "<p>Nessuna TODO presente.</p>";
} else {
  echo "<ul>";
  foreach ($todos as $todo) {
    echo "<li>" . htmlspecialchars($todo['text']) . "</li>";
  }
  echo "</ul>";
}
?>