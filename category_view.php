<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
    <style>
        .logo {
            position: absolute;
            margin-top: 5%;
            margin-left: 5%;
        }

        a, h2, li {
            cursor: pointer;
        }

    </style>
    <!-- Navigation -->
<?php //include "includes/navigation.php"; ?>

    <!-- Page Content -->
<?php //include "includes/carousel.php"; ?>
    <div id="myCarousel" class="carousel slide">


        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active" style="position:relative">
                <div>
                    <a href="#">
                        <div class="logo" style="margin-top: 3%"><img
                                    src="http://gardetech.com/wp-content/themes/gardetech/images/logo-1543167586.png">
                        </div>
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
    <div class="container-fluid">

        <div class="row">

            <div class="col-md-2 col-xs-12">
                <!-- Dropdown sidebar menu -->
                <div class="container-fluid">


                    <div class="row">

                        <h2 style="padding:20px 0px 0px 20px;">KATEGORIE</h2>
                        <hr>
                        <?php

                        $query = "SELECT * FROM categories";
                        $select_all_categories = mysqli_query($connection, $query);
                        while ($row = mysqli_fetch_assoc($select_all_categories)) {
                            $cat_name = $row['cat_name'];
                            $cat_id = $row['cat_id'];
                            $upper_category_id = $row['upper_category_id'];
                            if ($upper_category_id == null) {
                                ?>
                                <div class="panel-group" style="padding-left:10px; ">
                                <div class="panel ">
                                <a data-toggle="collapse" href="#collapse1" style="color: black; text-decoration:none">
                                    <div class="panel-heading" style="border-left:4px solid #66AB36 ">
                                        <h4 class="panel-title" style="text-align: left; ">
                                            <?php echo $cat_name; ?>
                                            <div style="width: 20px; display:inline-block; float: right;">
                                                <img src="https://cdn3.iconfinder.com/data/icons/google-material-design-icons/48/ic_keyboard_arrow_down_48px-128.png">
                                            </div>
                                        </h4>
                                    </div>
                                </a>

                                <div id="collapse1" class="panel-collapse collapse">
                                <ul class="list-group">

                            <?php }
                        ;
                            if ($upper_category_id != null) {
                                $subquery = 'SELECT * FROM categories WHERE upper_category_id = ' . $cat_id;
                                $select_subcategories = mysqli_query($connection, $subquery);
                                while ($row = mysqli_fetch_assoc($select_subcategories)) {
                                    $cat_name = $row['cat_name'];
                                    $cat_id = $row['cat_id'];
                                    echo "<li class=\"list-group-item\">" . $cat_name . "</li>";
                                }
                            }
                            ?>

                            <?php if ($upper_category_id == null) { ?>
                                </ul>
                                </div>
                                </div>
                                </div>
                            <?php }
                        } ?>

                    </div>
                </div>


            </div>

            <div class="col-md-10 col-lg-10 col-xs-12">
                <div class="products">
                    <div class="r-products"><h3>Pilarki spalinowe</h3></div>
                    <hr class="rp">
                    <div id="recent" class="r-products"><span style="width:90%;"><b>Tu będzie opis kategorii do SEO </b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</span>
                    </div>

                    <?php

                    if (isset($_GET['category'])) {
                        $get_cat_id = $_GET['category'];


                        $query = "SELECT * FROM products where product_category_id = {$get_cat_id}";
                        $select_all_products = mysqli_query($connection, $query);
                    }
                    while ($row = mysqli_fetch_assoc($select_all_products)) {
                        $product_id = $row['product_id'];
                        $product_name = $row['product_name'];
                        $product_image = $row['product_image'];
                        $product_category_id = $row['product_category_id'];
                        $product_content = substr($row['product_content'], 0, 200);

                        ?>

                        <div class="product-item">
                            <a href="<?php echo '?p_id=' . $product_id ?>">
                            <div><img src="<?php echo $product_image ?>" alt=""></div>
                            <div class="p-sub"><span class="p-sub"><?php echo $product_name ?></span></div>
                            </a>
                        </div>

                    <?php } ?>


                </div>
            </div>

        </div>


    </div>
    <!-- /.row -->

    <hr>
    <!-- Footer -->
<?php include "includes/footer.php"; ?>