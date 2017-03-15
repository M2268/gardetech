<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
    <style>
        .logo {
            position: absolute;
            margin-top: 5%;
            margin-left: 5%;
        }
    </style>
    <!-- Navigation -->
<?php //include "includes/navigation.php"; ?>

    <!-- Page Content -->
<?php include "includes/carousel.php"; ?>

    <div class="container">

        <?php include "includes/firstMenu.php"; ?>
    </div>
    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-12">

            <div class="show-cat">
                <div style="position:relative" class="show-item col-xs-12 col-md-4">
                    <a href="/gardetech/category%20view.php">
                    <div style="position: absolute;"><img class="show-item"
                                                          src="http://lorempixel.com/360/360/nature/1/"></div>
                    <div style="position:absolute; z-index:1; left:30%; top:40%;"><h3 style="color:white;">WIOSNA</h3>
                    </div>
                    </a>
                </div>
                <div style="position:relative" class="show-item col-xs-12 col-md-4">
                    <a href="/gardetech/category%20view.php">
                    <div style="position: absolute;"><img class="show-item"
                                                          src="http://lorempixel.com/360/360/nature/2/"></div>
                    <div style="position:absolute; z-index:1; left:37%; top:40%;"><h3 style="color:white;">LATO</h3>
                    </div>
                    </a>
                </div>
                <div style="position:relative" class="show-item col-xs-12 col-md-4">
                    <a href="/gardetech/category%20view.php">

                    <div style="position: absolute;"><img class="show-item"
                                                          src="http://lorempixel.com/360/360/nature/3/"></div>
                    <div style="position:absolute; z-index:1; left:33%; top:40%;"><h3 style="color:white;">JESIEŃ</h3>
                    </div>
                    </a>
                </div>
            </div>


            <div class="products">
                <div class="r-products"><h3>Najnowsze produkty</h3></div>
                <hr class="rp">
                <div id="recent" class="r-products"><span class="r-products">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec gravida enim, vehicula tristique mauris..</span>
                </div>

                <div class="product-item">
                    <a href="/product_page.php">
                        <div>
                            <img src="http://gardetech.com/wp-content/uploads/2014/03/pol_pm_Opryskiwacz-cisnieniowy-5l-11205-5837_4-270x300.jpg"
                                 alt=""></div>
                        <div class="p-sub"><span class="p-sub">Opryskiwacz ciśnieniowy 5l – 11205</span></div>
                    </a></div>
                <div class="product-item">
                    <a href="/product_page.php">
                        <div>
                            <img src="http://gardetech.com/wp-content/uploads/2014/03/pol_pm_Opryskiwacz-cisnieniowy-5l-11205-5837_4-270x300.jpg"
                                 alt=""></div>
                        <div class="p-sub"><span class="p-sub">Opryskiwacz ciśnieniowy 5l – 11205</span></div>
                    </a>
                </div>
                <div class="product-item">
                    <a href="/product_page.php">
                        <div>
                            <img src="http://gardetech.com/wp-content/uploads/2014/03/pol_pm_Opryskiwacz-cisnieniowy-5l-11205-5837_4-270x300.jpg"
                                 alt=""></div>
                        <div class="p-sub"><span class="p-sub">Opryskiwacz ciśnieniowy 5l – 11205</span></div>
                    </a></div>
                <div class="product-item">
                    <a href="/product_page.php">
                        <div>
                            <img src="http://gardetech.com/wp-content/uploads/2014/03/pol_pm_Opryskiwacz-cisnieniowy-5l-11205-5837_4-270x300.jpg"
                                 alt=""></div>
                        <div class="p-sub"><span class="p-sub">Opryskiwacz ciśnieniowy 5l – 11205</span></div>
                    </a></div>
            </div>

            <!--
                <?php

            $query = "SELECT * FROM products";
            $select_all_products = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($select_all_products)) {
                $product_id = $row['product_id'];
                $product_name = $row['product_name'];
                $product_date = $row['product_date'];
                $product_image = $row['product_image'];
                $product_content = substr($row['product_content'], 0, 200);

                ?>


                    <h1 class="page-header">
                        Page Heading
                        <small>Secondary Text</small>
                    </h1>

                    <h2>
                        <a href="product.php?p_id=<?php echo $product_id; ?>"><?php echo $product_name ?></a>
                    </h2>
                    <hr>
                    <img class="img-responsive" src="images/<?php echo "$product_image"; ?>" alt="">
                    <hr>
                    <p><?php echo $product_content ?></p>

                    <hr>

                 <?php } ?>
                -->


        </div>


    </div>
    <!-- /.row -->

    <hr>
    <!-- Footer -->
<?php include "includes/footer.php"; ?>