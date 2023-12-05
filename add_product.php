<?php
    include("connection.php");

    if (isset($_POST["add"])) {
        $name = $_POST["product_name"];
        $price = $_POST["price"];
        $nb = $_POST["nb"];
        $added = 0;

        $sql = "select * from cart;";
        $result = mysqli_query($conn, $sql);

        $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

        mysqli_free_result($result);

        foreach ($products as $product) {
            if ($product['name'] == $name) {
                $product['nb']++;
                $nb += $product['nb'];
                $added = 1;
            }
        } 

        if ($added == 0) {
            $sql = "insert into cart(name, price, nb) values('".$name."', '".$price."', '".$nb."');";
            $result = mysqli_query($conn, $sql);
        } else {
            $sql = "update cart set name = '".$name."', price = '".$price."',nb  = '".$nb."' where name = '".$name."';";
            $result = mysqli_query($conn, $sql);
        }

        if ($result) {
            header("location:cart.php");
        } else {
            echo "query error: ".mysqli_error($conn);
        }
    }
?>