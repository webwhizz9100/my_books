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
                <?php
                    session_start();
                    if($_SESSION['accessright']== "admin"){

                    echo'<a class="navbar-item" href="http://localhost:7888/my_books/View/Pages/addBook.php">
                        Add book
                     </a>' ;
                    
                     echo'<a class="navbar-item" href="http://localhost:7888/my_books/View/Pages/viewBooks.php">
                         View Book
                     </a>';
                    echo ' <a class="navbar-item" href="http://localhost:7888/my_books/view/pages/reg.php">
                         Register
                     </a>';
                    
                    echo' <a class="navbar-item" href="http://localhost:7888/my_books/controller/logout.php">
                         Log out
                     </a>';

                    //  session_destroy();
                        

                      }
                      print_r($_SESSION);
                ?>
                 <?php
                    // session_start();
                    if($_SESSION['accessright'] == "user"){

                    echo'<a class="navbar-item" href="http://localhost:7888/my_books/View/Pages/addBook.php">
                        Add book
                     </a>' ;
                    
                     echo'<a class="navbar-item" href="http://localhost:7888/my_books/View/Pages/viewBooks.php">
                         View Book
                     </a>';
                    
                    echo' <a class="navbar-item" href="http://localhost:7888/my_books/controller/logout.php">
                         Log out
                     </a>';

                    //  session_destroy();
                        

                      }
                ?>
            <a class="navbar-item" href="http://localhost:7888/my_books/View/Pages/addBook.php">
                   Add book
                </a>
               
                <a class="navbar-item" href="http://localhost:7888/my_books/View/Pages/viewBooks.php">
                    View Book
                </a>
                <a class="navbar-item" href="http://localhost:7888/my_books/view/pages/reg.php">
                    Register
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