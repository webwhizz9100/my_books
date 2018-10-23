<?php
    include'header.php';
?>

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
    <form action ="../../model/insert.php" method = "POST">
    
    
    
    <div class="field">
            <label class="label">Book Title</label>
            <div class="control">
                <input class="input" type="text" placeholder="" value="" pattern = "[A-Za-z0-9]">
                    
          
            </div>
            <!-- <p class="help is-success">This username is available</p> -->
            </div>
            <div class="field">
                    <label class="label">OriginalTitle</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="" pattern="[A-Za-z0-9]">
                         </div>    
            </div>

            <div class="field">
                <label class="label">Year Of Publication</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="" pattern = "[A-Za-z0-9]">
                    </div>
            <!-- <p class="help is-danger">This email is invalid</p> -->
            </div>

            <div class="field">
                <label class="label">Genre</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="" pattern="[A-Za-z]">
                     </div>
            </div>
            <div class="field">
                <label class="label">Millions Sold</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="" pattern="[A-Za-z]">
                    </div>
            </div>
            <div class="field">
                <label class="label">Language Written</label>
                    <div class="control">
                        <input class="input" type="text" placeholder=""pattern="[[A-Za-z]">
                     </div>
            <div class="field">
                <label class="label">AuthorID</label>
                     <div class="control">
                         <input class="input" type="text" placeholder=""pattern="[[A-Za-z]">
            </div>
            <div class="field">
                <label class="label">Cover Image Path</label>
                    <div class="control">
                        <input class="input" type="text" placeholder=""pattern="[[A-Za-z]">
            </div>
            
   
            <button class="button  is-block is-info is-large">Submit</button>
    </form>
</body>











    </form>
</body> 
</html>

<?php
    include'footer.php';
?>