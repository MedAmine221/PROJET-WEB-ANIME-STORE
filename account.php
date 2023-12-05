<?php
    include("connection.php");
    include("login.php");
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/375f585449.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <title>Anime Store</title>
    </head>
    <body>
        <section id = "header">
            <a href="index.php"><img src = "img/Logo/AnimeStore.png" class= "logo" alt=""></a>
            <div>
                <ul id="navbar">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a class = "active" href="account.php">Account</a></li>
                    <li><a href="service.php">Service</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li id="lg-bag"><a href="cart.php"><i class="fas fa-shopping-bag"></i></a></li>
                    <a href="#" id="close"><i class="fas fa-times"></i></a>
                </ul>
            </div>
            <div id="mobile">
                <a href="cart.php"><i class="fas fa-shopping-bag"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>
        </section>

        <div class="container" >
            <div class="login-left">
                <div class="login-header">
                    <h1>WELCOME TO OUR ANIME STORE</h1>
                    <p>Please log in to place your order</p>
                </div>
                <form class="login-form" action = "login.php" method = "POST">
                    <div class="login-form-content">
                        <div class="form-item">
                            <label for="email">ENTER EMAIL </label>
                            <input type="email" id="email" name = "email">
                        </div>
                        <div class="form-item">
                            <label for="password">ENTER PASSWORD </label>
                            <input type="password" id="password" name = "password">
                        </div>
                        <div class="form-item">
                            <div class="checkbox">
                                <input type="checkbox" id="remember-me" checked>
                                <label class="checkbox" for="remember-me">Remember me</label>
                            </div>
                        </div>
                         <button class="bouttom" type="submit" name = "submit">Sign In</button>
                    </div>
                    <div class="login-form-footer">
                        <a href="#"><img src="src/fb_icon_325x325.png" width="30">Facebook Login</a>
                        <a href="#"><img src="src/téléchargement.png" width="30">Google Login</a>
                    </div>
    
                </form>
            </div>
            <div class="login-right">
                <img src="src/GreatGlaringCobra-max-1mb.gif" width="1000">
            </div>
        </div>

        <?php
            include("footer.html");
        ?>

        <script src = "script.js"></script>
    </body>
</html>