<!DOCTYPE html>

<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Noto+Sans:wght@400;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="surah-list">
        @foreach($surah as $surahh)
            <div class="surah">
                <h2 class="surah-latin">{{ $surahh->latin }}</h2>
                <h2 class="surah-arab">{{ $surahh->arabic }}</h2>
                <div class="surah-info">
                    <span class="text-muted">({{ $surahh->translation }})</span>
                    <span class="text-muted">• {{ $surahh->num_ayah }} Ayat</span>
                </div>
            </div>
        @endforeach
    </div>

    <div class="py-5">
        @foreach($ayahs as $ayah)
            <div class="content">
                <div class="row">
                    <div class="col-1">
                        <div class="verse-number">{{ $ayah->ayah }}</div>
                    </div>
                    <div class="col-11">
                        <div class="arabic-text">
                            <p class="display-2"
                            style="font-size: 35px;
                            line-height: 75px;
                            letter-spacing: 0,10em;
                            font-size: 30px;">{{ $ayah->arabic }}</p>
                        </div>
                        <div class="mt-3">
                            <p class="font-noto text-success italic mb-2">{{ $ayah->latin }}</p>
                            <p class="text-black font-weight-semibold mb-2">Artinya:</p>
                            <p class="text-muted mb-0" style="font-size: 1.1rem; color: #000000">{{ $ayah->translation }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <button class="back-to-top" onclick="scrollToTop()">Back to Top</button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-1d6OlC28soDhK6ujy5F5D3I3Z2DSt+Af5t1HZsclYBc7BtpVpV0O4z9CM/N9jH9F" crossorigin="anonymous"></script>
    <script>
        // Show the button when the user scrolls down
        window.onscroll = function() {
            const button = document.querySelector('.back-to-top');
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                button.style.display = "block";
            } else {
                button.style.display = "none";
            }
        };

        // Function to scroll to the top
        function scrollToTop() {
            window.scrollTo({top: 0, behavior: 'smooth'});
        }
    </script>
</body>
</html>



<style>
    body {
        font-family: 'Amiri', serif;    }
    .header {
        text-align: center;
        margin-top: 20px;
    }
    .header h1 {
        color: green;
    }
    .header h2 {
        color: gold;
    }
    .surah-list {
        text-align: center;
        margin-bottom: 40px;
    }
    .surah {
        margin-bottom: 20px;
        padding: 20px;
        border: 2px solid #28a745;
        border-radius: 10px;
        background-color: #f8f9fa;
        transition: background-color 0.3s ease;
    }
    .surah:hover {
        background-color: #e9ffe9;
    }
    .surah-latin {
        font-size: 25px;
        color: #28a745;
    }
    .surah-arab {
        font-size: 23px;
        color: #f5bf10;
    }
    .content {
        border: 2px solid green;
        border-radius: 5px;
        padding: 20px;
        margin: 20px 0;
        transition: box-shadow 0.3s ease;
    }
    .content:hover {
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }
    .verse-number {
        margin: 14px 16px 0 0;
        width: 41px;
        height: 41px;
        background-image: url(/assets/images/ic-frame-number.svg);
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .arabic-text {
        text-align: right;
        color: black;
    }
    .translation {
        color: #0a8b28;
        font-style: italic;
    }
    .meaning {
        margin-top: 10px;
    }
    .back-to-top {
        position: fixed;
        bottom: 30px;
        right: 30px;
        display: none; /* Hidden by default */
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 15px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .back-to-top:hover {
        background-color: #218838;
    }
</style>