
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
    
    require "block/globals.php";
    $textFields = constant('FORM_FIELDS');

    // Get the last key from the array "FORM_FIELDS"
    $last_key = array_key_last($textFields);

    // We use this to determine if there is an error
    $error = false;
    foreach($textFields as $key => $value) {
      
      if(!empty($_POST[$value['name']])) {
        // We store the value from the input field in the session variable
        $_SESSION[$value['name']] = $_POST[$value['name']]; 
      } else {
        // We display an error message if a field is empty
        echo '<div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Fehlendes Feld!</h4>
                <p>Bitte das Feld '.$value['title'].' aus.</p>
              </div>';
        // if a field is empty we set the error variable to true
        $error = true;
      }
      if($last_key == $key && !$error) {
        header("Location: about.php");
      }

    }

?>
</main>
</body>
</html>