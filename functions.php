<?php


function aeg(){
date_default_timezone_set("Europe/Tallinn");
$time = date("H:i:s");
echo $time."<br>";
if ($time > "17:50"){
    echo "Aeg on koju minna";
} else {
    echo "Kell on:".$time." Peab veel kannatama";
}
}


function home(){
    echo '<meta charset = "utf-8">';
    $site = 'http://localhost/mm15/';
    echo '<li><a href="'.$site.'index.php">Tagasi koju</a></li>';
}

function GetIp(){
    
    $ip = $_SERVER['REMOTE_ADDR'];
    $time =date("H:i:s");
    $visitor = $ip." ".$time."\n";
    $file =fopen('visitor.txt',"a") or die ("Ei saanud faili kirjutada");
    fwrite($file, $visitor);
        echo "Teie aadress on: ".$ip;
    fclose($file);
}

?> 