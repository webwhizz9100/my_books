
    <!---start NAV-->
    <nav class="navbar is-dark">
        <div class="navbar-brand">
            <a class="navbar-item">
                
                <img src="../images/pics/logo.gif" width="" height="">

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
                <?php
                    //session_start();?>

                    <?php


                    // $_SESSION["accessright"] = $rows["accessright"];
                    //  print_r($rows["accessright"]);
                    
                    if($_SESSION['accessright'] == "admin"){

                          echo "<b> You are access as&nbsp&nbsp&nbsp</b>". $_SESSION['accessright'];

                    echo'<a class="navbar-item" href="addBook.php">
                        Add book
                     </a>' ;
                    
                     echo'<a class="navbar-item" href="viewBooks.php">
                         View Book
                     </a>';
                    echo ' <a class="navbar-item" href="reg.php">
                         Register
                     </a>';
                    
                    echo' <a class="navbar-item" href="../../controller/logout.php">
                         Log out
                     </a>';

                    //  session_destroy();
                    // die();

                      }
                    
                ?>
                 <?php
                    // session_start();
                    if($_SESSION['accessright'] == "user"){
                        // if($_SESSION['user']){
                            echo "<b> You are access as&nbsp&nbsp&nbsp</b>". $_SESSION['accessright'];


                    echo'<a class="navbar-item" href="addBook.php">
                        Add book
                     </a>' ;
                    
                     echo'<a class="navbar-item" href="viewBooks.php">
                         View Book
                     </a>';
                    
                    echo' <a class="navbar-item" href="../../controller/logout.php">
                         Log out
                     </a>';

                    //  session_destroy();
                    // die();
                        

                      }
                ?>
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field">
                        <div class="control">
                            <!-- <input class="input" type="text" placeholder="search . . ."> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
</nav>
<!-- <NAV Ends> -->