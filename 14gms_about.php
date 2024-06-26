<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/gms_icon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="./assets/css/scrolltotop.css" rel="stylesheet">
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome"
        href="/css/app-wa-462d1fe84b879d730fe2180b0e0354e0.css?vsn=d">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">

    <link href="./assets/css/index.css" rel="stylesheet">
    <style>
        html {
            font-size: calc(60% + 0.8vmin);
        }

        body {
            font-family: 'Times New Roman', sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(218, 212, 255);
        }

        header {
            position: relative;
            color: #ffffff;
            text-align: center;
            height: auto;
            background-image: linear-gradient(rgba(0,0,0, 0.5), rgba(0,0,0, 0.5)), url(./assets/img/meeting1.jpg);
            /* background-image: url(./assets/img/meeting2.jpg); */
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            display: flex;
            flex-direction: column;
            /* Set the flex direction to column for a vertical layout */
            justify-content: center;
            align-items: center;
            /* padding: 50px 0; */
            text-shadow: 1px 1px #000;
        }

        .panel-header {
            padding: 10px;
        }

        .header-topic {
            margin-top: 30px;
            font-size: 45px;
            font-weight: 700;
        }

        .header-content {
            padding: 10px;
            max-width: 1000px;
            /* border: 1px solid #e2e2e2; */
            border-radius: 5px;
            color: #fff;
            background-image: linear-gradient(rgba(14, 84, 233, 0.9),rgba(14, 84, 233, 0.9));
            
        }

        .box-800w {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }

        .history-section {
            height: auto;
            color: #054a29;
            background-color: #FFFFEC;
        }

        .history-title {
            text-align: center;
        }

        .history-paragraph {
            font-size: 22px;
            text-align: justify;
            line-height: 1.2;
        }

        .vision-section {

            height: 450px;
            /* background-color: rgb(207, 199, 252); */
            background-color: #F1E4C3;
            color: #7400b8;
        }

        .vision-title {
            text-align: center;

        }

        .vision-paragraph {
            font-size: 22px;
            text-align: justify;
            line-height: 1.2;
        }

        .mission-section {
            height: 450px;
            /* background-color: rgb(195, 185, 252); */
            background-color: #f1d99c;
            color: #03045e;
        }

        .mission-title {
            text-align: center;

        }

        .mission-paragraph {
            font-size: 22px;
            text-align: justify;
            line-height: 1.2;
        }

        .objective-section {
            height: 450px;
            color: #a00800;
            background-color: #dbbb75;
            /* background-color: rgb(193, 126, 255); */
        }

        .objective-title {
            text-align: center;
        }

        .objective-paragraph {

            font-size: 22px;
            text-align: justify;
            line-height: 1.2;
            padding: 0;
        }

        .timeline-conference-section {
            background-color: white;
        }

        .timeline-conference-title {
            text-align: center;
        }

        .program-conference-section {
            background-color: rgba(0, 102, 204, 1);
        }

        .program-conference-title {
            text-align: center;
            color: white;
        }

        .program-conference-paragraph {
            text-align: center;
        }

        .keynote-speaker-section {
            background-color: rgba(13, 184, 169, 1);
        }

        .keynote-speaker-title {
            text-align: center;
            color: white;
        }

        .keynote-speaker-paragraph {
            text-align: center;
        }

        .video-section {
            /* background-color: #be9c45; */
            color: blue;
        }

        .video-section iframe{
            width: 100%;
            height: 485px;
        }
        @media screen and (max-width:495px) {

            .history-section,
            .objective-section,
            .vision-section,
            .mission-section {
                height: auto;
            }

            .header-topic {
                margin-top: 30px;
                font-size: 40px;
            }
            header {
                height: auto;
            }
        }
    </style>
</head>

