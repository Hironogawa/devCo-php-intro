
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <title>PHP Intro | Forms in PHP</title>
</head>
<body>

<?php
/*
  Um die PHP Session abzurufen, müssen wir es auf der seite mit session_start() initiieren,
  sonst erhalten wir ein «Undefined global variable $_SESSION» error.
*/
session_start();
?>

<?php

  /*
    Wir können eine Globale Variable in die PHP Session speichern.
  */
  $_SESSION['luckyNumber'] = 30;
?>

<?php include 'block/nav.php'; ?>
<main>
<form action="result.php" method="post" class="container">
<div class="row mb-4">
  <div class="form-group col">
    <label for="vorname">Vorname: </label>
    <?php 

      /*
        Wir können dynamisch die letzten abgesendeten Daten wieder ins Formular abfüllen.
        Dafür rufen wir die Daten die wir in die Session abgespeichert haben (result.php) wieder ab.
      */
      if(isset($_SESSION['vorname'])){
        echo '<input class="form-control mb-2" type="text" name="vorname" value="'. $_SESSION['vorname'] .'">';
      }else {
        echo '<input class="form-control mb-2" type="text" name="vorname">';
      }
    ?>
    
  </div>

  <div class="form-group col">
    <label for="nachname">Nachname: </label>
    <input class="form-control mb-2" type="text" name="nachname">
  </div>

</div>

<input type="submit" class="btn btn-primary mb-2" value="senden">
</form>
</main>
</body>
</html>