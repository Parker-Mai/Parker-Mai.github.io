<?php
    $id = $_GET["product_id"];
    $name = $_GET["product_name"];
    $price = $_GET["product_price"];
    $image = $_GET["product_image"];
    $size = $_POST["size"];
    $quantity = $_POST["quantity"];



    if(empty($_COOKIE["product_id_list"])){
        setcookie("product_id_list",$id);
        setcookie("product_name_list",$name);
        setcookie("product_price_list",$price);
        setcookie("product_image_list",$image);
        setcookie("product_size_list",$size);
        setcookie("product_quantity_list",$quantity);
    }else{

        $product_id_array = explode(",",$_COOKIE["product_id_list"]);
        $product_name_array = explode(",",$_COOKIE["product_name_list"]);
        $product_price_array = explode(",",$_COOKIE["product_price_list"]);
        $product_image_array = explode(",",$_COOKIE["product_image_list"]);
        $product_size_array = explode(",",$_COOKIE["product_size_list"]);
        $product_quantity_array = explode(",",$_COOKIE["product_quantity_list"]);

        if(in_array($id,$product_id_array)){
            
            $key = array_search($id,$product_id_array);
            $product_quantity_array[$key] += $quantity;
        }else{
            
            $product_id_array[] = $id;
            $product_name_array[] = $name;
            $product_price_array[] = $price;
            $product_image_array[] = $image;
            $product_size_array[] = $size;
            $product_quantity_array[] = $quantity;
        }

        setcookie("product_id_list", implode(",",$product_id_array));
        setcookie("product_name_list", implode(",",$product_name_array));
        setcookie("product_price_list", implode(",",$product_price_array));
        setcookie("product_image_list", implode(",",$product_image_array));
        setcookie("product_size_list", implode(",",$product_size_array));
        setcookie("product_quantity_list", implode(",",$product_quantity_array));
    }

    echo "
        <script type='textjavascript'>
            alert('您所選擇的商品已加入購物車!');
        </script>
    ";

    header("location:product.php");
?>