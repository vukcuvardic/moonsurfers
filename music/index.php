<?php
    $menu_item = "music";
    $title = "Music || MoonSurfers";
    $desc = "MoonSurfers music player.";
    include('../includes/header.php');
?>
<section class="o_section">
    <div class="c_player">
        <audio preload></audio>
    </div>
    <div class="c_play-list-container">
        <ol class="o_list c_play-list">
            <li><a href="#" data-src="<?php echo $ROOT; ?>/dist/audio/MoonSurfers-Lovely_Day(Bill-Withers).mp3">Lovely Day (Bill Withers)</a></li>
            <li><a href="#" data-src="<?php echo $ROOT; ?>/dist/audio/MoonSurfers-Easy(Commodores).mp3">Easy (Commodores)</a></li>
            <li><a href="#" data-src="<?php echo $ROOT; ?>/dist/audio/MoonSurfers-Black_Hole_Sun(Soundgarden).mp3">Black Hole Sun (Soundgarden)</a></li>
            <li><a href="#" data-src="<?php echo $ROOT; ?>/dist/audio/MoonSurfers-Feeling_Good(Nina_Simone).mp3">Feeling Good (Nina Simone)</a></li>
            <li><a href="#" data-src="<?php echo $ROOT; ?>/dist/audio/MoonSurfers-Adorable_You(Doreen_Shaffer).mp3">Adorable You (Doreen Shaffer)</a></li>
            <li><a href="#" data-src="<?php echo $ROOT; ?>/dist/audio/MoonSurfers-Freedom_and_Its_Owner(Kings of Convenience).mp3">Freedom and Its Owner (Kings of Convenience)</a></li>
            <li><a href="#" data-src="<?php echo $ROOT; ?>/dist/audio/MoonSurfers-Wonderful_Life(Black).mp3">Wonderful Life (Black)</a></li>
        </ol>
    </div>
</section>

<script src="<?php echo $ROOT; ?>/node_modules/jquery/dist/jquery.min.js"></script>
<script src="<?php echo $ROOT; ?>/music/audio.min.js"></script>
<script src="<?php echo $ROOT; ?>/dist/js/app.js"></script>
<?php include('../includes/footer.php'); ?>