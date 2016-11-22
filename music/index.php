<?php
    $menu_item = "music";
    $title = "Music || MoonSurfers";
    $desc = "MoonSurfers music player.";
    include('../includes/header.php');
?>
<section class="o_section">
    <div class="c_player">
        <div id="mainwrap">
            <div id="nowPlay">
                <span class="u_float-left" id="npAction">Paused...</span>
                <span class="u_float-right" id="npTitle"></span>
            </div>
            <div id="audiowrap">
                <div id="audio0">
                    <audio preload id="audio1" controls="controls">Your browser does not support HTML5 Audio!</audio>
                </div>
                <div id="tracks" class="u_text-center">
                    <a id="btnPrev">&laquo;</a>
                    <a id="btnNext">&raquo;</a>
                </div>
            </div>
            <div id="plwrap">
                <ul id="plList">
                    <li>
                        <div class="plItem">
                            <div class="plNum">01.</div>
                            <div class="plTitle">Lovely Day (Bill Withers)</div>
                            <div class="plLength">3:32</div>
                        </div>
                    </li>
                    <li>
                        <div class="plItem">
                            <div class="plNum">02.</div>
                            <div class="plTitle">Easy (Commodores)</div>
                            <div class="plLength">3:53</div>
                        </div>
                    </li>
                    <li>
                        <div class="plItem">
                            <div class="plNum">03.</div>
                            <div class="plTitle">Black Hole Sun (Soundgarden)</div>
                            <div class="plLength">2:58</div>
                        </div>
                    </li>
                    <li>
                        <div class="plItem">
                            <div class="plNum">04.</div>
                            <div class="plTitle">Feeling Good (Nina Simone)</div>
                            <div class="plLength">2:37</div>
                        </div>
                    </li>
                    <li>
                        <div class="plItem">
                            <div class="plNum">05.</div>
                            <div class="plTitle">Adorable You (Doreen Shaffer)</div>
                            <div class="plLength">2:55</div>
                        </div>
                    </li>
                    <li>
                        <div class="plItem">
                            <div class="plNum">06.</div>
                            <div class="plTitle">Freedom and Its Owner (Kings of Convenience)</div>
                            <div class="plLength">4:23</div>
                        </div>
                    </li>
                    <li>
                        <div class="plItem">
                            <div class="plNum">07.</div>
                            <div class="plTitle">Wonderful Life (Black)</div>
                            <div class="plLength">3:52</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo $ROOT; ?>/node_modules/jquery/dist/jquery.min.js"></script>
<script src='http://api.html5media.info/1.1.8/html5media.min.js'></script>
<script src="<?php echo $ROOT; ?>/dist/js/app.js"></script>
<?php include('../includes/footer.php'); ?>