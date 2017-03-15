<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>

    <!-- Navigation -->
<?php  include "includes/navigation.php"; ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">


                <?php



    if(isset($_POST['submit']))
    {
        $search = $_POST['search'];

        $query = "SELECT * FROM products WHERE product_tags LIKE '%$search%'";
        $search_query = mysqli_query($connection, $query);

        if(!$search_query)
        {
            die("ERROR: ".mysqli_error($connection));
        }
        $count = mysqli_num_rows($search_query);
        if($count == 0)
        {
            echo "<h1>not found</h1>";
        }
        else
        {
               $query = "SELECT * FROM products";
                $select_all_products = mysqli_query($connection, $query);

                while($row = mysqli_fetch_assoc($search_query))
                {
                    $product_name = $row['product_name'];
                    $product_date = $row['product_date'];
                    $product_image = $row['product_image'];
                    $product_content = $row['product_content'];

                    ?>


                    <h1 class="page-header">
                        Page Heading
                        <small>Secondary Text</small>
                    </h1>

                    <!-- First Blog Post -->
                    <h2>
                        <a href="#"><?php echo $product_name ?></a>
                    </h2>

                    <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
                    <hr>
                    <img class="img-responsive" src="images/<?php echo "$product_image"; ?>" alt="">
                    <hr>
                    <p><?php echo $product_content ?></p>
                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <hr>

                 <?php }
        }

    }

                ?>





            </div>

            <?php include "includes/sidebar.php"; ?>

        </div>
        <!-- /.row -->

        <hr>
        <!-- Footer -->
<?php include "includes/footer.php"; ?>