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
