<?php
    $id = $_COOKIE["id"];
    $passed = $_COOKIE["passed"];

    if($passed != "TRUE"){
        header("location:index.html");
    }else{

        setcookie("id","");
        setcookie("passed","");

        $link = mysqli_connect("localhost","root","a12345678");
        mysqli_select_db($link,"member_test");
        $sql = "DELETE FROM users WHERE users_id = '$id'";
        $result = mysqli_query($link,$sql);

        mysqli_close($link);

        echo "
            <script type='text/javascript'>
                alert('已經成功刪除會員資料了');
                location.replace('index.html');
            </script>
        ";
    }

?>