<?php
$title = "Ana səhifə";
include '../views/admin/inc/meta.php';
?>
<!--<title>Ana səhifə</title>-->
<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">
        <?php include '../views/admin/inc/sidebar.php'; ?>
        <!-- Layout container -->
        <div class="layout-page">
            <?php include '../views/admin/inc/header.php'; ?>
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row">
                        <div class="col-3 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                        <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                            <div class="card-title">
                                                <h5 class="text-nowrap mb-2">İstifadəçi</h5>
                                            </div>
                                            <div class="mt-sm-auto">
                                                <h4 class="text-success text-nowrap fw-semibold">
                                                    <?php
                                                        //count_ - config/functions.php
                                                        count_('users');
                                                    ?>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                        <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                            <div class="card-title">
                                                <h5 class="text-nowrap mb-2">Profile Report</h5>
                                            </div>
                                            <div class="mt-sm-auto">
                                                <h4 class="text-success text-nowrap fw-semibold">
                                                    <div class="mt-sm-auto">
                                                        <h4 class="text-success text-nowrap fw-semibold">
                                                            <?php
                                                                count_("blogs");
                                                            ?>
                                                        </h4>
                                                    </div>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                        <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                            <div class="card-title">
                                                <h5 class="text-nowrap mb-2">Profile Report</h5>
                                            </div>
                                            <div class="mt-sm-auto">
                                                <h4 class="text-success text-nowrap fw-semibold">
                                                    5
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                        <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                            <div class="card-title">
                                                <h5 class="text-nowrap mb-2">Profile Report</h5>
                                            </div>
                                            <div class="mt-sm-auto">
                                                <h4 class="text-success text-nowrap fw-semibold">
                                                    5
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Content -->
                <?php include '../views/admin/inc/footer.php'; ?>
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

<?php
//require(__DIR__ . '/inc/script.php');
include '../views/admin/inc/script.php';

?>
</body>
</html>