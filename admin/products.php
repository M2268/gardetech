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
                    <h1 class="page-header">
                        Blank Page
                        <small>Subheading</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Blank Page
                        </li>
                    </ol>

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