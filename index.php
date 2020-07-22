<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require "./html/head.php";
?>

<body>
    <main class="container-fluid pt-2 pb-2">
        <!-- Here comes a nav bar  -->
        <!-- The nav bar will contain the logo, Register Button, Log in button and Admin button  -->
        <!-- Then a search bar is displayed below -->
        <nav class="navbar  navbar-light bg-dark w-100 rounded-sm d-flex justify-content-center row row-col-3 ">

            <!-- logo -->
            <div class="col d-flex justify-content-center">
                <img class=" assembler_logo m-1"
                    src="https://media-exp1.licdn.com/dms/image/C560BAQHR2BMbsLm7zQ/company-logo_200_200/0?e=2159024400&v=beta&t=6CkD1A_wUzSd4CM7zn6mjo9AybK5aReonvFkuOI0WMo">
                <a class="navbar-brand text-light page_title p-0 m-1" href="index.php">Assemblerfy</a>
            </div>
            <!-- input side -->
            <div class="row row-col-3   col-7">

                <div class="col">
                    <div class="form-group mb-0">
                        <select class="form-control h-100" id="type">
                            <option id="song">Song</option>
                            <option id="album">Album</option>
                            <option id="musicVideo">Music Video</option>
                        </select>
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="form-group mb-0">
                        <input class="form-control w-100 h-100" type="search" id="searchbar" name="search"
                            placeholder="Search" aria-label="Search">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group mb-0">
                        <select class="form-control h-100" id="limit">
                            <option value="25">25 results</option>
                            <option value="50">50 results</option>
                            <option value="100">100 results</option>
                        </select>
                    </div>
                </div>
                

            </div>
            <!-- btn aside -->

            <div class="col">
                <ul class="navbar form-inline d-flex justify-content-around custom-dot mb-0">
                    <li class=" col-5 ">
                        <button class="btn btn-primary w-100 custom-min">Login</button>
                    </li>
                    <li class=" col-5">
                        <button class="btn btn-primary w-100 custom-min">Register</button>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- Then a main container where we are showing random videos  -->
        <!-- This container will contain the result of the search -> without refreshing the page?  -->
        <div class="loading"></div>
        <div id="card_container" class="results_container mt-2 rounded-sm d-flex p-3 flex-wrap justify-content-around">


            <!-- demo card -->
            

        </div>

    </main>
    <!-- And below of the page, the footer  -->


    <?php require "html/footer.php"; ?>

</body>

</html>