<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(isset($_POST['submit'])){
    $error ="";

    $username = $_POST['username'];
    $password = $_POST['password']; 
    if (!preg_match("/\w{4,10}/", $username)) {
        $error .= 'userErr';
    }
    if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/", $password)) {
        $error .= '&passErr';
    }
    if(strlen($error) > 0){
        header('Location:login.php?'.$error);
        // echo $error;
    }else{ 
    $file=file_get_contents("data/userlogin.json");
    $json = json_decode($file);

    foreach($json as $user){
        if($user->userName == $username && $user->password == $password){
            $_SESSION[$username];
            $_SESSION[$user->user_id];
            $_SESSION[$user->userCategory];
            if($user->userCategory == "user"){
            
                header("Location:index.php");
                exit();
            }elseif($user->userCategory == "admin") {
                header('Location:adminpanel.php');
                exit();
            }
            
        }
    }
    echo "username or password invalid ";
    header("Location:login.php?error=".$error); 

 }
}
