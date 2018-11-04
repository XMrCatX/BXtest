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
            <form action="php/logout.db.php" method="post">
                <button name="sublogout" type="submit">Logout</button>
            </form>
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
