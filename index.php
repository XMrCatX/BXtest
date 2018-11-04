<?php
    session_start();

    if(isset($_SESSION['u_id'])){
?>

<!DOCTYPE html>

<html>
    <head>

    </head>
    <body>
        <header>

        </header>
        <div>

        </div>
        <footer>

        </footer>
    </body>
</html>

<?php
    }else{
        header("Location: ../log&reg.php");
        exit();
    }
?>
