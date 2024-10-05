<?php
include_once("controls/conSettings.php");
include_once("controls/addProduct.php");


$ID = $_GET['edit'];

if (isset($_POST['update_product'])) {
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
        $update = "UPDATE products SET product_name = '$product_name', price = '$product_price', brand = '$product_brand', category_id = '$product_category', image = '$product_image '
           WHERE ID = $ID";
        $upload = mysqli_query($connection,$update);
        if ($upload){
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
            $message[] = "New Product Added Succesfully";
        }
        else{
            $message[] = "Could Not Add The Product";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Update</title>

    <!--Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--Css -->
    <link rel="stylesheet" href="product_delivery.css">
</head>
<body>

<?php
if (isset($message)) {
    foreach ($message as $msg) {
        echo '<span class="message">' . $msg . '</span>';

    }
}
?>

<div class="container">

    <div class="admin-product-form-container centered">

        <?php

        $select = mysqli_query($connection, "SELECT * FROM products WHERE ID = $ID");
        while($row = mysqli_fetch_assoc($select)){

        ?>

        <form action="" method="POST" enctype="multipart/form-data">
            <h3>Update The Product</h3>
            <input type="text" placeholder="Enter Product Name" value = "<?php $row['name']; ?>"  name="product_name" class="box">
            <input type="text" placeholder="Enter Product Brand" value = "<?php $row['brand']; ?>" name="product_brand" class="box">
            <select class = "box" value = "<?php $row['category_id']; ?>" name = "product_category" id = "product_category">
                <?php  if(isset($categoryqueryResult)){
                    while($row = $categoryqueryResult->fetch_array()) {

                        echo "<option value=\"". $row['ID'] . "\">". $row['category_name'] . "</option>";
                    }
                }?>
            </select>
            <input type="number" placeholder="Enter Product Price" value = "<?php $row['price']; ?>" name="product_price" class="box">
            <input type="file" accept= "image/png, image/jpeg, image/jpg" name="product_image" class="box">
            <input type="submit" class="btn" name="update_product" value="update product">
            <a href="product_delivery.php" class="btn">Go Back</a>
        </form>

        <?php }; ?>

    </div>

</div>

</body>
</html>