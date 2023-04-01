<?php 
    include 'db/db.php';
    include "db/function.php";
    session_start();
    login_restricted();

    if(isset($_POST['submit'])){
        
        $name  = addslashes($_POST['name']);
        $email = addslashes($_POST['email']);
        $pass  = md5($_POST['password']);

        if(empty($name)){
            echo "<script>alert('Admin Name must not be empty!')</script>";
        }elseif(empty($email)){
            echo "<script>alert('Admin E-mail must not be empty!')</script>";
        }elseif(empty($pass)){
            echo "<script>alert('Admin Password must not be empty!')</script>";
        }else{
            $sql = "INSERT INTO admin(name,email,password) VALUES('$name','$email','$pass')";
            $stmt= $db->query($sql);
            echo "<script>alert('New Admin Added Successfully!')</script>";
            redirect('allAdmin.php');
        }
    }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>YROBS | Admin List</title>
    <?php include('public/includes/head.php') ?>

</head>


<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <?php include('public/includes/nav.php') ?>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php include('public/includes/sideNav.php') ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                        <a href="allAdmin.php" class="btn btn-sm btn-info ml-3 mt-3">Back</a>
                            <div class="card mt-3">
                                
                                <div class="card-header">
                                    
                                    <strong>Add New Admin</strong>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <div class="form-group mt-3">
                                            <label for="">Admin Full Name</label>
                                            <input type="text" name="name" placeholder="Admin full name" class="form-control">
                                        </div>

                                        <div class="form-group mt-3">
                                            <label for="">Admin E-mail</label>
                                            <input type="email" name="email" placeholder="Admin E-mail" class="form-control">
                                        </div>

                                        <div class="form-group mt-3">
                                            <label for="">Admin Password</label>
                                            <input type="password" name="password" placeholder="Admin Password" class="form-control">
                                        </div>

                                        <div class="form-group mt-3">
                                            <input type="submit" name="submit" value="Add" class="btn btn-sm btn-success">
                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <?php include('public/includes/footer.php') ?>
            </footer>
        </div>
    </div>
    <?php include('public/includes/script.php') ?>
    <script>
    $(document).ready(function() {
        $('#my_table').DataTable();
    });
    </script>
</body>

</html>