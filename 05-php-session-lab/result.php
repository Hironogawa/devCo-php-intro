
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <title>PHP Intro | Resultat Seite</title>
</head>
<body>
<?php include 'block/nav.php' ?>
<main class="container py-5">
<?php
    session_start();
   
    if(isset($_SESSION['username']) && isset($_POST['username'])) {
      $userData = array('user' => strval($_POST['username']), 'last_login' => strval(date("l jS \of F Y h:i:s A")));
      array_push($_SESSION['username'], $userData);
    } elseif (isset($_POST['username'])) {
      $_SESSION['username'] = array();
      $userData = array('user' => strval($_POST['username']), 'last_login' => strval(date("l jS \of F Y h:i:s A")));
      array_push($_SESSION['username'], $userData);

      foreach($_SESSION['username'] as $value) {
        print_r($value);
      }
    }
    print_r($_SESSION['username']);
?>
</main>
</body>
</html>