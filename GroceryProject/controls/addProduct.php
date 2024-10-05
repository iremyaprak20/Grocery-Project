<?php
include_once("conSettings.php");


$categoryquery = "select * from categories";
$categoryqueryResult = mysqli_query($connection, $categoryquery);


if (isset($_POST['add_product'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_category = $_POST['product_category'];
    $product_brand = $_POST['product_brand'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
    $product_image_folder = 'uploaded_img/' . $product_image;

    if (empty($product_name) || empty($product_price) || empty($product_image)) {
        $message[] = "Please Fill Out All";
    }
    else {
        $query = "select * from products";
        $queryRes = mysqli_query($connection, $query);
        if(isset($queryRes)) {
            while($row = $queryRes->fetch_array()) {
                $LastID = $row['ID'];
            }
        }
        else {
            $LastID = 0;
        }
        $NewID = $LastID + 1;
        $insert = "INSERT INTO products(ID,product_name, brand, category_id,price, image) VALUES ($NewID,'$product_name', '$product_brand', $product_category, '$product_price','$product_image')";
        $upload = mysqli_query($connection,$insert);
        if ($upload){
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
            $message[] = "New Product Added Succesfully";
        }
        else{
            $message[] = "Could Not Add The Product";
        }
    }
}


