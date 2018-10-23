<?php
    include'header.php';
?>

    <p class="title has-text-centered">Browse Bookshelf</p>

<?php
    include'../../Model/dbfunctions.php';
    include'../../Model/conn.php';
    // $stmt = $conn->prepare ('SELECT Concat(`Name`,`Surname`)AS 'authorName', BookTitle, YearofPublication, MillionsSold,coverImagePath FROM author INNER JOIN book ON book.AuthorID = author.AuthorID');
    $stmt = $conn -> prepare ('SELECT * FROM `book` INNER JOIN author ON book.AuthorID = author.AuthorID');
    $stmt->execute();
    $result = $stmt-> fetchAll();
    if($stmt->rowCount()<1){
echo 'Bookshelf is empty';
        
    }else{
        
        foreach($result as $row) {?>

    <section class="section columns">
        <div class="container has-text-centered column is-10 is-offset-1">

             <div class="tile is-ancestor">
                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <figure class="image">
                            <img src="<?php echo $row['coverImagePath'];?>">
                        </figure>
                        <figcaption>
                       
                                <?php echo $row['Name'];?><br><?php echo $row['Surname'];?><br>
                                <?php echo $row['BookTitle']; ?><br>
                                <?php echo $row['MillionsSold']; 
                                      echo "  MillionsSold"; ?><br>
                                <?php echo $row['YearofPublication'];
                                          echo " Written In ";?><br>      
                                <a href="?link=edit&BookID=<?php echo $row['BookID']?>">Edit</a><br>
                                <a href="?link=delete&BookID=<?php echo $row['BookID']?>">Delete</a><br>
                        </figcaption>
            
                    </article>
                </div>
           
            </div>
        </div>
     </section> 

   
        <?php
        }
    }
        ?>    
       

            

        <?php
    include'footer.php';
?>       