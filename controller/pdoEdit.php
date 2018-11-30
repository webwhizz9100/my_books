<?php
require("../model/conn.php");
require("../model/dbFunctions.php");

session_start();


if (!empty($_POST['AuthorID'])){

    //input sanitation via test_user input_funciton
    $AuthorID = !empty($_POST['AuthorID'])? testUserInput(($_POST['AuthorID'])):null;
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
    $coverImagePath = !empty($_POST['coverImagePath'])? testUserInput(($_POST['coverImagePath'])):null;

    try
    {
    //    echo $_POST['action_type'];
      if($_POST['action_type']=='add'){
        
//            echo 'Adding user';
            $bookID = editBook($AuthorID,$Name,$Surname,$Nationality,$BirthYear,$DeathYear,$BookTitle,$OriginalTitle,$YearofPublication,$Genre,$MillionsSold,$LanguageWritten,$coverImagePath);
            updateLog($bookID, $_SESSION["userID"]);
//            echo $querySuccess;

                 $_SESSION['msg'] = "book has updated";
                 header('location:../view/pages/viewBooks.php');

        // echo 'book has updated';       
        // echo $querySuccess ;
        // die("error");
            } 
        }   
        
    
            catch(PDOException $e)
            {
                echo "Error".$e -> getMessage();
                die();
            }
    }    

?>
