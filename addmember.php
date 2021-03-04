<?php
    $account = $_POST["account"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $sex = $_POST["sex"];
    $birth = $_POST["birth"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    

    $link = mysqli_connect("localhost","root","a12345678");
    mysqli_select_db($link,"member_test");
    $sql = "SELECT * FROM users WHERE users_account ='$account'";
    $result = mysqli_query($link,$sql);

    
    if(mysqli_num_rows($result) != 0){
        
        mysqli_free_result($result);
        mysqli_close($link);        

        echo "
            <script type=text/javascript>
                alert('這個帳號已經有人使用了，請重新輸入');
                history.back();
            </script>
        ";
    }else{

        $sql = "INSERT INTO users (users_account,users_password,users_name,users_sex,users_birth,users_phone,users_addredd,users_email)
        VALUES ('$account','$password','$name','$sex','$birth','$phone','$address','$email')";

        $result = mysqli_query($link,$sql);

        mysqli_free_result($result);
        mysqli_close($link);

        echo"
            <script type='text/javascript'>
                alert('加入會員成功');
                location.replace('login.html');
            </script>
        ";
    }
?>
