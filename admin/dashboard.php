<?php
// admin/dashboard.php
session_start();

// Jump up one folder to connect to your existing Nyamata database
require_once '../connect_db.php';

// Temporary bypass for testing the UI (Remove this later when we build login.php)
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit;
}

$success_msg = '';
$error_msg = '';
$section = isset($_GET['section']) ? $_GET['section'] : 'overview';

// --- FETCH DATA FOR DISPLAY ---
// We use @ to suppress errors if tables aren't built yet while you test the UI
$events_count = @mysqli_num_rows(mysqli_query($conn, "SELECT id FROM events")) ?: 0;
$ministries_count = @mysqli_num_rows(mysqli_query($conn, "SELECT id FROM ministries")) ?: 0;
$sermons_count = @mysqli_num_rows(mysqli_query($conn, "SELECT id FROM sermons")) ?: 0;

$ministries = @mysqli_query($conn, "SELECT * FROM ministries ORDER BY id ASC");
$events = @mysqli_query($conn, "SELECT * FROM events ORDER BY id ASC");
$site_content = @mysqli_query($conn, "SELECT * FROM site_content ORDER BY id ASC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Control Panel | NYAMATA SDA</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        :root {
            --bg-body: #f8fafc;
            --bg-sidebar: #1d3557; /* Nyamata Deep Navy */
            --sidebar-hover: #2c4c75;
            --text-sidebar: #94a3b8;
            --text-main: #334155;
            --text-dark: #0f172a;
            --primary: #b8860b; /* Nyamata Gold */
            --primary-hover: #daa520;
            --border-color: #e2e8f0;
            --card-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -2px rgba(0, 0, 0, 0.025);
            --card-hover-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.08), 0 4px 6px -4px rgba(0, 0, 0, 0.04);
        }

        body { font-family: 'Plus Jakarta Sans', sans-serif; margin: 0; display: flex; background: var(--bg-body); color: var(--text-main); }
        
        /* Sidebar Navigation */
        .sidebar { width: 260px; background: var(--bg-sidebar); color: white; height: 100vh; padding: 24px 20px; box-sizing: border-box; position: fixed; overflow-y: auto; border-right: 1px solid #11223a;}
        .sidebar h2 { color: white; text-align: center; margin-bottom: 40px; font-size: 22px; font-weight: 800; letter-spacing: -0.5px; }
        .sidebar h2 span { color: var(--primary); }
        .sidebar a { display: flex; align-items: center; color: var(--text-sidebar); text-decoration: none; padding: 12px 16px; border-radius: 10px; margin-bottom: 8px; transition: all 0.2s ease; font-weight: 600; font-size: 14px; }
        .sidebar a:hover, .sidebar a.active { background: var(--sidebar-hover); color: var(--primary); }
        .sidebar a i { margin-right: 12px; width: 20px; text-align: center; font-size: 16px; }

        /* Main Dashboard Area */
        .main-content { margin-left: 260px; padding: 40px; width: calc(100% - 260px); box-sizing: border-box; animation: fadeIn 0.4s ease-out; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }

        .header { display: flex; justify-content: space-between; align-items: center; background: white; padding: 20px 30px; border-radius: 16px; box-shadow: var(--card-shadow); margin-bottom: 40px; border: 1px solid var(--border-color); }
        .header h2 { margin: 0; font-size: 24px; color: var(--text-dark); font-weight: 700; }
        .user-profile { background: #f1f5f9; padding: 8px 16px; border-radius: 20px; font-size: 14px; font-weight: 600; color: var(--text-dark); display: flex; align-items: center; gap: 8px; }

        /* Section Titles & Cards */
        .section-title { margin-bottom: 24px; display: flex; justify-content: space-between; align-items: center; }
        .section-title h2 { margin: 0; font-size: 20px; color: var(--text-dark); }
        
        .grid-cards { display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 24px; }
        .card { background: white; padding: 24px; border-radius: 16px; box-shadow: var(--card-shadow); border: 1px solid var(--border-color); display: flex; flex-direction: column; justify-content: space-between; transition: all 0.3s ease; }
        .card:hover { box-shadow: var(--card-hover-shadow); transform: translateY(-2px); }
        
        .card-label { font-size: 11px; color: var(--primary); text-transform: uppercase; font-weight: 800; margin-bottom: 12px; letter-spacing: 1px;}
        .card-content { font-size: 14px; line-height: 1.6; color: var(--text-main); margin-bottom: 24px; flex-grow: 1; }
        .card-footer { display: flex; gap: 10px; border-top: 1px solid var(--border-color); padding-top: 16px; }

        /* Buttons */
        .btn { padding: 10px 16px; border-radius: 10px; text-decoration: none; font-weight: 700; font-size: 13px; display: flex; align-items: center; gap: 8px; border: none; cursor: pointer; flex: 1; justify-content: center; transition: all 0.2s; }
        .btn-edit { background: #f1f5f9; color: var(--text-dark); }
        .btn-edit:hover { background: #e2e8f0; }
        .btn-delete { background: #fff; color: #ef4444; border: 1px solid #fecaca; }
        .btn-delete:hover { background: #fef2f2; }
        .btn-add { background: var(--text-dark); color: white; padding: 12px 24px; flex: none; }
        .btn-add:hover { background: #000; box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
        
        img.preview-img { width: 100%; height: 160px; object-fit: cover; border-radius: 10px; margin-bottom: 16px; border: 1px solid var(--border-color); }
        .data-box { background: #f8fafc; padding: 16px; border-radius: 10px; border: 1px solid var(--border-color); font-style: italic; color: var(--text-dark); }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>NYAMATA <span>SDA</span></h2>
        
        <div style="margin: 20px 0 10px; padding-left: 16px; font-size: 11px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 1px;">Main Dashboard</div>
        <a href="?section=overview" class="<?= $section == 'overview' ? 'active' : '' ?>"><i class="fas fa-chart-pie"></i> Overview</a>
        <a href="?section=inbox" class="<?= $section == 'inbox' ? 'active' : '' ?>"><i class="fas fa-inbox"></i> Member Messages</a>
        
        <div style="margin: 30px 0 10px; padding-left: 16px; font-size: 11px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 1px;">Website Content</div>
        <a href="?section=content" class="<?= $section == 'content' ? 'active' : '' ?>"><i class="fas fa-home"></i> Home Page Content</a>
        <a href="?section=events" class="<?= $section == 'events' ? 'active' : '' ?>"><i class="fas fa-calendar-alt"></i> Upcoming Events</a>
        <a href="?section=ministries" class="<?= $section == 'ministries' ? 'active' : '' ?>"><i class="fas fa-users"></i> Church Ministries</a>
        <a href="?section=sermons" class="<?= $section == 'sermons' ? 'active' : '' ?>"><i class="fas fa-video"></i> Video Sermons</a>
        <a href="?section=gallery" class="<?= $section == 'gallery' ? 'active' : '' ?>"><i class="fas fa-images"></i> Photo Gallery</a>
        
        <div style="margin: 30px 0 10px; padding-left: 16px; font-size: 11px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 1px;">System</div>
        <a href="?section=settings" class="<?= $section == 'settings' ? 'active' : '' ?>"><i class="fas fa-shield-alt"></i> Security Settings</a>
        <a href="logout.php" style="color: #ef4444;"><i class="fas fa-sign-out-alt"></i> Secure Logout</a>
    </div>

    <div class="main-content">
        
        <div class="header">
            <h2>Church Administration</h2>
            <div class="user-profile">
                <i class="fas fa-user-circle" style="color: var(--primary); font-size: 18px;"></i> <?= htmlspecialchars($_SESSION['admin_username']) ?>
            </div>
        </div>

        <?php if ($section == 'overview'): ?>
            <div class="section-title"><h2>System Overview</h2></div>
            <div class="grid-cards">
                <div class="card" style="align-items: center; text-align: center;">
                    <i class="fas fa-calendar-check fa-3x" style="color: var(--bg-sidebar); margin-bottom: 15px;"></i>
                    <h3 style="margin:0; font-size: 32px; color: var(--primary);"><?= $events_count ?></h3>
                    <p style="margin: 5px 0 0; color: #64748b; font-weight: bold;">Upcoming Events</p>
                </div>
                <div class="card" style="align-items: center; text-align: center;">
                    <i class="fas fa-users fa-3x" style="color: var(--bg-sidebar); margin-bottom: 15px;"></i>
                    <h3 style="margin:0; font-size: 32px; color: var(--primary);"><?= $ministries_count ?></h3>
                    <p style="margin: 5px 0 0; color: #64748b; font-weight: bold;">Active Ministries</p>
                </div>
                <div class="card" style="align-items: center; text-align: center;">
                    <i class="fas fa-video fa-3x" style="color: var(--bg-sidebar); margin-bottom: 15px;"></i>
                    <h3 style="margin:0; font-size: 32px; color: var(--primary);"><?= $sermons_count ?></h3>
                    <p style="margin: 5px 0 0; color: #64748b; font-weight: bold;">Sermons Uploaded</p>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($section == 'events'): ?>
            <div class="section-title">
                <h2>Manage Events</h2>
                <a href="add_item.php?type=event" class="btn btn-add"><i class="fas fa-plus"></i> Add New Event</a>
            </div>
            <div class="grid-cards">
                <?php if($events): while ($event = mysqli_fetch_assoc($events)): ?>
                <div class="card">
                    <div class="card-label"><i class="far fa-calendar"></i> <?= htmlspecialchars($event['event_date']) ?> @ <?= htmlspecialchars($event['event_time']) ?></div>
                    <div class="card-content">
                        <h4 style="margin:0 0 8px 0; color: var(--text-dark); font-size: 18px;"><?= htmlspecialchars($event['title']) ?></h4>
                        <p style="margin:0;"><?= htmlspecialchars($event['description']) ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="edit_item.php?type=event&id=<?= $event['id'] ?>" class="btn btn-edit"><i class="fas fa-pen"></i> Edit</a>
                        <a href="delete_item.php?type=event&id=<?= $event['id'] ?>" class="btn btn-delete"><i class="fas fa-trash"></i> Delete</a>
                    </div>
                </div>
                <?php endwhile; endif; ?>
            </div>
        <?php endif; ?>

        <?php if ($section == 'ministries'): ?>
            <div class="section-title">
                <h2>Church Ministries</h2>
                <a href="add_item.php?type=ministry" class="btn btn-add"><i class="fas fa-plus"></i> Add Ministry</a>
            </div>
            <div class="grid-cards">
                <?php if($ministries): while ($min = mysqli_fetch_assoc($ministries)): ?>
                <div class="card">
                    <div class="card-label">Ministry Profile</div>
                    <img src="../<?= htmlspecialchars($min['image_path']) ?>" class="preview-img" onerror="this.src='https://placehold.co/600x400?text=No+Image'">
                    <div class="card-content">
                        <h4 style="margin:0 0 5px 0; color: var(--text-dark);"><?= htmlspecialchars($min['title']) ?></h4>
                        <p style="margin:0; font-size: 12px; color: var(--primary); font-weight: bold;"><?= htmlspecialchars($min['meeting_info']) ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="edit_item.php?type=ministry&id=<?= $min['id'] ?>" class="btn btn-edit"><i class="fas fa-pen"></i> Edit</a>
                        <a href="delete_item.php?type=ministry&id=<?= $min['id'] ?>" class="btn btn-delete"><i class="fas fa-trash"></i> Delete</a>
                    </div>
                </div>
                <?php endwhile; endif; ?>
            </div>
        <?php endif; ?>

    </div>
</body>
</html>