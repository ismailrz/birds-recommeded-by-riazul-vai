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

$id = $_GET['id'];


$select_setting = "SELECT * FROM about_us where id =$id";
$function = new DashbordUser();

$result = $function->edit($select_setting);

if (isset($_POST['post_submit'])) {
    $name = $_POST['description'];
    $about_query = "UPDATE  about_us SET description='$name'";


    $function->update($about_query);
    header('location:about.php');
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
                                <div class="card-header d-flex justify-content-between">
                                    <h4> <strong>Update About</strong> </h4>
                                    <a href="about.php"><button class="btn btn-sm btn-success">Back</button></a>
                                </div>
                                <div class="card-body">
                                    <form method="post">

                                        <label>About Description</label>
                                        <textarea id="description" type="text" name="description"
                                            class="form-control form-control-sm" required><?php echo $result->description ?>
</textarea>
                                        <button name="post_submit" class="btn btn-success btn-sm mt-4"> submit</button>

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
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });
    </script>
</body>

</html>