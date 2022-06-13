<?php
    #COLLEGO IL FILE DI INSERIMENTO
    require_once("inserimento.php");

    #COLLEGO IL FILE DI INSERIMENTO
    //require_once("ricerca.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="index.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MySQL Database</title>
</head>

<body>
<div class="form_box">
  <form action="" id="registrati" method="post">
  <h1>inserisci i tuoi dati per essere ricontattato</h1>
    <input type="text" name="nome" placeholder="nome">
    <input type="text" name="cognome" placeholder="cognome">
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <input type="submit" class="foo" id="registrati" value="invia">
  </form>
</div>
<div class="ricerca_form_box">
  <form id="search_data" action="" method="post">
      <h3>RICERCA DATI</h3>
      <p><input type="text" name="nome" placeholder="NOME" required></p>
      <p><input type="submit" name="ricerca" value="Ricerca"></p>
  </form>
</div>
  
</body>
</html>