<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/gms_icon.ico">
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
    <link href="./assets/css/index.css" rel="stylesheet">
    <style>
        html {
            font-size: calc(60% + 0.8vmin);
        }

        header {
            /* background-image: url(./assets/img/meeting.jpg); */
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(./assets/img/meeting.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            height: 70vh;
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
        }

        .header-content {
            background-color: rgba(250, 66, 5, 0.7);
            /* background-color: #d62828; */
            -webkit-backdrop-filter: blur(5px);
            backdrop-filter: blur(5px);
            padding: 10px 15px;
            color: #f5f5f5;
            font-size: 45px;
            border-radius: 5px;
        }

        body {
            font-family: 'Times New Roman', sans-serif;
            /* background-color: rgb(16, 46, 75); */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
        }

        tr:nth-child(even)>td,
        tr:nth-child(even)>th {
            background-color: #f4f4f4;
        }

        .table-striped-orange>tbody>tr:nth-child(odd)>td,
        .table-striped-orange>tbody>tr:nth-child(odd)>th {
            background-color: rgb(252, 226, 214);
        }

        .thead-orange {
            background-color: rgb(255, 157, 66);
        }

        .table-striped-green>tbody>tr:nth-child(odd)>td,
        .table-striped-green>tbody>tr:nth-child(odd)>th {
            background-color: rgb(214, 252, 222);
        }

        .thead-green {
            background-color: rgb(67, 240, 99);
        }

        .table-striped-pink>tbody>tr:nth-child(odd)>td,
        .table-striped-pink>tbody>tr:nth-child(odd)>th {
            background-color: rgb(208, 250, 255);
        }

        .thead-pink {
            background-color: rgb(107, 203, 255);
        }

        th,
        td {
            width: 33.33%;
            /* Adjust as needed for three columns */
        }

        .conference-program {
            height: auto;
            background-color: #da2c38;
        }

        .keynote-speaker {
            height: auto;
            /* background-color: #f1de9e; */
            background-image: linear-gradient(to right, blue, rgb(13, 247, 255));
            padding: 50px 0;
        }

        .card-header-img {
            width: 200px;
            height: 200px;
        }

        .gala-dinner {
            background-color: darkblue;
            /* background-image: linear-gradient(rgb(17, 48, 77), darkblue); */
            padding-bottom: 50px;
        }

        .gala-dinner-divier {
            color: #ffffff;
            margin-left: 250px;
            margin-right: 250px;
        }

        .day-title {
            font-size: x-large;
            font-weight: bold;
            text-align: center;
        }

        /* .room-title {
            font-size: larger;
            font-weight: bold;
        } */
        .table-responsive {
            font-size: larger;
        }

        .workshop{
            background-color: #DAFFFB;
        }

        @media screen and (max-width: 768px) {
            header {
                height: 100vh;
            }

            .gala-dinner-divier {
                margin-left: 100px;
                margin-right: 100px;
            }

            .workshop-professor {
                display: flex;
                flex-wrap: wrap;
            }

            .card {
                width: 100%;
            }
        }

        @media screen and (max-width: 400px) {
            header {
                height: 100vh;
            }

            .gala-dinner-divier {
                margin-left: 60px;
                margin-right: 60px;
            }

            .workshop-professor {
                display: flex;
                flex-direction: column;
                gap: 20px;
                padding: 10px;
                width: 100%;
                flex-wrap: wrap;
            }

            .card {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <?php include_once("./components/scrolltotop.php")?>
    <header>
        <div id="heder-naviagation">
            <?php include_once("./components/navbar.php")?>
        </div><br><br>
        <div class="header-content fw-bolder" style="font-size: 30px;text-shadow: 2px 2px 2px #000;"><span
                style="font-size: 45px;">Conference Program</span><br>14<sup>th</sup> International Conference on Public Health among<br> Greater Mekong Sub-Regional Countries</div>
    </header>

    <section class="pre-conference" style="background-color: #fefae0;">
        <div class="container">
            <i class="fa-regular fa-clock w-100 text-center pt-5" style="font-size: 60px;"></i>
            <div class="fs-1 fw-bolder text-center pt-2 pb-4">Program - Pre conference workshops</div>
            <!-- first table -->
            <div class="table-responsive">
                <table class="table table-striped-orange table-bordered border-black">
                    <thead class="thead-orange">
                        <tr>
                            <th colspan="3" class="day-title">Day 0 – 27<sup>th</sup> June, 2024</th>
                            <!-- <th></th>
                            <th></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="room-title">Room 1</th>
                            <th></th>
                            <th class="room-title">Namkhong 1</th>
                        </tr>

                        <tr>
                            <th>8:00-8:45 am</th>
                            <td>Registration</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>8:45-12:00 am</th>
                            <th>Workshop I:<br><span>Tools and methods for assessing food safety </span></th>
                            <td>Dr. Leah Thompson and P Sipes,
                                Purdue University.
                            </td>
                        </tr>

                        <tr>
                            <th>12:30-13:30 pm</th>
                            <td>Lunch break</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>13:30-16:00 pm</th>
                            <th>Workshop II:<br><span>Understanding and studying food environments</span></th>
                            <td>Dr. Ramya Ambikapathi, MHS PhD, Senior Research Associate. Fellow, Cornell Atkinson
                                Center for Sustainability.</td>
                        </tr>

                        <tr>
                            <th class="room-title">Room 2</th>
                            <th></th>
                            <th class="room-title">Namkhong 2</th>
                        </tr>

                        <tr>
                            <th>8:00-8:45 am </th>
                            <td>Registration</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>8:45-12:00 am</th>
                            <th>Workshop III:<br><span>Survey Design</span> </th>
                            <td>
                                <p>
                                    Dr. Kate Eddens, PhD, MPH
                                    Associate Research Scientist
                                    Department of Epidemiology and Biostatistics
                                    Indiana University School of Public Health Bloomington.
                                </p>
                                <p>
                                    Dr. Susmita Ghosh
                                    Graduate Research Assistant Department of Public Health
                                    Department of Nutrition Science, Purdue University.
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>12:30-13:30 pm</th>
                            <td>Lunch break</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>13:30-16:00 pm</th>
                            <th>Workshop IV:<br><span>Applying for Graduate Study in the U.S.A</span></th>
                            <td>Prof. Dr. Gerald E. ShivelyAssociate Dean and Director of International Programs in
                                Agriculture, Purdue University.</td>
                        </tr>

                        <tr>
                            <th class="room-title">Room 3</th>
                            <th></th>
                            <th class="room-title">Namkhan</th>
                        </tr>

                        <tr>
                            <th>8:00-8:45 am </th>
                            <td>Registration</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>8:45-12:00 am</th>
                            <th>Workshop V:<br><span>Learning Health Public Systems: an example of Laos immunization
                                    program</span></th>
                            <td>
                                <p>Prof. Fiona Murdoch, Melbourne University.</p>
                                <p>Prof. Nigel Crawford, Head of the Immunisation service at the Royal Children’s
                                    Hospital; Chair of ATAGI.</p>
                            </td>
                        </tr>

                        <tr>
                            <th>12:30-13:30 pm</th>
                            <td>Lunch break</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>13:30-16:00 pm</th>
                            <th>Workshop VI:<br><span>Learning Health Public Systems: an example of Laos immunization
                                    program</span></th>
                            <td>
                                <p>Prof. Fiona Murdoch, Melbourne University.</p>
                                <p>Prof. Nigel Crawford, Head of the Immunisation service at the Royal Children’s
                                    Hospital; Chair of ATAGI.</p>
                            </td>
                        </tr>

                        <tr>
                            <th class="room-title">Room 3</th>
                            <th></th>
                            <th class="room-title">Le Salon</th>
                        </tr>

                        <tr>
                            <th>8:00-8:45 am </th>
                            <td>Registration</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>8:45-12:00 am</th>
                            <th>Workshop VII:<br><span>Introduction to statistical methods for nutrition and health
                                    research</span> </th>
                            <td>Dr. Nilupa Gunaratna
                                Associate Professor, Department of Public Health, Purdue University.
                            </td>
                        </tr>

                        <tr>
                            <th>12:30-13:30 pm</th>
                            <td>Lunch break</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>13:30-16:00 pm</th>
                            <th>Workshop VIII:<br><span>Pitfalls in regression analysis & Measurement Error in Nutrition
                                    and Public Health Research.</span>
                            </th>
                            <td>
                                <p>
                                    Dr. Roger S. Zoh Associate Professor, Department of Epidemiology and Biostatistics
                                    / School of Public Health, Indiana University Bloomington.
                                </p>
                                <p>
                                    Dr. Carmen D. Tekwe
                                    Associate Professor of Biostatistics, Indiana University.
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div><br><br>
    </section>

    <section class="workshop">
        <div class="container">
            <i class="fa-duotone fa-bookmark w-100 text-center pt-5" style="font-size: 60px;color: #0026ff;"></i>
            <div class="fs-1 fw-bolder text-center pt-2 pb-4" style="color: #0026ff;">Workshop</div>
        <?php include_once("./components/workshop.php");?>
        </div>
        <br>
    </section>

    <section class="conference-program" style="background-color: white;">
        <div class="container">
            <i class="fa-regular fa-table w-100 text-center pt-5" style="font-size: 60px;color: rgb(60, 0, 255);"></i>
            <div class="fs-1 fw-bolder text-center pt-2 pb-4" style="color: rgb(49, 5, 195);">Conference Program</div>
            <!-- <div class="fs-4">Coming soon...</div> -->
            <!-- second table -->
            <div class="table-responsive">
                <table class="table table-striped-green table-bordered border-white">
                    <thead class="thead-green">
                        <tr>
                            <th colspan="3" class="day-title">Day 1 – 28<sup>th</sup> June, 2024</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>8:00-8:45 am </th>
                            <td>Registration</td>
                            <td class="room-title">Room</td>
                        </tr>

                        <tr>
                            <th>8:45-9:15</th>
                            <td>Opening and Welcome</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>9:15-10:30</th>
                            <td><b>Plenary session I:</b><br>
                                <b>Speaker 1:</b> “Food safety and Food Environment” - Prof. Dr. Gerald E. Shively<br>
                                <b>Speaker 2:</b> “Chances and challenges of large scale food fortificatiob (LSFF)” - Prof. Florian Schweigert
                            </td>
                            <td class="fw-bolder">Big Hall</td>
                        </tr>

                        <tr>
                            <th>10:30-10:50</th>
                            <td>Coffee break & Poster View</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>10:50-12:30</th>
                            <td><b>Plenary session II:</b><br>
                                <b>Speaker 3:</b> Climate change and Adaptation- Tentative Regional WHO<br>
                                <b>Speaker 4:</b> Climate and Nutrition
                            </td>
                            <td class="fw-bolder">Big Hall</td>
                        </tr>

                        <tr>
                            <th>12:30-13:30</th>
                            <td>Lunch and Poster View</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>13:30-15:00</th>
                            <td>Parallel session I-V</td>
                            <td>5 meeting rooms</td>
                        </tr>

                        <tr>
                            <th>15:00-15:15</th>
                            <td>Coffee Break</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>15:15-16:45</th>
                            <td>Parallel Session VI-X</td>
                            <td>5 meeting rooms</td>
                        </tr>

                        <tr>
                            <th></th>
                            <td>Dean’s Meeting</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>18:30-21:00</th>
                            <td>Welcome dinner at Lanxang Hall,
                                Phanluang village, Luanprabang Province</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- third table -->
            <div class="table-responsive">
                <table class="table table-striped-pink table-bordered border-white">
                    <thead class="thead-pink">
                        <tr>
                            <th colspan="3" class="day-title">Day 2 – 29<sup>th</sup> June, 2024</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>8:30-10:00</th>
                            <td><b>Plenary session II:</b><br>
                                <b>Speaker 5:</b> SDGs linked to Health, Nutrition and Climate Change- WHO<br>
                                <b>Speaker 6:</b> Health Equity to Health and UHC- Prof. Natasha- from NUS
                            </td>
                            <td class="fw-bolder">Big Hall</td>
                        </tr>

                        <tr>
                            <th>10:00-10:15</th>
                            <td>Coffee break & Poster View</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>10:15-11:00</th>
                            <td><b>Panel discussion I:</b><br>
                                Need to discuss about topic<br>
                                Panellists will be 6 Deans of FPH among GMS countries
                                Moderator: </td>
                            <td class="fw-bolder">Big Hall</td>
                        </tr>

                        <tr>
                            <th>11:00-12:30</th>
                            <td>Parallel Session XI-XVI</td>
                            <td>5 meeting rooms</td>
                        </tr>

                        <tr>
                            <th>12:30-13:30</th>
                            <td>Lunch and Poster View</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>13:30-15:10</th>
                            <td>Parallel session XVII-XXII</td>
                            <td>5 meeting rooms</td>
                        </tr>

                        <tr>
                            <th>15:10-15:30</th>
                            <td>Coffee Break</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>15:30-16:00</th>
                            <td class="fw-bolder">Closing</td>
                            <td class="fw-bolder">Big Hall</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div><br><br>
    </section>

    <!-- Keynote-speaker-here!!! -->
    <section class="keynote-speaker">
        <div class="container">
            <i class="fa-regular fa-keynote w-100 text-center pt-5" style="font-size: 60px;color: #ffffff;text-shadow: 2px 2px 2px #333;"></i>
            <div class="fw-bolder text-center pt-2 pb-4" style="color: #ffffff; font-size:45px; text-shadow: 2px 2px 2px #333;">Key Note Speakers</div>
            <br><br><br>
            <div class="text-center text-white fs-2">Comming Soon...</div>
            <br><br><br>
            <!-- <div class="row row-cols-1 row-cols-md-3 g-4 d-flex justify-content-center py-5">
                <div class="col">
                    <div class="card h-100 shadow pt-3">
                        <img src="./assets/img/avatar/avatar-person.svg" class="card-img-top" alt="..."
                            style="width: 180px;height: 180px; border-radius: 50%; border: 5px solid #e2e2e2;box-shadow: 3px 3px 3px #00c3ff;">
                        
                            <div class="card-body mt-1">
                            <h5 class="card-title text-center fs-4 pb-0"><b>Prof. Florian Schweigert
                                </b></h5>
                            <p class="position card-text">Associate Professor of Public Health</p>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title text-center fs-4 pb-2 text-primary">
                                <b>“Chances and challenges of large scale food fortification (LSFF)”</b>
                            </div>
                        <div class="card-footer w-100 bg-danger">
                            <small class="text-white fs-3">Day 1 – 28<sup>th</sup> June, 2024</small>
                          </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <section class="gala-dinner">
        <div class="container">

            <i class="fa-regular fa-plate-utensils w-100 text-center pt-5 text-white" style="font-size: 60px;"></i>
            <div class="fs-1 fw-bolder text-center pt-2 text-white">Welcome Dinner</div>
            <div class="fs-4 text-white text-center">All Participants are invited to attend The Welcome Dinner of
                <br>The 14<sup>th</sup> International Public Health Conference among
                Greater Mekong Sub-regional Countries
            </div>
            <hr class="gala-dinner-divier pb-4">

            <div class="d-flex justify-content-center">
                <img src="./assets/img/gala_dinner.jpeg" alt="gala_dinner" class="img-fluid rounded" width="75%">
            </div>
        </div>
    </section>


    <!-- js_script_here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/scrolltotop.js"></script>
</body>

</html>