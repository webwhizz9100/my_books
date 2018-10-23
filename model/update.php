<?php
     require('viewBooks.php' );
     if( !empty( $_POST) ){
         $BookTitle = !empty ( $_POST[ "BookTitle"] ) ? $_POST["BookTitle"] : null;
         $stmt = $conn -> prepare("UPDATE book SET BookTitle = ? WHERE BookID = ?")
         -> execute ( [ $_POST [ 'BookTitle'],$_SESSION['BookID' ] ] );
        //assuming current session matches id
        $stmt = null;
     }
     ?>