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
    <title>YROBS | Settings</title>
    <?php include('public/includes/head.php') ?>
</head>

<?php

include('../core/classes/DashbordUser.php');

$query = "SELECT * FROM `settings`";
$function = new DashbordUser();
$results = $function->allUser($query);


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
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Settings</strong>
                                </div>
                                <div class="card-body">
                                    <table class="table align-middle table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Logo</th>
                                                <th>Banner</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $sl = 1; ?>
                                            <?php foreach ($results as $result) { ?>
                                            <tr>
                                                <td><?php echo $sl++  ?> </td>
                                                <td><?php echo ucfirst($result->name)  ?> </td>
                                                <td><?php echo ucfirst($result->email)  ?> </td>
                                                <td><?php echo ucfirst($result->phone)  ?> </td>
                                                <td>
                                                    <img style="width:100px; height:100px"
                                                        src="public/image/setting/logo/<?php echo $result->logo ?>"
                                                        class="img-thumbnail" />
                                                </td>
                                                <td>
                                                    <img style="width:100px; height:100px"
                                                        src="public/image/setting/banner/<?php echo $result->banner ?>">
                                                </td>
                                                <td>
                                                    <a href="logo.php?id=<?php echo $result->id ?>">
                                                        <button title="update logo" class="btn btn-warning btn-sm me-1">
                                                            <i class="fa-solid fa-pen-to-square    "></i> logo</button>
                                                    </a>

                                                    <a href="banner.php?id=<?php echo $result->id ?>">
                                                        <button title="update banner"
                                                            class="btn btn-success btn-sm me-1">
                                                            <i class="fa-solid fa-pen-to-square    "></i> banner
                                                        </button>
                                                    </a>

                                                    <a href="settingUpdate.php?id=<?php echo $result->id ?>">
                                                        <button title="update setting"
                                                            class="btn btn-warning btn-sm me-1"> <i
                                                                class="fa-solid fa-gears"></i></button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
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