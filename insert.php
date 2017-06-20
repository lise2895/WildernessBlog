<?php
/* variabler */
$heading = $_POST['heading'];
$imgSrc = $_POST['imgSrc'];
$imgAlt = $_POST['imgAlt'];
$articleText = $_POST['articleText'];

/* forbind til connect.php */
require_once "connect.php";

/* forberedelse før variabler sendes til DB */
$statement = $dbh->prepare("INSERT INTO posts (imgSrc, imgAlt, heading, time, articleText) values(?, ?, ?, ?, ?) ");

/* binding til spørgsmålstegn i ovenstående statement til DB */
$statement->bindParam(1, $imgSrc);
$statement->bindParam(2, $imgAlt);
$statement->bindParam(3, $heading);
$statement->bindParam(4, $articleText);

$statement->execute();

header("location: index.php");
?>
