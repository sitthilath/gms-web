<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/gms_icon.ico">
    <link href="./assets/css/index.css" rel="stylesheet">
    <link href="./assets/css/scrolltotop.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome"
        href="/css/app-wa-462d1fe84b879d730fe2180b0e0354e0.css?vsn=d">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">

    <style>
    body {
        font-family: 'Times New Roman', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
        color: #333;
    }

    header {
        color: #fff;
        height: 100vh;
        background-image: url(./assets/img/Pullman-Luang-Prabang.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        display: flex;
        flex-direction: column;
        /* Set the flex direction to column for a vertical layout */
        justify-content: center;
        align-items: center;
        padding: 50px 0;
        opacity: 0.95;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .header-content {
        background-color: rgba(60, 101, 233);
        border-radius: 5px;
        -webkit-backdrop-filter: blur(5px);
        backdrop-filter: blur(5px);
        padding: 5px;
        color: #f00b0b;
        text-shadow: 3px 3px 3px #000;
        font-size: 60px;
        font-weight: 700;
    }

    section {
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    a {
        color: rgba(68, 8, 125, 1);
        text-decoration: none;
        font-weight: bold;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    li {
        margin-bottom: 8px;
    }

    footer {
        text-align: center;
        padding: 10px;
        background-color: rgba(16, 46, 75, 0.95);
        color: #fff;
        position: fixed;
        bottom: 0;
        width: 100%;
    }

    .conference {
        line-height: 1.5;
    }

    .conference-img {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .conference-img-items {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        gap: 20px;
    }

    .conference-img-items a {
        width: 100%;
        height: 100%;
    }

    .conference-img-items img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 5px;
        border: 5px solid #e2e2e2;
    }

    .conference-img-items img:hover {
        border: 4px solid blue;
    }

    ul li {
        display: flex;
        gap: 20px;
        justify-content: space-evenly;
    }

    ul li span {
        display: flex;
        justify-content: start;
        align-items: center;
        text-align: center;
        background-color: #eee;
        border-radius: 5px;
        padding: 10px 10px 20px 10px;
        width: 100%;
        height: auto;
        gap: 35px;
    }

    ul li span a {
        border: 1px solid lightgrey;
        border-radius: 10px;
        padding: 8px 20px;
        color: blue;
    }

    ul li span a:hover {
        border: 1px solid lightblue;
        background-color: lightblue;
    }

    ul li span img {
        width: 8rem;
        height: 8rem;
        border-radius: 100%;
        border: 4px solid lightblue;
    }

    ul li span div {
        width: 100%;
        text-align: center;
    }

    ul li span div p {
        font-size: 12px;
        padding-bottom: 10px;
    }

    .i-address {
        color: red;
        font-size: 20px;
    }

    .i-website {
        color: blue;
        font-size: 20px;
    }

    .title {
        font-size: 36px;
        font-weight: bolder;
        /* color: rgba(16, 46, 75, 0.95); */
        color: darkblue;
    }

    .hotel-title {
        font-weight: bolder;
    }

    .conference-title {
        list-style: none;
        font-weight: bold;
        font-size: 22px;
        color: darkblue;
    }

    .conference-span {
        font-size: 22px;
        color: blue;
    }

    @media screen and (max-width:768px) {
        .conference-img-items {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 20px;
        }

        .conference-img-items img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        ul li {
            display: flex;
            flex-direction: column;
        }
    }

    @media screen and (max-width:451px) {

        .header-content {
            font-size: 30px;
            font-weight: bolder;
        }
    }

    @media screen and (max-width:320px) {
        ul li span {
            display: flex;
            flex-direction: column;
        }

    }
    </style>
</head>

<body>
    <?php include_once("./components/scrolltotop.php")?>
    <div class="bg-danger h-25">
        <?php include_once("./components/navbar.php")?>
    </div>
    <header>
        <!-- <div id="heder-naviagation">
           
        </div> -->
        <br><br>
        <div class="header-content"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;<span
                style="color:#63FA05;">Conference Venue</span></div>
    </header>

    <section class="container">
        <div class="conference">
            <div class="conference-details">
                <h2 class="title text-center py-2"><i class="fa fa-location-arrow" aria-hidden="true"></i><br>Conference
                    Hotel Location</h2>
                <table class="table table-striped">
                    <tr>
                        <td>
                            <li class="conference-title">Date:</li>
                        </td>
                        <td>
                            <span class="conference-span">
                                2 days Conference: 28-29 June, 2024<br>
                                One day Preconference, 27 June, 2024
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <li class="conference-title">Venue:</li>
                        </td>
                        <td><span class="conference-span">Pullman Hotel, Luangprabang City, Lao PDR</span></td>
                    </tr>
                    <tr>
                        <td>
                            <li class="conference-title">Address:</li>
                        </td>
                        <td><span class="conference-span">Ban Phong Wanh, Luangprabang District, 06000<br>
                                Vientiane Capital, Lao PDR.<br>Tel: +856 71
                                211112
                            </span></td>
                    </tr>

                    <tr>
                        <td>
                            <li class="conference-title">Email:</li>
                        </td>
                        <td><span class="conference-span">h9112@accor.com</span></td>
                    </tr>

                    <tr>
                        <td>
                            <li class="conference-title">Website:</li>
                        </td>
                        <td><span class="conference-span">https://www.Pullman-luangprabang.com</span></td>
                    </tr>

                    <tr>
                        <td>
                            <li class="conference-title">Language:</li>
                        </td>
                        <td><span class="conference-span">The official language of the conference is English</span></td>
                    </tr>
                </table>
                <!-- <p style="font-size: 20px;"><b>Date:</b> 27<sup>th</sup> - 29<sup>th</sup> June, 2024<br>
                    The pre-conference workshop will be on 27<sup>th</sup> June, 2024<br>
                    The conference days will be on 28<sup>th</sup> - 29<sup>th</sup> June, 2024<br><br>
                    <b>Venue:</b> Pullman Hotel, Luangprabang City, Lao PDR<br>
                    <b>Address:</b> Ban Pong Wanh, Luangprabang, Laos.<br>
                    <b>Website:</b> https://www.Pullman-luangprabang.com<br>
                    <b>Email:</b> h9112@accor.com<br>
                    <b>Language:</b> The official language of the conference is English
                </p> -->
            </div>
            <div class="conference-img">
                <div class="conference-img-items">
                    <a href="./assets/img/venue/conference_room_5.jpeg" target="_blank">
                        <img src="./assets/img/venue/conference_room_5.jpeg" alt="room">
                    </a>
                    <a href="./assets/img/venue/conference_room_1.jpeg" target="_blank">
                        <img src="./assets/img/venue/conference_room_1.jpeg" alt="room">
                    </a>
                </div>
                <div class="conference-img-items">
                    <a href="./assets/img/venue/conference_room_6.jpeg" target="_blank">
                        <img src="./assets/img/venue/conference_room_6.jpeg" alt="room">
                    </a>
                    <a href="./assets/img/venue/conference_room_2.jpeg" target="_blank">
                        <img src="./assets/img/venue/conference_room_2.jpeg" alt="room">
                    </a>
                </div>
                <div class="conference-img-items">
                    <a href="./assets/img/venue/conference_room_3.jpeg" target="_blank">
                        <img src="./assets/img/venue/conference_room_3.jpeg" alt="room">
                    </a>
                    <a href="./assets/img/venue/conference_room_4.jpeg" target="_blank">
                        <img src="./assets/img/venue/conference_room_4.jpeg" alt="room">
                    </a>
                </div>
            </div>
        </div><br>
        <hr>
        <h2 class="title text-center py-2"><i class="fa fa-bed" aria-hidden="true"></i><br>Alternative Accommodations
        </h2>
        <p style="font-size: 20px;">Suggestion List Of The Guesthouse/Hotel in Luangprabang:
        <ul>
            <li>
                <span>
                    <img src="./assets/img/venue/hotel_guesthouse/the_grand.jpg">
                    <div>
                        <div class="hotel-title">The Grand Luang Prabang Hotel</div>
                        <p><i class="i-address fa fa-map-marker" aria-hidden="true"></i>&nbsp;V494+V7J, Ban Xiengkeo,
                            Luang
                            Prabang
                        </p>
                        <a href="https://www.grandluangprabang.com" target="_blank"><i class="i-website fa fa-globe"
                                aria-hidden="true"></i>&nbsp;&nbsp;Website</a>
                    </div>
                </span>
                <span>
                    <img src="./assets/img/venue/hotel_guesthouse/legend_hotel.jpg">
                    <div>
                        <div class="hotel-title">Luang Prabang Legend Hotel</div>
                        <p><i class="i-address fa fa-map-marker" aria-hidden="true"></i>&nbsp;Luang Prabang
                        </p>
                        <a href="http://www.luangprabanglegend.com" target="_blank"><i class="i-website fa fa-globe"
                                aria-hidden="true"></i>&nbsp;&nbsp;Website</a>
                    </div>
                </span>
            </li>
            <li>
                <span>
                    <img src="./assets/img/venue/hotel_guesthouse/View_Hotel.png">
                    <div>
                        <div class="hotel-title">Luang Prabang View Hotel</div>
                        <p><i class="i-address fa fa-map-marker" aria-hidden="true"></i>&nbsp;V4FJ+292, Luang Prabang
                        </p>
                        <a href="https://luangprabangview.com" target="_blank"><i class="i-website fa fa-globe"
                                aria-hidden="true"></i>&nbsp;&nbsp;Website</a>
                    </div>
                </span>

                <span>
                    <img src="./assets/img/venue/hotel_guesthouse/Vangsavath_hotel.png">
                    <div>
                        <div class="hotel-title">Vangsavath Hotel</div>
                        <p><i class="i-address fa fa-map-marker" aria-hidden="true"></i>&nbsp;Ban Nongkham, Luang
                            Prabang
                        </p>
                        <a href="https://www.vangsavathhotel.com/" target="_blank"><i class="i-website fa fa-globe"
                                aria-hidden="true"></i>&nbsp;&nbsp;Website</a>
                    </div>
                </span>
            </li>
            <li>
                <span>
                    <img src="./assets/img/venue/hotel_guesthouse/sasalao_guesthouse.jpg">
                    <div>
                        <div class="hotel-title">Sa Sa Lao Guesthouse</div>
                        <p><i class="i-address fa fa-map-marker" aria-hidden="true"></i>&nbsp;Ban Vieng Mai, Luang
                            Prabang
                        </p>
                        <a href="https://www.sasalao.com/" target="_blank"><i class="i-website fa fa-globe"
                                aria-hidden="true"></i>&nbsp;&nbsp;Website</a>
                    </div>
                </span>

                <span>
                    <img src="./assets/img/venue/hotel_guesthouse/vilamaly_hotel.jpg">
                    <div>
                        <div class="hotel-title">Villa Maly Boutique Hotel</div>
                        <p><i class="i-address fa fa-map-marker" aria-hidden="true"></i>&nbsp;Ban That Luang Village,
                            Luang Prabang
                        </p>
                        <a href="https://www.villa-maly.com/" target="_blank"><i class="i-website fa fa-globe"
                                aria-hidden="true"></i>&nbsp;&nbsp;Website</a>
                    </div>
                </span>
            </li>
            <li>
                <span>
                    <img src="./assets/img/venue/hotel_guesthouse/madmonkey.jpg">
                    <div>
                        <div class="hotel-title">Mad Monkey Luang Prabang</div>
                        <p><i class="i-address fa fa-map-marker" aria-hidden="true"></i>&nbsp;Luang Prabang
                        </p>
                        <a href="https://madmonkeyhostels.com/luang-prabang/" target="_blank"><i
                                class="i-website fa fa-globe" aria-hidden="true"></i>&nbsp;&nbsp;Website</a>
                    </div>
                </span>

                <span>
                    <img src="./assets/img/venue/hotel_guesthouse/beauty_season_hotel.jpeg">
                    <div>
                        <div class="hotel-title">Beauty season 1935 Hotel</div>
                        <p><i class="i-address fa fa-map-marker" aria-hidden="true"></i>&nbsp;Phetsarat Road, Luang
                            Prabang, Laos
                        </p>
                        <a href="https://www.booking.com/hotel/la/beauty-season.en-gb.html?label=louangphrabang-HZlutxtmfkEkNj_Gf6gurQS473171526608%3Apl%3Ata%3Ap1230%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-2084400343%3Alp9047134%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YZVcNNsENnH02-pWD53qm9c&aid=306395"
                            target="_blank"><i class="i-website fa fa-globe"
                                aria-hidden="true"></i>&nbsp;&nbsp;Website</a>
                    </div>
                </span>
            </li>
            <li>
                <span>
                    <img src="./assets/img/venue/hotel_guesthouse/mano_hotel.jpg">
                    <div>
                        <div class="hotel-title">Mano Boutique Sun Shine</div>
                        <p><i class="i-address fa fa-map-marker" aria-hidden="true"></i>&nbsp;Viengxay village,
                            Luangprabang district, Luangprabang Province
                        </p>
                        <p style="padding: 0;"><b>Tel&Whatsapp:</b> 020 92841118</p>

                    </div>
                </span>


                <span>
                    <img src="./assets/img/venue/hotel_guesthouse/downtown_hotel.jpg">
                    <div>
                        <div class="hotel-title">Downtown Hotel</div>
                        <p><i class="i-address fa fa-map-marker" aria-hidden="true"></i>&nbsp;Haoxieng village,
                            Luangprabang district, Luangprabang Province
                        </p>

                        <p style="padding: 0;"><b>Tel:</b> +85620 88774455</p>

                    </div>
                </span>
            </li>

            <li>
                <span>
                    <img src="./assets/img/venue/hotel_guesthouse/tavandang_villa.png">
                    <div>
                        <div class="hotel-title">VILLA TAVANDANG</div>
                        <p><i class="i-address fa fa-map-marker" aria-hidden="true"></i>&nbsp;Viengxay village,
                            Luangprabang district, Luangprabang Province
                        </p>
                        <p style="padding: 0;"><b>Email:</b> villatavandang@yahoo.com</p>
                        <p style="padding: 0;"><b>Tel:</b> 071 254908 / 020 56782307</p>

                    </div>
                </span>

                <span>
                    <img src="./assets/img/venue/hotel_guesthouse/pavilion_hotel.png">
                    <div>
                        <div class="hotel-title">Luangprabang Pavilion Hotel</div>
                        <p><i class="i-address fa fa-map-marker" aria-hidden="true"></i>&nbsp;Viengxay village,
                            Luangprabang district, Luangprabang Province
                        </p>
                        <p style="padding: 0;"><b>Email:</b> hotel-lpb-pavilion@outlook.com</p>
                        <p style="padding: 0;"><b>Tel:</b> 071-212959 / 020 99978252</p>

                    </div>
                </span>
            </li>

            <li>
                <span>
                    <img src="./assets/img/venue/hotel_guesthouse/bualuang_hotel.jpg">
                    <div>
                        <div class="hotel-title">Bua Luang Hotel</div>
                        <p><i class="i-address fa fa-map-marker" aria-hidden="true"></i>&nbsp;Viengxay village,
                            Luangprabang district, Luangprabang Province
                        </p>
                        <p style="padding: 0;"><b>Email:</b> Bualuang Hotel@live.com</p>
                        <p style="padding: 0;"><b>Tel:</b> 071 213085</p>

                    </div>
                </span>


                <span>
                    <img src="./assets/img/venue/hotel_guesthouse/ananta_hotel.png">
                    <div>
                        <div class="hotel-title">Ananta Hotel</div>
                        <p><i class="i-address fa fa-map-marker" aria-hidden="true"></i>&nbsp;Chao Kommavang Road, Town
                            Center, Luang Prabang
                        </p>
                        <p style="padding: 0;"><b>Email:</b> Anantahotel22@gmail.com</p>
                        <p style="padding: 0;"><b>Tel & whatsapp:</b> +8562059495679</p>

                    </div>
                </span>
            </li>

            <li>
                <span>
                    <img src="./assets/img/venue/hotel_guesthouse/houngvilai_hotel.jpg">
                    <div>
                        <div class="hotel-title">Houngvilai Hotel</div>
                        <p><i class="i-address fa fa-map-marker" aria-hidden="true"></i>&nbsp;Kitsalath Rd, Luang
                            Prabang
                        </p>
                        <p style="padding: 0;"><b>Email:</b> info@houngvilaihotel.com</p>
                        <p style="padding: 0;"><b>Tel:</b> 071 212111 / 020 76129555</p>

                    </div>
                </span>

                <span>
                    <img src="./assets/img/venue/hotel_guesthouse/meseum_inn.jpg">
                    <div>
                        <div class="hotel-title">Museum Inn & Travel Luang Prabang</div>
                        <p><i class="i-address fa fa-map-marker" aria-hidden="true"></i>&nbsp;Viengxay village,
                            Luangprabang district, Luangprabang Province
                        </p>

                        <p style="padding: 0;"><b>Tel:</b> +856 20 98652998</p>

                    </div>
                </span>
            </li>
        </ul>
        </p>
        <br>
        <p style="font-size: 20px;">Explore other accommodation options on popular platforms:
        <div clsss="list-link-find-hotel" style="font-size: 20px;">
            <a href="https://www.booking.com" target="_blank">Booking.com</a> <br>
            <a href="https://www.expedia.com" target="_blank">Expedia</a> <br>
            <a href="https://www.hotels.com" target="_blank">Hotels.com</a>
        </div>
        </p>


    </section>

    <section class="container transportation">

        <!-- flight Transportation -->
        <h2 class="title text-center py-2"><i class="fa fa-plane" aria-hidden="true"></i><br>Transportation from
            Vientiane to LPB </h2>

        <div class="fs-5 pt-4"><b>1. Flight from Wattay International Airport (VTE):</b></div><br>

        <div class="conference-img">
            <div class="conference-img-items">
                <a href="./assets/img/flight/wattai.jpeg" target="_blank">
                    <img src="./assets/img/flight/wattai.jpeg" alt="room">
                </a>
                <a href="./assets/img/flight/lao-air.jpeg" target="_blank">
                    <img src="./assets/img/flight/lao-air.jpeg" alt="room">
                </a>
            </div>
        </div>
        <br>
        <p style="font-size: 20px;padding-left: 16px;">You can use popular online travel platforms such as:</p>


        <div clsss="list-link-find-hotel" style="font-size: 20px;padding-left: 30px;">
            <a href="https://www.skyscanner.com" target="_blank">Skyscanner.com</a> <br>
            <a href="https://www.kayak.com" target="_blank">Kayak</a> <br>
            <a href="https://www.google.com/travel/flights" target="_blank">Google Flights</a>
        </div>
        <br>

        <hr>

        <!-- train Transportation -->
        <div class="fs-5"><b>2. Train from Laos-China Railway:</b></div><br>

        <div class="conference-img">
            <div class="conference-img-items">
                <a href="./assets/img/train/vt_train_station.jpeg" target="_blank">
                    <img src="./assets/img/train/vt_train_station.jpeg" alt="room">
                </a>
                <a href="./assets/img/train/train.jpeg" target="_blank">
                    <img src="./assets/img/train/train.jpeg" alt="room">
                </a>
            </div>
        </div>

        <br>

        <p style="font-size: 20px;padding-left: 16px;">You can use popular online booking platforms such as:</p>

        <div style="font-size: 20px;padding-left: 30px;font-weight: bold;">Website : <a
                href="https://www.laostraintickets.com/" target="_blank">Laos Train Tickets</a></div>
        <div style="font-size: 20px;padding-left: 30px;font-weight: bold">Android : <a
                href="https://play.google.com/store/apps/details?id=com.cars.laosticket&hl=en_US" target="_blank">LCR
                Ticket</a></div>
        <div style="font-size: 20px;padding-left: 30px;font-weight: bold">IOS : <a
                href="https://apps.apple.com/us/app/lcr-ticket/id6444795307" target="_blank">LCR Ticket</a></div>


    </section>
    <br><br>
    <footer>
        &copy; 2024 Conference Information
    </footer>
    <!-- JavaScript Is Here!!! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/scrolltotop.js"></script>
</body>

</html>