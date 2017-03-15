<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>category</th>
        <th>date</th>
        <th>image</th>
        <th>content</th>
        <th>tags</th>
        <th>status</th>
        <th>edit</th>
        <th>delete</th>
    </tr>
    </thead>
    <tbody>

    <?php
    $query = "SELECT * FROM products";
    $select_products = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_products))
    {
        $product_id = $row['product_id'];
        $product_category_id = $row['product_category_id'];
        $product_name = $row['product_name'];
        $product_date = $row['product_date'];
        $product_image = $row['product_image'];
        $product_content = $row['product_content'];
        $product_tags = $row['product_tags'];
        $product_status = $row['product_status'];
        echo "<tr>";
        echo "<td>{$product_id}</td>";
        echo "<td>{$product_name}</td>";

    $query = "SELECT * FROM categories WHERE cat_id = {$product_category_id}";
    echo $product_category_id;
            $select_categories_id = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($select_categories_id)) {
                $cat_id = $row['cat_id'];
                $cat_name = $row['cat_name'];
                if($row['cat_name']==''){
                    $cat_name = "brak kategorii!";
                }
            }
        echo "<td>{$cat_name}</td>";




        echo "<td>{$product_date}</td>";
        echo "<td><img class='img-responsive' src='../images/{$product_image}'/></td>";
        echo "<td>{$product_content}</td>";
        echo "<td>{$product_tags}</td>";
        echo "<td>{$product_status}</td>";
        echo "<td><a href='products.php?source=edit_product&p_id={$product_id}'>edit</a></td>";
        echo "<td><a href='products.php?delete={$product_id}'>delete</a></td>";
        echo "</tr>";
    }
    ?>


    </tbody>
</table>

<?php
if(isset($_GET['delete'])){
    $get_product_id = $_GET['delete'];
    $query = "DELETE FROM products WHERE product_id = {$get_product_id}";
    $delete_query = mysqli_query($connection, $query);
    header("Location: products.php");
}
?>