<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sacle=1, maximun-scale=1">
    <title>Add Product - The Silence</title>
    <link rel="shortcut icon" type="image/png" href="Images/Logo.png">
    <link rel = "stylesheet" href = "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link rel="stylesheet" href="s.css">
</head>
<body>
        <input type="checkbox" id="nav-toggle">
        <div class="sidebar">
            <div class="sidebar-brand">
                <div class="logo">
                    <a href="index.php"><img src="Images/Logo.png" width="130px" alt="logo.png"></a>
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
        <h1 style="margin-bottom: 15px">Thêm sản phẩm</h1>
        <div class="fixtablesp">
                
            <form id="addProduct" action="addProduct.php" method="POST" enctype="multipart/form-data">
                <div class="wrap-field">
                    <label>Tên sản phẩm: </label>
                    <input type="text" name="name" value= ""/>
                    <div class="clear-both"></div>
                </div>
                <div class="wrap-field">
                    <label>Hình ảnh: </label>
                    <div class="right-wrap-field">
                        <input type="file" name="image" ss/></div>
                    <div class="clear-both"></div>
                </div>
                <div class="wrap-field">
                    <label>Giá: </label>
                    <input type="text" name="price" value= ""/>
                    <div class="clear-both"></div>
                </div>
                <div class="wrap-field">
                    <label>Phân loại: </label>
                    <input type="text" name="type" value= ""/>
                    <div class="clear-both"></div>
                </div>
                <div class="wrap-field">
                    <label>Số lượng: </label>
                    <input type="text" name="number" value= ""/>
                    <div class="clear-both"></div>
                </div>
                <br>
                <button type="submit" class="detail" align="center" style="margin-bottom: 20px;">Thêm sản phẩm</button>
                <a class="detail" href="product.php">Trở về</a>
        
            </form> 
        <style>
            input{
                height:30px;
                width: 100%;
             
            }
        </style>
               
            </div>
        </main>
    </div>

</body>
</html>