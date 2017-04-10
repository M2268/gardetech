<?php
if(isset($_GET['p_id'])) {
$get_product_id = $_GET['p_id'];
}
    $query = "SELECT * FROM products WHERE product_id={$get_product_id}";
    $select_product_by_id = mysqli_query($connection, $query);
    echo $query;
    while ($row = mysqli_fetch_assoc($select_product_by_id)) {
        $product_name = $row['product_name'];
        $product_category_id = $row['product_category_id'];
        $product_content = $row['product_content'];  //dlugi opis
        $product_desc = $row['product_desc']; // tabelka
        $product_tags = $row['product_tags']; // tabelka
        $product_short_desc = $row['product_short_desc']; //krotki opis
        $product_category_id = $row['product_category_id'];
        $youtube_link = $row['youtube_link'];
        $product_image = $row['product_image'];
        $product_image2 = $row['product_image2'];
        $product_image3 = $row['product_image3'];
        $product_image4 = $row['product_image4'];
        $product_image5 = $row['product_image5'];
        $product_image6 = $row['product_image6'];
        $product_image7 = $row['product_image7'];
        $product_image8 = $row['product_image8'];
        $product_image9 = $row['product_image9'];
        $product_image10 = $row['product_image10'];
    }
if(isset($_POST['edit_product'])){

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

    

    $query = "UPDATE products SET ";
    $query .= "product_name = '{$product_name}',";
    $query .= "product_category_id = {$product_category_id},";
    $query .= "product_content = '{$product_content}',";
    $query .= "product_desc = '{$product_desc}',";
    $query .= "product_short_desc = '{$product_short_desc}',";
    $query .= "youtube_link = '{$youtube_link}',";
    $query .= "product_tags = '{$product_tags}',";
    $query .= "product_image = '{$product_image}'";
    $query .= "product_image2 = '{$product_image2}'";
    $query .= "product_image3 = '{$product_image3}'";
    $query .= "product_image4 = '{$product_image4}'";
    $query .= "product_image5 = '{$product_image5}'";
    $query .= "product_image6 = '{$product_image6}'";
    $query .= "product_image7 = '{$product_image7}'";
    $query .= "product_image8 = '{$product_image8}'";
    $query .= "product_image9 = '{$product_image9}'";
    $query .= "product_image10 = '{$product_image19}'";
    $query .= "WHERE product_id = {$get_product_id}";

    $edit_product = mysqli_query($connection, $query);

    confirm($edit_product);

}
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

            confirm($select_categories);

            while ($row = mysqli_fetch_assoc($select_categories)) {
                $cat_id = $row['cat_id'];
                $cat_name = $row['cat_name'];
                if($product_category_id === $cat_id)
                    $selected = 'selected="selected"';
                else $selected ='';
                echo "<option ".$selected." value='{$cat_id}'>{$cat_name}</option>";
            }
            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="product_tags">tagi</label>
        <input value="<?php echo $product_tags?>" type="text" class="form-control" name="product_tags">
    </div>

    <div class="form-group">
        <label for="youtube_link">link do youtube</label>
        <input value="<?php echo $youtube_link?>" type="text" class="form-control" name="youtube_link">
    </div>
    <!--
        <div class="form-group">
            <label for="product_status">status</label>
            <input type="text" class="form-control" name="product_status">
        </div>
    -->

    <div class='form-group'>
        <label for='product_short_desc'>krótki opis</label>
        <textarea value='<?php echo $product_short_desc?>' class='form-control' name='product_short_desc' id='' cols='30' rows='10'></textarea>
    </div>

    <div class='form-group'>
        <label for='product_desc'>tabelka</label>
        <textarea value='<?php echo $product_desc?>' class='form-control' name='product_desc' id='' cols='30' rows='10'></textarea>
    </div>

    <div class='form-group'>
        <label for='product_content'>długi opis</label>
        <textarea value='<?php echo $product_content?>' class='form-control' name='product_content' id='' cols='30' rows='10'></textarea>
    </div>

    <div class="form-group">
        <?php if($product_image!=''){
        echo '<img width="80px" src="../images/'.$product_image.'">';
        }?>
        <label for="product_image">zdjęcie produktu</label>
        <input type="file" class="form-control" name="product_image">
    </div>

    <div class="form-group">
        <?php if($product_image2!=''){
            echo '<img width="80px" src="../images/'.$product_image2.'">';
        }?>
        <label for="product_image2">zdjęcie produktu</label>
        <input type="file" class="form-control" name="product_image2">
    </div>
    <div class="form-group">
        <?php if($product_image3!=''){
            echo '<img width="80px" src="../images/'.$product_image3.'">';
        }?>
        <label for="product_image3">zdjęcie produktu</label>
        <input type="file" class="form-control" name="product_image3">
    </div>
    <div class="form-group">
        <?php if($product_image4!=''){
            echo '<img width="80px" src="../images/'.$product_image4.'">';
        }?>
        <label for="product_image4">zdjęcie produktu</label>
        <input type="file" class="form-control" name="product_image4">
    </div>
    <div class="form-group">
        <?php if($product_image5!=''){
            echo '<img width="80px" src="../images/'.$product_image5.'">';
        }?>
        <label for="product_image5">zdjęcie produktu</label>
        <input type="file" class="form-control" name="product_image5">
    </div>
    <div class="form-group">
        <?php if($product_image6!=''){
            echo '<img width="80px" src="../images/'.$product_image6.'">';
        }?>
        <label for="product_image6">zdjęcie produktu</label>
        <input type="file" class="form-control" name="product_image6">
    </div>
    <div class="form-group">
        <?php if($product_image7!=''){
            echo '<img width="80px" src="../images/'.$product_image7.'">';
        }?>
        <label for="product_image7">zdjęcie produktu</label>
        <input type="file" class="form-control" name="product_image7">
    </div>
    <div class="form-group">
        <?php if($product_image8!=''){
            echo '<img width="80px" src="../images/'.$product_image8.'">';
        }?>
        <label for="product_image8">zdjęcie produktu</label>
        <input type="file" class="form-control" name="product_image8">
    </div>
    <div class="form-group">
        <?php if($product_image9!=''){
            echo '<img width="80px" src="../images/'.$product_image9.'">';
        }?>
        <label for="product_image9">zdjęcie produktu</label>
        <input type="file" class="form-control" name="product_image9">
    </div>
    <div class="form-group">
        <?php if($product_image10!=''){
            echo '<img width="80px" src="../images/'.$product_image10.'">';
        }?>
        <label for="product_image10">zdjęcie produktu</label>
        <input type="file" class="form-control" name="product_image10">
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_product" value="Dodaj">
    </div>
</form>