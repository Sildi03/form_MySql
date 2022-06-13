<?php
    #COLLEGO IL FILE CON I PARAMETRI DI CONNESSIONE
    require_once("connessione.php");

    if (isset($_POST["invia"])){
      $nome = $_POST["nome"];
      $cognome = $_POST["cognome"];
      $email = $_POST["email"];
      $password = $_POST["password"];

      #CREO LO STATEMENT PER LA QUERY PRECOMPILATA
      $stmt = mysqli_stmt_init($connessione_db);
      $sql_query = "INSERT INTO utenti VALUES (NULL, ?, ?, ?, ?, 1)";
      mysqli_stmt_prepare($stmt, $sql_query);

      #ASSOCIAZIONE DEI PARAMETRI CON I SEGNAPOSTO
      mysqli_stmt_bind_param($stmt, "ssss", $nome, $username, $email, $password);

      #ESECUZIONE DELLA QUERY E #CHECK DELL'ESECUZIONE
       if (mysqli_stmt_execute($stmt)){
          echo "Inserimento avvenuto con successo";
          } else {
              echo "si sono verificati degli errori";
          };
    }
?>