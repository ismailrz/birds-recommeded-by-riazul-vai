<?php 

    // password reset systeam
    $servername = "localhost";
    $username = "root";
    $password = "";

    $db = new PDO("mysql:host=$servername;dbname=twitter", $username, $password);
    include 'core/init.php' ;
    
    $about = "SELECT * FROM about_us";
    $stmt   = $db->query($about);
    $row = $stmt->fetch();
   
?>

<html>
	<head>
		<title>YROBS</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"/>
        <!-- <link rel="stylesheet" href="assets/css/style-complete.css"/> -->
        <link rel="stylesheet" href="assets/css/index_style.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/all.min.css">

		<link rel="shortcut icon" type="image/png" href="assets/images/twitter.svg"> 
	</head>
<body>
<main class="twt-main">
            <div class="container">
                <div class="row">
                    <div style="margin-top:20px" class="col-12">
                        <p><?php echo $row['description'] ?></p>
                    </div>
                </div>
            </div>
            <footer>
                <ul>
                <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="privacy.php">Privacy Policy</a></li>
                    <li><a href="cookie.php">Cookies</a></li>
                    <li><a href="#">Ads info</a></li>
                    <li><a href="#">Brand</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li><a href="#">Developers</a></li>
                    <li><a href="#">Settings</a></li>
                    <li>© 2023 - YROBS </li>
                    <li style="color:#1DA1F2;"><b>- Developed By YROBS -</b></li>
                </ul>
            </footer>
        </main>
        
        <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/mine.js"></script>
</body>
</html>
