<?php include "includes/header.php" ?>


    <div id="wrapper">


        <!-- Navigation -->

        <div id="page-wrapper">

            <div class="container-fluid">

                <div class="well col-md-3">
                    <h4>Login</h4>
                    <form action="includes/login.php" method="post">
                        <div class="form-group">
                            <input name="username" type="text" class="form-control" placeholder="login">

                        </div>
                        <div class="form-group">
                            <input name="password" type="text" class="form-control" placeholder="password">
                            <span class="input-group-btn">
                                               <button class="btn btn-primary" name="login"
                                                       type="submit">submit</button>
                                        </span>
                        </div>

                    </form>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include "includes/footer.php" ?>