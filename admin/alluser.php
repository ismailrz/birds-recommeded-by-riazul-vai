<?php 
    include 'db/db.php';
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
                            <div class="card mt-3">
                                <div class="card-header">
                                    <strong>User List</strong>
                                </div>
                                <div class="card-body">
                                    <table id="datatablesSimple" class="table table-hover table-striped table-border">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Name</th>
                                                <th>UserName</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $sl = 0;
                                                $sql = "SELECT * FROM `users` ORDER BY id DESC";
                                                $stmt = $db->query($sql);
                                                while ($row = $stmt->fetch()) {
                                                    $sl++;

                                            ?>
                                            <tr>
                                                <td><?php echo $sl ?></td>
                                                <td><?php echo $row['name'] ?></td>
                                                <td><?php echo $row['username'] ?></td>
                                                <td><?php echo $row['email'] ?></td>

                                                <td>
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-0">
                                                            <?php if ($row['status'] == 1) { ?>
                                                            <span class="badge text-bg-info">Active</span>
                                                            <?php } else { ?>
                                                            <span class="badge text-bg-danger">Block</span>
                                                            <?php } ?>
                                                        </p>
                                                    </div>
                                                </td>
                                                <td>
                                                        <?php if($row['status']==1){ ?>

                                                        <a href="userStatus.php?statusid=<?php echo $row['id']; ?>">
                                                            <button class="btn btn-danger">Block Now</button>
                                                        </a>

                                                    <?php }else{ ?>

                                                        <a href="userStatus.php?statusid=<?php echo $row['id']; ?>">
                                                            <button class="btn btn-success">Unblock Now</button>
                                                        </a>

                                                 <?php   } ?>
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