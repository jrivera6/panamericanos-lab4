<?php

include_once "db.php";
$db = mysqli_connect($server,$user,$password,$database);

    if(isset($_GET["id"])){
        $id=(int) $_GET['id'];
        $delete= "DELETE FROM deportes WHERE id='$id'";
        
        if(mysqli_query($db, $delete)){
            header('Location: adminpage.php');
        }
    
        header('Location: adminpage.php');
    }else{
        header('Location: adminpage.php');
    }


?>