<?php

include "db.php";
$db = mysqli_connect($server,$user,$password,$database);

    if(isset($_GET["id"])){
        $id=(int) $_GET['id'];
        $delete= $db->prepare('DELETE FROM deportes WHERE id=:id');
        $delete->execute(array(
            'id' => $id
        ));
        header('Location: adminpage.php');
    }else{
        header('Location: adminpage.php');
    }


?>