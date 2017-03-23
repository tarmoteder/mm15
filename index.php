
<script src="script.js"></script>



<?php

require('functions.php');
require('components.php');



aeg();

menu();
echo '<script>tervitus()</script>';
echo "<div></div>";
$web = "http://www.tptlive.ee";
$web_name = "Kodukas";
$number1 = 12;
$number2 = 3.14;
$string = "Minu esimene string";

// erinevate echomiste näide
echo "<b>Tere programmeerimise imelisse maailma!</b><br>";

echo '<a href = "'.$web.'">'.$web_name.'</a><br>';

echo "Minu kooli $web_name asub aadressil $web<br>";

$sum = $number1 + $number2;

echo $sum."<br>";

// echome muutuja jutumärkidega
echo "$string<br>";
// ecome muutuja ülakomadega
echo '$string<br>';

GetIp();

?>