<?php
    include "db/db.php";
    include "db/function.php";
    session_start();
    if (isset($_SESSION['id'])) {
		redirect('index.php');
	}
    if (isset($_POST['login'])) {
        $email     = $_POST['userEmail'];
        $pasword   = $_POST['password'];
    
        if (empty($email)) {
            echo "<script>alert('Admin Email must not be empty')</script>";
        }elseif(empty($pasword)){
            echo "<script>alert('Admin Password must not be empty')</script>";
        }else{
            $log = userLogin($email,$pasword);
            if ($log) {
                $_SESSION['id']    =$log['id'];
                $_SESSION['name']  =$log['name'];
                $_SESSION['email'] =$log['email'];
                redirect('index.php');
            }else{
                echo "<script>alert('Invalid Admin Information')</script>";
            }
        }
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.csss">
    <link rel="stylesheet" href="public/admin/css/login.css">
    <title>Admin | Login</title>

</head>
<body>

<div class="wrapper">
        <div class="logo">
            <img src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-bird-symbols-png-logo-0.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            Yrobs
        </div>
        <form class="p-3 mt-3" action="" method="post">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="userEmail" id="userName" placeholder="User E-mail">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button class="btn mt-3" name="login">Login</button>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>