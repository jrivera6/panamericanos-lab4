<?php
    header('Content-type: text/html; charset=utf-8');
    include "db.php";

    $db = mysqli_connect($server,$user,$password,$database);

    $nom_deporte  = $_POST["txt_newdeporte"];
    $desc = $_POST["txt_newdescripcion"];
    $hist = $_POST["txt_newhistoria"];


    $insert = "INSERT INTO deportes (nombre, descripcion, historia)
    VALUES ('$nom_deporte', '$desc', '$hist')";


    if(mysqli_query($db,$insert)) {

        header("Refresh:0, url=admincreate.html");
    } else {
        
    }   


?>