<?php
function count_($table): void
{
    global $con;

    $count = "SELECT COUNT(*) as total_rows FROM `$table`";
    $stmt = $con->prepare($count);

    $stmt->execute();
    echo
    '<div class="mt-sm-auto">
        <h4 class="text-success text-nowrap fw-semibold">'.$count.'</h4>
    </div>';
}

