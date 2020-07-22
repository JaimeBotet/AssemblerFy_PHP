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
                            placeholder="Search" aria-label="Search" autofocus>
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
                        <button class="btn btn-primary w-100 custom-min" id="login_btn">Login</button>
                    </li>
                    <li class=" col-5">
                        <button class="btn btn-primary w-100 custom-min" id="register_btn">Register</button>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Then a main container where we are showing random videos  -->
        <!-- This container will contain the result of the search -> without refreshing the page?  -->
        <div class="loading">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                style="margin: auto; background: rgba(255, 255, 255, 0); display: block;" width="200px" height="200px"
                viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                <g transform="rotate(0 50 50)">
                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fbfbfb">
                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                            begin="-0.9166666666666666s" repeatCount="indefinite"></animate>
                    </rect>
                </g>
                <g transform="rotate(30 50 50)">
                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fbfbfb">
                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                            begin="-0.8333333333333334s" repeatCount="indefinite"></animate>
                    </rect>
                </g>
                <g transform="rotate(60 50 50)">
                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fbfbfb">
                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s"
                            repeatCount="indefinite"></animate>
                    </rect>
                </g>
                <g transform="rotate(90 50 50)">
                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fbfbfb">
                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                            begin="-0.6666666666666666s" repeatCount="indefinite"></animate>
                    </rect>
                </g>
                <g transform="rotate(120 50 50)">
                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fbfbfb">
                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                            begin="-0.5833333333333334s" repeatCount="indefinite"></animate>
                    </rect>
                </g>
                <g transform="rotate(150 50 50)">
                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fbfbfb">
                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s"
                            repeatCount="indefinite"></animate>
                    </rect>
                </g>
                <g transform="rotate(180 50 50)">
                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fbfbfb">
                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                            begin="-0.4166666666666667s" repeatCount="indefinite"></animate>
                    </rect>
                </g>
                <g transform="rotate(210 50 50)">
                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fbfbfb">
                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                            begin="-0.3333333333333333s" repeatCount="indefinite"></animate>
                    </rect>
                </g>
                <g transform="rotate(240 50 50)">
                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fbfbfb">
                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s"
                            repeatCount="indefinite"></animate>
                    </rect>
                </g>
                <g transform="rotate(270 50 50)">
                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fbfbfb">
                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                            begin="-0.16666666666666666s" repeatCount="indefinite"></animate>
                    </rect>
                </g>
                <g transform="rotate(300 50 50)">
                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fbfbfb">
                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s"
                            begin="-0.08333333333333333s" repeatCount="indefinite"></animate>
                    </rect>
                </g>
                <g transform="rotate(330 50 50)">
                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fbfbfb">
                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s"
                            repeatCount="indefinite"></animate>
                    </rect>
                </g>
            </svg>
        </div>
        <div id="card_container" class="results_container mt-2 rounded-sm d-flex p-3 flex-wrap justify-content-around">


            <!-- demo card -->


        </div>

    </main>
    <!-- And below of the page, the footer  -->


    <?php require "html/footer.php"; ?>

</body>

</html>