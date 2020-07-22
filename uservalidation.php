<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; 
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
                header('Location:admin.php');
                exit();
            }
            
        }
    }
    echo "username or password invalid ";
    header("Location:login.php");


}


/*
"user_id": 2,
"userName": "pepe",
"email": "g@gmail.com",
"password": "1234",
"userCategory": "user",
*/
