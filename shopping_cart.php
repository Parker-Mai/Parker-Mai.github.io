<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>產品頁</title>
		<link rel="stylesheet" href="css/shopping_cart.css">
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
            <div class="form_background">
                <!--
                <div class="product">
                    <div class="left"><img src="image/product-1.png"></div>
                    <div class="right">
    
                        <div class="detail">
                            <h3>【稻荷。白面者。綠苔】</h2>
                            <p>NT$1,780</p>
                            <p>尺寸: S(14CM)</p>
                            <p>數量: <input type="text" value="1" size="5"><input type="button" value="更改數量"></p>
                            <p>小計: NT$</p>
                        </div>

                        <div class="delete_order">
                            <input type="button" value="刪除訂單">
                        </div>

                    </div>
                </div>
                -->
                <?php
                    if(empty($_COOKIE["product_id_list"])){
                        echo '現在沒有產品';
                    }else{
                        $product_id_array = explode(",",$_COOKIE["product_id_list"]);
                        $product_name_array = explode(",",$_COOKIE["product_name_list"]);
                        $product_price_array = explode(",",$_COOKIE["product_price_list"]);
                        $product_image_array = explode(",",$_COOKIE["product_image_list"]);
                        $product_size_array = explode(",",$_COOKIE["product_size_list"]);
                        $product_quantity_array = explode(",",$_COOKIE["product_quantity_list"]);

                        for($i=0;$i<count($product_id_array);$i++){
                            $sub_total = $product_price_array[$i] * $product_quantity_array[$i];
                    
                            echo"
                                <div class='product'>
                                    <div class='left'><img src='image/".$product_image_array[$i]."'></div>
                                    <div class='right'>
                    
                                        <div class='detail'>
                                            <h3>".$product_name_array[$i]."</h2>
                                            <p>NT$".$product_price_array[$i]."</p>
                                            <p>尺寸: ".$product_size_array[$i]."</p>
                                            <form method='post' action='change_quantity.php'>
                                                <input type='hidden' name='id' value='".$product_id_array[$i]."'>
                                                <p>數量: <input type='text' name='quantity' value='".$product_quantity_array[$i]."' size='5'><input type='submit' value='更改數量'></p>
                                            </form>
                                            <p>小計: NT$".$sub_total."</p>
                                        </div>
                    
                                        <div class='delete_order'>
                                            <form method='post' action='delete_order.php'>
                                                <input type='hidden' name='product_id' value='".$product_id_array[$i]."'>
                                                <input type='submit' value='刪除訂單'>
                                            </form>
                                        </div>
                                    </div>
                                </div>        
                            ";
                        }
                    }
                ?>

                <input type="button" value="訂單結帳" id="submit_btn">
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