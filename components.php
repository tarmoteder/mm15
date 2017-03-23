<?php


function menu(){

$site = 'http://localhost/mm15/';
    
$menu_arr = array("index", "massiiv", "components","hint","koopia","meetod", "db"); 
$menu_arr[] = "file";

for ($i = 0; $i < count($menu_arr); $i++)   {
	echo '<li><a href="'.$site.$menu_arr[$i].'.php">'.$menu_arr[$i].'</a></li><br>';
}
}
?>

