<?php
session_start();
require_once '../connect_db.php';

if (!isset($_SESSION['admin_id'])) { exit; }

$type = $_GET['type'] ?? '';
$id = $_GET['id'] ?? '';

if ($type == 'event') { $table = 'events'; }
elseif ($type == 'ministry') { $table = 'ministries'; }
elseif ($type == 'sermon') { $table = 'sermons'; }

if (!empty($table) && !empty($id)) {
    mysqli_query($conn, "DELETE FROM $table WHERE id = $id");
}

header("Location: dashboard.php?section=" . $type . "s");
exit;