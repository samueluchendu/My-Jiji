<?php

require_once('init.php');

   //REGISTER USER FUNCTION
function registerUser($userInfo){

    
       $conn = Db_connection::connection();

    $sql = "INSERT INTO user (firstName, lastName, email, phoneNumber, password)
    VALUES ('".$userInfo['firstName']."', '".$userInfo['lastName']. "', '" .$userInfo['email']. "', '" .$userInfo['phoneNumber']. "', '" .$userInfo['password']. "')";
    $result = mysqli_query($conn, $sql);

    if ($result) {

        $msg = "Registration successfull, you can now Login!";
        $_SESSION['msg'] = $msg;
        header('Location: MyLogin.php');

    } else {

        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


    mysqli_close($conn);
}




function loginUser($userInfo){
    $conn = Db_connection::connection();

    $sql =  "SELECT * FROM user where email='" . $userInfo['email'] . "' and password='" . $userInfo['password'] . "'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {

        $_SESSION['loginErr'] = "Incorrect Email or Password";
        header('Location: MyLogin.php');

    }else {

        $_SESSION["loggedIn"] = $userInfo['email'];

        if (isset($_SESSION["loggedIn"])) {
            
        //    $_SESSION['msg'] = "Login Successful, Welcome!";
           header('Location: myDashboard.php');
        }
        else{
            header('Location: MyLogin.php');
        }
    }




}




function getAllCategory(){
    $conn = Db_connection::connection();

    $sql = "SELECT * FROM category";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        
        return $result;
    }else{

        echo 'No record found';
    }

    

}




?>