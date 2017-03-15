<nav class="navbar navbar-default navbar-fixed-top" style="position:static; margin:0;">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#">
                <div style="margin-top: 5px; margin-bottom: -10px;"><img style="height: 55px; max-width:150px;"
                                                                         src="http://gardetech.com/wp-content/themes/gardetech/images/logo-1543167586.png">
                </div>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">kategoria1<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">podkategoria1</a></li>
                        <li><a href="#">podkategoria2</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">podkategoria separator</a></li>
                    </ul>
                </li>
                <?php

                $query = "SELECT * FROM categories";
                $select_all_categories = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($select_all_categories)) {
                    $cat_name = $row['cat_name'];
                    echo "<li><a href='#'>{$cat_name}</a></li>";
                }

                ?>
                <li class="active"><a href="#">current page <span class="sr-only">(current)</span></a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right search">
                <form class="navbar-form navbar-left">

                    <form action="search.php" method="post">
                        <div class="input-group">
                            <input name="search" type="text" class="form-control">
                            <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </form>
                    <!-- /.input-group -->
        </div>
        </form>
        </ul>
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

