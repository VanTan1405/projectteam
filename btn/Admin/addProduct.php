<?php
    include("config.php");

    $name = $_POST['name'];
    $image = $_POST['image'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $number = $_POST['number'];
    
       $sql = "INSERT INTO product (name, image, price, type, number)
                    VALUES ('$name', '$image', ' $price','$type', '$number')";
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: product.php");
        exit();
    }
    else {
        header("Location: add.php?error=Thêm sản phẩm thất bại");
        exit();
    
    }
    
    mysqli_close($conn);
?>