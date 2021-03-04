<?php
    $passed = $_COOKIE["passed"];

    if($passed != "TRUE"){
        header("location:login.html");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>會員中心</title>
        <link rel="stylesheet" href="css/member_main_style.css">
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
            <div class="view-controller-3">
                <div class="center_title">
                    會員中心
                </div>

                
                <div class="fun_list">
                    <ul>
                        <li><a href="modify.php">修改會員資料</a></li>
                        <li><a href="delete.php">刪除會員資料</a></li>
                        <li><a href="logout.php">登出</a></li>
                    </ul>
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