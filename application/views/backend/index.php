<?php include 'css.php'; ?>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
       <?php include 'header.php'; ?>
       <?php include $loginType.'/navigation.php'; ?>
        <!-- Left navbar-header -->
        <?php include 'navigation.php'; ?>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
               <?php include 'page_info.php'; ?>
               <?php include $loginType.'/'.$page_name.'.php'; ?>
               <?php include 'dashboard.php'; ?>
                <!-- .right-sidebar -->
                <?php include 'rightbar.php'; ?>
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <?php include 'footer.php' ?>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <?php include 'js.php'; ?>

</body>

</html>
