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

<?php include 'block/nav.php'; ?>

<?php
session_start();

/*
  Um einen Error auf dieser Seite zu verhindern, wenn die Variable noch nicht definiert ist, können.
*/

if(isset($_SESSION['vorname'])){
  echo "<h1>Hallo " . $_SESSION['vorname'] . "</h1>";

} else {
  echo '<a href="index.php">Bitte gebe deinen Vorname ein</a>';
}
echo '<p>Wir haben die Zahl aus der Session-Variable ausgelesen. Deine Glückszahl ist: ' . $_SESSION['luckyNumber'] . '</p>';

?>
</body>
</html>