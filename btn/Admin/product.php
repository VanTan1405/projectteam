<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sacle=1, maximun-scale=1">
    <title>Products - The Silence</title>
    <link rel="shortcut icon" type="image/png" href="Images/Logo.png">
    <link rel = "stylesheet" href = "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link rel="stylesheet" href="s.css">
</head>
<body>
        <input type="checkbox" id="nav-toggle">
        <div class="sidebar">
            <div class="sidebar-brand">
                <div class="logo">
                    <a href="index.php"><img src="Images/Logo.png" width="130px" alt=""></a>
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

<div class="cards">

    <div>
        <div class="card-single">
            <div>
                <h2>Sản Phẩm</h2>
            </div>
            <div>
                <span class="las la-clipboard-list"></span>
            </div>

        </div>

        <div class="card-body">
                <table class="color-table-if" width="100%">
                    <thead>
                        <tr >
                            <a href="add.php" class="detail">THÊM SẢN PHẨM MỚI</a></tr>
                            <br>
                        <tr>
                            <br>
                            <td></td>
                            <td>Mã Sản Phẩm </td>
                            <td>Tên Sản Phẩm</td>
                            <td>Phân loại</td>
                            <td>Giá</td>
                            <td>Số lượng</td>
                         
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                            include("config.php");
                            $kq = mysqli_query($conn,"SELECT * FROM product ");
                                 while($row = mysqli_fetch_row($kq)){
                                     echo "
                                    <tr>
                                        
                                    <td class='imgsp'><img src='../Images/$row[0]' width='100%' id='ProductImg'></td>
                                    <td>$row[0]</td>
                                    <td>$row[1]</td>
                                    <td>$row[4]</td>
                                    <td>$row[3]VNĐ</td>
                                    <td>$row[5]</td>
                                    <td class='fixbutton'><a class='detail' name='edit_btn' href=edit.php?id=$row[0]>Sửa</a></td>
                                    <td class='fixbutton'><a class='detail' href=delete.php?id=$row[0]>Xóa</a></td>
                                </tr>
                                    ";
                                 };

                                 mysqli_close($conn);

                                ?>
                    </tbody>
                </table>
            

        </div>
    </div>
        </div>
    </div>

</div>
</main>
    </div>

</body>
</html>