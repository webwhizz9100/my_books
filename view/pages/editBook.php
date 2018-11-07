<?php
    include'header.php';
    include'nav.php';
    include'../../model/conn.php';

     
    if (isset($_GET['bookid'])){

        $BookID = $_GET['bookid'];

        $slc_Bk = $conn->prepare("SELECT * FROM book WHERE BookID= :BookID");
        $slc_Bk->bindParam(':BookID', $BookID);
        $slc_Bk->execute();
        $row = $slc_Bk->fetch();
        $BookTitle = $row['BookTitle'];
        $OriginalTitle = $row['OriginalTitle'];
        $YearofPublication = $row['YearofPublication'];
        $Genre = $row['Genre'];
        $MillionsSold = $row['MillionsSold'];
        $LanguageWritten = $row['LanguageWritten'];
        $AuthorID = $row['AuthorID'];
        $BookCover = $row['coverImagePath'];
       
            
        //$AuthorID = $_GET['bookid'];
        $slc_Athr = $conn->prepare("SELECT * FROM author WHERE AuthorID = :AuthorID");
        $slc_Athr->bindparam(':AuthorID', $AuthorID);
        $slc_Athr->execute();
        $rows = $slc_Athr->fetch();
        $Name = $rows['Name'];
        $Surname = $rows['Surname'];
        $Nationality = $rows['Nationality'];
        $BirthYear = $rows['BirthYear'];
        $DeathYear = $rows['DeathYear'];


?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit Book - Mybook</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <!-- Bulma Version 0.7.1-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css" />
        <link rel="stylesheet" href="view/css/bGnds.css" type="text/css">
    </head>
        <body>

            <form action ="../../controller/pdoEdit.php" method = "POST">
                <fieldset></br>
                     <legend>Author Detail:</legend>
                            <div class="field">
                                <label class="label"> Author Name</label>
                                    <div class="control">
                                        <input class="input" type="text" name="Name" placeholder="" value="<?php echo $Name;?>" pattern="[a-zA-Z]{1,20}" title = "Name must be more than one charactor">
                                    </div>
                            </div>

                            <div class="field">
                                <label class="label">Surname</label>
                                    <div class="control">
                                        <input class="input" type="text" name="Surname" placeholder="" value="<?php echo $Surname;?>" pattern="[a-zA-Z]{1,20}" title = "Surname must be more than one charactor">
                                    </div>
                            </div>

                            <div class="field">
                                <label class="label">Nationality</label>
                                    <div class="control">
                                        <input class="input" type="text" name="Nationality" placeholder="" value="<?php echo $Nationality;?>" pattern="[a-zA-Z]{1,20}" title = "Nationality must be more than one charactor" >
                                    </div>
                            </div>

                            <div class="field">
                                <label class="label">Birth Year</label>
                                    <div class="control">
                                        <input class="input" type="number" name="BirthYear" placeholder="" value="<?php echo $BirthYear;?>" pattern = "[0-9]{4}">
                                    </div>
                            </div>

                            <div class="field">
                                <label class="label">Death Year</label>
                                    <div class="control">
                                        <input class="input" type="text" name="DeathYear" placeholder="" value="<?php echo $DeathYear;?>">
                                    </div>
                            </div>
                </fieldset></br>
                <fieldset>
                    <legend>Book Detail</legend>          

                            <div class="field">
                                <label class="label">BookTitle</label>
                                    <div class="control">
                                        <input class="input" type="text" name="BookTitle"  value="<?php echo $row['BookTitle'];?>" pattern="[a-zA-Z]{1,20}" title = "Book Title must be more than one charactor">
                                    </div>
                            </div>
                            
                            <div class="field">
                                <label class="label">OriginalTitle</label>
                                    <div class="control">
                                        <input class="input" type="text" name="OriginalTitle" placeholder="" value="<?php echo $row['OriginalTitle'];?>"pattern="[a-zA-Z]{1,20}" title = "Original Title must be more than one charactor">
                                    </div>    
                            </div>

                            <div class="field">
                                <label class="label">Year Of Publication</label>
                                    <div class="control">
                                        <input class="input" type="number" value = "<?php echo $row['YearofPublication'];?>" pattern = "[0-9]{4}" name= "YearofPublication" placeholder= "" >
                                    </div>
                            </div>

                            <div class="field">
                                <label class="label">Genre</label>
                                    <div class="control">
                                        <input class="input" type="text"  name="Genre" placeholder="" value="<?php echo $row['Genre'];?>" pattern="[a-zA-Z]{1,20}" title = "genre  must be more than one charactor">
                                    </div>
                            </div>

                            <div class="field">
                                <label class="label">Millions Sold</label>
                                    <div class="control">
                                        <input class="input" type="number" value="<?php echo $row['MillionsSold'];?>" pattern = "[0-9]{4}" name="MillionsSold" placeholder="" >
                                    </div>
                            </div>

                            <div class="field">
                                <label class="label">Language Written</label>
                                    <div class="control">
                                        <input class="input" type="text" value ="<?php echo $row['LanguageWritten'];?>" name="LanguageWritten" placeholder="" pattern="[a-zA-Z]{1,20}" title = "lauguage must be more than one charactor">
                                    </div>
                            </div>   

                            <div class="field">
                                <label class="label">AuthorID</label>
                                    <div class="control">
                                        <input class="input" name="AuthorID" type="number"  value = "<?php echo $row['AuthorID'];?>" pattern = "[0-9]" placeholder="" >
                                    </div>
                            </div>

                            <div class="field">
                                <label class="label">Cover Image</label>
                                    <div class="control">
                                        <input class="input" type="text" name="coverImagePath" value="<?php echo $row['coverImagePath'];?>" placeholder="">
                                    </div>
                            </div>
                </fieldset>   </br>         
                        
                        <input type = "hidden" name = "action_type" value = "add">
                        <button class="button  is-block is-info is-large">Edit</button>
            </form>
        </body> 
</html>

<?php
    }
    include'footer.php';
?>