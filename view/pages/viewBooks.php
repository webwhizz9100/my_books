
<?php
    include'header.php';
    include'nav.php';

    // session_start();7

    // if (isset($_SESSION['userID'])) {
    //     header("location:../../index.php");
    // }
    // if ($_SESSION['accessright'] == 'admin' || $_SESSION['accessright'] == 'user') {
    //         header("location:viewBooks.php");
    //     }else{
    //         header("location:../../index.php");
    //     }

?>
    <!-- Bootstrap  CDN  to user column  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/my_books/view/css/bGnd.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   
<body>  
    <p class="title has-text-centered">Browse Bookshelf</p>
    <div class="container">   
        <?php
            include'../../model/displayMsg.php';
        ?> 
        <div class="row">
            <!-- <LOOP starts> -->

        <?php
            include'../../controller/bookdb.php'; 
            if($stmt->rowCount()<1){
                echo 'Bookshelf is empty';
            }
        else{
            foreach($result as $row){
        ?>
            <div class="col-lg-3">
                <div class="panel panel-primary">
                    <figure>
                        <div class="panel-body"><img src="<?php 
                            if(isset($row['coverImagePath'])){
                                echo $row['coverImagePath'];
                            }else{
                                echo "../images/BookCovers/default.png";
                            }?>" class="img-responsive" style="width:100%" alt="Image">
                        </div>
                    </figure>
                    <div class="book_description">
                    <!-- <data> -->
                        <b><?php echo $row['Name']." ".$row['Surname'] ?><br></b>
                        <i><?php echo $row['BookTitle']; ?><br></i>
                        <i style="color:MidnightBlue;"><?php echo $row['MillionsSold']." ". "Millions Sold";?><br></i>
                        <i style="color:MidnightBlue;"><?php echo $row['YearofPublication']." ". "Year Published";?><br></i>        
                        <b><a href="editBook.php?bookid=<?php echo $row['BookID']?>">EDIT</a></b><br>
                        <b><a href="../../model/delete.php?bookid=<?php echo $row['BookID']?>">DELETE</a></b><br>
                    </div>
                </div>
            </div>
        <?php
    }
}
?>                  

    </div>
</div>


            

<?php
    include'footer.php';
?>        

    