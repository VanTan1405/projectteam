<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">


    <title>Đăng nhập</title>
</head>

<body>
    <div id="wrapper">
        <form action="lg.php" method="POST" id="form-login">
            <h1 class="form-heading">ĐĂNG NHẬP</h1>
            <div class="view">
                <input type="radio" name="view" checked id="kh" value="kh">
                <label for="kh">Khách hàng</label>
            </div>
            <div class="view">
                <input type="radio" name="view" value="ad">
                <label for="ad">Admin</label>
            </div>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" class="form-input" name="username" placeholder="Tên đăng nhập">
            </div>
            <div class="form-group">
                <i class="far fa-key"></i>
                <input type="password" class="form-input" name="password" placeholder="Mật khẩu">

            </div>

            <input type="submit" value="Đăng nhập" class="form-submit" id="btns"></a>

            <div class="signup_link">
                Bạn chưa có tài khoản? <a href="signup.php" style="color:rgba(238, 104, 178, 0.8);">Đăng ký</a>
        </form>
    </div>
    <!-- <script language="javascript">
        var button = document.getElementById("btns");
        button.onclick = function() {
            alert("Bạn đã đăng nhập thành công");
        }
    </script> -->
</body>

</html>