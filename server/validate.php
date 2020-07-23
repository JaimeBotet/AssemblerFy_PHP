<?php

include "./JSON_handler.php";
$tmp = json_decode(file_get_contents("php://input"), true);
$userName = $tmp['datastring']['username'];
$password = $tmp['datastring']['password'];
$email = $tmp['datastring']['email'];
// echo json_encode($tmp['datastring']);

$saveTojson = "../data/userlogin.json";
$json = file_get_contents($saveTojson);
$string = json_decode($json);

// username validation
if (!preg_match("/\w{4,10}/", $userName)) {
    echo 'username error';
    die();
}
if (!preg_match("/\w+@\w+\.+[a-z]/", $email)) {
    echo 'email error';
    die();
}
if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/", $password)) {
    echo 'password error';
    die();
}


for ($i = 0; $i < count($string); $i++) {
    if ($string[$i]->userName == $userName && $string[$i]->email == $email) {
        echo 'user exist';
        die();
    }
}

$obj = new stdClass();
$obj->user_id = count($string) + 1;
$obj->userName = $userName;
$obj->email = $email;
$obj->password = $password;
$obj->userCategory = "user";
$obj->data = array();
array_push($string, $obj);
$json_string = json_encode($string, JSON_PRETTY_PRINT);
file_put_contents($saveTojson, $json_string);
echo $json_string;
