<?php

if(isset($_GET["search"])) {
  $search = $_GET["search"];
  $entity = $_GET["type"];
  $limit = $_GET["limit"];

  if(strpos($search, " ") == true) {
    $search = str_replace(" ", "-", $search);
  }

  $url = "https://itunes.apple.com/search?term=$search&limit=$limit&explicit=no&entity=$entity&country=ES&media=music";
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $output = curl_exec($ch);
  echo $output;
  curl_close($ch);
}


