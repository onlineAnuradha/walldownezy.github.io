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
<?php if (isset($_SESSION['admin_logged_in'])): ?>
    <a href="upload.php" class="admin-upload-btn">Upload Wallpapers</a>
<?php endif; ?>
