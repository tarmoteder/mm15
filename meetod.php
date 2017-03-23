<?php

require('functions.php');

home();

var_dump($_GET);
echo "<br>";
var_dump($_POST);

?>


<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h2>GET meetod</h2>
<form action="" method="get">
    <ul>
    <li>
    <label for="nimi">Nimi</label>
    <input type="text" name="nimi">
    </li>
    <li>
    <label for="perenimi">Perenimi</label>
    <input type="text" name="perenimi">
    </li>
    <li>
    <input type="submit" name="submit" value="Vajuta">
    </li>
    </ul>
</form>
<h2>POST meetod</h2>
<form action="" method="post">
    <ul>
    <li>
    <label for="nimi">Nimi</label>
    <input type="text" name="nimi">
    </li>
    <li>
    <label for="perenimi">Perenimi</label>
    <input type="text" name="perenimi">
    </li>
    <li>
    <input type="submit" name="submit" value="Vajuta">
    </li>
    </ul>
</form>
    
    
</body>
</html>
