<?php 
include 'header.php'; 
include 'connect_db.php'; 

// Fetch ALL Content into an easy-to-use array
$res = mysqli_query($conn, "SELECT * FROM site_content");
$site = [];
while($row = mysqli_fetch_assoc($res)) { $site[$row['section_name']] = $row; }

// Fetch the single Latest Sermon
$sermon_query = mysqli_query($conn, "SELECT * FROM sermons ORDER BY id DESC LIMIT 1");
$latest_sermon = mysqli_fetch_assoc($sermon_query);
?>

<style>
    :root { --gold: #b8860b; --navy: #1d3557; }
    .reveal-base { opacity: 0; transform: translateY(40px); transition: 0.8s ease-out; }
    .reveal-base.active { opacity: 1; transform: translateY(0); }
    
    .section-title { font-size: 2.5rem; font-weight: 800; color: var(--navy); margin-bottom: 20px; position: relative; }
    .section-title::after { content: ''; display: block; width: 50px; height: 5px; background: var(--gold); margin-top: 10px; }
    
    .info-card { background: white; padding: 30px; border-radius: 15px; border: 1px solid #eee; transition: 0.4s; }
    .info-card:hover { transform: translateY(-10px); box-shadow: 0 20px 40px rgba(0,0,0,0.05); border-color: var(--gold); }
    
    .btn-blue-glass { background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2); color: white; padding: 15px 30px; border-radius: 50px; text-decoration: none; font-weight: bold; }
    .btn-blue-glass:hover { background: white; color: var(--navy); }
</style>

<header class="hero" style="height: 100vh; position: relative; display: flex; align-items: center; justify-content: center; overflow: hidden;">
    <video autoplay loop muted playsinline style="position: absolute; width: 100%; height: 100%; object-fit: cover; z-index: 1;">
        <source src="<?= $site['hero']['image_path'] ?>" type="video/mp4">
    </video>
    <div style="position: absolute; width: 100%; height: 100%; background: rgba(10, 37, 64, 0.6); z-index: 2;"></div>
    <div style="position: relative; z-index: 3; text-align: center; color: white;">
        <h1 style="font-size: 5rem; font-weight: 900; margin: 0;"><?= $site['hero']['title'] ?></h1>
        <p style="font-size: 1.5rem; color: var(--gold); letter-spacing: 3px;"><?= $site['hero']['content'] ?></p>
        <div style="margin-top: 30px;">
            <a href="events.php" class="btn btn-gold">Plan Your Visit</a>
            <a href="sermons.php" class="btn-blue-glass">Watch Sermons</a>
        </div>
    </div>
</header>

<section id="about" style="padding: 100px 0; background: white;">
    <div class="container">
        <h2 class="section-title">ABOUT NYAMATA SDA CHURCH</h2>
        <div class="grid-3" style="margin-top: 40px;">
            <div class="info-card reveal-base">
                <h3><?= $site['about_mission']['title'] ?></h3>
                <p><?= $site['about_mission']['content'] ?></p>
            </div>
            <div class="info-card reveal-base" style="transition-delay: 0.1s;">
                <h3><?= $site['about_beliefs']['title'] ?></h3>
                <p><?= $site['about_beliefs']['content'] ?></p>
            </div>
            <div class="info-card reveal-base" style="transition-delay: 0.2s;">
                <h3><?= $site['about_join']['title'] ?></h3>
                <p><?= $site['about_join']['content'] ?></p>
            </div>
        </div>
    </div>
</section>

<section style="padding: 100px 0; background: #fafafa;">
    <div class="container" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 60px; align-items: center;">
        <div class="reveal-base">
            <h2 class="section-title"><?= $site['pastor_message']['title'] ?></h2>
            <p style="font-size: 1.1rem; line-height: 1.8; color: #444;"><?= nl2br($site['pastor_message']['content']) ?></p>
        </div>
        <div class="reveal-base" style="position: relative;">
            <div style="position: absolute; width: 100%; height: 100%; border: 3px solid var(--gold); top: 20px; left: 20px; border-radius: 15px;"></div>
            <img src="<?= $site['pastor_message']['image_path'] ?>" style="width: 100%; border-radius: 15px; position: relative; z-index: 2; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
        </div>
    </div>
</section>

<section style="padding: 100px 0; background: white;">
    <div class="container">
        <h2 class="section-title reveal-base"><?= $site['faith_main']['title'] ?></h2>
        <p class="reveal-base" style="margin-bottom: 40px; font-size: 1.2rem; color: #666;"><?= $site['faith_main']['content'] ?></p>
        <div class="grid-3">
            <div class="info-card reveal-base">
                <h3 style="color: var(--gold);"><?= $site['faith_core']['title'] ?></h3>
                <p><?= nl2br($site['faith_core']['content']) ?></p>
            </div>
            <div class="info-card reveal-base" style="transition-delay: 0.1s;">
                <h3 style="color: var(--gold);"><?= $site['faith_lifestyle']['title'] ?></h3>
                <p><?= nl2br($site['faith_lifestyle']['content']) ?></p>
            </div>
            <div class="info-card reveal-base" style="transition-delay: 0.2s;">
                <h3 style="color: var(--gold);"><?= $site['faith_mission']['title'] ?></h3>
                <p><?= nl2br($site['faith_mission']['content']) ?></p>
            </div>
        </div>
    </div>
</section>

<section style="padding: 100px 0; background: var(--navy); text-align: center; color: white;">
    <div class="container">
        <h2 class="section-title reveal-base" style="color: white; margin: 0 auto 40px;">LATEST MESSAGE</h2>
        <div class="reveal-base" style="max-width: 800px; margin: 0 auto; background: rgba(255,255,255,0.05); padding: 20px; border-radius: 20px; border: 1px solid rgba(255,255,255,0.1);">
            <img src="<?= $latest_sermon['thumbnail_path'] ?>" style="width: 100%; border-radius: 10px; margin-bottom: 20px;">
            <h4 style="font-size: 2rem; margin: 0;"><?= $latest_sermon['title'] ?></h4>
            <p style="color: var(--gold);"><?= $latest_sermon['preacher'] ?> • <?= $latest_sermon['date_preached'] ?></p>
            <a href="sermons.php" class="btn btn-gold">Watch Sermon</a>
        </div>
    </div>
</section>

<section style="padding: 100px 0; background: white;">
    <div class="container">
        <h2 class="section-title reveal-base">UPCOMING EVENTS</h2>
        <div class="grid-3" style="margin-top: 40px;">
            <?php
            $ev_res = mysqli_query($conn, "SELECT * FROM events ORDER BY id DESC LIMIT 3");
            while($e = mysqli_fetch_assoc($ev_res)): ?>
                <div class="info-card reveal-base" onclick="window.location.href='events.php'">
                    <h3 style="color: var(--gold);"><?= $e['title'] ?></h3>
                    <p><strong><?= $e['event_date'] ?></strong> | <?= $e['event_time'] ?></p>
                    <p style="color: #666; margin-top: 10px;"><?= $e['description'] ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<section style="padding: 100px 0; background: #fafafa; text-align: center;">
    <div class="container reveal-base">
        <h2 class="section-title" style="margin: 0 auto 20px;"><?= $site['giving']['title'] ?></h2>
        <p style="max-width: 650px; margin: 0 auto 40px; font-size: 1.15rem; line-height: 1.6; color: #555;">
            <?= $site['giving']['content'] ?>
        </p>
        <a href="contact.php" class="btn btn-gold" style="padding: 15px 40px; font-size: 1.1rem;">Giving Options</a>
    </div>
</section>

<script>
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('active'); } });
    }, { threshold: 0.1 });
    document.querySelectorAll('.reveal-base').forEach(el => observer.observe(el));
</script>

<?php include 'footer.php'; ?>