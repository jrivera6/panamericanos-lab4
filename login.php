<?php
    include "db.php";

    $db = mysqli_connect($server,$user,$password,$database);

    $user = $_POST["txt_usuarios"];
    $pass = $_POST["txt_contraseña"];

    $result =  mysqli_query("SELECT * FROM usuarios WHERE username = '$user'");

    $row = mysqli_fetch_array($result);

    if($row["password"] == $pass){

        echo "Logeado correctamente";

    }else{

        echo "Error";

    }