<?php
session_start();
require_once '../connect_db.php';
if (!isset($_SESSION['admin_id'])) { header("Location: login.php"); exit; }

$type = $_GET['type'] ?? '';
$id = $_GET['id'] ?? '';

// Fetch existing data
if ($type == 'content') { $res = mysqli_query($conn, "SELECT * FROM site_content WHERE id=$id"); }
elseif ($type == 'event') { $res = mysqli_query($conn, "SELECT * FROM events WHERE id=$id"); }
elseif ($type == 'ministry') { $res = mysqli_query($conn, "SELECT * FROM ministries WHERE id=$id"); }
$data = mysqli_fetch_assoc($res);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $desc = mysqli_real_escape_string($conn, $_POST['description']);

    if ($type == 'content') {
        mysqli_query($conn, "UPDATE site_content SET title='$title', content='$desc' WHERE id=$id");
        header("Location: dashboard.php?section=content");
    } 
    elseif ($type == 'event') {
        $date = $_POST['event_date']; $time = $_POST['event_time'];
        mysqli_query($conn, "UPDATE events SET title='$title', event_date='$date', event_time='$time', description='$desc' WHERE id=$id");
        header("Location: dashboard.php?section=events");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background: #f8fafc; padding: 50px; }
        .form-box { background: white; padding: 40px; border-radius: 15px; max-width: 500px; margin: auto; box-shadow: 0 10px 25px rgba(0,0,0,0.05); }
        input, textarea { width: 100%; padding: 12px; margin: 10px 0 20px; border: 1px solid #e2e8f0; border-radius: 8px; box-sizing: border-box; }
        button { background: #b8860b; color: white; border: none; padding: 15px; border-radius: 8px; width: 100%; cursor: pointer; font-weight: bold; }
    </style>
</head>
<body>
    <div class="form-box">
        <h2>Edit <?= ucfirst($type) ?></h2>
        <form method="POST">
            <label>Title</label>
            <input type="text" name="title" value="<?= $data['title'] ?? $data['section_name'] ?>">
            
            <?php if($type == 'event'): ?>
                <label>Date</label><input type="text" name="event_date" value="<?= $data['event_date'] ?>">
                <label>Time</label><input type="text" name="event_time" value="<?= $data['event_time'] ?>">
            <?php endif; ?>

            <label>Content / Description</label>
            <textarea name="description" rows="8"><?= $data['content'] ?? $data['description'] ?></textarea>
            
            <button type="submit">Update Changes</button>
            <a href="dashboard.php" style="display:block; text-align:center; margin-top:15px; color:#64748b;">Back to Dashboard</a>
        </form>
    </div>
</body>
</html>