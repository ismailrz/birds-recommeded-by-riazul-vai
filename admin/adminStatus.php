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
       header("Location: allAdmin.php");
    }

    $sql = $sql = "SELECT * FROM `admin` WHERE id='$id' ";
    $stmt= $db->query($sql);
    $row = $stmt->fetch();
    $status = $row['status'];

    if ($status == 1) {
        $update = "UPDATE `admin` SET status='0' WHERE id='$id' ";
        $query  = $db->query($update);
        "<script>alert('Admin is Disable successfully!')</script>";
        header("Location: allAdmin.php");
    }else{
        $update = "UPDATE `admin` SET status='1' WHERE id='$id' ";
        $query  = $db->query($update);
        "<script>alert('User is Enable successfully!')</script>";
        header("Location: allAdmin.php");
    }






 ?>