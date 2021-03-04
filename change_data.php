<?php
    $id = $_COOKIE["id"];

    $password = $_POST["password"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $sex = $_POST["sex"];
    $phone = $_POST["phone"];
    $birth = $_POST["birth"];
    $address = $_POST["address"];

    $link = mysqli_connect("localhost","root","a12345678");
    mysqli_select_db($link,"member_test");
    $sql = "UPDATE users SET users_password = '$password', users_name='$name',users_email='$email',
            users_sex='$sex',users_phone='$phone',users_birth='$birth',users_addredd='$address' WHERE users_id='$id'";

    $result = mysqli_query($link,$sql);

    mysqli_close($link);

    echo "
        <script type='text/javascript'>
            alert('會員資料修改成功!!');
            location.replace('member_main.php');
        </script>
    ";
?>