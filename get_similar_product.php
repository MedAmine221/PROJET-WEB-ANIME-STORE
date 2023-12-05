<?php 
    include("connection.php");

    $sql_0 = "select distinct * from product where type = '".htmlspecialchars($product['type'])."';";
    $result_0 = mysqli_query($conn, $sql_0);

    $products = mysqli_fetch_all($result_0, MYSQLI_ASSOC);

    mysqli_free_result($result_0);

    mysqli_close($conn);

    $product_details_page_name = "";
?>

<?php
    foreach ($products as $p) {
        switch (htmlspecialchars($p["type"])) {
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
        
        <div class = "pro" onclick="window.location.href='<?php echo $product_details_page_name.'?name='.$p['name'] ?>'">
            <img src="<?php echo htmlspecialchars($p["image_path"]) ?>" alt="">
            <div class="des">
                <span><?php echo htmlspecialchars($p["name"]) ?></span>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$<?php echo htmlspecialchars($p["price"]) ?></h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        
        <?php 
    }
?>