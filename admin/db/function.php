<?php


    function redirect($location){

		header('Location:'.$location);
		exit;
	}
    function userLogin($email,$pasword){
        global $db;
        $sql = "SELECT * FROM admin WHERE email=:email AND password=:pasword AND status='1' ";
        $stmt= $db->prepare($sql);
        $stmt->bindValue(':email',$email);
        $stmt->bindValue(':pasword',md5($pasword));
        $stmt->execute();
        $result = $stmt->rowcount();
        if ($result==1) {
            return $user_data = $stmt->fetch();
        }else{
            return null;
        }
    }

    function login_restricted(){
		if (isset($_SESSION['id'])) {
			return true;
		}else{
			redirect('login.php');
		}
	}




?>