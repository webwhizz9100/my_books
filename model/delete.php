<?php

    include('conn.php');



    global $conn;
        try{
            $conn->beginTransaction();
           
            // $BookID = $_GET['bookid'];

            if(isset($_GET['bookid'])) {



            //    "DELETE
            //     FROM    changelog
            //     WHERE   BookID = :bookid";

            //     "DELETE
            //     FROM    book
            //     WHERE  BookID = :bookid";


            $del_sql = ("DELETE FROM book WHERE BookID = :bookid");

            // Bind bookid to the query
            $stmt = $conn -> prepare ($del_sql) ;
            // $stmt ->bindValue(':BookID',$BookID);
            $BookID = $_GET['bookid'];
            $stmt ->bindValue(':bookid',$BookID);
            // $stmt= $stmt -> prepare ($del_query);
            $result = $stmt ->execute() or die("error");
        
            echo "Book has deleted";}
            // header("Location:pages/viewBooks.php");

        }
        catch (PDOexception $ex){
            $conn->rollBack ();
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