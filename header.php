<?php $current_page = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nyamata SDA Church | Welcome Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<link rel="icon" type="image/png" href="31.png">
<body class="no-scroll">

    <div id="preloader" class="preloader">
        <div class="preloader-content">
            <div class="logo-float-wrapper">
                <div class="preloader-logo">⛪</div>
            </div>
            <div class="preloader-text">Nyamata SDA Church</div>
            <div class="preloader-progress-wrapper">
                <div class="preloader-progress-track">
                    <div class="preloader-progress-fill"></div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar">
        <div class="container nav-wrapper">
            <a href="index.php" class="logo">⛪ Nyamata SDA Church</a>
            <ul class="nav-links">
                <li><a href="index.php" class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a></li>
                <li><a href="ministries.php" class="<?php echo ($current_page == 'ministries.php') ? 'active' : ''; ?>">Ministries</a></li>
                <li><a href="sermons.php" class="<?php echo ($current_page == 'sermons.php') ? 'active' : ''; ?>">Sermons</a></li>
                <li><a href="events.php" class="<?php echo ($current_page == 'events.php') ? 'active' : ''; ?>">Events</a></li>
                <li><a href="gallery.php" class="<?php echo ($current_page == 'gallery.php') ? 'active' : ''; ?>">Gallery</a></li>
                <li><a href="contact.php" class="<?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
            </ul>
            <div class="nav-btns">
                <a href="events.php#visit" class="btn btn-gold">Plan A Visit</a>
                <a href="sermons.php" class="btn btn-blue-outline">Watch Sermons</a>
            </div>
        </div>
    </nav>