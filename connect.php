<?php

/* host */
$host = "localhost";

/* database navn */
$dbName = "wilderness";

/* brugernavn & password */
$dbUsername = "root";
$dbPassword = "";

/* try-catch til database handler & forbindelse */

try {
    $dbh = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $dbUsername, $dbPassword);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
