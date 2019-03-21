<?php

include "db.php";

$db = mysqli_connect($server,$user,$password,$database);

$nom_deporte  = $_POST["txt_newdeporte"];
$desc = $_POST["txt_newdescripcion"];
$hist = $_POST["txt_newhistoria"];


$insert = "UPDATE deportes SET nombre = '$txt_newdeporte', descripcion = '$txt_newdescripcion,
 historia ='$txt_newhistoria' WHERE id='$id'";


if(mysqli_query($db,$insert)) {

    header("Refresh:0, url=admincreate.html");
} else {
    
}   

?>