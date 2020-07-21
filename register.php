<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<?php
require "./html/head.php";
?>

<body class="bg-dark text-white">
    <div class="container py-3 ">
        <div class="row ">
            <div class="col-md-12" >
                <h2 class="text-center mb-3">Register User</h2>
                <!-- nav -->
                <hr class="mb-4 ">

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <!-- form card register -->
                        <div class="card card-outline-secondary">
                            <div class="card-header">
                                <h3 class="mb-0 text-center text-dark">Enter New User</h3>
                            </div>
                            <div class="card-body bg-dark ">
                                <form autocomplete="off" class="form " role="form" action="adminLogin.php" method="POST">
                                    <div class="form-group">
                                        <label for="inputName">Username</label>
                                        <input class="form-control" id="username" name="username" placeholder="Full name" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3">Email</label>
                                        <input class="form-control" id="email" name="email" placeholder="Email" required="" type="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3">Password</label>
                                        <input class="form-control" id="password" placeholder="Password" required="" name="password" type="password">
                                        <small class="form-text text-muted" id="passwordHelpBlock">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</small>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success btn-lg float-right" type="submit" name="submit">Create User</button>
                                        <!-- redirect to index.php  -->
                                    </div>
                                </form>
                            </div>
                        </div><!-- /form card register -->
                    </div>
                </div>
            </div>
            <!--/col-->
        </div>
        <!--/row-->
    </div>
    <!--/container-->

</body>

</html>

