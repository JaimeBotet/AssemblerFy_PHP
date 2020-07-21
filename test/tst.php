<?php 

$url = "./data.json";

$jsonfile = file_get_contents($url);

$stringJson = json_decode($jsonfile);

echo "<pre>";
// var_dump($stringJson);
// $stringJson[0]->userID = 12334;
// $stringJson[0]->data[0]->trackId = 1;
$newObj = new stdClass();

$newObj->userID = count($stringJson) + 1;
$newObj->userName = "Pau";
$newObj->lastName = "idk :V";

for ($i =0; $i < count($stringJson); $i++){
    
    var_dump($stringJson[$i]->userID = 000+$i);

};

array_push($stringJson,$newObj);

$json = json_encode($stringJson);
file_put_contents($url,$json);


?>