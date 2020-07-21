<?php
include "./JSON_handler.php";

if (isset($_POST['submit'])) {
    $saveTojson = "../data/userlogin.json";
    $json = file_get_contents($saveTojson);
    $string = json_decode($json);

    for ($i = 0; $i < count($string); $i++) {
        if ($string[$i]->userName == $_POST["username"] && $string[$i]->email == $_POST["email"] && $string[$i]->password == $_POST["password"]) {
            echo 'user exist';
            break;
        } else {
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

