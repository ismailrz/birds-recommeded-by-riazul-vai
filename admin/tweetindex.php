<?php
    include "db/function.php";
    session_start();
    login_restricted();
?>
<?php
    include "db/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>YROBS | Birds List</title>
    <?php include('public/includes/head.php') ?>
</head>

<?php

include('../core/classes/DashbordUser.php');

$query = "SELECT * FROM `tweets`";
$function = new DashbordUser();

$results = $function->allUser($query);
$comments = [];
foreach($results as $result){
    $query = "SELECT * FROM `comments` where post_id = $result->post_id";
    $function = new DashbordUser();
    $cmts = $function->allUser($query);
    $comments[$result->post_id] = $cmts;
}

if (isset($_POST['delete_tweet'])) {
    $id = $_POST['id'];

    $delete_query = "DELETE FROM tweets where post_id='$id'";
    $function->delete($delete_query);

    header('location:tweetindex.php');
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
                                    <strong>Tweet List</strong>
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped table-bordered table-hover" id="my_table">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>User Name</th>
                                                <th>Birds</th>
                                                <th>Comments</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $sl = 1; ?>
                                            
                                            <?php foreach ($results as $result) { ?>
                                            <tr>
                                                <td><?php echo $sl++  ?> </td>
                                                <td>User Name</td>
                                                <td><?php echo ucfirst($result->status)  ?> </td>
                                                <td><?php foreach ($comments[$result->post_id] as $comment) { ?>
                                                    <ul class="list-group">
                                                        <li class="list-group-item"><?php echo $comment->comment?></li>
                                                    </ul>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <form method="POST">
                                                        <input class="d-none" type="number" name="id"
                                                            value="<?php echo $result->post_id ?>">
                                                        <button type="submit" name="delete_tweet"
                                                            onclick="return confirm('Are you sure?')"
                                                            class="btn btn-danger btn-sm">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </form>
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