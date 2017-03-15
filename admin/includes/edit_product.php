<?php
if(isset($_GET['p_id'])) {
$get_product_id = $_GET['p_id'];
}
    $query = "SELECT * FROM products WHERE product_id={$get_product_id}";
    $select_product_by_id = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_product_by_id)) {
        $product_id = $row['product_id'];
        $product_category_id = $row['product_category_id'];
        $product_name = $row['product_name'];
        $product_author = $row['product_author'];
        $product_date = $row['product_date'];
        $product_image = $row['product_image'];
        $product_content = $row['product_content'];
        $product_tags = $row['product_tags'];
        $product_comment_count = $row['product_comment_count'];
        $product_status = $row['product_status'];
    }
if(isset($_POST['edit_product'])){

    $product_name = $_POST['product_name'];
    $product_author = $_POST['product_author'];
    $product_category_id = $_POST['product_category_id'];
    $product_status = $_POST['product_status'];

    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];

    $product_content = $_POST['product_content'];
    $product_tags = $_POST['product_tags'];
    $product_comment_count = 4;
    $product_date = date('d-m-y');

    move_uploaded_file($product_image_tmp, "../images/$product_image");

    if(empty($product_image)){

        $query = "SELECT * FROM products WHERE product_id = {$get_product_id} ";
        $select_image = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_array($select_image)){
    $product_image = $row['product_image'];
        }

    }

    $query = "UPDATE products SET ";
    $query .= "product_name = '{$product_name}',";
    $query .= "product_category_id = {$product_category_id},";
    $query .= "product_date = '{$product_date}',";
    $query .= "product_author = '{$product_author}',";
    $query .= "product_status = '{$product_category_id}',";
    $query .= "product_tags = '{$product_tags}',";
    $query .= "product_content = '{$product_content}',";
    $query .= "product_image = '{$product_image}'";
    $query .= "WHERE product_id = {$get_product_id}";

    $edit_product = mysqli_query($connection, $query);

    confirm($edit_product);

}
?>

<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="product_name">product Title</label>
        <input value="<?php echo $product_name; ?>" type="text" class="form-control" name="product_name">
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
        <label for="product_author">Author</label>
        <input value="<?php echo $product_author; ?>" type="text" class="form-control" name="product_author">
    </div>

    <div class="form-group">
        <img width="80px" src="../images/<?php echo $product_image;?>"
        <label for="product_image">product image</label>
        <input type="file" class="form-control" name="product_image">
    </div>

    <div class="form-group">
        <label for="product_content">product content</label>
        <textarea  class="form-control" name="product_content" id="" cols="30" rows="10"><?php echo $product_content; ?></textarea>
    </div>

    <div class="form-group">
        <label for="product_tags">product tags</label>
        <input value="<?php echo $product_tags; ?>" type="text" class="form-control" name="product_tags">
    </div>

    <div class="form-group">
        <label for="product_status">product status</label>
        <input value="<?php echo $product_status; ?>" type="text" class="form-control" name="product_status">
    </div>

    <div class="form-group">
        <input  class="btn btn-primary" type="submit" name="edit_product" value="edit product">
    </div>
</form>