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
    <title>YROBS | Tweet List</title>
    <?php include('public/includes/head.php') ?>
</head>

<?php

include('../core/classes/DashbordUser.php');

$query = "SELECT * FROM `polices`";
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
                                    <h4><strong>Policy</strong> </h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Policy</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $sl = 1; ?>
                                            <?php foreach ($results as $result) { ?>
                                            <tr>
                                                <td><?php echo $sl++  ?> </td>
                                                <td><?php echo substr($result->policy, 0, 300)  ?>... </td>

                                                <td> <a href="policyUpdate.php?id=<?php echo $result->id ?>">
                                                        <button title="update policy"
                                                            class="btn btn-warning btn-sm me-1"> <i
                                                                class="fa-solid fa-pen-to-square    "></i></button>
                                                    </a></td>
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