<?php
    include'header.php';
?>

<p class="title has-text-centered">Browse Bookshelf</p>


    <section class="section columns">
        <div class="container has-text-centered column is-10 is-offset-1">
            <!-- <LOOP starts> -->

        <?php
            include'../../controller/bookLoop.php'; 
                 if($stmt->rowCount()<1)
                                        {
                                    echo 'Bookshelf is empty';
                                            
                                        }else{
                                            foreach($result as $row){?>


        <!-- <LOOP ends> -->

             <div class="tile is-ancestor">
                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <figure class="image" style="width:100%" alt="Image"">
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