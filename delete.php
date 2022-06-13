<?php 
    #COLLEGO IL FILE CON I PARAMETRI DI CONNESSIONE
    require_once("connessione.php");

        if (isset($_GET["id"])){
            $id = $_GET["id"];
        
        #CREO LO STATEMENT PER LA QUERY PRECOMPILATA
        $stmt = mysqli_stmt_init($connessione_db);
        $sql_query = "DELETE FROM utenti WHERE id=?";
        mysqli_stmt_prepare($stmt, $sql_query);


        #ASSOCIAZIONE DEI PARAMETRI CON I SEGNAPOSTO
        mysqli_stmt_bind_param($stmt, "i", $id);

        #ESECUZIONE DELLA QUERY E CHECK DELL'ESECUZIONE
        if (mysqli_stmt_execute($stmt)){
            echo "Canellazione avvenuta con successo";
        } else {
            echo "si sono verificati degli errori";
        }
    }
?>