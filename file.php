<?php

require 'functions.php';


home();

$file = fopen("tekst.txt","a") or die("Ei saanud hakkama");
$txt = "Esimene tekst\n";
fwrite($file, $txt);
$txt = "Teine tekst\n";
fwrite($file, $txt);
$txt = "Kolmas tekst\n";
fwrite($file, $txt);
$txt = "Neljas tekst\n";
fwrite($file, $txt);
fclose($file);

$file = fopen("tekst.txt","r") or die("Ei saanud hakkama");
echo fread($file, filesize("tekst.txt"));
fclose($file);

?>