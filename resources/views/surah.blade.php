<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surah List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <h4 class="head mb-4">{{ __('Surah List') }}</h4>
        <div class="row mt-3">
            @foreach ($surahs as $index => $surah)
                <div class="col-md-4">
                    <div class="surah-card bg-white p-3">
                        <a href="{{ url('surah/ayah?id='.$surah['id']) }}">
                            <div class="d-flex justify-content-between">
                                <div class="surah-number">{{ convertToArabicNumerals($surah->id) }}</div>
                                <div class="surah-arabic">{{ $surah->arabic }}</div>
                            </div>
                            <div class="surah-title">
                                {{ $surah->latin }} <span class="surah-subtitle">({{ $surah->translation }})</span>
                            </div>
                            <div class="surah-subtitle">{{ $surah->num_ayah }} Ayat</div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-1d6OlC28soDhK6ujy5F5D3I3Z2DSt+Af5t1HZsclYBc7BtpVpV0O4z9CM/N9jH9F" crossorigin="anonymous"></script>
</body>
</html>



<?php
function convertToArabicNumerals($number) {
    $westernArabic = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $easternArabic = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
    return str_replace($westernArabic, $easternArabic, $number);
}
?>

<style>
    body {
        background-color: #f8f9fa;
    }
    .surah-card {
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
        transition: background-color 0.3s ease;
        border: 2px solid #28a745;
    }
    .surah-card:hover {
        background-color: #e9ffe9;
    }
    .surah-number {
        font-size: 24px;
        color: #007bff;
    }
    .surah-title {
        font-size: 18px;
        font-weight: bold;
    }
    .surah-subtitle {
        font-size: 14px;
        color: #6c757d;
    }
    .surah-arabic {
        font-size: 24px;
        color: #d39e00;
        text-align: right;
    }
    .head {
        transition: background-color 0.3s ease;
        border: 2px solid #28a745;
        border-radius: 10px;
        font-size: 35px;
        font-weight: bold;
        text-align: center;
    }
    .head:hover {
        background-color: #e9ffe9;
    }
    /* Remove underline from links */
    .surah-card a {
        text-decoration: none; /* No underline */
        color: inherit; /* Inherit color from parent */
    }
    .surah-card a:hover {
        color: #007bff; /* Change color on hover if desired */
    }
</style>