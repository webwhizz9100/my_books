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
                    // it does; output the message
                    $userID = $_SESSION['userID'];
          
                    if (!isset($_SESSION["userID"])) {
                        header("location:../index.php");
                        exit();
                    }
                    
                    $logsql = "INSERT INTO changelog (dateUpdtd,dateCreated,BookID,userID) VALUES (CURDATE(),CURDATE(), :bookID, :userID)";

                    $stmt = $conn -> prepare($logsql);
                    $stmt ->bindValue(':bookID',$lastbookid);
                    $stmt ->bindValue(':userID',$userID);
                
                    //$stmt ->bindValue(':changeLogID',$lastuserID);

                    $stmt->execute();
                    $conn->commit();
                    echo'Log updated';
                    // header('location:../view/pages/viewBook.php');
    
                        date_default_timezone_set('Australia/Brisbane');
                        $date = ('Y-m-d H:i:s');

                        // Edit Book goes here
    
           
        } catch (PDOexception $ex){
            $conn->rollBack ();
            echo $ex->getMessage();
        }    
}  
function editBook($AuthorID,$Name,$Surname,$Nationality,$BirthYear,$DeathYear,$BookTitle,$OriginalTitle,$YearofPublication,$Genre,$MillionsSold,$LanguageWritten,$coverImagePath) {  
    global $conn;    
                                //  Updating record 
                    $editAuthor = "UPDATE author SET Name=:Name,Surname=:Surname,Nationality=:Nationality,BirthYear=:BirthYear,DeathYear=:DeathYear WHERE AuthourID = :AuthorID ";
                    $stmt = $conn -> prepare($editAuthor);
                    $stmt ->bindValue(':Name',$Name);
                    $stmt ->bindValue(':Surname',$Surname);
                    $stmt ->bindValue(':Nationality',$Nationality);
                    $stmt ->bindValue(':BirthYear',$BirthYear);
                    $stmt ->bindValue(':DeathYear',$DeathYear);
                    $stmt ->bindValue(':AuthorID',$AuthorID);
                    $result = $stmt ->execute();
    //                return $result;
                    echo'hoge hoge';

                    $editBook = "UPDATE book SET BookTitle =:BookTitle,OriginalTitle=:OriginalTitle,YearofPublication=:YearofPublication,Genre=:Genre,MillionsSold=:MillionsSold,LanguageWritten=:LanguageWritten,coverImagePath=:coverImagePath WHERE AuthourID = :AuthorID";
                    $stmt = $conn -> prepare($editBook);
                    $stmt ->bindValue(':BookTitle',$BookTitle);
                    $stmt ->bindValue(':OriginalTitle',$OriginalTitle);
                    $stmt ->bindValue(':YearofPublication',$YearofPublication);
                    $stmt ->bindValue(':Genre',$Genre);
                    $stmt ->bindValue(':MillionsSold',$MillionsSold);
                    $stmt ->bindValue(':LanguageWritten',$LanguageWritten);
                    $stmt ->bindValue(':AuthorID',$AuthorID);
                    $stmt ->bindValue(':coverImagePath',$coverImagePath);
                    $stmt ->bindValue(':AuthorID',$AuthorID);
                    $result = $stmt ->execute();

                    echo'call shotgun';
                }

                   
         
            
     ?>     
