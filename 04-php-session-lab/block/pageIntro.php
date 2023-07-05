<?php

/*
    Type safe, we want here only strings. We want atleast a title, but if no headline or body is given to run the function.
    What is type safety? With type safety we make sure, that the parameter is in that expected format and don't break the function.
*/
function displayIntro(string $titleText, string $headlineText=null, string $bodyText=null){
    echo  "<h1 class='page-intro-title'>Code verstehen und erklären | $titleText</h1>";

    if(isset($headlineText)) {
        echo "<p class='page-intro-headline'>$headlineText</p>";
    }
    if(isset($headlineText)) {
        echo "<p class='page-intro-body'>$bodyText</p>";
    }
}

?>