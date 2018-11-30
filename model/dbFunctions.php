 <?php
 function testUserInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}    ?> 

<!-- INSERTION -->
        <?php 
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        } 
        function addUser($email,$firstName,$lastName,$accessright,$username,$password){

   
            global $conn;
            try{
                
                    $conn->beginTransaction();
                    
                    $usersql = "INSERT INTO users(email,firstName,lastName,accessright) VALUES (:email,:firstName,:lastName,:accessright)";
                    $stmt = $conn -> prepare($usersql);
                    $stmt ->bindValue(':email',$email);
                    $stmt ->bindValue(':firstName',$firstName);
                    $stmt ->bindValue(':lastName',$lastName);
                    $stmt ->bindValue(':accessright',$accessright);
                    $result = $stmt ->execute();
    //                return $result;
                    $lastuserID = $conn -> lastInsertID();
            
                  $loginsql = "INSERT INTO login(username,password,userID) VALUES (:username,:password,:userID)";
                    $stmt = $conn -> prepare($loginsql);
                    $stmt ->bindValue(':username',$username);
                    $stmt ->bindValue(':password',$password);
                    $stmt ->bindValue(':userID',$lastuserID);
                
//                return $result;
                $stmt->execute();
                $conn->commit();
                }
                
            catch (PDOexception $ex){
                $conn -> rollBack ();
                echo $ex->getMessage();
            }    
        }
        
?>  

<?php

    function addBook($Name,$Surname,$Nationality,$BirthYear,$DeathYear,$BookTitle,$OriginalTitle,$YearofPublication,$Genre,$MillionsSold,$LanguageWritten,$AuthorID,$coverImagePath){
                
                global $conn;
                try{
                    
                    $conn->beginTransaction();
                    
                    //Check if author exist
                    $authorChecksql = "SELECT * FROM author WHERE `Name` LIKE :Name AND Surname LIKE :Surname AND BirthYear = :BirthYear";  
                    $stmt = $conn -> prepare($authorChecksql);
                    $stmt ->bindValue(':Name',$Name);
                    $stmt ->bindValue(':Surname',$Surname);
                    $stmt ->bindValue(':BirthYear',$BirthYear);
                    $stmt ->execute();
                    $result = $stmt -> fetch();

                    //If there is none, insert a new author
                    if(!$result){
                        $authorsql = "INSERT INTO author(`Name`,Surname,Nationality,BirthYear,DeathYear) VALUES (:Name,:Surname,:Nationality,:BirthYear,:DeathYear)";
                        $stmt = $conn -> prepare($authorsql);
                        $stmt ->bindValue(':Name',$Name);
                        $stmt ->bindValue(':Surname',$Surname);
                        $stmt ->bindValue(':Nationality',$Nationality);
                        $stmt ->bindValue(':BirthYear',$BirthYear);
                        $stmt ->bindValue(':DeathYear',$DeathYear);
                        $result = $stmt ->execute();
                        $AuthorID = $conn -> lastInsertID();    
                        $_SESSION['msg'] = "Book has  added";
                    
                    }else{
                        $AuthorID = $result["AuthorID"];
                        $_SESSION['msg'] = "Book has added and author already exist";
                    
                    }
        
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
                    $stmt ->execute();
                    $lastbookid = $conn -> lastInsertID();
                    
                    // session_start();
                    // it does; output the message
                    $userID = $_SESSION['userID'];
          
                    if (!isset($_SESSION["userID"])) {
                        header("location:../index.php");
                        exit();
                    }
                    // Creating book log
                    $logsql = " INSERT INTO changelog (dateUpdtd,dateCreated,BookID,userID) VALUES (NOW(),NOW(), :bookID, :userID)";

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

    // UPDATING

function editBook($AuthorID,$Name,$Surname,$Nationality,$BirthYear,$DeathYear,$BookTitle,$OriginalTitle,$YearofPublication,$Genre,$MillionsSold,$LanguageWritten,$coverImagePath) {  
    global $conn;    
                                //  Updating record 
                    $editAuthor = "UPDATE author SET Name=:Name,Surname=:Surname,Nationality=:Nationality,BirthYear=:BirthYear,DeathYear=:DeathYear WHERE AuthorID = :AuthorID ";
                    $stmt = $conn -> prepare($editAuthor);
                    $stmt ->bindValue(':Name',$Name);
                    $stmt ->bindValue(':Surname',$Surname);
                    $stmt ->bindValue(':Nationality',$Nationality);
                    $stmt ->bindValue(':BirthYear',$BirthYear);
                    $stmt ->bindValue(':DeathYear',$DeathYear);
                    $stmt ->bindValue(':AuthorID',$AuthorID);
                    $result = $stmt ->execute();
    //                return $result;


                    $editBook = "UPDATE book SET BookTitle =:BookTitle,OriginalTitle=:OriginalTitle,YearofPublication=:YearofPublication,Genre=:Genre,MillionsSold=:MillionsSold,LanguageWritten=:LanguageWritten,coverImagePath=:coverImagePath WHERE AuthorID = :AuthorID";
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

                    $getBookID = "SELECT BookID FROM book WHERE AuthorID = :AuthorID";
                    $stmt = $conn -> prepare($getBookID);
                    $stmt -> bindValue(":AuthorID", $AuthorID);
                    $stmt -> execute();
                    $row = $stmt -> fetch();
                    $bookID = $row["BookID"];


                    $_SESSION['msg'] = "Book has added";
                    // header('location:../view/pages/viewBooks.php');

                    return $bookID;
                }

                function updateLog($bookID,$userID){
                    global $conn;
                    $logsql = " UPDATE  changelog SET dateUpdtd = NOW(), userID = :userID WHERE BookID = :bookID";
                    $stmt = $conn->prepare($logsql);
                    $stmt->bindValue(':bookID', $bookID);
                    $stmt->bindValue(':userID', $userID);
                    $stmt->execute();
                    // $conn->commit();

                    // die("update passed");
                }

             
     ?>   
      <!--DELETE book  -->
     <?php

require('conn.php');
global $conn;
    try{
    
        // $BookID = $_GET['bookid'];
        // session_start();

        if(isset($_GET['bookid'])) {

            $BookID = $_GET['bookid'];
            $conn->beginTransaction();
    
            // // deleting record 
            $del_log = ("DELETE FROM changelog WHERE BookID = :bookid");
           

            $stmt = $conn->prepare($del_log);
            $stmt ->bindValue(':bookid',$BookID);

            $result = $stmt ->execute();

              // added code  up to line 28
            $del_sql = ("DELETE FROM book WHERE BookID = :bookid");

            $stmt = $conn->prepare($del_sql);
            $stmt ->bindValue(':bookid',$BookID);
            // $conn -> commit();

            if (!$stmt->execute()){
                echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
            }else{
                // echo"Book has deleted";
                $conn -> commit();
                $_SESSION['msg'] = "book has deleted";
                header('location: ../view/pages/viewBooks.php');

            
            }


        }
        } catch (PDOexception $ex){
                $conn->rollBack ();
            echo $ex->getMessage();
        }  

?>

  