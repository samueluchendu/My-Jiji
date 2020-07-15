<?php 

include('functions/init.php');


// Define variables and initialize with empty values
$firstnameErr = $lastnameErr = $passwordErr = $emailErr = $phoneNumberErr = $msg = "";
$firstName = $lastName = $email = $password = $phoneNumber = "";
$UserInfo = array(); $error = array();
 


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate First name
    
    if(empty($_POST["firstName"])){

        
        $error['firstnameErr'] = "Please enter your first name.";
        $_SESSION['firstnameErr'] = $error['firstnameErr'];        
        
        header('Location: register.php');
        
       

    } else{

           $firstName = filterName($_POST["firstName"]);

    if($firstName == FALSE){

            
            $error['firstnameErr'] = "Please enter a valid name.";
            $_SESSION['firstnameErr'] =  $error['firstnameErr'];          

           header('Location: register.php');
    }
    else{
            $userInfo['firstName'] = $firstName;
        }

     }


      // Validate Last name

    if(empty($_POST["lastName"])){

        
        $error['lastnameErr'] = "Please enter your last name.";
        $_SESSION['lastnameErr'] = $error['lastnameErr'];         
        

    } else{

           $lastName = filterName($_POST["lastName"]);

        if($lastName == FALSE){

            
            $error['lastnameErr'] = "Please enter a valid name.";
            $_SESSION['lastnameErr'] = $error['lastnameErr'];        
            

        } else {
            $userInfo['lastName'] = $lastName;
        }

    }

    
    // // Validate Email address
    if(empty($_POST["email"])){

      
        $error['emailErr'] = "Please enter your email address.";
         $_SESSION['emailErr'] =  $error['emailErr'];       
       

    } else{

        $email = filterEmail($_POST["email"]);

        if($email == FALSE){

            
             $error['emailErr'] = "Please enter a valid email address.";
             $_SESSION['emailErr'] = $error['emailErr'];    
          

        } else {

            $userInfo['email'] = $email;
        }
    }



       

    // // Validate Password
    if(empty($_POST["password"])){

        
        $error['passwordErr'] = "Please enter a password";
         $_SESSION['passwordErr'] =  $error['passwordErr'];  
        

    } else{

          $password = filterPassword($_POST["password"]);

        if($password == FALSE){

            $error['passwordErr'] = "Password must not be less than 8 characters";
            $_SESSION['passwordErr'] = $error['passwordErr'];    
           
        } else {
            $userInfo['password'] = $password;
        }
    }



    
    // Validate Phone Number
    if(empty($_POST["phoneNumber"])){

        
        $error['PhoneNumberErr'] = "Please enter your Phone Number.";
        $_SESSION['phoneNumberErr'] = $error['PhoneNumberErr'];    
        

    } else{

           $phoneNumber = filterPhoneNumber($_POST["phoneNumber"]);

        if($phoneNumber == FALSE){

            
            $error['phoneNumberErr'] = "Please enter a valid Phone Number.";
            $_SESSION['phoneNumberErr'] = $error['phoneNumberErr'];      
             
            
        } else {
            $userInfo['phoneNumber'] = $phoneNumber;
        }
    }

   


       if(!empty($userInfo) && empty($error)){
                     
            registerUser($userInfo);
       }
       else{
           
           header('Location: register.php');
       }











}



?>





