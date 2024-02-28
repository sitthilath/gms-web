<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/gms_icon.ico">
    <link href="./assets/css/scrolltotop.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="./assets/css/index.css" rel="stylesheet">
</head>
<style>
    body {
        font-family: 'Times New Roman', Times, serif;
    }
</style>

<body>
    <?php include_once("./components/scrolltotop.php")?>
    <header>
        <div class="header-background">
            <div id="heder-naviagation">
                <?php include_once("./components/navbar.php")?>
            </div><br><br>
            <div class="header-background-area">
                <div class="situation-logos">
                    <img class="top-logo-one" src="./assets/img/index/index_head1.png">
                    <img class="top-logo-two" src="./assets/img/index/index_head2.png">
                    <img class="top-logo-three" src="./assets/img/index/index_head3.png">
                </div>
                <div class="full-org-name">
                    <h1 style="color:#7e00b2">
                        The <b>14<sup>th</sup></b> International Public Health Conference among<br> Greater Mekong Sub-regional Countries
                    </h1>
                </div><br>
                <div class="section-venue">
                    <div class="venue-container">
                        <div class="venue">
                            <div class="icon-with-text fs-3">
                                <i class="fa-regular fa-calendar-days" style="color: rgba(13, 184, 169, 1);"></i>
                                <b style="color: red;">27<sup>th</sup> - 29<sup>th</sup></b> <b
                                    style="color: blue;">June</b> <b style="color: red;">2024</b>
                            </div>
                            <div class="icon-with-text">
                                <i class="fa-solid fa-location-dot" style="color: rgba(255, 51, 102, 1);"></i>
                                <b style="color:blue;">Pullman Hotel, Luangprabang City, Lao PDR</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="conference-info">
        <div class="container">
            <div class="title-conference">
                <!-- <h2 class="text-danger">Theme of Conference : </h2> -->
                <h3 style="color: #0D9276;">Theme: “ Meeting the Sustainable Development Goals through Improved Nutrition, Health Equity, and Climate Change Adaptation ”</h3>
            </div>
            <div class="paragraph">
                <p>
                    Welcome to <span class="text-dark">the <span class="text-dark">14<sup>th</sup></span> International
                        Public Health Conference among Greater Mekong Sub-regional
                        Countries in
                        LuangPrabang from <span class="text-dark">27-29<sup>th</sup></span> June <span
                            class="text-dark">2024</span></span> where experts from various fields gathers to discus and
                    explore the
                    latest advancement and trends. This year's theme <b style="color: #0D9276;"><i>“ Meeting the Sustainable Development Goals through Improved Nutrition, Health Equity, and Climate Change Adaptation ”</i></b> promises
                    insightful
                    sessions, engaging
                    discussions, and networking opportunities.
                </p>
                <p>
                    Join us for enriching experience as we bring together through public health policy maker, leaders,
                    professionals, and researchers to share knowledge and ideas. Save the date be part of this exciting
                    event!
                </p>
            </div>
        </div>

        <!-- Section STEERING COMMITTEE !!!-->
        <div class="section-steering-committee-bg">
            <div class="container section-steering-committee">
                <div class="section-steering-committee-header">
                    <i class="fa fa-sitemap" aria-hidden="true"></i><br>
                    Steering Committee
                </div>
                <div class="section-steering-committee-body">
                    <?php include('./components/steering.php')?>
                </div><br><br>
            </div>
        </div>

        <!-- Section Organizing committee here !!!-->
        <div class="section-committee-bg">
            <div class="container section-committee">
                <div class="section-committee-header">
                    <i class="fa fa-users" aria-hidden="true"></i><br>
                    Organizing Committee
                </div>
                <div class="section-committee-body">
                    <?php include('./components/committee.php')?>
                </div><br><br>
            </div>
        </div>

        <!-- Section Scientific COMMITTEE !!!-->
        <div class="section-scientific-committee-bg">
            <div class="container section-scientific-committee">
                <div class="section-scientific-committee-header">
                    <i class="fa fa-atom" aria-hidden="true"></i><br>
                    Scientific Committee
                </div>
                <div class="section-scientific-committee-body">
                    <?php include('./components/scientific.php')?>
                </div><br><br>
            </div>
        </div>

        <!-- Section Welcome Speech of Rector of University of Health Science shere !!!-->
        <div class="section-speech-rector-bg">
            <div class="container section-speech-rector">
                <div class="section-speech-rector-header">
                    <i class="fa fa-rss" aria-hidden="true"></i><br>
                    Welcome Speech of President of University<br> of Health Sciences, Lao PDR
                </div>
                <div class="section-speech-rector-body">
                    <?php include('./components/rector.php')?>
                </div><br><br>
            </div>
        </div>

        <!-- Section Welcome Speech of Deans !!!-->
        <div class="section-speech-deans-bg">
            <div class="container section-speech-deans">
                <div class="section-speech-deans-header">
                    <i class="fa fa-commenting" aria-hidden="true"></i><br>
                    Welcome Speech of Deans
                </div><br><br>
                <div class="section-speech-deans-body">
                    <?php include('./components/deans.php')?>
                </div><br><br>
            </div>
        </div>

        <!-- Section partner !!!-->
        <div class="section-partner-bg">
            <div class="section-partner">
                <div class="section-partner-header">
                    <i class="fa fa-info-circle" aria-hidden="true"></i><br>
                    Conference Partners
                </div>
                <div class="section-partner-body">
                    <?php include('./components/partner.php')?>
                </div>
            </div>
        </div>
        <hr>
        <!-- Section Sponsor here !!! -->
        <div class="supported-text">
            <h2>Supported by</h2>
        </div>

        <div class="sponsor-logos">
            <img class="sponsor-logo-one" src="./assets/img/index/bottom-1.png" alt="Sponsor 1">
            <img class="sponsor-logo-two" src="./assets/img/index/bottom-2.png" alt="Sponsor 2">
            <img class="sponsor-logo-three" src="./assets/img/index/bottom-3.png" alt="Sponsor 3">
            <img class="sponsor-logo-four" src="./assets/img/index/bottom-4.png" alt="Sponsor 4">
            <img class="sponsor-logo-five" src="./assets/img/index/bottom-5.png" alt="Sponsor 5">
            <img class="sponsor-logo-six" src="./assets/img/index/bottom-6.png" alt="Sponsor 6">
            <img class="sponsor-logo-seven" src="./assets/img/index/bottom-7.png" alt="Sponsor 7">
            <img class="sponsor-logo-eight" src="./assets/img/index/bottom-8.jpeg" alt="Sponsor 8">
            <!-- Add more sponsor logos as needed -->
        </div>
    </div>
    <!-- script js here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/scrolltotop.js"></script>
</body>

</html>