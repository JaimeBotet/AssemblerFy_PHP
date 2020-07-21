<?php

if(isset($_GET["search"])) {

  $search = $_GET["search"];

  $url = "https://itunes.apple.com/search?term=$search&limit=10&explicit=no&entity=song&country=ES&media=music";

  $ch = curl_init($url);

  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $output = curl_exec($ch);

  echo $output;

  curl_close($ch);
  
}

