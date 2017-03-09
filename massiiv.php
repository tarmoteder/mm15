<?php

require 'functions.php';
echo '<meta charset = "utf-8">';

home();

$daytime = "õhtu";

// näidismassiiv

$massiiv = array($daytime,11, "Hoplaa",3.14,"Oleme klassis nr A210");

// massiivide erinev kujutamine


    $menu_arr[0] = "index";
    $menu_arr[1] = "massiiv";

    $menu_arr1 = array("index","massiiv");

foreach($menu_arr as $item){
    echo $item."<br>";
}
foreach($menu_arr1 as $item){
    echo $item."<br>";
}

// massiivi struktuur
print_r($massiiv);

//massiivi esimese elemendi
echo $massiiv[0]."<br>";

// massiivi sisu listina
foreach($massiiv as $element){
    echo $element."<br>";
}

// massiivi sisu listina, for tsükkel
for ($i = 0; $i < count($massiiv); $i++){
	echo $massiiv[$i]."<br>";
}

// sidusmassiiv ehk assotsiatiivne massiiv
$var_assoc = array("esimene" => "Rene", "teine" => "Artur", "kolmas" => "Paul", "neljas" => 1, "viies" => "1");

print_r($var_assoc);

var_dump($var_assoc);
// massiivi võtmed
print_r(array_keys($var_assoc));
echo "<br>";
// massiivi väärtused
print_r(array_values($var_assoc));

//mitmemõõteline massiiv
echo "<br>";
$esta = "eesti keel";
$mata = "matemaatika";
$fyss = "füüsika";

$hinded = array(
    "Peeter" => array($esta => 4, $mata => 3, $fyss => 4),
    "Juhan" => array($esta => 4, $mata => 5, $fyss => 4),
    "Mari" => array($esta => 5, $mata => 4, $fyss => 5),
    "Jüri" => array($esta => 3, $mata => 3, $fyss => 2));

// print_r($hinded);
var_dump($hinded);

echo "Peetri $esta hinne on: ".$hinded["Peeter"][$esta]."<br>";

/*
 NII EI SAA SIDUSMASSIIVI VÄLJA TRÜKKIDA
foreach($hinded as $item){
    echo $item."<br>";
*/

$hinded_id = array_keys($hinded);
for ($i = 0; $i < count($hinded); $i++){
    echo $hinded_id[$i]."<br>";
    foreach($hinded[$hinded_id[$i]] as $aine => $hinne) {
       echo $aine." : " .$hinne;
        echo "<br>";
    }
}

?>