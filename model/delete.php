<?php
    require('viewBooks.php' );
    
    // $id= 10;

    $stmt = $conn->prepare("DELETE FROM book WHERE BookID = ?" );
    $stmt -> execute([$BookID]);

    $count = $stmt->rowCount();
    echo ("Deleted $count rows.\n");
?>    