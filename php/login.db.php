<?php

session_start();

if(isset($_POST['sublogin'])){
    include 'cbd.php';

    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

    if(empty($email) || empty($pwd)){
        header("Location: ../Register_Login.php?login=error");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE user_email ='$email'";
        $result = mysqli_query($conn,$sql);
        $resultcheck = mysqli_num_rows($result);

        if($resultcheck < 1){
            header("Location: ../Register_Login.php?login=error");
            exit();
        } else {
            if($row = mysqli_fetch_assoc($result)){
                $hashedpwdch = password_verify($pwd,$row['user_pwd']);
                if($hashedpwdch == false){
                    header("Location: ../Register_Login?login=error");
                    exit();
                } elseif($hashedpwdch == true){
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_email'] = $row['user_email'];
                    header("Location: ../index.php?login=success");
                    exit();
                }
            }
        }
    }

} else {
    header("Location: ../Register_Login.php?login=error");
    exit();
}
