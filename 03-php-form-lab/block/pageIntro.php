<?php
function displayIntro($titleText, $headlineText, $bodyText){
    echo  "
        <h1 class='page-intro-title'>Code verstehen und erklären | $titleText</h1>
        <p class='page-intro-headline'>$headlineText</p>
        <p class='page-intro-body'>$bodyText</p>
    ";
}

?>