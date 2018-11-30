<?php
    include'header.php';
    include'nav.php';
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Book - Mybook</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <!-- Bulma Version 0.7.1-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css" />
        <link rel="stylesheet" href="/my_books/view/css/bGnd.css">
    </head>
        <body>
        <br><p class="title has-text-centered is-size-2">Add Book</p>
            <div class= "addform">

                <form action ="../../controller/pdobook.php" method = "POST">
                            <label class="label has-text-info is-size-3">Author Detail</label>    
                                <div class="field">
                                    <label class="label"> Author Name</label>
                                        <div class="control">
                                            <input class="input" type="text" name="Name" placeholder="" value="" pattern="[a-zA-Z .,']{1,20}" title = "Name must be more than one alphabet charactor" required>
                                        </div>
                                </div>

                                <div class="field">
                                    <label class="label">Surname</label>
                                        <div class="control">
                                            <input class="input" type="text" name="Surname" placeholder="" value="" pattern="[a-zA-Z ]{1,20}" title = "surname must be more than one alphabet charactor" required>
                                        </div>
                                </div>

                                <div class="field">
                                    <label class="label">Nationality</label>
                                        <div class="control">
                                            <input class="input" type="text" name="Nationality" placeholder="" value="" pattern="[a-zA-Z ]{1,20}" title = "Nationality must be more than one alphabet charactor" required>
                                        </div>
                                </div>

                                <div class="field">
                                    <label class="label">Birth Year</label>
                                        <div class="control">
                                            <input class="input" type="number" name="BirthYear" placeholder="" value="" pattern = "[0-9]{4}"  title = "please type number" required>
                                        </div>
                                </div>

                                <div class="field">
                                    <label class="label">Death Year</label>
                                        <div class="control">
                                            <input class="input" type="text" name="DeathYear" placeholder="" value="" required>
                                        </div></br>
                            </div>        

                        <label class="label has-text-info is-size-3">Book Detail</label>   
                            <div class="field">
                                <label class="label">BookTitle</label>
                                    <div class="control">
                                        <input class="input" type="text" name="BookTitle" placeholder="" value=""  pattern="[0-9a-zA-Z ]{1,20}" title = "Title must be more than one alphabet charactor" required>
                                    </div>
                            </div>
                            
                            <div class="field">
                                <label class="label">OriginalTitle</label>
                                    <div class="control">
                                        <input class="input" type="text" name="OriginalTitle" placeholder="" pattern="[0-9a-zA-Z ]{1,20}" title = "Original title must be more than one  alphabet charactor" required>
                                    </div>    
                            </div>

                            <div class="field">
                                <label class="label">Year Of Publication</label>
                                    <div class="control">
                                        <input class="input" type="number" pattern = "[0-9]{4}" name= "YearofPublication" placeholder= "" title = "please type number" required >
                                    </div>
                            </div>

                            <div class="field">
                                <label class="label">Genre</label>
                                    <div class="control">
                                        <input class="input" type="text"  name="Genre" placeholder="" pattern="[a-zA-Z]{1,20}" title = "Genre  must be more than one alphabet charactor" required>
                                    </div>
                            </div>

                            <div class="field">
                                <label class="label">Millions Sold</label>
                                    <div class="control">
                                        <input class="input" type="number" pattern = "[0-9]{4}" name="MillionsSold" placeholder=""  title = "please type number" required>
                                    </div>
                            </div>

                            <div class="field">
                                <label class="label">Language Written</label>
                                    <div class="control">
                                        <input class="input" type="text" name="LanguageWritten" placeholder="" pattern="[a-zA-Z]{1,20}" title = "Language must be more than one alphabet charactor" required>
                                    </div>
                            </div>   

                            <div class="field">
                                 <!--<label class="label">AuthorID</label>-->
                                 <div class="control">
                                        <input class="input" name="AuthorID" type="hidden" pattern = "[0-9]" placeholder="" >
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
                </div>
            </form>
        </body> 
</html>

<?php
    include'footer.php';
?>