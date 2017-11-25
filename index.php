<?php
include "lib/engine.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        session_start();
        include "main/head.php";
        ?>
    </head>
    <body class=" skin-blue fixed sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <?php
                include "main/header.php";
                ?>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <section class="sidebar">
                    <?php
                    include "main/main_sidebar.php";
                    ?>
                </section>
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <?php
                $page = isset($_GET["page"]) ? $_GET["page"] : "dashboard";
                include "pages/" . $page . ".php";
                ?>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <?php
                include "main/footer.php";
                ?>    
            </footer>
            <!-- Control Sidebar control-sidebar -->
            <aside class=" control-sidebar-dark">
                <?php
                include "main/control_sidebar.php";
                ?>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <!-- <div class="control-sidebar-bg"></div> -->
        </div>
        <!-- ./wrapper -->
    </body>
</html>
<?php
include "main/js.php";
?>