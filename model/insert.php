<?php
    require ("../Model/conn.php");
    require ("../Model/dbFunctions.php");
    include 'testInput.php';
?>
        <?php function addBook($email,$firstName,$lastName,$accessright,$username,$password){

   
            global $conn;
            try{
                
                $conn->beginTransaction();
                
                $usersql = "INSERT INTO book(BookTitle,OriginalTitle,YearofPublication,Genre,MillionsSold,LanguageWritten,AuthorID,,coverImagePath) VALUES (:BookTitle,:OriginalTitle,:YearofPublication,:Genre,:MillionsSold,:LanguageWritten,:AuthorID,:coverImagePath)";
                $stmt = $conn -> prepare($usersql);
                $stmt ->bindValue(':BookTitle',$BookTitle);
                $stmt ->bindValue(':OriginalTitle',$OriginalTitle);
                $stmt ->bindValue(':YearofPublication',$YearofPublication);
                $stmt ->bindValue(':Genre',$Genre);
                $stmt ->bindValue(':MillionsSold',$MillionsSold);
                $stmt ->bindValue(':LanguageWritten',$LanguageWritten);
                $stmt ->bindValue(':AuthorID',$AuthorID);
                $stmt ->bindValue(':coverImagePath',$coverImagePath);

                // $result = $stmt ->execute();
//                return $result;
                $lastuserID = $conn -> lastInsertID();
            
                //   $loginsql = "INSERT INTO login(username,password,userID) VALUES (:username,:password,:userID)";
                // $stmt = $conn -> prepare($loginsql);
                // $stmt ->bindValue(':username',$username);
                // $stmt ->bindValue(':password',$password);
                // $stmt ->bindValue(':userID',$lastuserID);
                
//                $stmt ->bindValue(':accessRights',$accessRights);
//                $stmt ->bindValue(':lastName',$lastName);
//                $stmt ->bindValue(':loginID',loginID);
//                $stmt ->bindValue(':loginID',$loginID);
                
               
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