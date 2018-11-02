<?php

    include('conn.php');

// Do I need to declare variable before execution starts?

     global $conn;
        try{
           
            $BookID = $_GET['bookid'];
            $edit_sql = ("UPDATE FROM book WHERE BookID = :BookID");
            // Bind bookid to the query
            $stmt = $conn -> prepare ($edit_sql) ;
            $stmt ->bindValue(':BookID',$BookID);
            // $stmt= $stmt -> prepare ($del_query);
            $result = $stmt ->execute();
        
            echo "Book has updated";
            // header("Location:./pages/viewBooks.php");

        }
        catch (PDOexception $ex){
            $conn -> rollBack ();
            echo $ex->getMessage();
        }     
?>