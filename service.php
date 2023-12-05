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
        <section id="header">
            <a href="index.php"><img src="img/Logo/AnimeStore.png" class="logo" alt=""></a>
            <div>
                <ul id="navbar">
                    <li><a href="index.ph">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="account.php">Account</a></li>
                    <li><a class="active" href="service.php">Service</a></li>
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

        <!-------------------------------------------------------->

        <section id="page-header" class="about-header">
            <h2>#KnowUs</h2>
            <p>Lorem ipsum dolor sit amet, consecteur</p>
        </section>

        <!-------------------------------------------------------->

        <section id="about-head" class="section-p1">
            <img src="img/Banners/anime_7.jpg" alt="">
            <div>
                <h2>Who We Are ?</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit iure quo nulla earum ut suscipit magnam
                    voluptas, fugiat doloremque, ipsam quos sint laborum consequuntur obcaecati sapiente similique nobis
                    accusantium porro!</p>
                <abbr
                    title="Create stunning images with as much or as little control as you thanks to a choice of Basic and Creative modes"></abbr>
                <br><br>
                <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Create stunning images with as much or as
                    little control
                    as you thanks to a choice of Basic and Creative modes</marquee>
            </div>
        </section>

        <!-------------------------------------------------------->

        <section id="about-app" class="section-p1">
            <h1>With us you can join the <a href="#">World of Anime</a></h1>
            <div class="video">
                <video src="video/No-video-title-fdown.net.mp4" autoplay loop></video>
            </div>
        </section>

        <!-------------------------------------------------------->

        <section id="feature" class="section-p1">
            <div class="fe-box">
                <img src="img/features/f2.png" alt="">
                <h6>Online Order</h6>
            </div>
            <div class="fe-box">
                <img src="img/features/f3.png" alt="">
                <h6>Save Money</h6>
            </div>
            <div class="fe-box">
                <img src="img/features/f4.png" alt="">
                <h6>Promotions</h6>
            </div>
            <div class="fe-box">
                <img src="img/features/f5.png" alt="">
                <h6>Happy Sell</h6>
            </div>
        </section>

        <!-------------------------------------------------------->

        <?php
            include("newsletter.html"); 
        ?>

        <!-------------------------------------------------------->

        <?php
            include("footer.html");
        ?>

        <script src="script.js"></script>
    </body>

</html>