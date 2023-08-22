<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job_db";

try {
    $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//    $sql = "CREATE TABLE blogs (
//        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//        title VARCHAR(255) NOT NULL,
//        content LONGTEXT NOT NULL,
//        slug VARCHAR(255) NOT NULL,
//        alt VARCHAR(255),
//        image TEXT,
//        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
//        updated_at TIMESTAMP
//    )";
//
//    $con->exec($sql);
//    echo "Table MyGuests created successfully";

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}





















//try {
//    $con = new PDO("mysql:host=$servername;dbname=iştap_db",$username, $password);
//    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//}catch (PDOException $e){
//    echo "Connection failed: " .$e->getMessage();
//}

//$db_host = 'localhost';
//$db_user = 'root';
//$db_password = '';
//$db_name = 'iştap_db';
//
//$con = mysqli_connect($db_host, $db_user, $db_password, $db_name);
//
//// Check connection
//if (mysqli_connect_errno()) {
//    echo "Failed to connect to MySQL: " . mysqli_connect_error();
//    exit();
//}




