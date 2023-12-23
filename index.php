<?php
$sites = [
    "https://www.saphael.fr",
    "https://www.lesjardinsdestdenis.fr",
    "https://www.google.com"
];

foreach($sites as $site){
    $handle = @fopen($site, "r");
    if($handle){
        echo("$site ok \n");
    }else{
        echo("$site down \n");
    }
}

?>