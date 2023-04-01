<?php
    include "db/function.php";
    session_start();
    login_restricted();
?>
<?php 
    include "db/db.php";

    if (isset($_GET['statusid']) && $_GET['statusid'] != null) {

        $id = $_GET['statusid'];
    }else{
       header("Location: alluser.php");
    }

    $sql = $sql = "SELECT * FROM `users` WHERE id='$id' ";
    $stmt= $db->query($sql);
    $row = $stmt->fetch();
    $status = $row['status'];

    if ($status == 1) {
        $update = "UPDATE `users` SET status='0' WHERE id='$id' ";
        $query  = $db->query($update);
        echo "<script>alert('User is blocket successfully!')</script>";
        header("Location: alluser.php");
    }else{
        $update = "UPDATE `users` SET status='1' WHERE id='$id' ";
        $query  = $db->query($update);
       echo "<script>alert('User is unblock successfully!')</script>";
        header("Location: alluser.php");
    }






 ?>