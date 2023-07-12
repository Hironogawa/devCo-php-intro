<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="../../assets/css/style.css"> -->

  <title>PHP Intro | Forms in PHP</title>
</head>
<body>

<?php include 'block/nav.php' ?>
<main class="container py-5">
  <h1>Get the values from the PHP Session</h1>
  <p>On this site we concatinate the variables and generate a dynamic Text form the input on the start page.</p>


<?php
session_start();


if(isset($_SESSION['vorname'])){
  echo "<h1>Hallo " . $_SESSION['vorname'] . "</h1>";

} else {
  echo '<a href="index.php">Bitte gebe deinen Vorname ein</a>';
}
if(isset($_SESSION['price'])){
echo 'Der Preis ist: ' . $_SESSION['price'] . 'CHF';
}

?>
</main>
</body>
</html>