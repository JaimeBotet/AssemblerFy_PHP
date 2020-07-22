<?php
    session_start();

    if (isset($_SESSION['username']) && isset($_SESSION['password'])){
        echo "Closing session...";
        session_destroy();
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        header("Location: index.php");
        exit();
    }

?>