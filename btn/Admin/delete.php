<?php
include_once('config.php');

    $id=$_GET['id'];

    $sql = "DELETE FROM product WHERE id=$id";

    mysqli_query($conn,$sql) or die('Xóa dữ liệu thất bại !');

    header('Location: product.php');
    

    mysqli_close($conn);
    
?>