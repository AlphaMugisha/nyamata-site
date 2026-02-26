<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nyamata Church Gallery</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,400&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <?php include 'header.php'; ?>
    <style>
        :root {
            --primary-color: #2c3e50;
            --accent-color: #e67e22;
            --text-muted: #5d6d7e;
            --bg-site: #f4f1ea;
            --bg-card: #ffffff;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-site);
            margin: 0;
            padding: 0;
            color: var(--primary-color);
        }

        .gallery-header {
            text-align: center;
            padding: 100px 20px 60px;
            background-color: #ede9e0;
            border-bottom: 2px solid rgba(0,0,0,0.05);
        }

        .gallery-header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3.5rem;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .divider {
            width: 80px;
            height: 4px;
            background: var(--accent-color);
            margin: 30px auto;
            border-radius: 2px;
        }

        .gallery-header p {
            font-style: italic;
            color: var(--text-muted);
            max-width: 650px;
            margin: 0 auto;
            line-height: 1.8;
        }

        /* The Grid */
        .image-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 30px;
            padding: 60px 5%;
            max-width: 1400px;
            margin: 0 auto;
        }

        /* The Card Container */
        .photo-card {
            position: relative; /* Necessary for the text overlay */
            background: var(--bg-card);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0,0,0,0.08);
            height: 350px; /* Fixed height for a uniform grid */
            cursor: pointer;
        }

        .photo-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease, filter 0.5s ease;
        }

        /* The Overlay (The text box that shows on hover) */
        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.8)); /* Dark fade for readability */
            overflow: hidden;
            width: 100%;
            height: 0; /* Hidden by default */
            transition: .5s ease;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 0 20px;
            box-sizing: border-box;
        }

        /* Hover states */
        .photo-card:hover .overlay {
            height: 100%; /* Slides the overlay up */
            padding-bottom: 30px;
        }

        .photo-card:hover img {
            transform: scale(1.1);
            filter: grayscale(30%) brightness(70%); /* Dims the image slightly */
        }

        .overlay-text {
            color: white;
            font-size: 0.9rem;
            text-align: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            transition-delay: 0.2s;
        }

        .photo-card:hover .overlay-text {
            opacity: 1;
        }

        .overlay-text h3 {
            margin: 0 0 10px 0;
            font-family: 'Playfair Display', serif;
            color: var(--accent-color);
        }

        footer {
            text-align: center;
            padding: 60px;
            background-color: var(--primary-color);
            color: #d5dbdb;
        }
    </style>
</head>
<body>

    <header class="gallery-header">
        <h1>Faith in Focus</h1>
        <div class="divider"></div>
        <p>"A visual testament to the spirit of Nyamata Church. Hover over each moment to learn more about our journey."</p>
    </header>

    <main class="image-grid">
        <?php
        $imageTypes = '{*.jpg,*.JPG,*.jpeg,*.JPEG,*.png,*.PNG,*.webp}';
        $images = glob($imageTypes, GLOB_BRACE);

        if ($images) {
            natsort($images);
            foreach($images as $image) {
                echo '
                <article class="photo-card">
                    <img src="'.$image.'" alt="Gallery Image" loading="lazy">
                    <div class="overlay">
                        <div class="overlay-text">
                            <h3>One Family</h3>
                            <p>Beyond the pews, we are a community bound by love and shared purpose</p>
                        </div>
                    </div>
                </article>';
            }
        } else {
            echo '<p style="grid-column: 1/-1; text-align:center;">No images found in the directory.</p>';
        }
        ?>
    </main>


    <?php include 'footer.php'; ?>

</body>
</html>