<?php

    require('../../model/conn.php');
    global $conn;
        try{
        
            // $BookID = $_GET['bookid'];

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
                    echo"Book has deleted";
                    $conn -> commit();
                
                // header('location: viewBooks.php');
                
                }


            }
            } catch (PDOexception $ex){
                    $conn->rollBack ();
                echo $ex->getMessage();
            }  

?>
