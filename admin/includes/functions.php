<?php
function insert_categories()
{
    global $connection;
    if (isset($_POST['submit'])) {
        $cat_name = $_POST['cat_name'];
        if ($cat_name == "" || empty($cat_name)) {
            echo "This field shouldn't be empty";
        } else {
            $query = "INSERT INTO categories(cat_name) ";
            $query .= "VALUE ('{$cat_name}')";
            if ($_SESSION['role'] === 'admin') {

                $create_category_query = mysqli_query($connection, $query);
                if (!$create_category_query) {
                    die('QUERY FAILED' . mysqli_error($connection));
                }
            }
        }
    }
}

function findAllCategories()
{
    global $connection;
    $query = "SELECT * FROM categories";
    $select_categories = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_categories)) {
        $cat_id = $row['cat_id'];
        $cat_name = $row['cat_name'];
        echo "<tr><td>{$cat_id}</td>";
        echo "<td>{$cat_name}</td>";
        echo "<td><a href='categories.php?delete={$cat_id}'>delete</td>";
        echo "<td><a href='categories.php?edit={$cat_id}'>edit</td>";
        echo "</tr>";
    }
}

function confirm($result)
{
    global $connection;
    if (!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
}

function deleteCategories()
{
    global $connection;
    if (isset($_GET['delete'])) {
        $get_cat_id = $_GET['delete'];
        $query = "DELETE FROM categories WHERE cat_id = {$get_cat_id}";
        if ($_SESSION['role'] === 'admin') {
            $delete_query = mysqli_query($connection, $query);
            header("Location: categories.php");
        }
    }
}

?>