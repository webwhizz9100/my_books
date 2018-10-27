<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Bulma Version 0.7.1-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <!---start NAV-->
    <nav class="navbar is-dark">
        <div class="navbar-brand">
            <a class="navbar-item">
                
                <img src="../images/pics/logo.gif" width="112" height="">

            <div class="navbar-burger burger" data-target="navbarExampleTransparentExample"> 
                <span></span>
                <span></span>
                <span></span>
            </div> 
        </div>
        <!-- <Jquery burger dropdown> -->
        <script>
            $(document).ready(function() {

                // Check for click events on the navbar burger icon
                $(".navbar-burger").click(function() {

                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    $(".navbar-burger").toggleClass("is-active");
                    $(".navbar-menu").toggleClass("is-active");

                });
                });
        </script>
                   

        <div id="navbarExampleTransparentExample" class="navbar-menu">
            <div class="navbar-start">
           
               
                <a class="navbar-item" href="http://localhost:7888/my_books/View/Pages/viewBooks.php">
                    View Book
                </a>
               
               
                <a class="navbar-item" href="http://localhost:7888/my_books/controller/logout.php">
                    Log out
                </a>
                
                
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field">
                        <div class="control">
                            <input class="input" type="text" placeholder="search . . .">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</nav>
<!-- <NAV Ends> -->
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

                    <div class="panel-body"><img src="<?php echo $row['coverImagePath'];?>" class="img-responsive" style="width:100%" alt="Image"></div>
                </figure>
                    <figcaption>
                    <!-- <data> -->
                                    

                                   
                                    <?php echo  $row['Name']." ".$row['Surname'] ?><br>
                                    <?php echo $row['BookTitle']; ?><br>
                                    <?php echo $row['MillionsSold']." ". "Millions Sold";?><br>
                                    <?php echo $row['YearofPublication']." ". "Year Published";?><br>

                                 
  
                                                
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

    