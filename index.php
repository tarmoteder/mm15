


<?php

require('functions.php');
require('components.php');

echo '<script>document.write("Mina olen JavaScript!<br>");</script>';

aeg();

menu();

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