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
 header('Location:../login.php?'.$error);
 // echo $error;
 }else{ 
 $file=file_get_contents("../data/userlogin.json");
 $json = json_decode($file);
 
 foreach($json as $user){
 if($user->userName == $username && $user->password == $password){
 $_SESSION['userName'] = $username;
 $_SESSION['user_id'] = $user->user_id;
 $_SESSION['password'] = $password;
 if($user->userCategory == "user"){
 $location = "Location: ../index.php?user_id=". $user->user_id;
 header($location);
 //To pass any user parameter we do it through the url:
 // header(`Location: ../index.php?user_id=${user_id}`);
 }elseif($user->userCategory == "admin") {
 header('Location: ../adminpanel.php');
 $_SESSION['admin']= "admin";
 }
 exit();
 }
 }
 echo "username or password invalid ";
 header("Location:login.php?error=".$error); 
 
 }
}
if(isset($_GET["checkLogin"])){
 if(isset($_SESSION['user_id'])){
 
 
 $file = file_get_contents("../data/userlogin.json");
 
 $obj = json_decode($file);
 
 foreach($obj as $el) {
 if($el->user_id == $_SESSION['user_id']) {
 
 $favs = $el->data;
 $found = 0;
 foreach($favs as $fav) {
   if($fav->track_id == $_GET["dataId"]) {
        $fav->reproductions += 1;
        $found += 1;
 }
 } 
 
 if ($found == 0) {
 
    $newFav = new stdClass();
    
    $newFav->track_id = $_GET["dataId"];
    $newFav->track_title = $_GET["dataTitle"];
    $newFav->track_category = $_GET["dataGenre"];
    $newFav->reproductions = 1;
    
    array_push($favs, $newFav);
    $el->data = $favs;
   }
  }
 }
 
 file_put_contents("../data/userlogin.json", json_encode($obj));
 
 echo "true";
 
 }else{
 echo "false";
 }
}
