
<div class="col-md-4">

    <div class="well">

        <?php
        $query = "SELECT * FROM categories";
        $select_categories_sidebar = mysqli_query($connection, $query);
        ?>

        <h4>Categories</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                    <?php
                    while($row = mysqli_fetch_assoc($select_categories_sidebar))
                    {
                     $cat_name = $row['cat_name'];
                     $cat_id = $row['cat_id'];
                    echo "<li><a href='category.php?category={$cat_id}'>{$cat_name}</a></li>";
                    }
                    ?>
                </ul>
            </div>

        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
    <?php include "includes/widget.php" ?>

</div>