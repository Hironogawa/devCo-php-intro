<?php session_start(); ?>
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
<?php
  $_SESSION['price'] = 30;
?>



  <div class="container-sm ">
    <form action="result.php" method="post" class="d-flex flex-column gap-3 ">
          <?php $textFields = array(
            'username' => array('name' => 'Username', 'type' => 'text'),
            'first_name' => array('name' => 'Vorname', 'type' => 'text'),
            'last_name' => array('name' => 'Nachname', 'type' => 'text'),
            'email' => array('name' => 'E-Mail', 'type' => 'text'),
            'tel' => array('name' => 'Telefon', 'type' => 'text'),
          );

          foreach($textFields as $key => $value) {
          echo '<div class="d-flex row mb-4">
                  <div class="form-group col">
                    <label for="vorname">' . $value['name']. ': </label>
                      <input class="form-control mb-2" type="' . $value['type'] . '" name="' . $key . '" >
                    </div>
                  </div>';
            }
          ?>
          <input type="submit" class="btn btn-primary mb-2" value="senden">
      </form>
    </div>
  </main>
</body>
</html>