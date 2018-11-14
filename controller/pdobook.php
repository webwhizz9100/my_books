<?php
require("../model/conn.php");
require("../model/insert.php");

session_start();

if (!empty([$_POST])){

    //input sanitation via test_user input_funciton
    $Name = !empty($_POST['Name'])? testUserInput(($_POST['Name'])):null;
    $Surname = !empty($_POST['Surname'])? testUserInput(($_POST['Surname'])):null;
    $Nationality = !empty($_POST['Nationality'])? testUserInput(($_POST['Nationality'])):null;
    $BirthYear = !empty($_POST['BirthYear'])? testUserInput(($_POST['BirthYear'])):null;
    $DeathYear = !empty($_POST['DeathYear'])? testUserInput(($_POST['DeathYear'])):null;
    $BookTitle = !empty($_POST['BookTitle'])? testUserInput(($_POST['BookTitle'])):null;
    $OriginalTitle = !empty($_POST['OriginalTitle'])? testUserInput(($_POST['OriginalTitle'])):null;
    $YearofPublication = !empty($_POST['YearofPublication'])? testUserInput(($_POST['YearofPublication'])):null;
    $Genre = !empty($_POST['Genre'])? testUserInput(($_POST['Genre'])):null;
    $MillionsSold = !empty($_POST['MillionsSold'])? testUserInput(($_POST['MillionsSold'])):null;
    $LanguageWritten = !empty($_POST['LanguageWritten'])? testUserInput(($_POST['LanguageWritten'])):null;
    $AuthorID = !empty($_POST['AuthorID'])? testUserInput(($_POST['AuthorID'])):null;
    $coverImagePath = !empty($_POST['coverImagePath'])? testUserInput(($_POST['coverImagePath'])):null;

    try
    {
    //    echo $_POST['action_type'];
      if($_POST['action_type']=='add'){
//            echo 'Adding user';
            $querySuccess = addBook($Name,$Surname,$Nationality,$BirthYear,$DeathYear,$BookTitle,$OriginalTitle,$YearofPublication,$Genre,$MillionsSold,$LanguageWritten,$AuthorID,$coverImagePath);
//            echo $querySuccess;
//           $querySuccess
                 //header('location:../index.php');
        // echo $querySuccess ;
        $_SESSION['msg'] = "book has added";
        header('location:../view/pages/viewBooks.php');
            } 
        }   
        
    
            catch(PDOException $e)
            {
                echo "Error".$e -> getMessage();
                die();
            }
    }    

?>
