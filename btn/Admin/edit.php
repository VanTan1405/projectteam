<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sacle=1, maximun-scale=1">
    <title>Edit Products - WS25</title>
    <link rel="shortcut icon" type="image/png" href="img/icon.png">
    <link rel = "stylesheet" href = "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link rel="stylesheet" href="s.css">
</head>
<body>
        <input type="checkbox" id="nav-toggle">
        <div class="sidebar">
            <div class="sidebar-brand">
                <div class="logo">
                    <a href="index.php"><img src="Images/logo.png" width="130px" alt=""></a>
                </div>
                
            </div>
            <div class="sidebar-menu">
            <ul>
                
                <li>
                    <a href="product.php" class="active"><span class="las la-clipboard-list"></span>
                    <span>Sản Phẩm</span></a>
                </li>

                <li>
                    <a href="customer.php"><span class="las la-users"></span>
                    <span>Khách Hàng</span></a>
                </li>
        
                <li>
                    <a href="order.php"><span class="las la-shopping-bag"></span>
                    <span>Đơn Hàng</span></a>
                </li>
            </ul>
            </div>
        </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h2>
           
            
        </header>
        <main>
        <?php
            include('config.php');
            $id=$_GET['id']; //
            $kq=mysqli_query($conn, "SELECT * from product where id =$id ");
            $row=mysqli_fetch_assoc($kq);

            mysqli_close($conn);
        ?>
<h1 style="margin-bottom: 15px">Cập nhật sản phẩm</h1>
            <div class="fixtablesp">
            <form method="POST">
            <input type="hidden" name="" id="" value="<?php $_GET['id']?>">
            <label>Tên sản phẩm: <input class="form-control" name="name" type="text" value="<?php echo $row['name']; ?>"  style="width: 500px; margin-bottom: 10px; margin-left :22px;"></label><br>
            <label>Loại sản phẩm: <input class="form-control" name="type" type="text" value="<?php echo $row['type']; ?>" style="width: 500px; margin-bottom: 10px; margin-left: 20px;" ></label><br>
            <label>Số lượng: <input class="form-control" name="number" type="text" value="<?php echo $row['number']; ?>"  style="width: 500px; margin-bottom: 10px; margin-left: 58px;" ></label><br>
            <label>Giá: <input class="form-control" name="price" type="text" value="<?php echo $row['price']; ?>" style="width: 500px; margin-bottom: 10px; margin-left: 100px;"></label><br>
            <label>Hình ảnh: <input class="form-control" name="image" type="file" value="<?php echo $row['image']; ?>" style="width: 500px; margin-bottom: 10px; margin-left: 60px"></label><br>
            <input type="submit" name='update' class="detail" style="margin-bottom: 20px;" value="Cập Nhật"></input>
            <a class="detail" href="product.php">Trở về</a>
        </form> 
        <?php
    if(isset($_POST['number'])){
     
        $name = $_POST['name'];
        $number = $_POST['number'];
        $image = $_POST['image'];
        $price=$_POST['price'];
        $type=$_POST['type'];
        include('config.php');

        $sql= "update product set image='$image' , name='$name', type='$type',price=$price, number='$number' where id='$id'";
        if (mysqli_query($conn, $sql) > 0) {
            echo "Cập nhật dữ liệu thành công"."<br/>";
            echo "<a href='product.php'>Về trang chính</a>";
        }
        else {
            echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
	
?>
</div>
            </div>
        </main>
    </div>
</body>
</html>