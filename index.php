<?php

    include 'includes/head.php';
?>
<header>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="index.php">market</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="includes/login.php">Login</a>
                    </li>
                    <li>
                        <a href="includes/sell.php" class="btn btn-default" role="button">Sell</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</header>
<?php

    // $db = mysqli_connect('localhost','root','athman','market');
    // $sql = "SELECT * FROM image WHERE id = 1";
    //$featured = $db->query($sql);
     $sql = "SELECT * FROM image WHERE id = 1";
     $featured = mysql_query($sql);
     include 'includes/content.php';
     include 'includes/footer.php';
?>




    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