<body>
    <?php include_once("./components/scrolltotop.php")?>
    <header>
        <div id="heder-naviagation">
            <?php include_once("./components/navbar.php")?>
        </div>
        <br><br>
        <div class="panel-header">
            <div class="header-topic">About GMS</div><br>
            <h2 class="header-content">
                <p style="margin-bottom: 25px;">The Greater Mekong Sub-regional (GMS) Public Health Academic Network</p>
                
                <p>14<sup>th</sup> International Conference on Public Health among<br> Greater Mekong Sub-Regional Countries in
                    Luangprabang province,
                    <br>27 - 29<sup>th</sup> June, 2024</p>
            </h2>
        </div>
    </header>

    <div class="content">
        <section class="history-section">
            <div class="box-800w">
                <i class="fa-solid fa-clock-rotate-left w-100 text-center pt-4 pb-2" style="font-size: 60px;"></i>
                <div class="history-title fw-bolder pb-4" style="font-size: 30px">Background</div>
                <p class="history-paragraph">
                    The Greater Mekong Sub-regional (GMS) Public Health Academic Network has started in 2008. It
                    comprises
                    members from public health academic institutions of 6 countries in the GMS namely Thailand, Vietnam,
                    Lao PDR, China, Myanmar and Cambodia. 
                </p>
                <p class="history-paragraph">
                    The Network is committed to enhance the quality and relevance of educational and training programs
                    in public health in the GMS. The Network itself is responsible for strengthening the collaboration
                    and partnership of the public health institutions in the GMS, and fostering collaborative actions
                    among existing networks, policymakers and researchers with interest in health policy and health
                    research. 
                </p>
                <p class="history-paragraph">
                    The Network also serves as a platform for health personnel, academicians, researchers, especially
                    graduate students and young academic staff from the GMS region to share and exchange scientific as
                    well as professional experience on public health from their countries. 
                </p>
                <div class="video-section">
                    <i class="fa fa-video-camera w-100 text-center pt-4 pb-2" style="font-size: 60px;"></i>
                    <div class="video-title fw-bolder pb-4 text-center" style="font-size: 30px">
                        Video of the 13th ICPH among GMS Countries
                    </div>
                    <div class="video-content">
                        <iframe src="https://www.youtube.com/embed/hSkAY3EQGuw" title="ICPH GMS13 Vietnam: PLENARY SESSION II &amp; CLOSING CEREMONY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="vision-section">
            <div class="box-800w">
                <i class="fa-solid fa-eye w-100 text-center pt-4 pb-2" style="font-size: 60px;"></i>
                <div class="vision-title fw-bolder pb-4" style="font-size: 30px">Vision</div>
                <p class="vision-paragraph">
                    The network has been established to achieve the highest possible level of health among the people
                    and to promote equity of health in the Greater Mekong Sub-regional. 
                </p>
            </div>
        </section>

        <section class="mission-section">
            <div class="box-800w">
                <i class="fa-regular fa-bullseye-arrow w-100 text-center pt-4 pb-2" style="font-size: 60px;"></i>
                <div class="mission-title fw-bolder pb-4" style="font-size: 30px">Mission</div>
                <p class="mission-paragraph">
                    To enhance regional capacity to address major public health challenges through the delivery of
                    education, research,
                    and policy advocacy for the improvement of population health and for health equity in the region.
                    This conference is one of the key activities of the Greater Mekong Public Health Academic Network.
                </p>
            </div>
        </section>

        <section class="objective-section">
            <div class="box-800w">
                <i class="fa-regular fa-rectangle-history w-100 text-center pt-4 pb-2" style="font-size: 60px;"></i>
                <div class="objective-title fw-bolder pb-4" style="font-size: 30px">Objectives of the 14<sup>th</sup>
                    ICPH among GMS Countries</div>
                <ul class="objective-paragraph">
                    <li>To enhance the quality and relevance of educational and training programs as well as research in
                        public health among greater Mekong Sub-Region countries.</li>
                    <li>To share knowledge and experience in Preventive Public Health among the diverse societies of the
                        Mekong Sub-Region countries</li>
                    <li>To further enhance effective links between policy makers, public health institutions, and
                        relevant
                        stakeholders.</li>
                </ul>
            </div>
        </section>

        <!-- <section class="video-section">
            <div class="box-800w">
                <i class="fa fa-video-camera w-100 text-center pt-4 pb-2" style="font-size: 60px;"></i>
                <div class="video-title fw-bolder pb-4 text-center" style="font-size: 30px">
                    Video of the 13th ICPH among GMS Countries
                </div>
                <div class="video-content">
                    <iframe src="https://www.youtube.com/embed/hSkAY3EQGuw" title="ICPH GMS13 Vietnam: PLENARY SESSION II &amp; CLOSING CEREMONY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </section> -->

    </div>
    <!-- javascript is here!!! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/scrolltotop.js"></script>
</body>

</html>