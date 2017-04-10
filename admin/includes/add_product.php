<?php
if (isset($_POST['create_product'])) {
    echo "test";
    echo $_FILES['product_image']['name'];
    $product_name = $_POST['product_name'];
    $product_category_id = $_POST['product_category_id'];

    $product_content = $_POST['product_content'];  //dlugi opis
    $product_desc = $_POST['product_desc']; // tabelka
    $product_tags = $_POST['product_tags']; // tabelka
    $product_short_desc = $_POST['product_short_desc']; //krotki opis
    $product_category_id = $_POST['product_category_id'];
    $youtube_link = $_POST['youtube_link'];

    if ($_FILES['product_image']['name'] != '') {
        $product_image = $_FILES['product_image']['name'];
        $product_image_tmp = $_FILES['product_image']['tmp_name'];
        $product_image_name = "$product_name-1.jpg";
        move_uploaded_file($product_image_tmp, "../images/$product_image_name");
    } else {
        $product_image_name = '';
    }

    if ($_FILES['product_image2']['name'] != '') {
        $product_image2 = $_FILES['product_image2']['name'];
        $product_image_tmp2 = $_FILES['product_image2']['tmp_name'];
        $product_image_name2 = "$product_image2-$product_name-2.jpg";
        move_uploaded_file($product_image_tmp2, "../images/$product_image_name2");
    } else {
        $product_image_name2 = '';
    }

    if ($_FILES['product_image3']['name'] != '') {
        $product_image3 = $_FILES['product_image3']['name'];
        $product_image_tmp3 = $_FILES['product_image3']['tmp_name'];
        $product_image_name3 = "$product_image2-$product_name-3.jpg";
        move_uploaded_file($product_image_tmp3, "../images/$product_image_name3");
    } else {
        $product_image_name3 = '';
    }

    if ($_FILES['product_image4']['name'] != '') {
        $product_image4 = $_FILES['product_image4']['name'];
        $product_image_tmp4 = $_FILES['product_image4']['tmp_name'];
        $product_image_name4 = "$product_image4-$product_name-4.jpg";
        move_uploaded_file($product_image_tmp4, "../images/$product_image_name4");
    } else {
        $product_image_name4 = '';
    }

    if ($_FILES['product_image5']['name'] != '') {
        $product_image5 = $_FILES['product_image5']['name'];
        $product_image_tmp5 = $_FILES['product_image5']['tmp_name'];
        $product_image_name5 = "$product_image5-$product_name-5.jpg";
        move_uploaded_file($product_image_tmp5, "../images/$product_image_name5");
    } else {
        $product_image_name5 = '';
    }

    if ($_FILES['product_image6']['name'] != '') {
        $product_image6 = $_FILES['product_image6']['name'];
        $product_image_tmp6 = $_FILES['product_image6']['tmp_name'];
        $product_image_name6 = "$product_image6-$product_name-6.jpg";
        move_uploaded_file($product_image_tmp6, "../images/$product_image_name6");
    } else {
        $product_image_name6 = '';
    }

    if ($_FILES['product_image7']['name'] != '') {
        $product_image7 = $_FILES['product_image7']['name'];
        $product_image_tmp7 = $_FILES['product_image7']['tmp_name'];
        $product_image_name7 = "$product_image7-$product_name-7.jpg";
        move_uploaded_file($product_image_tmp7, "../images/$product_image_name7");
    } else {
        $product_image_name7 = '';
    }

    if ($_FILES['product_image8']['name'] != '') {
        $product_image8 = $_FILES['product_image8']['name'];
        $product_image_tmp8 = $_FILES['product_image8']['tmp_name'];
        $product_image_name8 = "$product_image8-$product_name-8.jpg";
        move_uploaded_file($product_image_tmp8, "../images/$product_image_name8");
    } else {
        $product_image_name8 = '';
    }

    if ($_FILES['product_image9']['name'] != '') {
        $product_image9 = $_FILES['product_image9']['name'];
        $product_image_tmp9 = $_FILES['product_image9']['tmp_name'];
        $product_image_name9 = "$product_image9-$product_name-9.jpg";
        move_uploaded_file($product_image_tmp9, "../images/$product_image_name9");
    } else {
        $product_image_name9 = '';
    }

    if ($_FILES['product_image10']['name'] != '') {
        $product_image10 = $_FILES['product_image10']['name'];
        $product_image_tmp10 = $_FILES['product_image10']['tmp_name'];
        $product_image_name10 = "$product_image10-$product_name-10.jpg";
        move_uploaded_file($product_image_tmp10-10, "../images/$product_image_name-10");
    } else {
        $product_image_name10 = '';
    }

    $product_name = $_POST['product_name'];
    $product_category_id = $_POST['product_category_id'];

    $product_content = $_POST['product_content'];  //dlugi opis
    $product_desc = $_POST['product_desc']; // tabelka
    $product_short_desc = $_POST['product_short_desc']; //krotki opis
    $product_category_id = $_POST['product_category_id'];
    $youtube_link = $_POST['youtube_link'];

    $query = "INSERT INTO products(product_name, product_category_id, product_content, product_desc, product_short_desc, youtube_link, product_tags, product_image, product_image2, product_image3, product_image4, product_image5, product_image6, product_image7, product_image8, product_image9, product_image10)";
    $query .= "VALUES ('{$product_name}', {$product_category_id}, '{$product_content}', '{$product_desc}', '{$product_short_desc}', '{$youtube_link}', '{$product_tags}', '$product_image_name', '$product_image_name2', '$product_image_name3', '$product_image_name4', '$product_image_name5', '$product_image_name6', '$product_image_name7', '$product_image_name8', '$product_image_name9', '$product_image_name10' )";
    $create_product = mysqli_query($connection, $query);
    echo $query;
    confirm($query);
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


    <div class="form-group">
        <label for="product_image">zdjęcie produktu</label>
        <input type="file" class="form-control" name="product_image">
    </div>
    <div class="form-group">
        <label for="product_image">zdjęcie produktu</label>
        <input type="file" class="form-control" name="product_image2">
    </div>
    <div class="form-group">
        <label for="product_image">zdjęcie produktu</label>
        <input type="file" class="form-control" name="product_image3">
    </div>
    <div class="form-group">
        <label for="product_image">zdjęcie produktu</label>
        <input type="file" class="form-control" name="product_image4">
    </div>
    <div class="form-group">
        <label for="product_image">zdjęcie produktu</label>
        <input type="file" class="form-control" name="product_image5">
    </div>
    <div class="form-group">
        <label for="product_image">zdjęcie produktu</label>
        <input type="file" class="form-control" name="product_image6">
    </div>
    <div class="form-group">
        <label for="product_image">zdjęcie produktu</label>
        <input type="file" class="form-control" name="product_image7">
    </div>
    <div class="form-group">
        <label for="product_image">zdjęcie produktu</label>
        <input type="file" class="form-control" name="product_image8">
    </div>
    <div class="form-group">
        <label for="product_image">zdjęcie produktu</label>
        <input type="file" class="form-control" name="product_image9">
    </div>
    <div class="form-group">
        <label for="product_image">zdjęcie produktu</label>
        <input type="file" class="form-control" name="product_image10">
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_product" value="Dodaj">
    </div>
</form>