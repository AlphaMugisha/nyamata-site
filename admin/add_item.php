<?php
session_start();
require_once '../connect_db.php';

if (!isset($_SESSION['admin_id'])) { header("Location: login.php"); exit; }

$type = $_GET['type'] ?? '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $desc = mysqli_real_escape_string($conn, $_POST['description']);

    if ($type == 'event') {
        $date = mysqli_real_escape_string($conn, $_POST['event_date']);
        $time = mysqli_real_escape_string($conn, $_POST['event_time']);
        $query = "INSERT INTO events (title, event_date, event_time, description) VALUES ('$title', '$date', '$time', '$desc')";
    } 
    elseif ($type == 'ministry') {
        $meeting = mysqli_real_escape_string($conn, $_POST['meeting_info']);
        $image_path = 'images/default.jpg';
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $new_name = uniqid() . "." . $ext;
            move_uploaded_file($_FILES['image']['tmp_name'], '../images/' . $new_name);
            $image_path = 'images/' . $new_name;
        }
        $query = "INSERT INTO ministries (title, description, meeting_info, image_path) VALUES ('$title', '$desc', '$meeting', '$image_path')";
    }

    if (mysqli_query($conn, $query)) {
        header("Location: dashboard.php?section=" . $type . "s");
    } else { $error = "Database Error: " . mysqli_error($conn); }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add <?= ucfirst($type) ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background: #f8fafc; padding: 50px; }
        .form-box { background: white; padding: 40px; border-radius: 15px; max-width: 500px; margin: auto; box-shadow: 0 10px 25px rgba(0,0,0,0.05); }
        input, textarea { width: 100%; padding: 12px; margin: 10px 0 20px; border: 1px solid #e2e8f0; border-radius: 8px; box-sizing: border-box; }
        button { background: #1d3557; color: white; border: none; padding: 15px; border-radius: 8px; width: 100%; cursor: pointer; font-weight: bold; }
    </style>
</head>
<body>
    <div class="form-box">
        <h2>Add New <?= ucfirst($type) ?></h2>
        <form method="POST" enctype="multipart/form-data">
            <label>Title / Name</label>
            <input type="text" name="title" required>
            
            <?php if($type == 'event'): ?>
                <label>Date</label><input type="text" name="event_date" placeholder="e.g. Next Sabbath">
                <label>Time</label><input type="text" name="event_time" placeholder="e.g. 9:00 AM">
            <?php elseif($type == 'ministry'): ?>
                <label>Meeting Info</label><input type="text" name="meeting_info" placeholder="e.g. Sabbath 2:00 PM">
                <label>Image</label><input type="file" name="image">
            <?php endif; ?>

            <label>Description</label>
            <textarea name="description" rows="5" required></textarea>
            
            <button type="submit">Save to Database</button>
            <a href="dashboard.php" style="display:block; text-align:center; margin-top:15px; color:#64748b; text-decoration:none;">Cancel</a>
        </form>
    </div>
</body>
</html>