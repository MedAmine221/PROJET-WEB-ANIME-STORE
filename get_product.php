<?php 
    include("connection.php"); 

    if (isset($_GET["name"])) {
        $name = mysqli_real_escape_string($conn, $_GET["name"]);

        $sql = "select distinct * from product where name = '$name';";
        $result = mysqli_query($conn, $sql);
        
        $product = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
    }
?>