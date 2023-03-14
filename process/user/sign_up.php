<?php
  require("../config/connection.php"); 
if(isset($_POST['submit'])){
    $name = isset($_POST['name']) ? trim(stripslashes($_POST['name'])) : '';
    $email = isset($_POST['email']) ? trim(stripslashes($_POST['email'])) : '' ;
    $pass = isset($_POST['password']) ? trim(stripslashes($_POST['password'])) : '';

    if($email == ''){
        echo 'Email field Cannot be empty';
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'Please Enter a valid Email';
    }
    else if($name == ''){
        echo 'name field Cannot be empty';
    }else if($pass== ''){
        echo 'Password field Cannot be empty';
    }else{
        $query =     "INSERT INTO `signup`( `name`, `email`, `password`) VALUES ('$name','$email','$pass')";

        $conn = mysqli_query($connect, $query);
    
        if ($conn == TRUE){
            echo 'Registration Successful';
        }
        else{
            echo $conn->error();
        }
    }

   
}
?>