<?php
    include "db/function.php";
    session_start();
    login_restricted();
?>
<?php
include('../core/classes/DashbordUser.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('location:setting.php');
}

$function_object = new DashbordUser();

$post_query = "SELECT * FROM settings where id= $id";
$post = $function_object->edit($post_query);

if (isset($_POST['post_submit'])) {
    $title  = $_POST['name'];
    $description  = $_POST['email'];
    $status  = $_POST['phone'];
    $post_query = "UPDATE settings SET name = '$title', email= '$description', phone = '$status' WHERE id=$id";
    $function_object->update($post_query);
    header('location:setting.php');
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
    <title>YROBS | Settings</title>
    <?php include('public/includes/head.php') ?>
</head>

<body class="sb-nav-fixed">


    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <?php include('public/includes/nav.php') ?>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <?php include('public/includes/sideNav.php') ?>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">update setting</li>
                    </ol>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <h4>update setting</h4>
                                    <a href="setting.php"><button class="btn btn-sm btn-success">Back</button></a>
                                </div>
                                <div class="card-body">
                                    <form method="post">
                                        <label class="w-100 ">
                                            Name
                                            <input value="<?php echo $post->name ?>" type="text" name="name"
                                                class="form-control" />
                                        </label>
                                        <label class="w-100 mt-4">
                                            Email
                                            <input value="<?php echo $post->email ?>" type="email" name="email"
                                                class="form-control" />
                                        </label>

                                        <label class="w-100 mt-4">
                                            Phone
                                            <input value="<?php echo $post->phone ?>" type="number" name="phone"
                                                class="form-control" />
                                        </label>

                                        <div class="d-grid mt-3">
                                            <button name="post_submit" type="submit"
                                                class="btn btn-outline-success">Update setting</button>
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

</body>

</html>