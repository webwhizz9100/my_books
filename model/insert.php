<?php
 function testUserInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}    ?> 

    <?php
    // calling function
    function addBook($Name,$Surname,$Nationality,$BirthYear,$DeathYear,$BookTitle,$OriginalTitle,$YearofPublication,$Genre,$MillionsSold,$LanguageWritten,$AuthorID,$coverImagePath){
                
                global $conn;
                try{
                    
                    $conn->beginTransaction();

                    $authorsql = "INSERT INTO author(Name,Surname,Nationality,BirthYear,DeathYear) VALUES (:Name,:Surname,:Nationality,:BirthYear,:DeathYear)";
                    $stmt = $conn -> prepare($authorsql);
                    $stmt ->bindValue(':Name',$Name);
                    $stmt ->bindValue(':Surname',$Surname);
                    $stmt ->bindValue(':Nationality',$Nationality);
                    $stmt ->bindValue(':BirthYear',$BirthYear);
                    $stmt ->bindValue(':DeathYear',$DeathYear);
                    $result = $stmt ->execute();
    //                return $result;
                    $lastuserID = $conn -> lastInsertID();


                    $booksql = "INSERT INTO book(BookTitle,OriginalTitle,YearofPublication,Genre,MillionsSold,LanguageWritten,AuthorID,coverImagePath) VALUES (:BookTitle,:OriginalTitle,:YearofPublication,:Genre,:MillionsSold,:LanguageWritten,:AuthorID,:coverImagePath)";
                    $stmt = $conn -> prepare($booksql);
                    $stmt ->bindValue(':BookTitle',$BookTitle);
                    $stmt ->bindValue(':OriginalTitle',$OriginalTitle);
                    $stmt ->bindValue(':YearofPublication',$YearofPublication);
                    $stmt ->bindValue(':Genre',$Genre);
                    $stmt ->bindValue(':MillionsSold',$MillionsSold);
                    $stmt ->bindValue(':LanguageWritten',$LanguageWritten);
                    $stmt ->bindValue(':AuthorID',$AuthorID);
                    $stmt ->bindValue(':coverImagePath',$coverImagePath);
                    $stmt ->bindValue(':AuthorID',$lastuserID);
                    $stmt ->execute();
                    $lastbookid = $conn -> lastInsertID();
                    
                    session_start();
          
                    if (!isset($_SESSION["userID"])) {
                        header("location:../index.php");
                        exit();
                    }
                    // it does; output the message
                    $userID = $_SESSION['userID'];
          
                    $logsql = "INSERT INTO changelog (dateUpdtd,dateCreated,BookID,userID) VALUES (CURDATE(),CURDATE(), :bookID, :userID)";

                    $stmt = $conn -> prepare($logsql);
                    $stmt ->bindValue(':bookID',$lastbookid);
                    $stmt ->bindValue(':userID',$userID);
                
                    //$stmt ->bindValue(':changeLogID',$lastuserID);

                    $stmt->execute();
                                $conn->commit();
                                echo'Log updated';
                                // header('location:../view/pages/viewBook.php');


                // return $result;
                
                    // $stmt->execute();
                    // $conn->commit();
                    // echo'cover inserted';
                    // header('location:../view/pages/addBook.php');
                   
                    
                      
                  

                            // add function 
        //   create insert statement author(parent table which has primary key to user as  foregin key to other two table), book and log(tells who updated information ), then go to controller
    // function logbook($DateUpd,$dataCreated,$BookID,$userID){
                    

                        // $logsql = "INSERT INTO changelog(DateUpd,dataCreated,BookID,userID) VALUES (:DateUpd,:dataCreated,:BookID,:userID)";
                        
                        date_default_timezone_set('Australia/Brisbane');
                        $date = ('Y-m-d H:i:s');}
                        
                        // $stmt = $conn -> prepare($logsql);
                        // $stmt ->bindValue(':DateUpd',$DateUpd);
                        // $stmt ->bindValue(':dataCreated',$dataCreated);
                        // $stmt ->bindValue(':BookID',$BookID);
                        // $stmt ->bindValue(':userID',$userID);
                    
                        // $stmt ->bindValue(':changeLogID',$lastuserID);

                        // $stmt->execute();
                        //             $conn->commit();
                        //             echo'Log updated';}
                                    // header('location:../view/pages/viewBook.php');
                                    
                
                                        catch (PDOexception $ex){
                                            $conn -> rollBack ();
                                            echo $ex->getMessage();
                                        }    
        }  
        

//         // add function 
//         //   create insert statement author(parent table which has primary key to user as  foregin key to other two table), book and log(tells who updated information ), then go to controller
// function logbook($DateUpd,$dataCreated,$BookID,$userID){
//         try{

//         $logsql = "INSERT INTO changelog(DateUpd,dataCreated,BookID,userID) VALUES (:DateUpd,:dataCreated,:BookID,:userID)";

        
//         $stmt = $conn -> prepare($logsql);
//         $stmt ->bindValue(':DateUpd',$DateUpd);
//         $stmt ->bindValue(':dataCreated',$dataCreated);
//         $stmt ->bindValue(':BookID',$BookID);
//         $stmt ->bindValue(':userID',$userID);
       
//         $stmt ->bindValue(':changeLogID',$lastuserID);

//         $stmt->execute();
//                     $conn->commit();
//                     echo'Log updated';
//                     // header('location:../view/pages/viewBook.php');
//                     }
                    
//                 catch (PDOexception $ex){
//                     $conn -> rollBack ();
//                     echo $ex->getMessage();
//                 }    
//             }  
            
           
            
    // ?>     
