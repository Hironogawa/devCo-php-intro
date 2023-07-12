
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <title>PHP Intro | Resultat Seite</title>
</head>
<body>
<?php include 'block/nav.php'; ?>
<?php
    session_start();

    if(isset($_POST['vorname'])){
        $_SESSION['vorname'] = $_POST['vorname'];
    }
  
    if(isset($_SESSION['vorname'])){
      echo 'Neuer Vorname: '. $_SESSION['vorname'];
    } else {
        echo 'Vorname fehlt!';
    }

    /*
      Schreibe den POST Nachname in eine Variable ab.
    */

    /*
      Mit print_r können wir die inhalte einer Variable anzeigen lassen (Für Testzwecke).
    */
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
?>
</body>
</html>