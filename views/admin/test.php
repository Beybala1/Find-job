<?php
// Include necessary files
require_once('../config/db.php');
require_once('../config/functions.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Test Page</title>
</head>
<body>
<!-- Call the countRows function -->
<?php countRows('users'); ?>
</body>
</html>
