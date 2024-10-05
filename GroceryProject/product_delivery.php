<?php
include_once("controls/conSettings.php");
include_once("controls/addProduct.php");

if(isset($_GET['delete'])){
    $ID = $_GET['delete'];
    mysqli_query($connection, "DELETE FROM products WHERE ID = $ID");
    header('location:product_delivery.php');
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Delivery</title>

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

    <div class="admin-product-form-container">

        <form action="" method="POST" enctype="multipart/form-data">
            <h3>Add New Product</h3>
            <input type="text" placeholder="Enter Product Name" name="product_name" class="box">
            <input type="text" placeholder="Enter Product Brand" name="product_brand" class="box">
            <select class = "box" name = "product_category" id = "product_category">
            <?php  if(isset($categoryqueryResult)){
                while($row = $categoryqueryResult->fetch_array()) {

                    echo "<option value=\"". $row['ID'] . "\">". $row['category_name'] . "</option>";
                }
            }?>
            </select>
            <input type="number" placeholder="Enter Product Price" name="product_price" class="box">
            <input type="file" accept= "image/png, image/jpeg, image/jpg" name="product_image" class="box">
            <input type="submit" class="btn" name="add_product" value="add product">
        </form>

    </div>

    <?php

        $select = mysqli_query($connection,"SELECT P.*, C.category_name FROM products P, categories C WHERE P.category_id = C.id order by P.id");

    ?>

    <div class="product-display">

        <table class="product-display-table">

            <thead>

            <tr>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Product Brand</th>
                <th>Product Category</th>
                <th>Product Price</th>
                <th>Action</th>
            </tr>
            </thead>

            <?php

                while($row = mysqli_fetch_assoc($select)){

            ?>

            <tr>
                <td><img src="uploaded_img/<?php echo $row['image'];?>" height="100"></td>
                <td><?php echo $row['product_name'];?></td>
                <td><?php echo $row['brand'];?></td>
                <td><?php echo $row['category_name'];?></td>
                <td><?php echo $row['price'];?></td>
                <td>
                    <a href="productdelivery_update.php?edit=<?php echo $row['ID'];?>" class="btn"><i class="fas fa-edit"></i>Edit
                    </a>
                    <a href="product_delivery.php?delete=<?php echo $row['ID'];?>" class="btn"><i class="fas fa-trash"></i>Delete
                    </a>
                </td>
            </tr>

            <?php }; ?>

        </table>


    </div>


</div>


</body>
</html>