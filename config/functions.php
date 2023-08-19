<?php
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



