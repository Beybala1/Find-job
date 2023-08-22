<?php include('../views/admin/inc/sidebar.php')  ?>
<?php
$title = "Blog yarat";
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
                    <div class="col-md">
                        <div class="card">
                            <h5 class="card-header">Bootstrap Validation</h5>
                            <div class="card-body">
                                <form class="needs-validation" novalidate>
                                    <div class="mb-3">
                                        <label class="form-label" for="bs-validation-upload-file">Profile
                                            pic</label>
                                        <input type="file" class="form-control" id="bs-validation-upload-file"
                                               required />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="bs-validation-title">Başlıq</label>
                                        <input type="text" class="form-control" id="bs-validation-title"
                                               placeholder="John Doe" required />
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Başlıq daxil et. </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="bs-validation-slug">slug</label>
                                        <input type="text" class="form-control" id="bs-validation-slug"
                                               placeholder="John Doe" required />
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please enter your slug. </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="bs-validation-alt">alt</label>
                                        <input type="text" class="form-control" id="bs-validation-alt"
                                               placeholder="John Doe" required />
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please enter your alt. </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="bs-validation-bio">Kontent</label>
                                        <textarea class="form-control" id="bs-validation-bio"
                                                  name="bs-validation-bio" rows="3" required></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </form>
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