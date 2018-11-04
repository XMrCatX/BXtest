<?php

if(isset($_POST['submit'])){

    include_once 'cbd.php';

    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
    $ckpwd = mysqli_real_escape_string($conn,$_POST['ckpwd']);


    if(empty($email) || empty($pwd) || empty($ckpwd) ){
        header("Location: ../log&reg.php?register=empty");
        exit();
    } else {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../log&reg.php?register=email");
        exit();
        } else {
            $sql = "SELECT * FROM users WHERE ueser_email = '$email';";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);

            if($resultcheck > 0){
                header("Location: ../log&reg.php?register=exist");
                exit();
            } else {
                $hashPwd = password_hash($pwd, PASSWORD_DEFAULT);

                $sql = "INSERT INTO users(user_email,user_pwd) VALUES ($email,$hashPwd);";
                mysqli_query($conn,$sql);
                header("Location: ../hub.php?register=succes");

            }
        }
    }
}else{
    header("Location: ../log&reg.php");
    exit();
}
