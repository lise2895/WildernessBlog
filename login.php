<!DOCTYPE html>
<html lang="en">

<head>
    <!--
    WILDERNESS BLOG by Lise Andersen
    PLEASE DO NOT REMOVE THE CREDIT OR REDISTRIBUTE AS YOUR OWN!
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Wilderness | Login</title>
    <!-- Stylesheet -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/login-styles.css" rel="stylesheet">
    <!-- HTML5 Boilerplates normalize -->
    <link href="css/normalize.css" rel="stylesheet">
    <!-- FlexBox Grid -->
    <link href="css/flexboxgrid.css" rel="stylesheet"> </head>

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
                    <li><a href="index.php">home</a></li>
                    <li><a href="#">planter</a></li>
                    <li><a href="#">indretning</a></li>
                    <li class="login"><a href="login.php">log ind</a></li>
                </ul>
            </nav>
        </div>
        <!-- navigation end -->
        <div class="page-padding">
            <div>
                <form action="checkUser.php" method="post">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label for="username">Brugernavn</label>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <input type="text" id="username" placeholder="Indtast dit brugernavn" name="formUsername"> </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label for="pass">Password</label>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <input type="password" id="pass" placeholder="Indtast dit password" name="formPassword"> </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 button-prop">
                        <button type="submit">Log ind</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- footer start -->
        <footer>
            <hr>
            <p>&copy; 2017 - wilderness</p>
        </footer>
        <!-- footer end -->
    </div>
</body>

</html>
