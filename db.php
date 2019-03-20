<?php
    $server="";
    $user= "";
    $password= "";
    $db= "";

    try{
        $con = new PDO('mysql:host=$server;dbname=$db', $user, $password);  
    }catch(PDOException $e){
        echo "Erro".$e->getMessage();
    }


?>