<?php
    $id = $_GET["product_id"];

    $link = mysqli_connect("localhost","root","a12345678");
    mysqli_select_db($link,"store");
    $sql ="SELECT * FROM product WHERE product_id = '$id'";
    $result = mysqli_query($link,$sql);

    $data = mysqli_fetch_object($result);
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>產品頁</title>
		<link rel="stylesheet" href="css/product_page_style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <!--------------上面-------------->
        <div class="header">

            <div class="view-controller-1">

                <div class="logo"><img src="image/logo.png"></div>

                <div class="navbar">
                    <ul>
                        <li><a href="index.html">首頁</a></li>
                        <li><a href="product.php">所有產品</a></li>
                        <li><a href="#">關於我們</a></li>
                        <li><a href="#">聯絡我們</a></li>
                        <li><a href="member_main.php">會員中心</a></li>
                        <li><a href="shopping_cart.php"><i class="fa fa-shopping-bag"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>


        <!--------------中間-------------->

        <div class="center">
            <div class="product"> 
                <div class="left">
                    <img src="image/<?php echo "$data->product_image"; ?>"> 
                </div>
                <div class="right">
                    <form method="post" action="add_to_cart.php?product_id=<?php echo "$data->product_id"; ?>&product_name=<?php echo "$data->product_name"; ?>&product_price=<?php echo "$data->product_price"; ?>&product_image=<?php echo "$data->product_image"; ?>">
                        <h2><?php echo "$data->product_name"; ?></h2>
                        <h6>NT$<?php echo "$data->product_price"; ?></h6>
                        <h6>尺寸</h6>
                        <select name="size">
                            <option>XS(14CM)</option>
                            <option>S(15CM)</option>
                            <option>M(16CM)</option>
                            <option>L(17CM)</option>
                            <option>XL(18CM)</option>
                            <option>XXL(19CM)</option>
                        </select>
                        <h6>數量</h6>
                        <input type="number" name="quantity" value="1">
                        <h6>產品理念</h6>
                        <p><?php echo "$data->product_describe"; ?></p>
                        <input type="submit" value="加入購物車">
                    </form>
                </div>
            </div>
        </div>

        <!--------------下面-------------->


        <div class="footer">

            <div class="footer_logo"><img src="image/footer.png"></div>

            <div class="detail">
                <ul>
                    <li><a href="#">退換貨政策</a></li>
                    <li><a href="#">商店介紹</a></li>
                    <li><a href="#">常見問題</a></li>
                </ul>
            </div>

            <div class="link">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                </ul>
            </div>
        </div>

    </body>
</html>