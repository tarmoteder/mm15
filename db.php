<meta charset="UTF-16">

<?php

require 'functions.php';

home();

$connect = new mysqli('localhost','root','');

function connect($connect){
if (!$connect) {
    die('Ei saanud ühendust, viga: '.mysqli_connect_error());}
else {echo "Ühendus on olemas! <br>";}              
}

connect($connect);
// kõigi kirjete näitamine
function my_query($connect){
    $sql = "SELECT * FROM mm15.isik";
    $result = $connect -> query($sql);
    
    if ($result ->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "ID: ".$row["ID"].
             " Nimi: ".$row["Nimi"].
             " Perenimi: ".$row["Perenimi"].
             " Isikukood: ".$row["Isikukood"].
             " ja sisestusaeg: ".$row["Aeg"]."<br>";
             
    }} else {echo "Sul on tühi baas, tegele sellega";}    
}
// kirje lisamine
function my_insert($connect){
    $sql="INSERT INTO mm15.isik (Nimi,Perenimi,Isikukood) Values ('Juhan','Juurikas','36801015847')";
    $result = $connect -> query($sql);
}

function my_delete($connect){
    $sql = "DELETE FROM mm15.isik WHERE Perenimi='Juurikas'";
    $result = $connect -> query($sql);
}

// my_delete($connect);
// my_insert($connect);
// my_query($connect);

function show_button(){
    echo "<input type='submit' name='show' value='Näita kõiki kirjeid'>";
        if(isset($_POST['show'])){
            my_query($connect);
        } else {echo "ei õnnestunud";}
}

function insert_button(){
    echo "<input type='submit' name='insert' value='Sisesta kirje'>";
        if(isset($_POST['insert'])){
            my_query($connect);
        } else {echo "ei õnnestunud";}
}

function delete_button(){
    echo "<input type='submit' name='delete' value='Kustuta kirje'>";
        if(isset($_POST['delete'])){
            my_query($connect);
        } else {echo "ei õnnestunud";}
}

show_button($connect);
insert_button($connect);
delete_button($connect);
?>