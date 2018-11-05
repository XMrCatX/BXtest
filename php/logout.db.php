<?php
    if(isset($_POST['sublogout'])){
        session_start();
        session_unset();
        session_destroy();
        header("Location: ../Register_Login.php");
        exit();
    }
?>
