<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Pop-Under Ad Script -->
    <script type="text/javascript">
      window.onload = function () {
        setTimeout(function () {
          var popunder = window.open(
            "https://www.profitablecpmrate.com/yif9sh2vw?key=cc041ab299fb49c7958edc0cb8eef8c7",
            "_blank"
          );
          if (popunder) {
            popunder.blur(); // This will minimize the pop-under window
            window.focus(); // This will focus back to the main window
          }
        }, 3000); // Delay in milliseconds before the pop-under ad is triggered
      };
    </script>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wallpaper Download</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <header>
      <h1>4K Wallpapers</h1>
      <p>Download your favorite wallpapers in high quality</p>
        <?php if (isset($_SESSION['admin_logged_in'])): ?>
    <a href="upload.php" class="admin-upload-btn">Upload Wallpapers</a>
<?php endif; ?>

      <button id="darkModeToggle">🌙 Dark Mode</button>
      <input type="text" id="searchInput" placeholder="Search Wallpapers..." />
      <div class="categories"></div>
    </header>
    <div class="coffee-container">
    <a id="buyMeCoffee" href="https://www.buymeacoffee.com/onlineanuradha" target="_blank">
        ☕ Buy Me a Coffee
    </a>
</div>


    <div class="gallery">
    <?php
    $wallpapers = glob('uploads/*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);
    foreach ($wallpapers as $wallpaper) {
        echo "
        <div class='wallpaper'>
            <img src='$wallpaper' alt='Wallpaper'>
            <a href='$wallpaper' download>Download</a>
            <button class='like-btn'>❤</button>
        </div>";
    }
    ?>
</div>


      <div class="wallpaper" data-category="4k">
        <img
          src="img/WhatsApp Image 2025-02-06 at 14.12.08_354819d7.jpg"
          alt="Tech Wallpaper"
        />
        <a
          href="img/WhatsApp Image 2025-02-06 at 14.12.08_354819d7.jpg"
          download
          >Download</a
        >
        <button class="like-btn">❤</button>

      </div>
      <div class="wallpaper" data-category="4k">
        <img
          src="img/WhatsApp Image 2025-02-06 at 14.12.08_772183f2.jpg"
          alt="Minimal Wallpaper"
        />
        <a
          href="img/WhatsApp Image 2025-02-06 at 14.12.08_772183f2.jpg"
          download
          >Download</a
        >
        <button class="like-btn">❤</button>

      </div>
    </div>

    <button id="loadMore">Load More</button>

    <footer>
      <p>© 2025 Wallpaper Site | Designed by ANURADHA</p>
    </footer>

    <script src="script.js"></script>
  </body>
</html>
