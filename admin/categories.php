<?php ob_start(); ?>
<?php include "includes/header.php" ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">


                        <div class="col-xs-6">

                            <?php  insert_categories(); ?>

                            <form action="" method="product">
                                <div class="form-group">
                                    <label for="cat_name">Add Category</label>
                                    <input type="text" class="form-control" name="cat_name">
                                    <input class="btn btn-primary" type="submit" name="submit" value="ADD CATEGORY">
                                </div>
                            </form>

                            <?php //edit and include query
                            if(isset($_GET['edit'])){

                                $cat_id = $_GET['edit'];
                                include "includes/update_categories.php";

                            }
                            ?>

                        </div><!--add category form-->
                        <div class="col-xs-6">

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php  findAllCategories(); ?>

                            <?php  deleteCategories();  ?>
                            </tbody>

                        </table>
                        </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include "includes/footer.php" ?>