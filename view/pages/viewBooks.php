
<?php
    include'header.php';
    include'nav.php';

?>
    <!-- Bootstrap  CDN  to user column  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap-grid.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <p class="title has-text-centered">Browse Bookshelf</p>
   



<div class="container">    
    <div class="row">
        <!-- <LOOP starts> -->

        <?php
            include'../../controller/bookdb.php'; 
                 if($stmt->rowCount()<1)
                                        {
                                    echo 'Bookshelf is empty';
                                            
                                        }else{
                                            foreach($result as $row){?>


        <!-- <LOOP ends> -->
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <figure>

                    <div class="panel-body"><img src="<?php 
                    if(isset($row['coverImagePath'])){
                        echo $row['coverImagePath'];
                    }else{
                        echo "https://www.appointbetterboards.co.nz/Custom/Appoint/img/avatar-large.png";
                    }?>" class="img-responsive" style="width:100%" alt="Image"></div>
                </figure>
                    <figcaption>
                    <!-- <data> -->
                                    

                                   
                                    <?php echo  $row['Name']." ".$row['Surname'] ?><br>
                                    <?php echo $row['BookTitle']; ?><br>
                                    <?php echo $row['MillionsSold']." ". "Millions Sold";?><br>
                                    <?php echo $row['YearofPublication']." ". "Year Published";?><br>

                                 
                                    <a href="http://localhost:7888/my_books/view/pages/editBook.php?bookid=<?php echo $row['BookID']?>">EDIT</a><br>
                        <a href="http://localhost:7888/my_books/model/delete.php?bookid=<?php echo $row['BookID']?>">DELETE</a><br>
                                                
                    <!-- <data ends> -->
                    </figcaption>
                </div>    

        
            </div>
        </div>
    </div>
</div>

    
        
       
    <?php
        }
    }
        ?>                  

            

        <?php
    include'footer.php';
?>        

    