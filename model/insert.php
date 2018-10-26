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
                    // $stmt ->execute();

                

                // return $result;
                
                    $stmt->execute();
                    $conn->commit();
                    echo'cover inserted';
                    // header('location:../../pages/addBook.php');
                    }
                    
                catch (PDOexception $ex){
                    $conn -> rollBack ();
                    echo $ex->getMessage();
                }    
            }
        
            
    // ?>     

    // <?php
    //                         var_dump($_POST);
    //                                 echo([$_POST]);
    //                                 die();
    //                         ?>
            