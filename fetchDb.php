<?php
/* forbind til connect.php */
require_once "connect.php";

/* forberedelse og eksekvering til artikler i DB */
$statement = $dbh->prepare("SELECT * FROM posts");
$statement->execute();

/* while-løkke der henter info til artikler fra DB */
while ($row = $statement->fetch(PDO::FETCH_ASSOC)) { ?>
    <article class="start-xs">
        <h2><?php echo $row['heading'] ?></h2> <img src="images/<?php echo $row['imgSrc'] ?>.jpg" alt="<?php echo $row['imgAlt'] ?>">
        <!-- poster & day of posting -->
        <p> Skrevet af <a href="#">Line</a>,
            <?php echo date("d-m-Y") ?>
        </p>
        <p>
            <?php echo $row['articleText'] ?>
        </p>
        <hr> </article>
    <?php
}
?>
