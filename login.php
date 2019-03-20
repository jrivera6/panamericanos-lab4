<?php
    include "db.php";

    echo "console.log('antes de la conexion')";
    $db = mysqli_connect($server,$user,$password,$database);

    $user = $_POST["txt_usuario"];
    $pass = $_POST["txt_contraseña"];

    $result = mysqli_query($db,"SELECT * FROM usuarios WHERE username = '$user'");

    echo "console.log('contraseña: '.$pass)";
    
    echo "result: ".$result;
    $row = mysqli_fetch_array($result);

    if($row["password"] == $pass){

        echo "Logeado correctamente";

    }else{

        echo "Error";

    }