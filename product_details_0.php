<?php
    include("add_product.php");
?>

<section id="prodetails" class="section-p1">
    <?php
        if ($product) {
            ?>
                <div class="single-pro-image">
                    <img src="<?php echo htmlspecialchars($product["image_path"]) ?>" width="100%" id="MainImg" alt="">
                </div>

                <div class="single-pro-details">
                    <h6>Home / <?php echo htmlspecialchars($product["type"]) ?></h6>
                    <h4><?php echo htmlspecialchars($product["name"]) ?></h4>
                    <h2>$<?php echo htmlspecialchars($product["price"]) ?></h2>
                    <select>
                        <option>Select Size</option>
                        <option>XL</option>
                        <option>XXL</option>
                        <option>Small</option>
                        <option>Large</option>
                    </select>
                    <form action="add_product.php" method = "POST">
                        <input type="number" name = "nb" value = "1">
                        <button class="normal" name = "add">Add To Cart</button>
                        <input type="hidden" name="product_name" value = "<?php echo htmlspecialchars($product["name"]) ?>">
                        <input type="hidden" name="price" value = "<?php echo htmlspecialchars($product["price"]) ?>">
                    </form>
                    <h4>Product Details</h4>
                    <span>
                        <?php echo htmlspecialchars($product["description"]) ?>
                    </span>
                </div> 
            <?php
        } else {
            ?>
                <h1>Product Not Available</h1>
            <?php
        }
    ?>
</section>