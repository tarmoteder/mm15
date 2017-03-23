<script src='script.js'></script>

<?php

require 'functions.php';

aeg();
home();
echo "<div></div>";

function koopia($site){
    
    $url = curl_init();
    curl_setopt($url, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($url, CURLOPT_URL, $site);
    $data = curl_exec($url);
    return $data;
}

echo koopia('www.ee');

?>