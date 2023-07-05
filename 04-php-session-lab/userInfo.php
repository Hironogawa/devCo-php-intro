<?php

  $requiredFields = array('vorname', 'nachname');

  function checkIfSet(array $fieldsToCheck) {
    
    foreach($fieldsToCheck as $value) {
      if(empty($_POST[$value])) {
        return header('Location: index.php');
      } 
    }

    session_start();
    foreach($fieldsToCheck as $value) {
      $_SESSION[$value] = $_POST[$value];
    }
    return header('Location: welcome.php');
  }

  checkIfSet($requiredFields);


?>