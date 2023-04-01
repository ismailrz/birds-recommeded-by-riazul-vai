<?php
    include "db/function.php";
    session_start();
    login_restricted();
?>
<?php
include('../core/classes/DashbordUser.php');
include "db/function.php";
    login_restricted();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('location:setting.php');
}

$function_object = new DashbordUser();

$post_query = "SELECT * FROM settings where id= $id";
$post = $function_object->edit($post_query);

if (isset($_POST['post_submit'])) {

    if ($_FILES['banner']) {
        if ($post->banner != null) {
            $path = $path = 'public/image/setting/banner/';
            $banner = $post->banner;
            $old_banner = $path . $banner;
            if ($old_banner != null) {
                unlink($old_banner);
            }
        }
        $logo = $_FILES['banner']['tmp_name'];
        $logo_name = 'banner' . '-' . rand(11, 99);
        $path = 'public/image/setting/banner/' . $logo_name . '.jpg';
        move_uploaded_file($logo, $path);
        $photo = $logo_name . '.jpg';
        $post_query = "UPDATE settings SET banner = '$photo'   WHERE id=$id";
        $function_object->update($post_query);
    }
    header('location:banner.php');
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
                        <li class="breadcrumb-item active">Update Banner</li>

                    </ol>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <h4>Update Banner</h4>
                                    <a href="setting.php">
                                        <button class="btn btn-success btn-sm"> BACK</button>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <form method="post" enctype="multipart/form-data">
                                        <div class='banner mt-4'>
                                            <label>Banner</label>
                                            <input type="file" id="banner" name="banner"
                                                class="form-control form-control-sm">
                                            <div class='mt-2'>
                                                <img class="banner-update"
                                                    src="public/image/setting/banner/<?php echo $post->banner ?>">
                                            </div>
                                            <div class="mt-3 banner" style="display:none">
                                                <img class="w-100 h-50" id="show_banner">
                                            </div>
                                        </div>
                                        <div class="d-grid mt-3">
                                            <button name="post_submit" type="submit"
                                                class="btn btn-outline-success">Update Post</button>
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