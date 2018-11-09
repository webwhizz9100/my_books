
<?php
  require ("../Model/conn.php");
  require ("../Model/dbFunctions.php");
  // require "../model/testInput.php";
  if (!empty([$_POST]))

    {
        $username = !empty($_POST['username'])? testUserInput(($_POST['username'])): null;
        $password = !empty($_POST['password'])? testUserInput(($_POST['password'])): null;

          try {
                  $stmt = $conn->prepare("SELECT login.password,login.username,users.firstName,users.accessright, users.userID FROM login INNER JOIN users ON users.userID = login.userID WHERE username=:users");
                  $stmt->bindParam(':users', $username);

                  $stmt->execute();
                  $rows = $stmt -> fetch();


                  $accessright = $rows["accessright"];
                  $pass = $rows["password"];
                  $user = $rows["username"];
                  $userID = $rows["userID"];

                // print_r($rows["username"]);
                // print_r($rows["password"]);
                // print_r($rows["accessright"]);

          if ( $username== $user && password_verify($password, $pass)){
          
           session_start();


           // assign session variables
              $_SESSION["username"] = $username;
              $_SESSION["firstName"] = $firstName;
              $_SESSION["accessright"] = $accessright;
              $_SESSION["userID"] = $userID;
                                                    // $_SESSION["login"] = true;


                                                // $_SESSION['accessrights'] == "admin";


                                                //  if((isset($_SESSION['accessrights']) && $_SESSION['accessrights'] == "admin")){
           header('Location:../View/Pages/viewBooks.php');
                                                      // echo 'Hello ' .$_SESSION["username"].' you are logged in ';
          // }
            }else

              if((empty($_SESSION['user']))){
              //  header('location:../index.php');
                die(header("location: 404.php"));

                }else{
                        echo "INVALID LOGIN";
    
                         header('location:../index.php');

                    }
  
                  }catch(PDOException $e)
                    {
                    echo "Account creation problems".$e -> getMessage();
                    die();
                    }

    }  