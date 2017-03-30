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
        echo "<br> ID: ".$row["ID"].
             " Nimi: ".$row["Nimi"].
             " Perenimi: ".$row["Perenimi"].
             " Isikukood: ".$row["Isikukood"].
             " ja sisestusaeg: ".$row["Aeg"];
             
    }} else {echo "Sul on tühi baas, tegele sellega";}    
}

// konkreetse kirje näitamine
function search_by($connect){
    $sql = "SELECT * FROM mm15.isik WHERE " .$_GET['PARAM']."='".$_GET['ID']."'";
    $result = $connect -> query($sql);
    
    if ($result ->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<br> ID: ".$row["ID"].
             " Nimi: ".$row["Nimi"].
             " Perenimi: ".$row["Perenimi"].
             " Isikukood: ".$row["Isikukood"].
             " ja sisestusaeg: ".$row["Aeg"];
             
    }} else {echo "Sellist kirjet ei ole";} 
    
}
// kirje lisamine
function my_insert($connect){
    if ($_POST['Perenimi']==null){$_POST['Perenimi']="Puudub";}
    if ($_POST['Isikukood']==null){$_POST['Isikukood']="Puudub";}                                     
    $sql="INSERT INTO mm15.isik (Nimi,Perenimi,Isikukood) VALUES ('".$_POST['Nimi']."','".
              $_POST['Perenimi']."','".
              $_POST['Isikukood']."')";
    
//    $sql="INSERT INTO mm15.isik (Nimi,Perenimi,Isikukood) Values ('Juhan','Juurikas','36801015847')";
    
    $result = $connect -> query($sql);
}

function my_delete($connect){
    $sql = "DELETE FROM mm15.isik WHERE Perenimi='Juurikas'";
    $result = $connect -> query($sql);
}

// my_delete($connect);
// my_insert($connect);
// my_query($connect);

function show_button($connect){
    echo "<input type='submit' name='show' value='Näita kõiki kirjeid'>";
        if(isset($_POST['show'])){
            my_query($connect);
        }
}

function search_by_button($connect){
echo "<input type='submit' name='search' value='Näita kirjeid parameetri järgi'>";
        if(isset($_GET['search'])){
            search_by($connect);
        }    
    
}

function insert_button($connect){
    echo "<input type='submit' name='insert' value='Sisesta kirje'>";
        
        if(isset($_POST['insert'])){
            if ($_POST['Nimi']!=null){
            my_insert($connect);} else {echo "Nadikael! Nime väli peab olema täidetud";}}
}

function delete_button($connect){
    echo "<input type='submit' name='delete' value='Kustuta kirje'>";
        if(isset($_POST['delete'])){
            my_delete($connect);
        }
}

// show_button($connect);
// insert_button($connect);
// delete_button($connect);
?>

<!doctype html>
<html>
<body>
    <h2>POST meetod</h2>
    <form action='' method='post'>
    <ul>
    <li><?php show_button($connect); ?></li>
    <li>
    <label for="Nimi: ">Nimi</label>
    <input type="text" name="Nimi">
    <label for="Perenimi: ">Perenimi</label>
    <input type="text" name="Perenimi">
    <label for="Isikukood: ">Isikukood</label>
    <input type="text" name="Isikukood">
    </li>
    <li><?php insert_button($connect); ?></li>
    <li><?php delete_button($connect); ?></li>
        
    <li></li>
        
    </ul>
    
    </form >
    <h2>GET meetod</h2>
    
    <form action="" method="get">
    <ul>
        <li>
        <label for="PARAM">Sisesta veeru nimi</label>
        <input type="text" name="PARAM" required>    
        <label for="ID">Sisesta otsitav</label>
        <input type="text" name="ID" >
        </li>
        <li><?php search_by_button($connect); ?></li>    
    </ul>
    
    </form>
    
    
</body>
</html>
