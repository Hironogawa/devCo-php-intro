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
  <h1>Dynamic Text with PHP session</h1>
  <p>Acces the values from the session storage and display them on the page.</p>
<?php
// To access the session variable we need to start the session first.
session_start();

if(isset($_SESSION['first_name'])){
  echo "<h1>Hallo " . $_SESSION['first_name'] . "</h1>";

} else {
  // If the session variable is not set we display an error message.
  echo '<div class="alert alert-danger" role="alert">
          <h4 class="alert-heading">Fehlendes Feld!</h4>
          <p>Bitte fülle das Feld Vorname aus.</p>
        </div>';
}

?>
</main>
</body>
</html>