<?php
    $query = $_GET['query'];

    include("connection.php");

    $result = $conn->query("SELECT distinct * FROM product WHERE name LIKE '%$query%'");

    $products = array();

    while ($row = $result->fetch_assoc()) {
        $products[] = $row;      
    }

    ?>

    <!DOCTYPE html>

    <html lang = "en">
        <head>
            <meta charset = "UTF-8">
            <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
            <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
            <title>Anime Store</title>
            <script src="https://kit.fontawesome.com/375f585449.js" crossorigin="anonymous"></script>     
            <link rel="stylesheet" href="style.css">
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
                        <li><a href="index.php">Home</a></li>
                        <li><a class = "active" href="shop.php">Shop</a></li>
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

            <section id="page-header">
                <h2>#stayhome</h2>
                <p>Save more with coupons & up to 70% off</p>
            </section>

            <section id="product1" class="section-p1">
                <div class="pro-container">
                    <?php 
                        include("connection.php");
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
                include("newsletter.html"); 
            ?>

            <?php
                include("footer.html");
            ?>

            <script src = "script.js"></script>
        </body>
    </html>
    
    <?php
    mysqli_close($conn);
?>