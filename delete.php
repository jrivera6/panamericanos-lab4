<?php

    if(isset($_GET["id"])){
        $id=(int) $_GET['id'];
        $delete= $con->prepare('DELETE FROM deportes WHERE id=:id');
        $delete->execute(array(
            'id' => $id
        ));
        header('Location: adminpage.php');
    }else{
        header('Location: adminpage.php');
    }


?>