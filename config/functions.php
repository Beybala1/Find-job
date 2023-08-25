<?php

//Get absolute path of the current working directory
function asset($path): string
{
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'];
    return $protocol . '://' . $host . '/' . ltrim($path, '/');
}

//Count the number of rows in a table
function count_($table): void
{
    global $con;
    $query = "SELECT COUNT(*) FROM $table";

    // Prepare and execute the query
    $stmt = $con->prepare($query);
    $stmt->execute();

    // Fetch the result
    $row_count = $stmt->fetchColumn();
    echo $row_count;
 }

 //Select data from a table
function get($table): bool|array
{
    global $con;
    $stmt = $con->prepare("SELECT * FROM $table");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

//Secure form data
function csrf($input) {
    return isset($input) ? trim(htmlspecialchars($input)) : '';
}

//Insert data into a table
function insert($table, $data)
{
    // Additional validation: Ensure all fields are filled
    global $con;

    foreach ($data as $field => $value) {
        if (empty($value)) {
            return "All fields are required.";
        }
    }

    // Prepare and execute the SQL query
    $tableRow = implode(', ', array_keys($data));
    $values = ':' . implode(', :', array_keys($data));

    $sql = "INSERT INTO $table ($tableRow) VALUES ($values)";
    $stmt = $con->prepare($sql);

    try {
        $stmt->execute($data);
        echo "Data inserted successfully!";
    } catch (PDOException $e) {
        return "Error inserting data: " . $e->getMessage();
    }
}



//function insert($table, $data)
//{
//    // Additional validation: Ensure all fields are filled
//    if (empty($data)) {
//        return "All fields are required.";
//    }
//
//    // Additional validation: Check image file size (in bytes)
//    $maxFileSize = 2 * 1024 * 1024; // 2 MB
//    if ($data['image']['size'] > $maxFileSize) {
//        return "Image file size exceeds the allowed limit.";
//    }
//
//    // Handle image upload
//    $uploadDirectory = 'uploads/';
//    $uploadedFileName = $data['image']['name'];
//    $image = $uploadDirectory . $uploadedFileName;
//
//    if (!move_uploaded_file($data['image']['tmp_name'], $image)) {
//        return "Error uploading image.";
//    }
//
//    // Additional validation: Check title length
//    $maxTitleLength = 100; // For example, limit to 100 characters
//    if (strlen($data['title']) > $maxTitleLength) {
//        return "Title length exceeds the allowed limit.";
//    }
//
//    // Insert data into the database
//    $stmt = $con->prepare("INSERT INTO '$table' ($data)
//                VALUES (:$data");
//
//    $stmt->bindParam(':title', $data['title']);
//    try {
//        $stmt->execute();
//        return "Data inserted successfully!";
//    } catch (PDOException $e) {
//        return "Error inserting data: " . $e->getMessage();
//    }
//}





