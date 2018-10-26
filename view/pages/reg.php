<?php
    include'header.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register - Mybook</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <!-- Bulma Version 0.7.1-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css" />
        <link rel="stylesheet" href="view/css/bGnds.css" type="text/css">
    </head>
            <body>
                <form action ="../../Controller/pdoReg.php" method = "POST">
                
                
                
                <div class="field">
                        <label class="label">Username</label>
                            <div class="control has-icons-left has-icons-right">
                                <input class="input" type="text" name = "username" >
                                <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                                </span> 
                                
                                </span>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Password</label>
                                <div class="control">
                                    <input class="input" type="password" name = "password" placeholder=""  title="password must contain at least 3 character">        
                                </div>
                        </div>

                        <div class="field">
                                <label class="label">Email</label>
                                    <div class="control has-icons-left">
                                        <input class="input" type="email" name = "email" placeholder="" pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-envelope"></i>
                                            </span>
                                        <span class="icon is-small is-right">
                                    </span>
                                </div>
                        </div>

                        <div class="field">
                            <label class="label">Name</label>
                                <div class="control">
                                    <input class="input" type="text" name = "firstName" placeholder="" pattern="[A-Za-z]">
                                </div>
                        </div>
                        <div class="field">
                            <label class="label">Lastname</label>
                                <div class="control">
                                    <input class="input" type="text" name = "lastName" placeholder="" pattern="[A-Za-z]">
                                </div>
                        </div>
                            <div class="field">
                                <label class="label">accessright</label>
                                    <div class="control">
                                        <input class="input" type="text" name = "accessright" placeholder="" maxlength="5">
                                    </div>
                            </div>
                        <input type = "hidden" name = "action_type" value = "add">
                        <button class="button  is-block is-info is-large">Submit</button>
              
                    </form>
            </body> 
</html>

<?php
    include'footer.php';
?>