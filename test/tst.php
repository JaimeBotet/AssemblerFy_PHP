<?php 

/**************************************************
 * ---- Test for array inside array of a obj ---- *
 **************************************************/
// echo "<pre>";
// var_dump($stringJson);
// $stringJson[0]->userID; // return userID of the first object or object with index 0
// $stringJson[0]->data[0]->trackId; // return trackId of the first data of the first object

/**************************************************
 * ----- Example for new object with session----- * 
 **************************************************/ 

// $newObj = new stdClass();
// $newObj->userID = count($stringJson)+1; // add id always the lasta index of array plus one 
// $newObj->userName = $_SESSION["user-name"];
// $newObj->lastName = $_SESSION["last-name"];
// $newObj->data = new array()

// path of json 
// $url = "../data/tst.json";


function getObj($url) : arrayObject
{
  // get the content json
  $jsonfile = file_get_contents($url);
  // parse to string
  $stringJson = json_decode($jsonfile);

  return $stringJson;
}


function searchByUserName(ArrayObject $obj ,string $user) : object
{
  //iterate arrayobjects
  for ($i =0; $i < count($obj); $i++)
  {
    //search user of all object arrays
    if($obj[$i]->userName == $user)
    {
      return $obj;
    };
  };
  echo "user not found";
}

function addNewObj(arrayObject $mainObj, object $newObj ) : arrayObject
{
  // push the new obj, new obj is too new user
  array_push($mainObj,$newObj);
  // return the new obj with the new data 
  return $mainObj;
}

function saveJson(ArrayObject $mainObj, string $url) : void
{
  // convert to json 
  $json = json_encode($mainObj);
  // overwrite file.json
  file_put_contents($url,$json);
}
  