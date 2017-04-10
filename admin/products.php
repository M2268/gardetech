<?php ob_start(); ?>
<?php include "includes/header.php" ?>





<?php session_start(); ?>

    <div id="wrapper">

    <!-- Navigation -->
    <?php include "includes/navigation.php" ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">


                    <?php
                    if(isset($_GET['source'])){
                        $source = $_GET['source'];
                    }else{
                        $source = '';
                    }
                    switch($source){

                        case 'add_product';
                        include "includes/add_product.php";
                        break;

                        case 'edit_product';
                        include "includes/edit_product.php";
                        break;

                        case 'view_all';
                        include "includes/view_all_products.php";
                        break;

                            default:
                                include "includes/view_all_products.php";
                                break;
                        }

                    ?>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include "includes/footer.php" ?>