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