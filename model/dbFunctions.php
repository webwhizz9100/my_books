 <?php
 function testUserInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}    ?> 

        <?php 
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