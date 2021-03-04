<?php
    $link = mysqli_connect("localhost","root","a12345678");
    mysqli_select_db($link,"store");
    $sql = "SELECT * FROM product";
    $result = mysqli_query($link,$sql);

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>產品頁</title>
		<link rel="stylesheet" href="css/product_style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <script type="text/javascript">
            function fun_op(){
                location.replace("product_page.html");
            }
        </script>
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

            <!--
            <div class="product">
                <div class="imgbox"><img src="image/product-1.png"></div>

                <div class="details">

                    <h2>新品推出<br><span>【稻荷。白面者。綠苔】</span></h2>

                    <div class="price">NT$1,780</div>

                    <label>Sizes</label>
                    <ul>
                        <li>XS</li>
                        <li>S</li>
                        <li>M</li>
                        <li>L</li>
                        <li>XL</li>
                        <li>XXL</li>
                    </ul>

                    <a href="#">加入購物車</a>
                </div>
            </div>
            -->

            <?php 
                for($i=0;$i<mysqli_num_rows($result);$i++){
                    
                    $data = mysqli_fetch_object($result);

                    echo "
                        <div class='product'>
                            <div class='imgbox'><img src='image/".$data->product_image."'></div>
    
                            <div class='details'>
    
                                <h2>".$data->product_status."<br><span>".$data->product_name."</span></h2>
    
                                <div class='price'>NT$".$data->product_price."</div>
    
                                <label>Sizes</label>
                                <ul>
                                    <li>XS</li>
                                    <li>S</li>
                                    <li>M</li>
                                    <li>L</li>
                                    <li>XL</li>
                                    <li>XXL</li>
                                </ul>
                                <form method='post' action='product_page.php?product_id=".$data->product_id."'>
                                    <input type='submit' value='商品介紹'>
                                </form>
                            </div>
                        </div>
                    ";
                }
            ?>
            
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