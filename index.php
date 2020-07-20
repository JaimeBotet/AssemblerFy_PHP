<?php
/*
if ($_GET["color"] == "red") {
}*/
?>
<!DOCTYPE html>
<html lang="en">
<?php
require "./html/head.php";
?>

<body>
    <?php require "html/header.php"; ?>
    <div class="bg"></div>
    <!-- Here comes a nav bar  -->
    <!-- The nav bar will contain the logo, Register Button, Log in button and Admin button  -->

    <!-- Then a search bar is displayed below -->

    <!-- Then a main container where we are showing random videos  -->
    <!-- This container will contain the result of the search -> without refreshing the page?  -->

    <!-- And below of the page, the footer  -->

    <?php
    //import data from JSON file and convert to php array.
    $jsonData =  file_get_contents('./data/catalog.json'); //import json file
    $data = json_decode($jsonData); //decode json into a php array

    /* ---------------------------------------------------
    USER HOME-PAGE
----------------------------------------------------- */

    //Takes all products on JSON and print theme on Home-Screen.
    ?>
    <main class="container-fluid pt-5 pb-5">
        
    </main>
    <?php require "html/footer.php"; ?>
</body>

</html>