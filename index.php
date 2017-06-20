<!DOCTYPE html>
<html lang="en">

<head>
    <!--
    WILDERNESS BLOG by Lise Andersen
    PLEASE DO NOT REMOVE THE CREDIT OR REDISTRIBUTE AS YOUR OWN!
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Wilderness | Index</title>
    <!-- HTML5 Boilerplates normalize -->
    <link href="css/normalize.css" rel="stylesheet">
    <!-- FlexBox Grid -->
    <link href="css/flexboxgrid.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Stylesheet -->
    <link href="css/styles.css" rel="stylesheet"> </head>

<body>
    <!-- header start -->
    <div class="main-container">
        <div class="container">
            <div class="row center-xs col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <header><img src="images/header_img.jpg" alt="header"></header>
            </div>
        </div>
        <!-- header end -->
        <!-- navigation start -->
        <div class="row-center col-xs-12 nav-horizon">
            <nav>
                <ul>
                    <li><a href="#">home</a></li>
                    <li><a href="#">planter</a></li>
                    <li><a href="#">indretning</a></li>
                    <li class="login"><a href="login.php">log ind</a></li>
                </ul>
            </nav>
        </div>
        <!-- navigation end -->
        <!-- main content start -->
        <main>
            <p>
                <!-- space between nav and main -->
            </p>
            <div class="row">
                <!-- sidebar start -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 center-xs">
                    <aside class="start-xs"> <img src="images/frk_overspringshandling.jpg" alt="sidebar-img">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad repudiandae autem ipsa incidunt sed molestias. Veritatis deleniti ad minima facere dolorum animi earum, in atque molestiae pariatur, odit dolores corporis!</p>
                        <hr>
                        <!-- social media icons start --><i class="fa fa-instagram fa-lg"></i> <i class="fa fa-facebook-square fa-lg"></i><i class="fa fa-flickr fa-lg"></i> <i class="fa fa-linkedin-square fa-lg"></i>
                        <!-- social media icons end -->
                    </aside>
                </div>
                <!-- sidebar end -->
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 center-xs">
                    <!-- form til nye artikler -->
                    <!-- <div class="form-padding">
                        <form action="insert.php" method="post">
                            <div class="start-xs">
                                <h2>opret et nyt indlæg</h2>
                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                    <label class="post-label" for="heading">Titel</label>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                    <input class="post-input" id="heading" type="text" name="heading" placeholder="Titel på dit indlæg"> </div>
                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                    <label class="post-label" for="imgSrc">Billednavn</label>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                    <input class="post-input" id="imgSrc" type="text" name="imgSrc" placeholder="Navn på billede uden .jpg"> </div>
                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                    <label class="post-label" for="imgAlt">Billede alt tekst</label>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                    <input class="post-input" id="imgAlt" type="text" name="imgAlt" placeholder="Billedets alt tekst"> </div>
                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                    <label class="post-label" for="articleText">Indlægets tekst</label>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                    <input class="post-input" id="articleText" type="text" name="articleText" placeholder="Indlægets tekst"> </div>
                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 button-pad">
                                    <input class="button-prop" type="submit" value="Indsæt" content="Udgiv indlæg"> </div>
                            </div>
                        </form>
                    </div> -->
                    <!-- break til opdeling fra form og artikler -->
                    <!-- <hr>  -->
                    <!-- dynamic articles start -->
                    <?php include "fetchDb.php"; ?>
                        <!-- dynamic articles end -->
                        <!-- static articles start -->
                        <article class="start-xs">
                            <h2>vores nye lænestol i egetræ og kernelæder</h2><img src="images/laenestol.jpg" alt="laenestol-article-img">
                            <!-- poster & day of posting -->
                            <p class="date"> Skrevet af <a href="#">Line</a>, den 24. august, 2017</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio exercitationem pariatur fuga suscipit natus distinctio molestiae, ab reiciendis error dolor recusandae voluptatibus eaque, at nulla ut, molestias vero animi sapiente.</p>
                            <hr> </article>
                        <article class="start-xs">
                            <h2>mit plante eksperiment</h2><img src="images/mit_plante_eksperiment.jpg" alt="plante-eksperiment-article-img">
                            <!-- poster & day of posting -->
                            <p class="date"> Skrevet af <a href="#">Line</a>, den 1. oktober, 2017</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio exercitationem pariatur fuga suscipit natus distinctio molestiae, ab reiciendis error dolor recusandae voluptatibus eaque, at nulla ut, molestias vero animi sapiente.</p>
                            <hr> </article>
                        <article class="start-xs">
                            <h2>min urban jungle baggårds make-over</h2><img src="images/urban_jungle_make-over.jpg" alt="urban-jungle-article-img">
                            <!-- poster & day of posting -->
                            <p class="date"> Skrevet af <a href="#">Line</a>, den 19. oktober, 2017</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio exercitationem pariatur fuga suscipit natus distinctio molestiae, ab reiciendis error dolor recusandae voluptatibus eaque, at nulla ut, molestias vero animi sapiente.</p>
                        </article>
                </div>
                <!-- static articles end -->
            </div>
        </main>
        <!-- main content end -->
        <!-- footer start -->
        <footer>
            <hr>
            <p>&copy; 2017 - wilderness</p>
        </footer>
        <!-- footer end -->
    </div>
</body>

</html>
