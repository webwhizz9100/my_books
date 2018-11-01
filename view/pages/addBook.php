<?php
    include'header.php';
    include'nav.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Book - Mybook</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <!-- Bulma Version 0.7.1-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css" />
        <link rel="stylesheet" href="view/css/bGnds.css" type="text/css">
    </head>
        <body>

            <form action ="../../controller/pdoBook.php" method = "POST">
                            <div class="field">
                                <label class="label"> Author Name</label>
                                    <div class="control">
                                        <input class="input" type="text" name="Name" placeholder="" value="" pattern="[a-zA-Z]{1,20}" title = "Name must be more than one charactor">
                                    </div>
                            </div>

                            <div class="field">
                                <label class="label">Surname</label>
                                    <div class="control">
                                        <input class="input" type="text" name="Surname" placeholder="" value="Natsuko">
                                    </div>
                            </div>

                            <div class="field">
                                <label class="label">Nationality</label>
                                    <div class="control">
                                        <input class="input" type="text" name="Nationality" placeholder="" value="" >
                                    </div>
                            </div>

                            <div class="field">
                                <label class="label">Birth Year</label>
                                    <div class="control">
                                        <input class="input" type="number" name="BirthYear" placeholder="" value="" pattern = "[0-9]{4}">
                                    </div>
                            </div>

                            <div class="field">
                                <label class="label">Death Year</label>
                                    <div class="control">
                                        <input class="input" type="text" name="DeathYear" placeholder="" value="">
                                    </div>
                            </div>

                            <div class="field">
                                <label class="label">BookTitle</label>
                                    <div class="control">
                                        <input class="input" type="text" name="BookTitle" placeholder="" value="" >
                                    </div>
                            </div>
                            
                            <div class="field">
                                <label class="label">OriginalTitle</label>
                                    <div class="control">
                                        <input class="input" type="text" name="OriginalTitle" placeholder="">
                                    </div>    
                            </div>

                            <div class="field">
                                <label class="label">Year Of Publication</label>
                                    <div class="control">
                                        <input class="input" type="number" pattern = "[0-9]{4}" name= "YearofPublication" placeholder= ""  >
                                    </div>
                            </div>

                            <div class="field">
                                <label class="label">Genre</label>
                                    <div class="control">
                                        <input class="input" type="text"  name="Genre" placeholder="" >
                                    </div>
                            </div>

                            <div class="field">
                                <label class="label">Millions Sold</label>
                                    <div class="control">
                                        <input class="input" type="number" pattern = "[0-9]{4}" name="MillionsSold" placeholder="" >
                                    </div>
                            </div>

                            <div class="field">
                                <label class="label">Language Written</label>
                                    <div class="control">
                                        <input class="input" type="text" name="LanguageWritten" placeholder="">
                                    </div>
                            </div>   

                            <div class="field">
                                <label class="label">AuthorID</label>
                                    <div class="control">
                                        <input class="input" name="AuthorID" type="number" pattern = "[0-9]" placeholder="" >
                                    </div>
                            </div>

                            <div class="field">
                                <label class="label">Cover Image</label>
                                    <div class="control">
                                        <input class="input" type="text" name="coverImagePath" placeholder="">
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