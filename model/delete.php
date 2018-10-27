<?php

    include('conn.php');

// Do I need to declare variable before execution starts?

    $conn;
        try{
           
            $BookID = $row['BookID'];
            $del_sql = ("DELETE FROM book WHERE BookID = $row[BookID]");
            $stmt = $conn -> prepare ($del_sql) ;
            // $stmt= $stmt -> prepare ($del_query);
            $result = $stmt ->execute();
        
            echo "Book has deleted";
            // header("Location:./pages/viewBooks.php");

        }
        catch (PDOexception $ex){
            $conn -> rollBack ();
            echo $ex->getMessage();
        }     
?>
<!-- //     $stmt = $conn -> prepare ($del_query) "DELETE FROM book WHERE BookID = $row['BookID']");
//     // $stmt= $stmt -> prepare ($del_query);
//     $result = $stmt ->execute();

//     echo'<p>Book has deleted</p>';
//     header(location:./pages/viewBooks.php);
// ?>     -->
    
    <!-- // $id= 10;

//     $stmt = $conn->prepare("DELETE FROM book WHERE BookID");
//     $stmt -> execute([$BookID]);

//     $count = $stmt->rowCount();
//     echo ("Deleted $count rows.\n");
//     -->