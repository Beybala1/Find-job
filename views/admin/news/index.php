<?php
    $title = "Bloglar";
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
                        <h5 class="card-header">Bloglar</h5>
                        <div class="container">
                            <a href="<?= asset('admin/index.php?page=news/create') ?>" class="btn btn-success create-new btn-primary mb-3" tabindex="0">
                                <span>
                                    <i class="bx bx-plus me-sm-1"></i>
                                    <span class="d-none d-sm-inline-block">Daxil et</span>
                                </span>
                            </a>
                            <div class="table-responsive text-nowrap">
                                <table id="table" class="table table-striped">
                                    <thead>
                                    <tr class="text-nowrap">
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Slug</th>
                                        <th>Alt</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        //Get all data from table
                                        //To understand this part, please read the snippet from config\functions.php
                                        //line 23-29
                                        $blogs = get('blogs');
                                    ?>
                                    <?php foreach ($blogs as $blog): ?>
                                        <tr>
                                            <th scope="row"><?php echo $blog['id']; ?></th>
                                            <td>
                                                <div class="d-flex justify-content-left align-items-center">
                                                    <div class="avatar-wrapper">
                                                        <div class="avatar avatar-sm me-3">
                                                            <span class="avatar-initial rounded-circle bg-label-dark">
                                                                <img src="<?php echo asset('public/'.$blog['image']); ?>">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo $blog['title']; ?></td>
                                            <td><?php echo $blog['content']; ?></td>
                                            <td><?php echo $blog['slug']; ?></td>
                                            <td><?php echo $blog['alt']; ?></td>
                                            <td><?php echo $blog['created_at']; ?></td>
                                            <td><?php echo $blog['updated_at']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
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