<?php
require("../model/conn.php");
require("../model/dbFunctions.php");

if (!empty([$_POST])){

    //input sanitation via test_user input_funciton
    $username = !empty($_POST['username'])? testUserInput(($_POST['username'])):null;
    $mypass = !empty($_POST['password'])? testUserInput(($_POST['password'])):null;
    $email = !empty($_POST['email'])? testUserInput(($_POST['email'])):null;
    $firstName = !empty($_POST['firstName'])? testUserInput(($_POST['firstName'])):null;
    $lastName = !empty($_POST['lastName'])? testUserInput(($_POST['lastName'])):null;
    $accessright = !empty($_POST['accessright'])? testUserInput(($_POST['accessright'])):null;
    $password = password_hash($mypass,PASSWORD_DEFAULT);
    

    try
    {
    //    echo $_POST['action_type'];
      if($_POST['action_type']=='add'){
//            echo 'Adding user';
            $querySuccess = addUser($email,$firstName,$lastName,$accessright,$username,$password);
//            echo $querySuccess;
//           $querySuccess
                 //header('location:../index.php');
        echo $querySuccess ;
        die();
            } 
        }    
        
    
    catch(PDOException $e)
    {
        echo "Error".$e -> getMessage();
        die();
    }
}
?>
