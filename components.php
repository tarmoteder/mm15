<?php


function menu(){

    
    
$menu_arr = array("index", "massiiv", "components","hint"); 
$menu_arr[] = "file";

for ($i = 0; $i < count($menu_arr); $i++)   {
	echo '<li><a href="'.$menu_arr[$i].'.php">'.$menu_arr[$i].'</a></li><br>';
}
}
?>

