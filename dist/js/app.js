// html5media enables <video> and <audio> tags in all major browsers
// External File: http://api.html5media.info/1.1.8/html5media.min.js


// Add user agent as an attribute on the <html> tag...
// Inspiration: http://css-tricks.com/ie-10-specific-styles/
var b = document.documentElement;
b.setAttribute('data-useragent', navigator.userAgent);
b.setAttribute('data-platform', navigator.platform);


// HTML5 audio player + playlist controls...
// Inspiration: http://jonhall.info/how_to/create_a_playlist_for_html5_audio
// Mythium Archive: https://archive.org/details/mythium/
jQuery(function ($) {
    var supportsAudio = !!document.createElement('audio').canPlayType;
    if (supportsAudio) {
        var index = 0,
            playing = false,
            mediaPath = '../dist/audio/',
            extension = '',
            tracks = [{
                "track": 1,
                "name": "Lovely Day (Bill Withers)",
                "length": "03:32",
                "file": "MoonSurfers-Lovely_Day(Bill-Withers)"
            }, {
                "track": 2,
                "name": "Easy (Commodores)",
                "length": "03:53",
                "file": "MoonSurfers-Easy(Commodores)"
            }, {
                "track": 3,
                "name": "Black Hole Sun (Soundgarden)",
                "length": "02:58",
                "file": "MoonSurfers-Black_Hole_Sun(Soundgarden)"
            }, {
                "track": 4,
                "name": "Feeling Good (Nina Simone)",
                "length": "02:37",
                "file": "MoonSurfers-Feeling_Good(Nina_Simone)"
            }, {
                "track": 5,
                "name": "Adorable You (Doreen Shaffer)",
                "length": "02:55",
                "file": "MoonSurfers-Adorable_You(Doreen_Shaffer)"
            }, {
                "track": 6,
                "name": "Freedom and Its Owner (Kings of Convenience)",
                "length": "04:23",
                "file": "MoonSurfers-Freedom_and_Its_Owner(Kings of Convenience)"
            }, {
                "track": 7,
                "name": "Wonderful Life (Black)",
                "length": "03:52",
                "file": "MoonSurfers-Wonderful_Life(Black)"
            }],
            trackCount = tracks.length,
            npAction = $('#npAction'),
            npTitle = $('#npTitle'),
            audio = $('#audio1').bind('play', function () {
                playing = true;
                npAction.text('Now Playing...');
            }).bind('pause', function () {
                playing = false;
                npAction.text('Paused...');
            }).bind('ended', function () {
                npAction.text('Paused...');
                if ((index + 1) < trackCount) {
                    index++;
                    loadTrack(index);
                    audio.play();
                } else {
                    audio.pause();
                    index = 0;
                    loadTrack(index);
                }
            }).get(0),
            btnPrev = $('#btnPrev').click(function () {
                if ((index - 1) > -1) {
                    index--;
                    loadTrack(index);
                    if (playing) {
                        audio.play();
                    }
                } else {
                    audio.pause();
                    index = 0;
                    loadTrack(index);
                }
            }),
            btnNext = $('#btnNext').click(function () {
                if ((index + 1) < trackCount) {
                    index++;
                    loadTrack(index);
                    if (playing) {
                        audio.play();
                    }
                } else {
                    audio.pause();
                    index = 0;
                    loadTrack(index);
                }
            }),
            li = $('#plList li').click(function () {
                var id = parseInt($(this).index());
                if (id !== index) {
                    playTrack(id);
                }
            }),
            loadTrack = function (id) {
                $('.plSel').removeClass('plSel');
                $('#plList li:eq(' + id + ')').addClass('plSel');
                npTitle.text(tracks[id].name);
                index = id;
                audio.src = mediaPath + tracks[id].file + extension;
            },
            playTrack = function (id) {
                loadTrack(id);
                audio.play();
            };
        extension = audio.canPlayType('audio/mpeg') ? '.mp3' : audio.canPlayType('audio/ogg') ? '.ogg' : '';
        loadTrack(index);
    }
});