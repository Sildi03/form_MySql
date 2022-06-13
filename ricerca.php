<?php
    #COLLEGO IL FILE CON I PARAMETRI DI CONNESSIONE
    require_once("connessione.php");

    if (isset($_POST["ricerca"])){
      $nome = $_POST["nome"];

    #CREO LO STATEMENT PER LA QUERY PRECOMPILATA
    $stmt = mysqli_stmt_init($connessione_db);
    $sql_query = "SELECT ID, nome, username, email FROM utenti WHERE nome=?";
    mysqli_stmt_prepare($stmt, $sql_query);

    #ASSOCIAZIONE DEI PARAMETRI CON I SEGNAPOSTO
    mysqli_stmt_bind_param($stmt, "s", $nome);

    #ESECUZIONE DELLA QUERY
    mysqli_stmt_execute($stmt);
    
    #BIND RESULT VARIABLE
    mysqli_stmt_bind_result($stmt, $id, $nome, $username, $email );

    #RECUPERO I VALORI
    while(mysqli_stmt_fetch($stmt)){
     echo "NOME: $nome \n";
     echo "USERNAME: $username \n";
     echo "EMAIL: $email \n";
     echo "<a href='delete.php?id=".$id."' title='Cancella'>CANCELLA VOCE</a>";
     echo "<hr>";
    }

    mysqli_close($connessione_db);
  }
?>























<?php 
    #COLLEGO IL FILE CON I PARAMETRI DI CONNESSIONE
    require_once("connessione.php");
    if (isset($_POST["ricerca"])){
        $nome = $_POST["nome"];

        #CREO LO STATEMENT PER LA QUERY PRECOMPILATA
        $stmt = mysqli_stmt_init($connessione_db);
        $sql_query = "SELECT ID, nome, username, email FROM utenti WHERE nome=?";
        mysqli_stmt_prepare($stmt, $sql_query);

        #ASSOCIAZIONE DEI PARAMETRI CON I SEGNAPOSTO
        mysqli_stmt_bind_param($stmt, "s", $nome);
        
        #ESECUZIONE DELLA QUERY
        mysqli_stmt_execute($stmt);

        #BIND RESULT VARIABLE
        mysqli_stmt_bind_result($stmt, $id, $nome, $username, $email );

        #RECUPERO I VALORI
        while(mysqli_stmt_fetch($stmt)){
            echo "NOME: $nome \n";
            echo "USERNAME: $username \n";
            echo "EMAIL: $email \n";
            echo "<a href='delete.php?id=".$id."' title='Cancella'>CANCELLA VOCE</a>";
            echo "<hr>";
        }
    
    mysqli_close($connessione_db);
    }

?>