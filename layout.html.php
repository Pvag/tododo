<!-- layout.html.php -->
<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($title ?? 'Senza titolo') ?></title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #f5f5f5;
      color: #333;
    }

    header {
      width: 100%;
      background-color: #222;
      color: white;
      text-align: center;
      padding: 2rem 0;
    }

    header h1 {
      margin: 0;
      font-size: 2rem;
    }

    nav ul {
      list-style: none;
      padding: 0;
      margin: 1rem 0 0;
      display: flex;
      justify-content: center;
      gap: 2rem;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }

    main {
      max-width: 900px;
      margin: 2rem auto;
      background: #fff;
      padding: 2rem;
      border-radius: 8px;
    }

    footer {
      background: #222;
      color: #fff;
      text-align: center;
      padding: 1rem;
      margin-top: 2rem;
    }
  </style>
</head>

<body>
  <header>
    <h1>TODOOS !</h1>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php?page=addtodo">Aggiungi TODO</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <?= $output ?? '' ?>
  </main>

  <footer>
    &copy; <?= date('Y') ?> - Todoos App - Designed by Slurm & Pvag
  </footer>
</body>

</html>