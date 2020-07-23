<?php
  session_start();
  $userName = $_SESSION['userName'];

  $users = json_decode(file_get_contents("../data/userlogin.json"));

  $favouritesIds = [];
  

  foreach($users as $user) {

    if ($user->userName == $userName) {

      $favouriteTracks = $user->data;

      foreach($favouriteTracks as $track) {
        $trackId = $track->track_id;
        array_push($favouritesIds, $trackId);
      }
    }
  }

  $query = implode(",", $favouritesIds);
 

  $url = "https://itunes.apple.com/lookup?id=$query";
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $output = curl_exec($ch);
  echo $output;
  curl_close($ch);



