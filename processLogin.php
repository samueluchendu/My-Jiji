<?php

require_once('functions/init.php');

// Define variables and initialize with empty values
    $passwordErr = $emailErr = $msg = "";
    $email = $password = "";
    $UserInfo = array();
    $error = array();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate Email

    if (empty($_POST["email"])) {

        $error['emailErr'] = "Please enter your email address.";
        $_SESSION['emailErr'] =  $error['emailErr'];      
        // header('Location: MyLogin.php');

    } else {

        $email = filterEmail($_POST["email"]);

        if ($email == FALSE) {

            $error['emailErr'] = "Please enter a valid email address.";
            $_SESSION['emailErr'] =  $error['emailErr'];      
            // header('Location: MyLogin.php');
        } else {

            $userInfo['email'] = $email;
        }
    }



    // Validate Password

    if (empty($_POST["password"])) {

        $error['passwordErr'] = "Please enter a password";
        $_SESSION['passwordErr'] =   $error['passwordErr']; 
        // header('Location: MyLogin.php');

    } else {

        $password = filterPassword($_POST["password"]);

        if ($password == FALSE) {

            $error['passwordErr'] = "Password must not be less than 8 characters";
            $_SESSION['passwordErr'] =  $error['passwordErr'];  
            // header('Location: MyLogin.php');

        } else {

            $userInfo['password'] = $password;
        }
    }





    if (!empty($userInfo) && empty($error)) {

        loginUser($userInfo);
        // echo 'Success';

    } else {

        header('Location: MyLogin.php');
    }








}























?>