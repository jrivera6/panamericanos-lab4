<?php
    include "db.php";
    $db = mysqli_connect($server,$user,$password,$database);

    $user = $_POST["txt_usuario"];
    $pass = $_POST["txt_contraseña"];
    $result = mysqli_query($db,"SELECT * FROM usuarios WHERE username = '$user'");   
    $row = mysqli_fetch_array($result);
    
    
    
    if($row["password"] == $pass){

        // echo "Logeado correctamente";
        header('Location: adminpage.php');

    }else{

        echo "Error";

    }

?>