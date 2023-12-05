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
                    <li><a href="contact.php">Contact</a></li>
                    <li id="lg-bag"><a class = "active" href="cart.php"><i class="fas fa-shopping-bag"></i></a></li>
                    <a href="#" id="close"><i class="fas fa-times"></i></a>
                </ul>
            </div>
            <div id="mobile">
                <a href="cart.php"><i class="fas fa-shopping-bag"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>
        </section>

        <section id="page-header" class="about-header">
            <h2>#Let's _Talk</h2>
            <p>LEAVE A MESSAGE, We love to hear from you!</p>
        </section>

        <!-- table -->

        <section id="cart" class="section-p1">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Remove</td>
                        <td>Image</td>
                        <td>Product</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Subtotal</td>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include("connection.php");

                        $sql = "select distinct * from cart;";
                        $result = mysqli_query($conn, $sql);

                        $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

                        mysqli_free_result($result);

                        $total = 0;
                    ?>

                    <?php
                        foreach ($products as $product) {
                            $sql_0 = "select distinct * from product where name = ".'"' . htmlspecialchars($product['name']) .'"' .";";
                            $result_0 = mysqli_query($conn, $sql_0);

                            $product_0 = mysqli_fetch_assoc($result_0);

                            mysqli_free_result($result_0);

                            $subtotal = $product["nb"] * $product["price"];

                            $total += $subtotal;

                            ?> 
                                <tr>
                                    <td>
                                        <form action = "delete_product.php" method = "POST">
                                            <input type="hidden" name = "get_name" value = "<?php echo htmlspecialchars($product['name'])?>">
                                            <button name="delete"><a><i class="far fa-times-circle"></i></a> </button>
                                        </form>
                                    </td>
                                    <td><img src="<?php echo htmlspecialchars($product_0["image_path"]); ?>" alt=""></td>
                                    <td><?php echo htmlspecialchars($product_0["name"]); ?></td>
                                    <td>$<?php echo htmlspecialchars($product_0["price"]); ?></td>
                                    <td><input type = "number" value= "<?php echo $product["nb"]; ?>"></td>
                                    <td>$<?php echo $subtotal; ?></td>
                                </tr>
                            <?php
                        } 

                        if ($products == array()) {
                            ?> 
                                <h2> cart is empty </h2>
                            <?php
                        }
                        
                        mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </section>

        <!-- Coupon -->

        <section id="cart-add" class="section-p1">
            <div id="coupon">
                <h3>Apply Coupon</h3>
                <div>
                    <input type="text" placeholder="Enter Your Coupon">
                    <button class="normal">Apply</button>
                </div>
            </div>
            <div id="subtotal">
                <h3>Cart Totals</h3>
                <table>
                    <tr>
                        <td>Cart Subtotal</td>
                        <td>$ <?php echo $total; ?></td>
                    </tr>
                    <tr>
                        <td>Shipping</td>
                        <td>Free</td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>$ <?php echo $total; ?></strong></td>
                    </tr>
                </table>
                <button class="normal">Proceed to checkout</button>
            </div>
        </section>

        <?php
            include("footer.html");
        ?>

        <script src = "script.js"></script>
    </body>
</html>