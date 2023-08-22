<?php
    $title = "Xəbərlər";
    require('../views/admin/inc/meta.php');
?>
<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">
        <?php include('../views/admin/inc/sidebar.php')  ?>
        <!-- Layout container -->
        <div class="layout-page">
            <?php include('../views/admin/inc/header.php')  ?>
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="card">
                        <h5 class="card-header">Responsive Table</h5>
                        <div class="container">
                            <div class="table-responsive text-nowrap">
                                <table id="table" class="table table-striped">
                                    <thead>
                                    <tr class="text-nowrap">
                                        <th>#</th>
                                        <th>Table heading</th>
                                        <th>Table heading</th>
                                        <th>Table heading</th>
                                        <th>Table heading</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Content -->
                <?php include('../views/admin/inc/footer.php') ?>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
</div>
<!-- / Layout wrapper -->
<?php include('../views/admin/inc/script.php') ?>
</body>
</html>