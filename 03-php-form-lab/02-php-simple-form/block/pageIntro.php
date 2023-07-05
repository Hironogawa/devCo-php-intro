<?php
function displayIntro($titleText, $headlineText, $bodyText){
    echo  "
        <h1>Code verstehen und erklären | $titleText</h1>
        <p class='headline-text'>$headlineText</p>
        <p class='body-text'>$bodyText</p>
    ";
}

?>