<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Log Book - Mybook</title>

        <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <!-- Bulma Version 0.7.1-->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css" />
        <link rel="stylesheet" href="view/css/bGnds.css" type="text/css"> --> -->
    </head>
        <body>

            <form action ="../../controller/pdoLogbook.php" method = "POST">
                            <div class="field">
                                <label class="label"> DateUpd</label>
                                    <div class="control">
                                        <input class="input" type="number" name="DateUpd" placeholder="" value="" pattern = "[0-9]{4}" title =" numeric enter onlu">
                                    </div>
                            </div>

                            <div class="field">
                                <label class="label">Date Created</label>
                                    <div class="control">
                                        <input class="input" type="number" name="Date Created" placeholder="" value="" pattern = "[0-9]{4}" title =" numeric enter onlu">
                                    </div>
                            </div>

                            <div class="field">
                                <label class="label">BookID</label>
                                    <div class="control">
                                        <input class="input" type="number" name="BookID" placeholder="" value="" pattern = "[0-9]{4}" title =" numeric enter onlu">
                                    </div>
                            </div>

                            <div class="field">
                                <label class="label">userID</label>
                                    <div class="control">
                                        <input class="input" type="number" name="userID" placeholder="" value="" pattern = "[0-9]{4}" title =" numeric enter onlu">
                                    </div>
                            </div>

                        
                        <input type = "hidden" name = "action_type" value = "add">
                        <button class="button  is-block is-info is-large">Submit</button>
            </form>
        </body> 
</html>