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
                    <li><a href="account.php">Account</a></li>
                    <li><a href="service.php">Service</a></li>
                    <li><a class = "active" href="contact.php">Contact</a></li>
                    <li id="lg-bag"><a href="cart.php"><i class="fas fa-shopping-bag"></i></a></li>
                    <a href="#" id="close"><i class="fas fa-times"></i></a>
                </ul>
            </div>
            <div id="mobile">
                <a href="cart.php"><i class="fas fa-shopping-bag"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>
        </section>

        <section id="hero">
        </section>

        <?php
            include("footer.php");
        ?>

        <script src = "script.js"></script>
    </body>
</html>