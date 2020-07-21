
<!DOCTYPE html>
<html lang="en">
<?php
require "./html/head.php";
?>

<body>
    <main class="container-fluid pt-2 pb-2">
    <!-- Here comes a nav bar  -->
    <!-- The nav bar will contain the logo, Register Button, Log in button and Admin button  -->
    <!-- Then a search bar is displayed below -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark rounded-sm">
            <div class="d-flex justify-content-between w-100">
                <div class="col-4">
                    <img class="assembler_logo mb-3" src="https://media-exp1.licdn.com/dms/image/C560BAQHR2BMbsLm7zQ/company-logo_200_200/0?e=2159024400&v=beta&t=6CkD1A_wUzSd4CM7zn6mjo9AybK5aReonvFkuOI0WMo">
                    <a class="navbar-brand text-light page_title" href="#">Assemblerfy</a>
                </div>
                <div class="col-4">
                    <form class="form-inline my-2">
                        <input class="form-control mr-sm-2 w-75" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-secondary btn-outline-dark my-2 my-sm-0 w-15" type="submit">Search</button>
                    </form>
                </div>
                <div class="col-4">
                    <ul class="navbar-nav my-2 d-flex justify-content-around">
                        <li class="nav-item w-25">
                            <button class="btn btn-primary my-auto w-100">Login</button>
                        </li>
                        <li class="nav-item w-25">
                            <button class="btn btn-primary w-100">Register</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Then a main container where we are showing random videos  -->
        <!-- This container will contain the result of the search -> without refreshing the page?  -->
        <div id="card_container" class="results_container mt-2 rounded-sm d-flex p-3 flex-wrap justify-content-around">
            <div class="card m-2 p-2">
                <img src="./assets/jpg.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card m-2 p-2">
                <img src="./assets/jpg.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card m-2 p-2">
                <img src="./assets/jpg.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card m-2 p-2">
                <img src="./assets/jpg.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card m-2 p-2">
                <img src="./assets/jpg.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card m-2 p-2">
                <img src="./assets/jpg.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card m-2 p-2">
                <img src="./assets/jpg.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card m-2 p-2">
                <img src="./assets/jpg.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card m-2 p-2">
                <img src="./assets/jpg.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card m-2 p-2">
                <img src="./assets/jpg.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card m-2 p-2">
                <img src="./assets/jpg.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card m-2 p-2">
                <img src="./assets/jpg.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

    </main>
    <!-- And below of the page, the footer  -->
    <?php require "html/footer.php"; ?>
</body>

</html>