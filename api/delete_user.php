<?php
session_start();
require "newbieConfig.php";

if(isset($_SESSION['userid'])) {
    $sql = "DELETE FROM `Fotografer` WHERE `id` = :id";
    $stm_delete = $pdo->prepare($sql);
    $stm_delete->execute(['id'=>$_SESSION['userid']]);
 echo json_encode(TRUE);
 session_destroy();   
}else{
    echo json_encode(FALSE);
}
    /*$_SESSION['userid'];
    $STH = $pdo->prepare("SELECT * FROM `Fotografer` WHERE `id`=$_SESSION['userid']");
    $STH->execute(array('$username'=>$_GET['delete_id']));
    $imgRow=$STH->fetch(PDO::FETCH_ASSOC);
    unlink("user_images/".$imgRow['userid']);
    $ST_delete = $pdo->prepare("DELETE FROM users WHERE userid ='$username'");
    $stmt_delete->bindParam('$username',$_GET['delete_id']);
    $stmt_delete->execute();
    header("Location: index.php");
    // delete the user AND redirect the user back (if not using ajax)
} elseif (/* check if action=view ) {*/

    // ...

?>
