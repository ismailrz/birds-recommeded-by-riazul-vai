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

    if ($_FILES['logo']) {
        if ($post->logo != null) {
            $path = $path = 'public/image/setting/logo/';
            $logo = $post->logo;
            $old_logo = $path . $logo;
            if ($old_logo != null) {
                if (file_exists($old_logo)) {
                    unlink($old_logo);
                }
            }
        }
        $logo = $_FILES['logo']['tmp_name'];
        $logo_name = 'logo' . '-' . rand(11, 99);
        $path = 'public/image/setting/logo/' . $logo_name . '.jpg';
        move_uploaded_file($logo, $path);
        $photo = $logo_name . '.jpg';
        $post_query = "UPDATE settings SET logo = '$photo'   WHERE id=$id";
        $function_object->update($post_query);
    }

    $post_query = "UPDATE settings SET name = '$title', email= '$description', phone = '$status'  WHERE id=$id";
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
                        <li class="breadcrumb-item active">update logo</li>
                    </ol>
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <h4>update logo</h4>
                                    <a href="setting.php"> <button class="btn btn-success btn-sm"> Back</button></a>
                                </div>
                                <div class="card-body">
                                    <form method="post" enctype="multipart/form-data">

                                        <label class="w-100 mt-3">
                                            Logo
                                            <input id="post_image" type="file" class="form-control" name="logo">
                                        </label>

                                        <div id="post_image_preview" style="display: none">
                                            <img id="image_preview" class="img-thumbnail" />
                                        </div>

                                        <div class="image_preview w-50">
                                            <img class="banner-update"
                                                src="public/image/setting/logo/<?php echo $post->logo ?>"
                                                class="img-thumbnail" />
                                        </div>




                                        <div class="d-grid mt-3">
                                            <button name="post_submit" type="submit"
                                                class="btn btn-outline-success">Update Logo</button>
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
    $('#logo').on('change', function(e) {
        let photo = e.target.files[0]
        photo = URL.createObjectURL(photo)
        $('#show_logo').attr('src', photo)
        $('.logo').show()
    })

    $('#banner').on('change', function(e) {
        let photo = e.target.files[0]
        photo = URL.createObjectURL(photo)
        $('#show_banner').attr('src', photo)
        $('.banner').show()
    })
    </script>
</body>

</html>