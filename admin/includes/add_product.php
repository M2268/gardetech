<?php
if(isset($_POST['create_product'])){
    $product_name = $_POST['product_name'];
    $product_category_id = $_POST['product_category_id'];
    $product_status = $_POST['product_status'];

    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];

    $product_content = $_POST['product_content'];
    $product_tags = $_POST['product_tags'];
    $product_date = date('d-m-y');

    move_uploaded_file($product_image_tmp, "../images/$product_image");

    $query = "INSERT INTO products(product_category_id, product_name, product_date, product_image, product_content, product_tags, product_status)";
    $query .= "VALUES ({$product_category_id},'{$product_name}', $product_date,'{$product_image}', '{$product_content}','{$product_tags}','{$product_status}')";
    $create_product = mysqli_query($connection, $query);

    confirm($query);
    }
?>


<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="product_name">product Title</label>
        <input type="text" class="form-control" name="product_name">
    </div>

    <div class="form-group">
        <label for="product_category_id">product category ID</label>
        <select name="product_category_id" id="">
            <?php
            $query = "SELECT * FROM categories";
            $select_categories = mysqli_query($connection, $query);

            confirm($select_categories);

            while ($row = mysqli_fetch_assoc($select_categories)) {
                $cat_id = $row['cat_id'];
                $cat_name = $row['cat_name'];
                echo "<option value='{$cat_id}'>{$cat_name}</option>";
            }
            ?>
        </select>
    </div>


    <div class="form-group">
        <label for="product_image">product image</label>
        <input type="file" class="form-control" name="product_image">
    </div>

    <div class="form-group">
        <label for="product_content">product content</label>
        <textarea class="form-control" name="product_content" id="" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label for="product_tags">product tags</label>
        <input type="text" class="form-control" name="product_tags">
    </div>

    <div class="form-group">
        <label for="product_status">product status</label>
        <input type="text" class="form-control" name="product_status">
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_product" value="Publish product">
    </div>
</form>