<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require "./html/head.php";

if (!isset($_SESSION['admin'])){
  echo "Redirecting to index.php...";
  // session_destroy();

  header("Location: ./index.php");
  exit();
}
?>

<body>
    <main class="container-fluid py-2">
        <!-- Here comes a nav bar  -->
        <!-- The nav bar will contain the logo, Register Button, Log in button and Admin button  -->
        <!-- Then a search bar is displayed below -->
        <nav class="navbar  navbar-light bg-dark mx-auto rounded-sm d-flex justify-content-center row row-col-3 ">

            <!-- logo -->
            <div class="col d-flex justify-content-center">
                <img class=" assembler_logo m-1"
                    src="https://media-exp1.licdn.com/dms/image/C560BAQHR2BMbsLm7zQ/company-logo_200_200/0?e=2159024400&v=beta&t=6CkD1A_wUzSd4CM7zn6mjo9AybK5aReonvFkuOI0WMo">
                <a class="navbar-brand text-light page_title p-0 m-1" href="index.php">Assemblerfy</a>
            </div>
            <!-- empty space -->
            <div class="col-7 text-white col d-flex justify-content-center">ADMIN</div>
            <!-- btn aside -->
            <div class="col">
                <ul class="navbar form-inline d-flex justify-content-around custom-dot mb-0">
                    <li class=" col-5 ">
                        <button class="btn btn-primary w-100 custom-min" id="logout_btn">Log Out</button>
                    </li>
            
                </ul>
            </div>
        </nav>

        <!-- Table with users in main container  -->

        <div id="users_container" class="d-flex justify-content-around mt-5">

            <table class="table table-dark w-50" id="table">
              <thead class="bg-dark">
                <tr>
                  <th scope="col">User Id</th>
                  <th scope="col">User Name</th>
                  <th scope="col">Details</th>
                </tr>
              </thead>
              <tbody id="table_body">         
                
              </tbody>
            </table>
            
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title"></h4>
              </div>
              <div class="modal-body">
                <table class="table table-hover shadow-lg p-3 mb-5 rounded table-borderless">
                  <thead class="table-info bg-dark text-white">
                    <tr>
                      <th scope="col">Track Id</th>
                      <th scope="col">Track Name</th>
                      <th scope="col">Category</th>
                      <th scope="col">Reproductions</th>
                    </tr>
                  </thead>
                  <tbody class="table-info bg-light" id="history">         
                    
                  </tbody>
              </table>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            
          </div>
        </div>

        

    </main>
    <!-- And below of the page, the footer  -->
    <?php require "html/footer.php"; ?>


    <script>
      $("#logout_btn").click( ()=>{
        $.ajax("server/signout.php")
        .done(function(data){
          location.href = "./index.php";
        })
      })
    </script>
</body>

</html>