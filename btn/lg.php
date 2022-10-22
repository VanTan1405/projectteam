<?php
require_once "config.php";
$u = $_POST['username'];
$p = $_POST['password'];
$v = $_POST['view'];
$sql = "select * from tbl_users where username=? and password=? and view='ad'";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 'ss', $u, $p);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
if (mysqli_num_rows($result) > 0) {
    // echo '<script>alert("Lỗi đăng nhập: Tên đăng nhập và mật khẩu không đúng!")</script>';
    header("Location: ./Admin/product.php");
} else {
    echo '<script>alert("Lỗi đăng nhập: Tên đăng nhập và mật khẩu không đúng!")</script>';
}
// header("Location: ./Admin/product.php");
exit();
