<?php

if(isset($_POST['subRegister'])){

    include_once 'cbd.php';

    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

    if(empty($email) || empty($pwd) ){
        header("Location: ../log&reg.php?register=empty");
        exit();
    } else {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../log&reg.php?register=email");
        exit();
        } else {
            $sql = "SELECT * FROM users WHERE user_email = '$email'";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);

            if($resultcheck > 0){
                header("Location: ../log&reg.php?register=exist");
                exit();
            } else {
                $hashPwd = password_hash($pwd, PASSWORD_DEFAULT);

                $sql = "INSERT INTO users(user_email,user_pwd) VALUES ('$email','$hashPwd');";
                if(mysqli_query($conn,$sql)){
                    header("Location: ../log&reg.php?register=success");
                    exit();
                }else{
                    header("Location: ../log&reg.php?register=insert error");
                    exit();
                }
            }
        }
    }
}else{
    header("Location: ../log&reg.php");
    exit();
}
?>
