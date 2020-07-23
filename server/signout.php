<?php
    session_start();

    if (isset($_SESSION['userName']) && isset($_SESSION['password'])){
        echo "Closing session...";
        session_destroy();
        unset($_SESSION['userName']);
        unset($_SESSION['password']);
        unset($_SESSION['user_id']);
        if (isset($_SESSION['admin'])) unset($_SESSION['admin']);

        exit();
    }

?>