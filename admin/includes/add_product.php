<?php
if (isset($_POST['create_product'])) {


    $select_id = mysqli_query($connection, 'SELECT max(product_id) FROM products');
    while ($row = mysqli_fetch_assoc($select_id)) {
        $id = $row['max(product_id)']+1;
    }



    $product_name = $_POST['product_name'];
    $product_category_id = $_POST['product_category_id'];

    $product_content = $_POST['product_content'];  //dlugi opis
    $product_desc = $_POST['product_desc']; // tabelka
    $product_tags = $_POST['product_tags']; // tabelka
    $product_short_desc = $_POST['product_short_desc']; //krotki opis
    $product_category_id = $_POST['product_category_id'];
    $youtube_link = $_POST['youtube_link'];
    $image_query = '';
        for($i = 1; $i<=20; $i++){
            if ($_FILES['product_image'.$i]['name'] != '') {
                $product_image = $_FILES['product_image'.$i]['name'];
                $product_image_tmp = $_FILES['product_image'.$i]['tmp_name'];
                $product_image = explode(".jpg", $product_image)[0];
                $product_image_name = $product_image."-".$id."-".$i.".jpg";
                move_uploaded_file($product_image_tmp, "../images/".$product_image_name);
                $image_query = $image_query.',\''.$product_image_name.'\'';
            } else {
                $product_image_name = '';
                $image_query = $image_query.',\''.$product_image_name.'\'';
            }
        }
    $product_name = $_POST['product_name'];
    $product_category_id = $_POST['product_category_id'];

    $product_content = $_POST['product_content'];  //dlugi opis
    $product_desc = $_POST['product_desc']; // tabelka
    $product_short_desc = $_POST['product_short_desc']; //krotki opis
    $product_category_id = $_POST['product_category_id'];
    $youtube_link = $_POST['youtube_link'];

    $query = "INSERT INTO products(product_name, product_category_id, product_content, product_desc, product_short_desc, youtube_link, product_tags, product_image1, product_image2, product_image3, product_image4, product_image5, product_image6, product_image7, product_image8, product_image9, product_image10, product_image11, product_image12, product_image13, product_image14, product_image15, product_image16, product_image17, product_image18, product_image19, product_image20)";
    $query .= "VALUES ('{$product_name}', {$product_category_id}, '{$product_content}', '{$product_desc}', '{$product_short_desc}', '{$youtube_link}', '{$product_tags}' $image_query)";
//echo "<pre>".$query.'<hr>'.$image_query."</pre>";
    if($_SESSION['role']==='admin') {
        $create_product = mysqli_query($connection, $query);
        confirm($query);
    }
}
?>


<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="product_name">Nazwa produktu</label>
        <input type="text" class="form-control" name="product_name">
    </div>

    <div class="form-group">
        <label for="product_category_id">Kategoria</label>
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
        <label for="product_tags">tagi</label>
        <input type="text" class="form-control" name="product_tags">
    </div>

    <div class="form-group">
        <label for="product_tags">link do youtube</label>
        <input type="text" class="form-control" name="youtube_link">
    </div>
    <!--
        <div class="form-group">
            <label for="product_status">status</label>
            <input type="text" class="form-control" name="product_status">
        </div>
    -->

    <div class="form-group">
        <label for="product_content">tabelka</label>
        <textarea class="form-control" name="product_desc" id="" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label for="product_content">krótki opis</label>
        <textarea class="form-control" name="product_short_desc" id="" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label for="product_content">długi opis</label>
        <textarea class="form-control" name="product_content" id="" cols="30" rows="10"></textarea>
    </div>

<?php
for ($i = 1; $i<=20; $i++){
    print('
        <div class="form-group">
        <label for="product_image">zdjęcie produktu '.$i.'</label>
        <input type="file" class="form-control" name="product_image'.$i.'">
    </div>
    ');
}

?>


    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_product" value="Dodaj">
    </div>
</form>