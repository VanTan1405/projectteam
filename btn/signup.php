<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>ĐĂNG KÝ TÀI KHOẢN</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-nd-3">
                <form id="form_reg" class="bg-light p-4 my-3" action="su.php" method="post">
                    <h2 class="py-3 text-center text-uppercase">Đăng ký tài khoản</h2>
                    <div class="form-group">
                        <label for="fullname">Họ và tên</label>
                        <input type="text" name="fullname" class="form-control" id="fullname" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Tên đăng nhập</label>
                        <input type="text" name="username" class="form-control" id="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="">Giới tính</label>
                        <div class="gt">
                            <input type="radio" name="gender" checked id="male" value= "male">
                            <label  for="male">Nam</label>
                       
                            <input  type="radio" name="gender" id="female" value="female">
                            <label  for="female">Nữ</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Địa chỉ</label>
                        <input type="text" name="address" class="form-control" id="address" required>
                    </div>
                    <label for="">Phân loại</label>
                        <div class="view">
                            <input  type="radio" name="viewer" checked id="kh" value= "kh">
                            <label  for="kh">Khách hàng</label>
                       
                           
                        </div>
                       
                 
                        <input type="submit" class="btn btn-primary btn-block mt-4" name="btn-reg" value="Đăng ký">
</form>
    </div>
</div>
</div>
</body>
</html>