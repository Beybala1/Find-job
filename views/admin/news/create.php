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
                            <h5 class="card-header">Blog yarat</h5>
                            <div class="card-body">
                                <?php
//                                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//                                    // Validate form data
//                                    $title = $_POST['title'];
//                                    $slug = $_POST['slug'];
//                                    $alt = $_POST['alt'];
//                                    $content = $_POST['content'];
//
//                                    // Additional validation: Ensure all fields are filled
//                                    if (empty($title) || empty($slug) || empty($alt) || empty($content)) {
//                                        die("All fields are .");
//                                    }
//
//                                    // Additional validation: Check image file size (in bytes)
//                                    $maxFileSize = 2 * 1024 * 1024; // 2 MB
//                                    $uploadedFile = $_FILES['image']['tmp_name'];
//                                    if ($_FILES['image']['size'] > $maxFileSize) {
//                                        die("Image file size exceeds the allowed limit.");
//                                    }
//
//                                    // Handle image upload
//                                    $uploadDirectory = 'uploads/';
//                                    $uploadedFileName = $_FILES['image']['name'];
//                                    $image = $uploadDirectory . $uploadedFileName;
//
//                                    if (move_uploaded_file($uploadedFile, $image)) {
//                                        // Image uploaded successfully
//
//                                        // Additional validation: Check title length
//                                        $maxTitleLength = 100; // For example, limit to 100 characters
//                                        if (strlen($title) > $maxTitleLength) {
//                                            die("Title length exceeds the allowed limit.");
//                                        }
//
//                                        // Insert data into the database
//                                        $stmt = $con->prepare("INSERT INTO blogs (title, slug, alt, content, image)
//                                                    VALUES (:title, :slug, :alt, :content, :image)");
//
//                                        $stmt->bindParam(':title', $title);
//                                        $stmt->bindParam(':slug', $slug);
//                                        $stmt->bindParam(':alt', $alt);
//                                        $stmt->bindParam(':content', $content);
//                                        $stmt->bindParam(':image', $image);
//
//                                        try {
//                                            $stmt->execute();
//                                            echo "Data inserted successfully!";
//                                        } catch (PDOException $e) {
//                                            echo "Error inserting data: " . $e->getMessage();
//                                        }
//                                    } else {
//                                        echo "Error uploading image.";
//                                    }
//                                }
                                if(isset($_POST['submit'])){
                                    $title = csrf($_POST['title']);
                                    $slug = csrf($_POST['slug']);
                                    $alt = csrf($_POST['alt']);
                                    $content = csrf($_POST['content']);

                                    // Call the insert function with the defined variables
                                    $blog = insert(
                                        'blogs',
                                        [
                                            'title' => $title,
                                            'slug' => $slug,
                                            'alt' => $alt,
                                            'content' => $content,
                                        ],
                                    );
                                }

                                ?>
                                <form action="#" method="POST" class="needs-validation" enctype="multipart/form-data" >
                                    <div class="mb-3">
                                        <label class="form-label" for="bs-validation-upload-file">Profile
                                            pic</label>
                                        <input type="file" name="image" accept="image/*" class="form-control" id="bs-validation-upload-file"
                                                value="1"/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="bs-validation-title">Başlıq</label>
                                        <input type="text" name="title" class="form-control" id="bs-validation-title"
                                               placeholder="John Doe"  />
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Başlıq daxil et. </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="bs-validation-slug">slug</label>
                                        <input type="text" name="slug" class="form-control" id="bs-validation-slug"
                                               placeholder="John Doe"  />
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please enter your slug. </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="bs-validation-alt">alt</label>
                                        <input type="text" name="alt" class="form-control" id="bs-validation-alt"
                                               placeholder="John Doe"  />
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please enter your alt. </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="bs-validation-bio">Kontent</label>
                                        <textarea class="form-control" id="bs-validation-bio"
                                                  name="content" rows="3" ></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
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