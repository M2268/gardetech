<?php
if (isset($_GET['p_id'])) {
    $get_product_id = $_GET['p_id'];
}
$query = "SELECT * FROM products WHERE product_id={$get_product_id}";
$select_product_by_id = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($select_product_by_id)) {
    $product_name = $row['product_name'];
    $product_category_id = $row['product_category_id'];
    $product_content = $row['product_content'];  //dlugi opis
    $product_desc = $row['product_desc']; // tabelka
    $product_tags = $row['product_tags']; // tagi
    $product_short_desc = $row['product_short_desc']; //krotki opis
    $product_category_id = $row['product_category_id'];
    $youtube_link = $row['youtube_link'];
    $product_image = [];



    for($j = 1; $j<=20; $j++){
        $product_image[$j] = $row['product_image'.$j];
    }
}

if (isset($_POST)) {

    $id = $get_product_id;

    $product_name = $_POST['product_name'];
    $product_category_id = $_POST['product_category_id'];

    $product_content = $_POST['product_content'];  //dlugi opis
    $product_desc = $_POST['product_desc']; // tabelka
    $product_tags = $_POST['product_tags']; // tabelka
    $product_short_desc = $_POST['product_short_desc']; //krotki opis
    $product_category_id = $_POST['product_category_id'];
    $youtube_link = $_POST['youtube_link'];


    $image_query = '';
    for ($i = 1; $i <= 20; $i++) {
        if ($_FILES['product_image' . $i]['name'] != '') {
            $product_image = $_FILES['product_image' . $i]['name'];
            $product_image_tmp = $_FILES['product_image' . $i]['tmp_name'];
            $product_image = explode(".jpg", $product_image)[0];
            $product_image_name = $product_image . "-" . $id . "-" . $i . ".jpg";
            move_uploaded_file($product_image_tmp, "../images/" . $product_image_name);
            $image_query = $image_query . ',\'' . $product_image_name . '\'';
        } else {
            $product_image_name = '';
            $image_query .= ', \'product_image' . $i . '\' = \'' . $product_image_name . '\'';
        }
    }

    $query = "UPDATE products SET ";
    $query .= "product_name = '{$product_name}', ";
    $query .= "product_category_id = {$product_category_id}, ";
    $query .= "product_content = '{$product_content}', ";
    $query .= "product_desc = '{$product_desc}', ";
    $query .= "product_short_desc = '{$product_short_desc}', ";
    $query .= "youtube_link = '{$youtube_link}', ";
    $query .= "product_tags = '{$product_tags}', ";
    $query .= $image_query;
    $query .= "WHERE product_id = {$get_product_id}";

    echo $query;


    if ($_SESSION['role'] === 'admin') {
        $create_product = mysqli_query($connection, $query);
        confirm($query);

    }
}
else echo "test";
?>


<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="product_name">nazwa produktu</label>
        <input value="<?php echo $product_name; ?>" type="text" class="form-control" name="product_name">
    </div>

    <div class="form-group">
        <label for="product_category_id">kategoria</label>
        <select name="product_category_id" id="">
            <?php
            $query = "SELECT * FROM categories";
            $select_categories = mysqli_query($connection, $query);

            //confirm($select_categories);

            while ($row = mysqli_fetch_assoc($select_categories)) {
                $cat_id = $row['cat_id'];
                $cat_name = $row['cat_name'];
                if ($product_category_id === $cat_id)
                    $selected = 'selected="selected"';
                else $selected = '';
                echo "<option " . $selected . " value='{$cat_id}'>{$cat_name}</option>";
            }
            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="product_tags">tagi</label>
        <input value="<?php echo $product_tags ?>" type="text" class="form-control" name="product_tags">
    </div>

    <div class="form-group">
        <label for="youtube_link">link do youtube</label>
        <input value="<?php echo $youtube_link ?>" type="text" class="form-control" name="youtube_link">
    </div>
    <!--
        <div class="form-group">
            <label for="product_status">status</label>
            <input type="text" class="form-control" name="product_status">
        </div>
    -->

    <div class='form-group'>
        <label for='product_short_desc'>krótki opis</label>
        <textarea class='form-control' name='product_short_desc' id=''
                  cols='30' rows='10'><?php echo $product_short_desc ?></textarea>
    </div>

    <div class='form-group'>
        <label for='product_desc'>tabelka</label>
        <textarea class='form-control' name='product_desc' id='' cols='30'
                  rows='10'><?php echo $product_desc ?></textarea>
    </div>

    <div class='form-group'>
        <label for='product_content'>długi opis</label>
        <textarea  class='form-control' name='product_content' id='' cols='30'
                  rows='10'><?php echo $product_content ?></textarea>
    </div>

    <?php
    for($j = 1; $j<=20; $j++){
        ?>
        <div class="form-group">
            <?php if ($product_image[$j]!='') {
                echo '<img width="80px" src="../images/'.$product_image[$j].'">';
            } ?>
            <label for="product_image">zdjęcie produktu <?php echo $j;?></label>
            <input type="file" class="form-control" name="product_image<?php echo $j?>">
        </div>
    <?php } ?>



    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_product" value="Dodaj">
    </div>
</form>