<?php

    $id = $_POST["product_id"];

    $product_id_array = explode(",",$_COOKIE["product_id_list"]);
    $product_name_array = explode(",",$_COOKIE["product_name_list"]);
    $product_price_array = explode(",",$_COOKIE["product_price_list"]);
    $product_image_array = explode(",",$_COOKIE["product_image_list"]);
    $product_size_array = explode(",",$_COOKIE["product_size_list"]);
    $product_quantity_array = explode(",",$_COOKIE["product_quantity_list"]);


    if(in_array($id,$product_id_array)){
        $key = array_search($id,$product_id_array);

        unset($product_id_array[$key]);
        unset($product_name_array[$key]);
        unset($product_price_array[$key]);
        unset($product_image_array[$key]);
        unset($product_size_array[$key]);
        unset($product_qiantity_array[$key]);
    }

    setcookie("product_id_list", implode(",",$product_id_array));
    setcookie("product_name_list", implode(",",$product_name_array));
    setcookie("product_price_list", implode(",",$product_price_array));
    setcookie("product_image_list", implode(",",$product_image_array));
    setcookie("product_size_list", implode(",",$product_size_array));
    setcookie("product_quantity_list", implode(",",$product_quantity_array));

    header("location:shopping_cart.php");
?>