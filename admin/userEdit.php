<?php
    include "db/function.php";
    session_start();
    login_restricted();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>YROBS | Update user</title>
    <?php include('public/includes/head.php') ?>
</head>

<?php

include('../core/classes/DashbordUser.php');

$id = $_GET['id'];

$query = "SELECT * FROM users where id=$id";
$function = new DashbordUser();
$result = $function->edit($query);

if (isset($_POST['user_update'])) {
    $admin = $_POST['role'];
    $query_update = "UPDATE users SET role = '$admin' WHERE id = $id";
    $function->update($query_update);
    header('location:alluser.php');
}
?>

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
                    <div class="row justify-content-center my-5">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <strong>User Update</strong>
                                </div>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="row mb-3">
                                            <div class="col-lg-6">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control form-control-sm"
                                                    value="<?php echo $result->name ?>" readonly>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>User Name</label>
                                                <input type="text" name="username" class="form-control form-control-sm"
                                                    value="<?php echo $result->username ?>" readonly>
                                            </div>
                                        </div>
                                        <label>email</label>
                                        <input type="email" name="email" value="<?php echo $result->email ?>"
                                            class="form-control form-control-sm" readonly>



                                        <div class="my-3">
                                            <?php if ($result->role == 0) { ?>
                                            <label class='me-2'>Make Admin</label>
                                            <input type="checkbox" name="role" value="1">
                                            <?php } ?>

                                            <?php if ($result->role == 1) { ?>
                                            <label class='me-2'>Make User</label>
                                            <input <?php echo $result->role == 1 ? ' checked' : '' ?> name="role"
                                                type="checkbox" value="0">
                                            <?php } ?>
                                        </div>

                                        <button class="btn btn-info btn-sm mt-4" name="user_update" type="submit">
                                            Updated User
                                        </button>
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

</body>

</html>