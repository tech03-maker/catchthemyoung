<?php
  require("../config/connection.php"); 
  session_start();
if(isset($_POST['submit'])){
    $email = isset($_POST['email']) ? trim(stripslashes($_POST['email'])) : '' ;
    $pass = isset($_POST['password']) ? trim(stripslashes($_POST['password'])) : '';

    if($email == ''){
        echo 'Email field Cannot be empty';
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'Please Enter a valid Email';
    }
    else if($pass== ''){
        echo 'Password field Cannot be empty';
    }else{
        $query =     "SELECT `email`, `password` FROM `signup` WHERE  `email` = '$email' and `password` = '$pass' LIMIT 1";

        $conn = mysqli_query($connect, $query);
        $result = mysqli_affected_rows($connect);

        if($result == 1){
            
            $_SESSION['user'] = mysqli_fetch_assoc($conn); 
            header("location: ../../pages/dashboard.php");
        }else{
            echo "Invalid Username and Password";
        }
    
       
    }

   
}
?>