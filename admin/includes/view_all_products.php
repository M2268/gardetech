<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>id</th>
        <th>nazwa</th>
        <th>kategoria</th>
        <th>krótki opis</th>
        <th>tags</th>
        <th>edit</th>
        <th>delete</th>
    </tr>
    </thead>
    <tbody>

    <?php
    $query = "SELECT * FROM products";
    $select_products = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_products)) {
        $product_id = $row['product_id'];
        $product_category_id = $row['product_category_id'];
        $product_name = $row['product_name'];
        $product_short_desc = $row['product_short_desc'];
        $product_tags = $row['product_tags'];
        echo "<tr>";
        echo "<td>{$product_id}</td>";
        echo "<td>{$product_name}</td>";
        if ($_SESSION['role'] === 'admin') {
            $query = "SELECT * FROM categories WHERE cat_id = {$product_category_id}";
        }
        //echo $product_category_id;
        $select_categories_id = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($select_categories_id)) {
            $cat_id = $row['cat_id'];
            $cat_name = $row['cat_name'];
            if ($row['cat_name'] == '') {
                $cat_name = "brak kategorii!";
            }
        }
        echo "<td>{$cat_name}</td>";


        echo "<td>{$product_short_desc}</td>";
        echo "<td>{$product_tags}</td>";
        echo "<td><a href='products.php?source=edit_product&p_id={$product_id}'>edit</a></td>";
        echo "<td><a href='products.php?delete={$product_id}'>delete</a></td>";
        echo "</tr>";
    }
    ?>


    </tbody>
</table>

<?php
if (isset($_GET['delete'])) {
    $get_product_id = $_GET['delete'];
    $query = "DELETE FROM products WHERE product_id = {$get_product_id}";
    if ($_SESSION['role'] === 'admin') {
        $delete_query = mysqli_query($connection, $query);
        header("Location: products.php");
    }
}
?>