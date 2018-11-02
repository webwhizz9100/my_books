<?php

    include('conn.php');



     global $conn;
        try{
            $conn->beginTransaction();
           
            // $BookID = $_GET['bookid'];
            if(isset($_GET['bookid'])) {

            $edit_sql = ("UPDATE FROM book set WHERE BookID = :BookID");
            // Bind bookid to the query
            $stmt = $conn -> prepare ($edit_sql) ;
            $stmt ->bindValue(':bookid',$BookID);
            // $stmt= $stmt -> prepare ($del_query);
            $result = $stmt ->execute() or die("error");
        
                echo "Book has updated";}
            // header("Location:./pages/viewBooks.php");

        }
        catch (PDOexception $ex){
            $conn -> rollBack ();
            echo $ex->getMessage();
        }     
?>