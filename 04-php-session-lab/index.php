<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="../../assets/css/style.css">

  <title>PHP Intro | Forms in PHP</title>
</head>
<body>
  <?php include 'block/navigation.php' ?>
  <main class="container col-10 mt-5">
    <?php

      $title = "Welcome to our PHP Form Building LAB";
      $headline = "This site is build with PHP, we use it to parse the HTML input values to our backend and process for new conent.";
      $body = "We learn how to pass the content to our server and display it in the browser, later we maybe use the session storage to pressist the data.";

      require "block/pageIntro.php";

      displayIntro($title, $headline, $body);

    ?>
    <form action="userInfo.php" method="post">
    
    <div class="row mb-4">
      <div class="form-group col">
        <label for="vorname">Vorname: </label>
        <input class="form-control mb-2" type="text" name="vorname">
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