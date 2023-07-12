
<?php

    $mainMenuLinks = array(
        array("filename" => "index.php", "name" => "Form"),
        array("filename" => "about.php", "name" => "About"),
        array("filename" => "result.php", "name" => "Result"),
    );
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light px-3">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <?php
            foreach($mainMenuLinks as $value) {
                echo '  <li class="nav-item">
                            <a class="nav-link" href="' . $value["filename"] . '">' . $value['name'] . '</a>
                        </li>';
            }
        ?>
        </ul>
    </div>  
</nav>
</nav>