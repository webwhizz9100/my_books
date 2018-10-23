
<?php
require ("../Model/conn.php");
require ("../Model/dbFunctions.php");
require "../model/testInput.php";
if (!empty([$_POST]))
echo'hello';
{
 $username = !empty($_POST['username'])? testUserInput(($_POST['username'])): null;
 $password = !empty($_POST['password'])? testUserInput(($_POST['password'])): null;

 // $accessRights = !empty($_POST['accessRights'])? testUserInput(($_POST['accessRights'])): null;


try {
$stmt = $conn->prepare("SELECT password FROM login WHERE username=:users");
$stmt->bindParam(':users', $username);
$stmt->execute();
$rows = $stmt -> fetch();
echo '  try works ';

echo $password . ' - O - ' . $rows['password']; die();



// Can't compare password like this because
// We expect there to be a hash in the database
// but we currently store the literal password.
// This will need to be changed.

  // if (password_verify($password, $rows['password'])){
  
    
 if ($password == $rows['password']){

  // assign session variables
          $_SESSION["username"] = $username;
          $_SESSION["name"] = $rows['name'];
          $_SESSION["login"] = true;
          echo ' session variable works';
    
          // header('Location:../View/Pages/viewBooks.php');
    echo 'Hello ' .$_SESSION["username"].' you are logged in ';

  }else {
          echo "INVALID LOGIN";
    // things are bad and we do not have a user
        
    //  header('location:../index.php');

}
  
          }
          catch(PDOException $e)
          {
          echo "Account creation problems".$e -> getMessage();
          die();
          }
  }
  ?>
  