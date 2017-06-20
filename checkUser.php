<?php

/* variabler */
$formUsername = $_POST['formUsername'];
$formPassword = $_POST['formPassword'];

/* forbind til DB */
require_once "connect.php";
/* hentning af kolonner til specifik bruger */
$statement = $dbh->prepare("SELECT * FROM users WHERE dbUsername=?");

/* binding af dbUsername*/
$statement->bindParam(1, $formUsername);
$statement->execute();

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

if(empty($rows)){
    echo "Kan ikke finde bruger!";
        header( "Refresh:3; url=login.php");
}
else{
    // Der findes ikke brugere med det navn så nu skal pass checkes
    // løkke der checker hver række om dbPassword matcher formPassword
    foreach($rows as $row) {
        if($row['dbPassword'] == $formPassword) {
            // sørg for at brugeren har tilladelser
            session_start();
            $_SESSION['username'] = $formUsername;
            header("location: index.php");
        }
    }
    echo "Forkert password!";
    header( "Refresh:3; url=login.php");

}
$dbh = null;

?>
