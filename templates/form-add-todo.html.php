<style>
  /* Contenitore del form */
  .todo-form {
    display: flex;
    flex-direction: column;
    align-items: center;
    max-width: 600px;
    /* leggermente più largo */
    margin: 2rem auto;
    padding: 2rem;
    background: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  /* Titolo del form */
  .todo-form label {
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 1rem;
    text-align: center;
  }

  /* Input di testo */
  .todo-form input[type="text"] {
    width: 100%;
    /* occupa tutta la larghezza del form */
    padding: 0.8rem;
    font-size: 1rem;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 1.5rem;
    /* spazio sotto l'input */
    box-sizing: border-box;
  }

  /* Bottone */
  .todo-form input[type="submit"] {
    padding: 0.8rem 1.5rem;
    font-size: 1rem;
    font-weight: bold;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
    margin-top: 0.5rem;
    /* piccolo spazio sopra il bottone */
  }

  .todo-form input[type="submit"]:hover {
    background-color: #0056b3;
  }
</style>

<?php
/*
  ATTENZIONE: 
  Questo template contiene solo il form HTML per inserire una nuova TODO. 
  Il form NON invia dati direttamente a questo file. 
  In realtà, quando si preme il pulsante "Aggiungi", i dati vengono inviati
  alla pagina PHP che include questo template (todo.php), 
  perché l'attributo action del form è vuoto: action="".
  
  Il file addtodo.html.php serve solo a **mostrare il form**, 
  mentre la logica di gestione dei dati (inserimento nel database, controllo POST) 
  viene gestita nel file PHP che include questo template.
*/
?><form class="todo-form" action="index.php?page=add-todo" method="post"><label for="todo">Inserisci nuova TODO:</label><input type="text" id="todo" name="todo"><input type="submit" value="Aggiungi"></form><?php if (!empty($error)) : ?><p style="color:red"><?= htmlspecialchars($error) ?></p><?php endif; ?>