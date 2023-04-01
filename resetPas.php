<?php 
include 'core/init.php' ;
    // password reset systeam
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    
    $conn = new PDO("mysql:host=$servername;dbname=twitter", $username, $password);
    if (isset($_POST['reset'])) {
      $email = $_POST['email'];
      $token = $_POST['token'];
      $pass  = $_POST['pass'];
      $confm = $_POST['confm'];

      if (empty($email)) {
        echo '<script type="text/javascript">alert("Email is empty");</script>';
      }elseif($email != $_SESSION['mails']){
        echo '<script type="text/javascript">alert("Email is invalid, pleae give a correct email");</script>';
      }elseif(empty($token)){
        echo '<script type="text/javascript">alert("Token is empty");</script>';
      }elseif($token != $_SESSION['token']){
        echo '<script type="text/javascript">alert("Token invalid");</script>';
      }elseif(empty($pass)){
        echo '<script type="text/javascript">alert("New Password is empty");</script>';
      }elseif(empty($confm)){
        echo '<script type="text/javascript">alert("Your Confirm Password is empty");</script>';
      }elseif($pass != $confm){
        echo '<script type="text/javascript">alert("Your Password & Confirm Password did not match");</script>';
      }else{
        // Mail to send passdord
        $to       = $_SESSION['mails'];
        $subject  = 'Your new password';
        $body     = 'Your Password is: '.$pass;
        $sendMail = mail($to, $subject, $body);
        // Update Database Field
        $query = "UPDATE  users SET password='md5($pass)' WHERE email='$to'";
        $run = $conn->query($query);
        if ($run==true) {
          echo "<script>alert('Pass was send to your E-Mail')</script>";
          echo "<script>window.open('index.php','_self')</script>";
        }else{
          echo "<script>alert('Wrong email, Please use your exsisting email')</script>";
          echo "<script>window.open('index.php','_self')</script>";
        }

        
      }

    }
    
      
    // End Password systeam reset
    
    if (isset($_SESSION['user_id'])) {
      header('location: home.php');
    }
   
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
            <section class="twt-login">
                    <div class="slow-login">
                        <img class="login-bird" src="<?php echo BASE_URL . "/assets/images/twitter-logo.png"; ?>" alt="bird">
                        <h4>Reset Password</h4>
                        <form action="" method="post">

                          <div class="form-group">
                            <label for="">E-Mail</label>
                            <input type="email" placeholder="Type your user email" class="form-control" name="email">
                          </div>

                          <div class="form-group">
                            <label for="">Token</label>
                            <input type="text" placeholder="Type your user token" class="form-control" name="token">
                          </div>

                          <div class="form-group">
                            <label for="">New Password</label>
                            <input type="password" placeholder="Type your new Password" class="form-control" name="pass">
                          </div>

                          <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" placeholder="Type your Confirm Password" class="form-control" name="confm">
                          </div>

                          <div class="form-group">
                            <input type="submit" name="reset" value="Save" class="btn btn-info">
                          </div>

                        </form>
                    </div>
            </section>
            <section class="twt-features">
                <div class="features-div">
                    <img class="twt-icon" src='https://image.ibb.co/bzvrkp/search_icon.png'>
                    <p>Follow your interests.</p>
                    <img class="twt-icon" src="https://image.ibb.co/mZPTWU/heart_icon.png">
                    <p>Hear what people are talking about.</p>
                    <img class="twt-icon" src="https://image.ibb.co/kw2Ad9/conv_icon.png">
                    <p>Join the conversation.</p>
                </div>
            </section>
            <footer>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Cookies</a></li>
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
