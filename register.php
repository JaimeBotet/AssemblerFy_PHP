<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
</head>

<body class="bg-dark text-white">
 

    <div class="container py-3 ">
        <div class="row ">
            <div class="col-md-12">
                <h2 class="text-center mb-3">Register User</h2>
                <!-- nav -->
                <hr class="mb-4 ">

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <!-- form card register -->
                        <div class="card card-outline-secondary">
                            <div class="card-header">
                           
                                <h3 class="mb-0 text-center text-dark">Enter New User</h3> 
                                <small id="user_exist"></small>
                            </div>
                            <div class="card-body bg-dark ">
                                <form autocomplete="off" class="form " id="form" role="form"  method="POST">
                                    <div class="form-group">
                                        <label for="inputName">Username</label>
                                        <input class="form-control" id="username" name="username" placeholder="Full name" type="text" >
                                        <small id="user_error" class="error"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3">Email</label>
                                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" >
                                        <small id="email_error"  class="error"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3">Password</label>
                                        <input class="form-control" id="password" placeholder="Password"  name="password" type="password">
                                        <small id="password_error"  class="error"></small>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success btn-lg float-right" type="submit" id="submit" name="submit">Create User</button>
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


    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script>
        $("#submit").on("click",function(e) {
            e.preventDefault();
            var datastring = new FormData($('#form')[0]);
            datastring.username = $("#username").val()
            datastring.email = $("#email").val()
            datastring.password = $("#password").val()
            axios({
                method: "POST",
                url: "server/validate.php",
                data:{datastring},
                
              
            }).then(function(res){
                // console.log(res.data)
                if(res.data==="username error"){
                    $("#user_error").text("Must be between 4 and 10 chars").css({"color":"red"})
                }else if(res.data==="email error"){
                    $("#email_error").text("Invalid email format").css({"color":"red"})
                }else if(res.data==="password error"){
                    $("#password_error").text("Password must contain at least one numeric digit, one uppercase and one lowercase letter").css({"color":"red"})
                }else if(res.data === "user exist"){
                    $('#user_exist').text("User name already exist").css({"color":"blue"})
                }else{
                    location.replace('index.php')
                }
                
            })
        });
    </script>
   
</body>

</html>


<?php
// Here the admin page 

?>