<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.scss">
    <title>Glowna</title>
</head>
<body>
<header id="header">
    <div class="header_container">
            <?php define("LOGO","LOGO") ?>
            <h1><?php echo LOGO?></h1>
            <nav>
                <ul id="Gora">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <div>
                    <?php
                        if(isset($_SESSION['signedIn']) && $_SESSION['signedIn'] === true) {
                            echo '<button>WYLOGUJ</button>';
                        } else {
                            echo '<button type="submit" class="button_register"><a href="signInPage.php">ZALOGUJ</a></button>';
                            echo '<button type="button" class="button_register id="przycisk"><a href="registerPage.php">ZAREJESTRUJ</a></button>';
                        }
                    ?>
                </div>
            </nav>
    </div>
</header>
</body>
<section>

</section>
<footer>
    <div class="footer_container"></div>
   
</footer>
</html>