

<?php
include "./server/tst.php";

$name_error = "";
$email_error = "";
$password_error = "";

if (isset($_POST['submit'])) {
    $saveTojson = "./data/userlogin.json";
    $json = file_get_contents($saveTojson);
    $string = json_decode($json);

    for ($i = 0; $i < count($string); $i++) {
        $username = $string[$i]->userName == $_POST["username"];
        $password = $string[$i]->password == $_POST["password"];
        $email = $string[$i]->email == $_POST["email"];

        if ($username && $password && $email) {
            echo 'user exist';
             break;
        }else {
            $obj = new stdClass();
            $obj->id = count($string) + 1;
            $obj->userName = $_POST["username"];
            $obj->email = $_POST["email"];
            $obj->password = $_POST["password"];
            array_push($string, $obj);
            $json_string = json_encode($string, JSON_PRETTY_PRINT);
            file_put_contents($saveTojson, $json_string);
            echo $json_string;
            break;
        }
        
    }
}

// arrpush
// array_push($string, $obj);

// save json
// $json_string = json_encode($string, JSON_PRETTY_PRINT);
// file_put_contents($saveTojson, $json_string);
// echo $json_string;






// Here the admin login page 
// $file =file_get_contents("userlogin.json");
// $arr = json_decode($file);
//     foreach($arr as $user){
//        $userName = $user->username;
//        $password = $user->password;
//        $email = $user->email;

//      if(isset($_POST['submit'])){
//        if($_POST["username"]== $userName && $_POST["password"] == $password && $_POST["email"]==$email){
//            echo 'good job';
//        }else{
//             echo "try again";
//        }
//     }
//     }




?>