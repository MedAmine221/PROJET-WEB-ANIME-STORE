<?php
    include("connection.php");

    if (isset($_POST["delete"])) {
        $name = $_POST["get_name"];

        echo $name;

        $sql = "delete from cart where name = '".$name."';";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("location:cart.php");
        } else {
            echo "query error: ".mysqli_error($conn);
        }
    }
?>