<?php

    require('../../model/conn.php');
    global $conn;
        try{
        
            // $BookID = $_GET['bookid'];

            if(isset($_GET['bookid'])) {

                $BookID = $_GET['bookid'];
                $conn->beginTransaction();
        
                // // deleting record 
                // $del_log = ("DELETE FROM changelog WHERE BookID = :bookid");
               
                // // $del_log = ("SELECT FROM changelog WHERE BookID = :bookid");
                // $stmt = $conn->prepare($del_log) ;
                // $stmt ->bindValue(':bookid',$BookID);
                // $result = $stmt ->execute() or die("error");

                // print_r($BookID);
                // deleting record 
                $del_sql = ("DELETE FROM book WHERE BookID = :bookid");

                $stmt = $conn->prepare($del_sql);
                $stmt ->bindValue(':bookid',$BookID);
                if (!$stmt->execute()) {
                    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                }
                
                // header('location: viewBooks.php');
                
            }
        }
        catch (PDOexception $ex){
            $conn->rollBack ();
            echo $ex->getMessage();
        }  

?>
