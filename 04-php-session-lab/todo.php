<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="../../assets/css/style.css">

  <title>PHP Intro | TODO-List</title>
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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    
    <?php
        session_start();
        //session_destroy();
        function setEntry($entryKey) {
            $_SESSION[$entryKey] = $entryKey;
        }

        function deleteEntry($entryKey) {
            unset($_SESSION[$entryKey]);
        }

        if(isset($_SESSION) && count($_SESSION) > 0) {
            if (!empty($_POST['new'])){
                $_SESSION[$_POST['new']] = $_POST['new'];
            }
            echo '<div class="form-group col">
                    <label for="new">Open a new TODO Task</label>
                    <input class="form-control mb-2" type="text" name="new">
                    <input type="submit" class="btn btn-success mb-2" value="+">
                </div>';
            foreach($_SESSION as $value) {
                if(!empty($_POST[$value])) {
                    $_SESSION[$value] = $_POST[$value];
                }

                echo '<div class="form-group col">
                        <label for="'. $value .'">' . $value . '</label>
                        <input class="form-control mb-2" type="text" name="' . $value . '" value="' . $_SESSION[$value]. '">
                        <input type="submit" class="btn btn-success mb-2" value="+">
                    </div>';
            }
        } else {
            echo '<div class="form-group col">
                <label for="new">Open a new TODO Task</label>
                <input class="form-control mb-2" type="text" name="new">
                <input type="submit" class="btn btn-success mb-2" value="+">
            </div>';
            if (!empty($_POST['new'])){
                $_SESSION[$_POST['new']] = $_POST['new'];
                    
                echo '<div class="form-group col">
                        <label for="'. $_POST['new']. '">'. $_POST['new']. '</label>
                        <input class="form-control mb-2" type="text" name="'. $_POST['new']. '">
                        <input type="submit" class="btn btn-success mb-2" value="+">
                    </div>';
            }

        }
        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';
    ?>


    </form>
  </main>
</body>
</html>