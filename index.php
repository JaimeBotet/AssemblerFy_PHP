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
    <section>
        <!-- Carousel -->
        <div id="carouselExampleInterval" class="carousel slide pt-4" data-ride="carousel">
            <div class="carousel-inner pt-5">
                <div class="carousel-item active" data-interval="10000">
                    <img src="https://source.unsplash.com/7XoKI25ufn0/1800x800" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="https://source.unsplash.com/mKGleoby-d0/1800x800" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/NM3t3S8pDbQ/1800x800" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- Carousel End -->

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
        <div class="row">

            <!-- Products list -->
            <?php
            foreach ($data as $page) {
            ?>
                <div class="col-sm-6 col-md-4 col-lg-4 pb-4">
                    <a id="a-card" href="<?php echo "product.php?id=$page->id"; ?>">
                    <div class="card card-cascade border-0 shadow p-3 mb-5 bg-white rounded png-base64" id="card_products">
                        <div class="view view-cascade overlay">
                            <img class="card-img-top imgProduct" src="<?php echo $page->image  ?>" alt="Card image cap"></div>
                        <div class="card-body card-body-cascade text-center">
                            <h5 class="font-weight-bold card-title pt-5"><?php echo $page->product_title ?></h5>
                            <p class="card-text card-description"><?php echo $page->description  ?></p>
                            <h6 class="font-weight-bold my-2 price-position"><?php echo $page-> price ?>€</h6>
                        </div>
                    </div>
                    </a>
                </div>

            <?php
            }
            ?>
        </div>
    </main>
    <?php require "html/footer.php"; ?>
</body>

</html>