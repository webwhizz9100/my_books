<?php
require("../model/conn.php");
require("../model/insert.php");
// require "../model/testInput.php";

if (!empty([$_POST])){

    //input sanitation via test_user input_funciton
    $DateUpd = !empty($_POST['DateUpd'])? testUserInput(($_POST['DateUpd'])):null;
    $DateCreated = !empty($_POST['Date Created'])? testUserInput(($_POST['DateCreated'])):null;
    $BookID = !empty($_POST['BookID'])? testUserInput(($_POST['BookID'])):null;
    $userID = !empty($_POST['userID'])? testUserInput(($_POST['userID'])):null;
    
    // session_start();
    // function addBook();

    try
    {
    //    echo $_POST['action_type'];
      if($_POST['action_type']=='add'){
//            echo 'Adding user';
            $querySuccess = logbook($DateUpd,$dataCreated,$BookID,$userID);
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