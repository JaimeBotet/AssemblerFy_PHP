<?php
// Here the register page 
session_start();
$error="";
$pass = "";
if(isset($_GET['userErr'])){
    $error = 'Must be between 4 and 10 chars';
}
if(isset($_GET['passErr'])){
$pass = 'Password must contain at least one numeric digit, one uppercase and one lowercase letter';
}

if (isset($_SESSION['username']) && isset($_SESSION['password'])){
    header("Location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
    <div class="container py-3 ">
        <div class="row ">
            <div class="col-md-12">
                <h2 class="text-center mb-3">Welcome user</h2>
                <!-- nav -->
                <hr class="mb-4 ">

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <!-- form card register -->
                        <div class="card card-outline-secondary">
                            <div class="card-header">
                                <h3 class="mb-0 text-center text-dark">User login</h3>
                            </div>
                            <div class="card-body bg-dark ">
                                <form autocomplete="off" class="form " role="form" id="form" action="server/login_validation.php" method="POST">
                                    <div class="form-group">
                                        <label for="inputName">Username</label>
                                        <input class="form-control" id="username" name="username" placeholder="Full name" type="text">
                                        <small class="text-danger"><?php echo $error?></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3">Password</label>
                                        <input class="form-control" id="password" placeholder="Password" required="" name="password" type="password">
                                        <small class="text-danger"><?php echo $pass?></small>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success btn-lg float-right" type="submit" id="submit" name="submit">Login</button>
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



    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>