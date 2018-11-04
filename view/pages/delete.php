<?php

    include('../../model/conn.php');



    global $conn;
        try{

            $conn->beginTransaction();
           
            // $BookID = $_GET['bookid'];

            if(isset($_GET['bookid'])) {

                $BookID = $_GET['bookid'];

                // deleting record 
                $del_log = ("DELETE FROM changelog WHERE BookID = :bookid");
                // $del_log = ("SELECT FROM changelog WHERE BookID = :bookid");
                $stmt = $conn -> prepare ($del_log) ;
                $stmt ->bindValue(':bookid',$BookID);
                $result = $stmt ->execute() or die("error");

                print_r($BookID);

             

                // deleting record 
                $del_sql = ("DELETE FROM book WHERE BookID = :bookid");

                $stmt = $conn -> prepare ($del_sql) ;
                $stmt ->bindValue(':bookid',$BookID);
                $result = $stmt ->execute() or die("error");

                print_r($BookID);
            
                echo "Book has deleted";
                // header('location: viewBooks.php');

                
            }

            
        }
        catch (PDOexception $ex){
            $conn->rollBack ();
            echo $ex->getMessage();
        }  

?>
