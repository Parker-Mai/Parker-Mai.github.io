<?php
    $passed = $_COOKIE["passed"];
    
    if($passed != "TRUE"){
        header("location:index.html");
    }else{
        

        setcookie("id","");
        setcookie("passed","");

        echo "
            <script type='text/javascript'>
                alert('已經成功登出了!!');
                location.replace('index.html');
            </script>
        ";
    }
?>