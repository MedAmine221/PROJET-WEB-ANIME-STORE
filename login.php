<?php 
    include("connection.php");

    if (isset($_POST['submit'])) { 
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "select * from client where email = '$email' and password = '$password'";
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            header("location:shop.php");
        } else {
            echo '<script> window.location.href = "account.php"; alert("Login Failed. Invalid email of password") </script>';
        }
    }
?>