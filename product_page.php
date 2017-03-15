<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
    <style>
        .logo {
            position: absolute;
            margin-top: 5%;
            margin-left: 5%;
        }

        .body {
            padding: 0 !important;
        }
    </style>
    <script>
        $('.gal-item').click(function () {
            $(".main-photo").find("img").attr('src') = $(this).find('img').attr('src');
        })
    </script>
    <!-- Navigation -->
<?php //include "includes/navigation.php"; ?>

    <!-- Page Content -->
<?php // include "includes/carousel.php"; ?>

<?php

if (isset($_GET['p_id'])) {
    $get_product_id = $_GET['p_id'];
}


$query = "SELECT * FROM products WHERE product_id = {$get_product_id}";
$select_all_products = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_all_products)) {
    $product_id = $row['product_id'];
    $product_name = $row['product_name'];
    $product_date = $row['product_date'];
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
    $product_content = $row['product_content'];
    $product_desc = $row['product_desc'];
    $product_short_desc = $row['product_short_desc'];
    $product_category_id = $row['product_category_id'];
    $youtube_link = $row['youtube_link'];

    $catQuery = "SELECT cat_image FROM category WHERE cat_id = {$product_category_id}";
    $select_category = mysqli_query($connection, $catQuery);
    while ($row = mysqli_fetch_assoc($select_category))
        $cat_image = $row['cat_image'];

    ?>

    <div id="myCarousel" class="carousel slide">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active" style="position:relative">
                <div>
                    <a href="#">
                        <div class="logo" style="margin-top: 3%"><img src="http://gardetech.com/wp-content/themes/gardetech/images/logo-1543167586.png"></div>
                    </a>
                    <img src="http://lorempixel.com/1680/300/nature/1/CATEGORY%20IMAGE/">
                </div>
            </div>
            <!--
                        <div class="item" style="position:relative">
                            <div>
                            <div class="logo"><img src="http://gardetech.com/wp-content/themes/gardetech/images/logo-1543167586.png"> </div>
                            <img src="http://lorempixel.com/1680/670/nature/5/">
                        </div>
                        </div>

                        <div class="item" style="position:relative">
                            <div>
                            <div class="logo"><img src="http://gardetech.com/wp-content/themes/gardetech/images/logo-1543167586.png"> </div>
                            <img src="http://lorempixel.com/1680/670/nature/6/">
                        </div>
            -->
        </div>

    </div>

    <div class="container" style="padding:90px 0px;">
        <div class="col-xs-12">
            <h1><?php echo $product_name ?></h1>
            <p><?php echo $product_short_desc ?></p>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
            <div class="main-photo">
                <img src="<?php echo $product_image ?>">
            </div>
            <div class="gallery">
                <?php if ($product_image2 != '') echo "<div class=\"gal-item\"><img src=\"" . $product_image2 . "\"> </div>" ?>
                <?php if ($product_image3 != '') echo "<div class=\"gal-item\"><img src=\"" . $product_image3 . "\"> </div>" ?>
                <?php if ($product_image4 != '') echo "<div class=\"gal-item\"><img src=\"" . $product_image4 . "\"> </div>" ?>
                <?php if ($product_image5 != '') echo "<div class=\"gal-item\"><img src=\"" . $product_image5 . "\"> </div>" ?>
                <?php if ($product_image6 != '') echo "<div class=\"gal-item\"><img src=\"" . $product_image6 . "\"> </div>" ?>
                <?php if ($product_image7 != '') echo "<div class=\"gal-item\"><img src=\"" . $product_image7 . "\"> </div>" ?>
                <?php if ($product_image8 != '') echo "<div class=\"gal-item\"><img src=\"" . $product_image8 . "\"> </div>" ?>
                <?php if ($product_image9 != '') echo "<div class=\"gal-item\"><img src=\"" . $product_image9 . "\"> </div>" ?>
                <?php if ($product_image10 != '') echo "<div class=\"gal-item\"><img src=\"" . $product_image10 . "\"> </div>" ?>

            </div>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
            <table class="table table-striped">
                <tbody>
                <?php echo $product_desc ?>

                </tbody>
            </table>
            <div class="col-xs-12 col-md-6">
                <?php echo $youtube_link ?>
            </div>
        </div>
        </row>

        <div class="col-xs-12 col-md-12">
            <hr>
            <h2>Opis produktu</h2>
            <span>
<?php echo $product_content ?>
</span>
        </div>

    </div>
<?php } ?>
    <hr>
    <!-- Footer -->
<?php include "includes/footer.php"; ?>