
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Mybook</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.7.1-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css" />

</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Login</h3>
                    <p class="subtitle has-text-grey">Please login to proceed.</p>
                    <div class="box">
                        <!-- <figure class="avatar"> -->
                            <!-- <img src="https://placehold.it/128x128"> -->
                        </figure>
                        <form action="controller/pdologin.php" method = "POST" autocomplete = "nope">
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="text" placeholder=" Your username" name = "username" autofocus autocomplete = "false" pattern="[a-zA-Z ]{1,20}" title="username must contain at least 3 character" required>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="password" placeholder="Your Password" name = "password" title="password must contain at least 3 character" pattern="[a-zA-Z ]{1,20}" required>
                                </div>
                            </div>
                            <!-- <div class="field">
                                
                                <a href="View/Pages/reg.php">Register</a>

                            </div> -->
                            <button class="button is-block is-info is-large is-fullwidth">Login</button>
                        </form>
                    </div>
                    <!-- <p class="has-text-grey">
                        <a href="../">Sign Up</a> &nbsp;·&nbsp;
                        <a href="../">Forgot Password</a> &nbsp;·&nbsp;
                        <a href="../">Need Help?</a>
                    </p> -->
                </div>
            </div>
        </div>
    </section>
    <!-- <script async type="text/javascript" src="../js/bulma.js"></script> -->
</body>

</html>
