<?php
    $account = $_POST["account"];
    $password = $_POST["password"];

    $link = mysqli_connect("localhost","root","a12345678");
    mysqli_select_db($link,"member_test");
    $sql ="SELECT * FROM users WHERE users_account = '$account' AND users_password = '$password'";
    $result = mysqli_query($link,$sql);

    if(mysqli_num_rows($result) == 0 ){

        mysqli_free_result($result);
        mysqli_close($link);

        echo "
            <script type='text/javascript'>
                alert('帳號或密碼輸入錯誤，請重新登入');
                history.back();
            </script>
        ";
        
    }else{
        
        $id = mysqli_fetch_object($result) -> users_id;

        mysqli_free_result($result);
        mysqli_close($link);

        setcookie("id",$id);
        setcookie("passed","TRUE");

        header("location:index.html");
        exit();
    }
?>