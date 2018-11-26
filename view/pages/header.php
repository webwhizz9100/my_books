<!DOCTYPE html>
<?php 
    session_start();
    if (empty($_SESSION["userID"])) {
        header('location: ../../controller/logout.php');
    }else{
        echo("UserID is set".$_SESSION["userID"]);
    }
    // if(isset($_SESSION['userID']) && !empty($_SESSION['userID'])) {
    //     echo'userID is set';
    //     // header('location: ../../controller/logout.php');
    //  }
      
    //  if(!isset($_SESSION['accessright'] )== "admin" || (!isset($_SESSION['accessright'])== "user")){
    //     // echo'accessright is set';
    //     header('location: ../../controller/logout.php');
    //  }
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/my_books/view/css/bGnd.css">
    <!-- Bulma Version 0.7.1-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

