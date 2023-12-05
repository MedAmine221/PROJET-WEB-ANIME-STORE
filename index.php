<?php
    $types = array("t-shirt", "sticker", "hoodie", "figurine", "mug", "poster", "keychain");
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        />
        <link rel="stylesheet" href="style.css">
        <title>Anime Store</title>
    </head>
    <body>
        <section id = "header">
            <a href="index.php"><img src = "img/Logo/AnimeStore.png" class= "logo" alt=""></a>
            <div>
                <ul id="navbar">
                    <div class = "form">
                        <form action="search.php" method = "get">
                            <input type="text" name = "query" placeholder="Search Product">
                        </form>
                    </div>
                    <li><a class = "active" href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="account.php">Account</a></li>
                    <li><a href="service.php">Service</a></li>
                    <li><a href="contact.php">Contact</a></li>
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

        <section id = "feature" class="section-p1">
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

        <!-- featured products grouped by type -->

        <?php 
            foreach ($types as $type) {
                ?> 
                    <section id="product1" class="section-p1">
                        <h2>Featured Products</h2>
                        <p><?php echo "$type"."s" ?></p>
                        <div class="pro-container">
                            <?php 
                                include("connection.php");

                                $sql = "select distinct * from product where type = '".$type."';";
                                $result = mysqli_query($conn, $sql);

                                $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

                                mysqli_free_result($result);

                                mysqli_close($conn);

                                $product_details_page_name = "";
                            ?>

                            <?php
                                foreach ($products as $product) {
                                    switch (htmlspecialchars($product["type"])) {
                                        case "t-shirt":
                                            $product_details_page_name = "single-product-t-shirt.php";
                                            break;

                                        case "figurine":
                                            $product_details_page_name = "single-product-figurine.php";
                                            break;

                                        case "hoodie":
                                            $product_details_page_name = "single-product-hoodie.php";
                                            break;

                                        case "keychain":
                                            $product_details_page_name = "single-product-keychain.php";
                                            break;
                                        
                                        case "mug":
                                            $product_details_page_name = "single-product-mug.php";
                                            break;

                                        case "poster":
                                            $product_details_page_name = "single-product-poster.php";
                                            break;
                                            
                                        default:
                                            $product_details_page_name = "single-product-sticker.php";
                                            break;
                                    }

                                    ?>
                                    
                                    <div class = "pro" onclick="window.location.href='<?php echo $product_details_page_name.'?name='.$product['name'] ?>'">
                                        <img src="<?php echo htmlspecialchars($product["image_path"]) ?>" alt="">
                                        <div class="des">
                                            <span><?php echo htmlspecialchars($product["name"]) ?></span>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <h4>$<?php echo htmlspecialchars($product["price"]) ?></h4>
                                        </div>
                                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                                    </div>
                                    
                                    <?php 
                                }
                            ?>
                        </div>
                    </section>
                <?php
            }
        ?>

        <!-- newsletter -->

        <?php
            include("newsletter.html"); 
        ?>

        <!-- footer -->

        <?php
            include("footer.html");
        ?>

        <script src = "script.js"></script> 
    </body>
</html>