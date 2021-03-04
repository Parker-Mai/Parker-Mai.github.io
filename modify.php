<?php
    $id = $_COOKIE["id"];
    $passed = $_COOKIE["passed"];

    if($passed != "TRUE"){
        header("location:index.html");
    }else{

        $link = mysqli_connect("localhost","root","a12345678");
        mysqli_select_db($link,"member_test");
        $sql = "SELECT * FROM users WHERE users_id = '$id'";
        $result = mysqli_query($link,$sql);

        $data = mysqli_fetch_object($result);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>會員資料修改</title>
        <link rel="stylesheet" href="css/modify_style.css">
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
                    會員資料
                </div>
    
                <form method="post" action="change_data.php">
                    <div class="form_wrap">
                        <div class="input_grp">
    
                            <div class="input_wrap">
                                <label for="account">您的帳號:</label>
                                <input type="text" id="account" name="account" value="<?php echo $data -> users_account; ?>">
                            </div>
    
                            <div class="input_wrap">
                                <label for="password">您的密碼:</label>
                                <input type="password" id="password" name="password" value="<?php echo $data -> users_password;?>">
                            </div>
                        </div>

                        <div class="input_wrap">
                            <label for="name">您的姓名:</label>
                            <input type="text" id="name" name="name" value="<?php echo $data -> users_name;?>">
                        </div>   

                        <div class="input_wrap">
                            <label for="email">您的Email:</label>
                            <input type="text" id="email" name="email" value="<?php echo $data -> users_email;?>">
                        </div>       
                        
                        <div class="input_wrap">
                            <label>性別:</label>    
                            <ul>
                                <li>
                                    <label class="radio_wrap">
                                        <input type="radio" name="sex" value="男" class="input_radio" checked>
                                        <span>男</span>
                                    </label>
                                </li>
    
                                <li>
                                    <label class="radio_wrap">
                                        <input type="radio" name="sex" value="女" class="input_radio">
                                        <span>女</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="input_grp">

                            <div class="input_wrap">
                                <label for="phone">手機:</label>
                                <input type="text" id="phone" name="phone" value="<?php echo $data -> users_phone;?>">   
                            </div>

                            <div class="input_wrap">
                                <label for="birth">生日:</label>
                                <input type="text" id="birth" name="birth" placeholder="YYYYMMDD" value="<?php echo $data -> users_birth;?>">   
                            </div>

                        </div>
    
                        <div class="input_wrap">
                            <label for="address">地址:</label>
                            <input type="text" id="address" name="address" value="<?php echo $data -> users_addredd;?>">
                        </div>
    
                        <div class="input_wrap">
                            <input type="submit" value="修改" class="submit_btn">
                        </div>
                    </div>
                </form>
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