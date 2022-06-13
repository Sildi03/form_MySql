<?php
    define("DB_HOST", "127.0.0.1");
    define("DB_USERNAME", "root");
    define("DB_PASS", "");
    define("DB_NAME", "corso_click");

    $connessione_db = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASS, DB_NAME);


    if(!$connessione_db){
        echo "CONNESSIONE A MYSQL NON AVVENUTA";
    }

?>