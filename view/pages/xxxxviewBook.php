<?php
    include'header.php';
?>

    <p class="title has-text-centered">Browse Bookshelf</h2>

<?php
    include'../../Model/dbfunctions.php';
    include'../../Model/conn.php';
$stmt = $conn->prepare('SELECT BookID,BookTitle,Genre,MillionsSold,coverImagePath FROM book ORDER BY MillionsSold DESC');
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
                                <?php echo $row['BookTitle']; ?><br>
                                <?php echo $row['MillionsSold']; 
                                      echo "  MillionsSold";
                                ?><br>
                    <a href="?link=edit&BookID=<?php echo $row['BookID']?>">Edit</a><br>
                    <a href="?link=delete&BookID=<?php echo $row['BookID']?>">Delete</a><br>
                        </figcaption>
            
                    </article>
                
           
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

    