<?php

require_once('create_table.php');

$current_page = $_SESSION['page'] ? $_SESSION['page'] : 0;
$count = $conn->query("SELECT * FROM $table_name")->num_rows;
$max_pages = ($count % $limit === 0) ? floor($count / $limit) : floor($count / $limit) + 1;
function get_users($conn, $table_name, $limit, $current_page = 0)
{
    $start_page = $current_page * $limit;
    $costumers = $conn->query("SELECT * FROM $table_name ORDER BY id DESC LIMIT $limit OFFSET $start_page");

    while ($res = mysqli_fetch_array($costumers, MYSQLI_ASSOC)) {
        $users[] = $res;
    }
    return $users;
}

?>