<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/gms_icon.ico">
    <link href="./assets/css/scrolltotop.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome" href="/css/app-wa-462d1fe84b879d730fe2180b0e0354e0.css?vsn=d">

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

        .panel-discussion {
            height: auto;
            background-color: rgb(252, 226, 214);

            padding: 50px 0;
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

        .workshop {
            background-color: #DAFFFB;
        }

        .conference-book-btn{
            border-radius: 10px;
            background-color: rgb(255, 106, 0);
            width: 410px;
            height: auto;
            font-size: 28px;
            font-weight: bold;
            text-decoration: none;
            color: #fff;
            border: 2px solid orangered;
            padding: 10px;
            text-shadow: 2px 2px 2px #000;
        }

        .conference-book-btn:hover {
            background-color: white;
            text-shadow: none;
            color: black;
        }

        .gala-dinner-link a{
            color: orange;
        }

        .gala-dinner-link a:hover{
            color: green;
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

            .conference-book-btn {
                width: auto;
                height: auto;
                font-size: 25px;
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

            .conference-book-btn {
                width: auto;
                height: auto;
                font-size: 25px;
            }
        }
    </style>
</head>

<body>
    <?php include_once("./components/scrolltotop.php") ?>
    <header>
        <div id="heder-naviagation">
            <?php include_once("./components/navbar.php") ?>
        </div><br><br>
        <div class="header-content fw-bolder" style="font-size: 30px;text-shadow: 2px 2px 2px #000;"><span style="font-size: 45px;">Conference Program</span><br>14<sup>th</sup> International Conference on Public Health among<br> Greater Mekong Sub-Regional Countries</div>
        <br>
        <a href="./assets/pdf/GMS14_Conference_Programs_Book.pdf"
           download="conference-book">
            <button type="submit" class="conference-book-btn"><i class="fas fa-download"></i> Conference Program Book</button>
        </a>
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
                            <th class="room-title">Namkhong Hall 1</th>
                        </tr>

                        <tr>
                            <th>8:00-8:45</th>
                            <td>Registration</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>8:45-12:00</th>
                            <th>Workshop I:<br><span>Tools and methods for assessing food safety </span></th>
                            <td>
                                <p>
                                    Ms. Patricia Sipes, Project Manager, International Programs in Agriculture, Purdue University
                                </p>

                                <p>
                                    Ms. Leah Thompson, PhD Candidate, Department of Animal Sciences, Purdue University
                                </p>

                            </td>
                        </tr>

                        <tr>
                            <th>12:30-13:30</th>
                            <td>Lunch break</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>13:30-16:00</th>
                            <th>Workshop II:<br><span>Understanding and studying food environments</span></th>
                            <td>Dr. Ramya Ambikapathi, Senior Research Associate, Cornell University</td>
                        </tr>

                        <tr>
                            <th class="room-title">Room 2</th>
                            <th></th>
                            <th class="room-title">Namkhong Hall 2</th>
                        </tr>

                        <tr>
                            <th>8:00-8:45</th>
                            <td>Registration</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>8:45-12:00</th>
                            <th>Workshop III:<br><span>Survey Design</span> </th>
                            <td>
                                <p>
                                    Dr. Kate Eddens, Assoc. Research Scientist, Indiana University School of Public Health - Bloomington
                                </p>
                                <p>
                                    Ms. Susmita Ghosh, PhD Candidate, Department of Public Health, Purdue University
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <th>12:30-13:30</th>
                            <td>Lunch break</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>13:30-16:00</th>
                            <th>Workshop IV:<br><span>Nutrition Needs and a Changing Climate: Pathways, Evidence and Action</span></th>
                            <td>Prof. Dr. Gerald Shively Associate Dean and Director of International Programs in
                                Agriculture, Purdue University.</td>
                        </tr>

                        <tr>
                            <th class="room-title">Room 3</th>
                            <th></th>
                            <th class="room-title">Library</th>
                        </tr>

                        <tr>
                            <th>8:45-12:00 am</th>
                            <th>Workshop V:<br><span>Learning Health Public Systems: an example of Laos immunization
                                    program</span></th>
                            <td>
                                <p>Prof. Fiona Russell, Melbourne University</p>
                                <p>Prof. Nigel Crawford, Head of the Immunisation service at the Royal Children’s
                                    Hospital; Chair of ATAGI.</p>
                            </td>
                        </tr>

                        <tr>
                            <th>13:00-13:30</th>
                            <td>Registration</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>13:30-17:00</th>
                            <th>Workshop VI:<br><span>Learning Health Public Systems: an example of Laos immunization
                                    program</span></th>
                            <td>
                                <p>Prof. Fiona Russell, Melbourne University</p>
                                <p>Prof. Nigel Crawford, Head of the Immunisation service at the Royal Children’s
                                    Hospital; Chair of ATAGI</p>
                            </td>
                        </tr>

                        <tr>
                            <th class="room-title">Room 4</th>
                            <th></th>
                            <th class="room-title">Namkhan Hall</th>
                        </tr>

                        <tr>
                            <th>8:00-8:45</th>
                            <td>Registration</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>8:45-12:00</th>
                            <th>Workshop VII:<br><span>Introduction to statistical methods for nutrition and health
                                    research</span> </th>
                            <td>Assoc. Prof. Dr. Nilupa Gunaratna, Department of Public Health, Purdue University
                            </td>
                        </tr>

                        <tr>
                            <th>12:30-13:30</th>
                            <td>Lunch break</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>13:30-16:00</th>
                            <th>Workshop VIII:<br><span>Pitfalls in regression analysis <br><br> Measurement Error in Nutrition
                                    and Public Health Research.</span>
                            </th>
                            <td>
                                <p>
                                    Assoc. Prof. Dr. Roger S. Zoh,<br>
                                    Assoc. Prof. Dr. Dwele Carmen Tekwe<br>
                                    Department of Epidemiology and Biostatistics, Indiana University School of Public Health - Bloomington
                                </p>

                            </td>
                        </tr>

                        <tr>
                            <th class="room-title">16:30-17:30</th>
                            <th>Dean’s Meeting</th>
                            <th class="room-title">Namkhan Hall</th>
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
            <?php include_once("./components/workshop.php"); ?>
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
                            <th>7:30-8:30</th>
                            <th>Registration</th>
                            <th class="room-title">Room</th>
                        </tr>

                        <tr>
                            <th>8:30-8:40</th>
                            <th>Opening and Welcome</th>
                            <td></td>
                        </tr>

                        <tr>
                            <th>8:30-8:40</th>
                            <td><Strong>Welcome Speech-</Strong> Assoc. Prof. Dr. Vanphanom Sychareun</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th></th>
                            <td><Strong>Remark Speech from the Vice Rector of UHS-</Strong> Dr. Phasouk Vongvichit</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>8:40-8:50</th>
                            <td><Strong>Speech from the Chair of GMS Network- Professor</Strong>  Dr. Wongsa Laohasiriwong</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>8:50-9:00</th>
                            <td><Strong>Opening Speech-</Strong> H.E. Dr. Bounfeng Phommalaysith</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>8:50-9:00</th>
                            <td><Strong>Handle over Outstanding Awards to the Founders, Faculties, Dean, Individuals</Strong></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>9:00-9:10</th>
                            <td>Invited All Deans of the Faculty of Public Health, GMS countries and Delegates
                                - Group Photo</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>9:10-10:40</th>
                            <td>

                                <b>Plenary session I:</b>
                                <ul style="padding-left: 20px;">
                                    <li>
                                        <b>Chair:</b> Prof. Kazuhiro Moji
                                    </li>
                                    <li>
                                        <b>Co-chair:</b> Prof. Fiona Russell
                                    </li>
                                    <ul style="list-style-type:'  -  ';padding-left: 5px;">
                                        <li><b>Speaker 1:</b> Nutrition Needs and a Changing Climate: Pathways, Evidence and Action - Prof. Dr. Gerald Shively Purdue University</li>
                                        <li><b>Speaker 2:</b> Chances and Challenges of large scale food fortification (LSFF) - Prof. Florian Schweigert</li>
                                    </ul>
                                </ul>

                            </td>
                            <td class="fw-bolder">Namkhong Hall</td>
                        </tr>

                        <tr>
                            <th>10:40-10:50</th>
                            <th>Coffee break & Poster View</th>
                            <td></td>
                        </tr>

                        <tr>
                            <th>10:50-12:35</th>
                            <td><b>Plenary session II:</b>
                                <ul style="padding-left: 20px;">
                                    <li>
                                        <b>Chair:</b> Prof Nigel Crawford, Australia
                                    </li>
                                    <li>
                                        <b>Co-chair:</b> Dr. Chansaly Phommavong, Deputy Director of Department of Planning and Finance, Ministry of Health
                                    </li>
                                    <ul style="list-style-type:'  -  ';padding-left: 5px;">
                                        <li><b>Speaker 3:</b> Lao PDR case study: Health Adaptation Plan (HNAP) developed, based on the WHO Operational Framework for Building Climate Resilient Health Systems
                                            Dr. Lkhasuren Oyuntogos, Team leader of Environmental health program, WHO, Lao PDR
                                        </li>
                                        <li><b>Speaker 4:</b> SDGs linked to Health, Nutrition and Climate Change- Dr. Park Yu Lee, Coordinator Health System Development, WHO, Lao PDR </li>
                                    </ul>
                                </ul>

                            </td>
                            <td class="fw-bolder">Namkhong Hall</td>
                        </tr>

                        <tr>
                            <th>12:35-13:30</th>
                            <th>Lunch and Poster View</th>
                            <td></td>
                        </tr>

                        <tr>
                            <th>13:30-15:10</th>
                            <td>
                                <b>Parallel session I-Maternal and Child Health, Sexual Reproductive Health (SDG 3) (Group 1)</b>
                                <ul style="padding-left: 20px;">
                                    <li>
                                        <b>Chair:</b> Assoc. Prof. Dr. Nithra Kitreerawutiwong, Naresuan University
                                    </li>
                                    <li>
                                        <b>Co-chair:</b> Assoc. Prof. Tanida Ohatisena, NRU
                                    </li>
                                    <li>
                                        Assist. Prof. Dr. Junjira Mahaboon, Walailak University
                                    </li>
                                    <li>
                                        Assoc. Prof. Dr. Nilupa Gunaratna, Department of Public Health, Purdue University
                                    </li>

                                </ul>
                            </td>
                            <th>Namkhong Hall 1</th>
                        </tr>

                        <tr>
                            <th></th>
                            <td>
                                <b>Parallel session II-Nutrition Promotion and Food safety SDG 2</b>
                                <ul style="padding-left: 20px;">
                                    <li>
                                        <b>Chair:</b> Assist. Prof. Dr. Supabhorn Yimthiang, Walailak University
                                    </li>
                                    <li>
                                        <b>Co-chair:</b> Dr. Rattiphone Oula, CRS
                                    </li>
                                    <li>
                                        Assist. Prof. Dr. Naowarat Maneenin, KKU
                                    </li>
                                    <li>
                                        Dr. Kate Eddens, Assoc. Research Scientist, Indiana University School of Public Health - Bloomington
                                    </li>

                                </ul>
                            </td>
                            <th>Namkhong Hall 2</th>
                        </tr>

                        <tr>
                            <th></th>
                            <td>
                                <b>Parallel session III- Environmental and Occupational Health - One Health – Eco Health. & Global warming and Climate change adaptation (SDG 13), Health Equity to UHC (Group 1)</b>
                                <ul style="padding-left: 20px;">
                                    <li>
                                        <b>Chair:</b> Dr. Ramya Ambikapathi, Senior Research Associate, Cornell University
                                    </li>
                                    <li>
                                        <b>Co-chair:</b> Assoc. Prof. Dr. Sunisa Chaiklieng
                                    </li>
                                    <li>
                                        Asst. Prof. Thiwakorn Rachutorn, Nakhon Ratchasima Rajabhat University
                                    </li>
                                    <li>
                                        Dr. Te Vannnarath, NIOPH
                                    </li>

                                </ul>
                            </td>
                            <th>Namkhan Hall</th>
                        </tr>

                        <tr>
                            <th></th>
                            <td>
                                <b>Parallel session IV- Epidemiology of Communicable and Non-communicable Diseases (Group 1)</b>
                                <ul style="padding-left: 20px;">
                                    <li>
                                        <b>Chair:</b> Prof. Vo Van Thang, HUMP
                                    </li>
                                    <li>
                                        <b>Co-chair:</b> Assoc. Prof. Dr. Roger Sai Zoh. Indiana University
                                    </li>
                                    <li>
                                        Prof. Dr. Waraporn Boochieng, CMU
                                    </li>
                                    <li>
                                        Dr. Romnalin Keanjoom, Naresuan University
                                    </li>

                                </ul>
                            </td>
                            <th>Library</th>
                        </tr>

                        <tr>
                            <th>14:30-15:20</th>
                            <td>
                                <b>Online Session: Health Literacy and Health Promotion</b>
                                <ul style="padding-left: 20px;">
                                    <li>
                                        <b>Chair:</b> Hon.Prof.Dr. Sengchanh Kounnavong, LaoTPHI
                                    </li>
                                    <li>
                                        <b>Co-chair:</b> Dr. Visanou Hansana, Vice Director of IRED, UHS
                                    </li>
                                    <li>
                                        Dr. Phonethipsavanh Nouanthong, Lao NITAG
                                    </li>


                                </ul>
                            </td>
                            <th>Secretary Room</th>
                        </tr>

                        <tr>
                            <th>15:10-15:20</th>
                            <th>Coffee Break</th>
                            <td></td>
                        </tr>

                        <tr>
                            <th>15:20-17:20</th>
                            <td>
                                <b>Parallel session V- Health Service and Healthcare Management (Group 1)</b>
                                <ul style="padding-left: 20px;">
                                    <li>
                                        <b>Chair:</b> Dr. Dang Thi Anh Thu, HUMP 
                                    </li>
                                    <li>
                                        <b>Co-chair:</b> Assoc. Prof. Kulthida Bunjongsiri, Sukhothai Thammathirat Open University
                                    </li>
                                    <li>
                                        Asst. Prof. Dr. Roshan Mahato Kumar, KKU
                                    </li>
                                    <li>
                                        Ms. Susmita Ghosh, PhD Candidate, Department of Public Health, Purdue University
                                    </li>

                                </ul>
                            </td>
                            <th>Namkhong Hall 1</th>
                        </tr>

                        <tr>
                            <th></th>
                            <td>
                                <b>Parallel session VI- Health Literacy and Health Promotion (Group 1)</b>
                                <ul style="padding-left: 20px;">
                                    <li>
                                        <b>Chair:</b> Asst. Prof. Soisuda Kesornthong, Thammasath University
                                    </li>
                                    <li>
                                        <b>Co-chair:</b> Dr. Visanou Hansana, UHS
                                    </li>
                                    <li>
                                        Assoc. Prof. Dr. Vorapoj Promsatayaprot, MHSU
                                    </li>
                                    <li>
                                        Dr. Nguyen Hoang Thuy Linh, HUMP
                                    </li>

                                </ul>
                            </td>
                            <th>Namkhong Hall 2</th>
                        </tr>

                        <tr>
                            <th></th>
                            <td>
                                <b>Parallel session VII- Maternal and Child Health, Sexual Reproductive Health (SDG 3) (Group 2)</b>
                                <ul style="padding-left: 20px;">
                                    <li>
                                        <b>Chair:</b> Assoc. Prof. Dr. Chanthanom Mainthip, Vice President Lao Red Cross, Lao PDR
                                    </li>
                                    <li>
                                        <b>Co-chair:</b> Assoc. Prof. Dr. Wallapa Choeibuakaew, Thaksin University
                                    </li>
                                    <li>
                                        Assoc. Prof. Dr. Taweewun Srisookkum, Phayao University
                                    </li>
                                    <li>
                                        Ms. Kelley Khamphouxay, CRS
                                    </li>

                                </ul>
                            </td>
                            <th>Namkhan Hall</th>
                        </tr>

                        <tr>
                            <th></th>
                            <td>
                                <b>Parallel session VIII- HIV/AIDS, TB and Malaria (SDG 3)</b>
                                <ul style="padding-left: 20px;">
                                    <li>
                                        <b>Chair:</b> Assoc. Prof. Katiya Ivanovitch, Thammasath University
                                    </li>
                                    <li>
                                        <b>Co-chair:</b> Dr. Khampheng Phonglusa, DG LaoTPHI
                                    </li>
                                    <li>
                                        Asst. Prof. Dr. Anukool Manoton, University of Phayao
                                    </li>
                                    <li>
                                        Dr. Dirk Rombot Essink, VU, Netherland
                                    </li>

                                </ul>
                            </td>
                            <th>Library</th>
                        </tr>

                        <tr>
                            <th>18:30-21:00</th>
                            <th>Welcome dinner at Vonethabing Hall, Thongsi Princess. </th>
                            <th>Luang Prabang, Laos</th>
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
                            <th>8:30-9:45</th>
                            <td>
                                <b>Plenary session II</b>
                                <ul style="padding-left: 20px;">
                                    <li>
                                        <b>Chair:</b> Prof. Sathirakone Pongpanich, Chulalongkone University
                                    </li>
                                    <li>
                                        <b>Co-chair:</b> Hon. Prof. Sengchanh Kounnavong
                                    </li>
                                    <ul style="list-style-type:'  -  ';padding-left: 5px;">
                                        <li><b>Speaker 5:</b> Climate and Nutrition- Professor Dr. Wongsa Laohasiriwong, Dean of the Faculty of Public Health, Khon Kaen University
                                        </li>
                                        <li><b>Speaker 6:</b> Health Equity to Health and UHC- Prof. Natasha Howard, NUS </li>
                                    </ul>

                                </ul>
                            </td>
                            <th>Namkhong Hall</th>
                        </tr>

                        <tr>
                            <th>9:45-10:45</th>
                            <td>
                                <b>Panel discussion I</b><br>
                                <b>Climate Change and Impact on Human Health in GMS: How to work together?</b>
                                <p style="text-align: center;">6 Deans of FPH among GMS countries</p>
                                <ul style="padding-left: 20px;">

                                    <li><b>Moderator:</b> Ms. Kelley Khamphouxay, CRS
                                    </li>
                                    <li><b>Panellist:</b> Deans from Faculty of Public Health, Lao PDR, KKU Thailand, Hue University Pharmacy and Medicine, NIOPH, Cambodia, Kunming Medical University, Myanmar University of Public Health </li>


                                </ul>
                            </td>
                            <th>Namkhong Hall</th>
                        </tr>

                        <tr>
                            <th>10:45-11:00</th>
                            <th>Coffee break & Poster View</th>
                            <td></td>
                        </tr>

                        <tr>
                            <th>11:00-12:30</th>
                            <td>
                                <b>Parallel Session IX- Epidemiology of Communicable and Non-communicable Diseases (Group 2)</b>
                                <ul style="padding-left: 20px;">
                                    <li>
                                        <b>Chair:</b> Prof. Chea Chhorvann, NIOPH, Cambodia
                                    </li>
                                    <li>
                                        <b>Co-chair:</b> Assoc.Prof. Wallapa Choeibuakaew,Thaksin University
                                    </li>
                                    <li>
                                        Assoc. Prof. Kowit Suwannahong, Burapha University
                                    </li>
                                    <li>
                                        Asst. Prof. Dr. Mahato Roshan Kumar, KKU
                                    </li>
                                </ul>
                            </td>
                            <th>Namkhong Hall 1</th>
                        </tr>

                        <tr>
                            <th></th>
                            <td>
                                <b>Parallel session X- Maternal and Child Health, Sexual Reproductive Health (SDG 3) (Group 3)</b>
                                <ul style="padding-left: 20px;">
                                    <li>
                                        <b>Chair:</b> Prof. Dr. Chitlada Areesantichai, Chulalongkone University
                                    </li>
                                    <li>
                                        <b>Co-chair:</b> Assoc. Prof. Sumattana Glangkarn,
                                        Mahasarakham University

                                    </li>
                                    <li>
                                        Dr. Latsamy Siengsounthone, LaoTPHI
                                    </li>
                                    <li>
                                        Asst. Prof. Thanakrit Neamhom, Mahidol University
                                    </li>
                                </ul>
                            </td>
                            <th>Namkhong Hall 2</th>
                        </tr>

                        <tr>
                            <th></th>
                            <td>
                                <b>Parallel session XI- Environmental and Occupational Health - One Health – Eco Health; Global warming and Climate change adaptation; Health Equity to UHC (Group 2)</b>
                                <ul style="padding-left: 20px;">
                                    <li>
                                        <b>Chair:</b> Asst. Prof. Somkid Juawa, Phayao University
                                    </li>
                                    <li>
                                        <b>Co-chair:</b> Asst. Prof. Montakarn Chuemchit, Chulalongkone University

                                    </li>
                                    <li>
                                        Dr. Boonruang Kanoukhan, Thaksin University
                                    </li>
                                    <li>
                                        Dr. Phetsamone Matouchanh, UHS
                                    </li>
                                </ul>
                            </td>
                            <th>Namkhan Hall</th>
                        </tr>

                        <tr>
                            <th></th>
                            <td>
                                <b>Parallel session XII- Mental Health</b>
                                <ul style="padding-left: 20px;">
                                    <li>
                                        <b>Chair:</b> Assoc. Prof. Yuvadee Rodjarkpai, Burapha University
                                    </li>
                                    <li>
                                        <b>Co-chair:</b> Prof. Hla Hla Win, University of Public Health, Yangon, Myanmar

                                    </li>
                                    <li>
                                        Dr. Tiwakron Prachaiboon, KKU
                                    </li>
                                    <li>
                                        Assoc. Prof. Kongmany Chaleunvong, UHS
                                    </li>
                                </ul>
                            </td>
                            <th>Library</th>
                        </tr>

                        <tr>
                            <th>12:30-13:30</th>
                            <th>Lunch and Poster View</th>
                            <td></td>
                        </tr>

                        <tr>
                            <th>13:30-15:10</th>
                            <td>
                                <b>Parallel session XIII- Health Literacy and Health Promotion (Group 2)+ Health Service and Healthcare Management</b>
                                <ul style="padding-left: 20px;">
                                    <li>
                                        <b>Chair:</b> Assoc. Prof. Dr. Nitikorn Phoosuwan, Kassetsart University
                                    </li>
                                    <li>
                                        <b>Co-chair:</b> Asst. Prof. Dr. Aree Butsorn, Ubon Rachathani University

                                    </li>
                                    <li>
                                        Assist. Prof. Dr. Chaiwut Bourneow, MHS University
                                    </li>
                                    <li>
                                        Dr. Kate Eddens, Assoc. Research Scientist, Indiana University School of Public Health - Bloomington
                                    </li>
                                </ul>
                            </td>
                            <th>Namkhong Hall 1</th>
                        </tr>

                        <tr>
                            <th></th>
                            <td>
                                <b>Parallel session XIV- Health Service and Healthcare Management (Group 2)</b>
                                <ul style="padding-left: 20px;">
                                    <li>
                                        <b>Chair:</b> Asst. Prof. Dr.Kitti Laosupap, Ubon Rachathani University
                                    </li>
                                    <li>
                                        <b>Co-chair:</b> Dr. Saroj Nakju, Rhamkhamheang University

                                    </li>
                                    <li>
                                        Asst. Prof. Kittipong Sornlorm, KKU
                                    </li>
                                    <li>
                                        Dr. Nilar Aye Tun, University of Public Health, Yangon, Myanmar
                                    </li>
                                </ul>
                            </td>
                            <th>Namkhong Hall 2</th>
                        </tr>

                        <tr>
                            <th></th>
                            <td>
                                <b>Parallel session XV- Environmental and Occupational Health - One Health – Eco Health; Global warming and Climate change adaptation; Health Equity to UHC (Group 3)</b>
                                <ul style="padding-left: 20px;">
                                    <li>
                                        <b>Chair:</b> Prof. Dr. Suwat Chariyalertsak
                                    </li>
                                    <li>
                                        <b>Co-chair:</b> Assoc. Prof. Dr. Warangkana Chankong. Sukkhothai University

                                    </li>
                                    <li>
                                        Prof. Tran Thi Tuyet Hanh, HUPH
                                    </li>
                                    <li>
                                        Dr. Dirk Rombot Essink, VU, Netherland
                                    </li>
                                </ul>
                            </td>
                            <th>Namkhan Hall</th>
                        </tr>

                        <tr>
                            <th></th>
                            <td>
                                <b>Parallel session XVI- Epidemiology of Communicable and Non-communicable Diseases (Group 3)</b>
                                <ul style="padding-left: 20px;">
                                    <li>
                                        <b>Chair:</b> Prof. Dr. Le Thi Thanh Huong, HUPH
                                    </li>
                                    <li>
                                        <b>Co-chair:</b> Assoc. Prof. Dr. Orawan Kaewboonchoo, Mahidol

                                    </li>
                                    <li>
                                        Assist. Prof. Kavin Thinkhamrop, KKU
                                    </li>
                                    <li>
                                        Assoc. Prof. Alongkone Phengsavanh, UHS
                                    </li>
                                </ul>
                            </td>
                            <th>Library</th>
                        </tr>


                        <tr>
                            <th>15:10-15:20</th>
                            <th>Coffee Break</th>
                            <td></td>
                        </tr>

                        <tr>
                            <th>15:20-16:00</th>
                            <td class="fw-bolder">Closing and Handover 15 ICPH among GMS Countries to the next host</td>
                            <td class="fw-bolder">Namkhong Hall</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div><br><br>
    </section>

    <!-- Panel Discussion -->
    <section class="panel-discussion">
        <div class=container>
            <h1>
                <b>Panel discussion I: 29th June 2024, 9:45-10:45</b>
            </h1>
            <br>
            <h3 class="fw-bold"><i>Climate Change and Impact on Human Health in GMS: How to work together?
                    6 Deans of FPH among GMS countries</i>
            </h3>
            <div class="row h-100 mb-5 mt-5">
                <div class="col-2 d-flex align-items-center justify-content-center">
                    <img src="./assets/img/deans/image008.png" class="img-fluid rounded-start" alt="..." width="100" height="100">
                </div>
                <div class="col-10 d-flex align-items-center">
                    <p class="text-left fs-5"><b>Moderator:</b> Mrs. Kelly Khamphoxay</p>
                </div>
            </div>

            <h4><b>Panelists:</b></h4>

            <div class="row h-100 mb-4">
                <div class="col-2 d-flex align-items-center justify-content-center">
                    <img src="./assets/img/keynotespeaker/image014.png" class="img-fluid rounded-start" alt="..." width="100" height="100">
                </div>
                <div class="col-10 d-flex align-items-center">
                    <p class="text-left fs-5">Prof. Dr.Wongsa Laohasiriwong, Dean of the Faculty of Public Health, KKU Thailand</p>
                </div>
            </div>

            <div class="row h-100 mb-4">
                <div class="col-2 d-flex align-items-center justify-content-center">
                    <img src="./assets/img/deans/image001.png" class="img-fluid rounded-start" alt="..." width="100" height="100">
                </div>
                <div class="col-10 d-flex align-items-center">
                    <p class="text-left fs-5">Assoc. Prof. Dr. Vanphanom Sychareun, Dean from Faculty of Public Health, Lao PDR</p>
                </div>
            </div>

            <div class="row h-100 mb-4">
                <div class="col-2 d-flex align-items-center justify-content-center">
                    <img src="./assets/img/deans/image007.png" class="img-fluid rounded-start" alt="..." width="100" height="100">
                </div>
                <div class="col-10 d-flex align-items-center">
                    <p class="text-left fs-5">Dr. Dang Thi Anh Thu, Dean of the Faculty of Public Health, Hue University Pharmacy and Medicine, Vietnam</p>
                </div>
            </div>

            <div class="row h-100 mb-4">
                <div class="col-2 d-flex align-items-center justify-content-center">
                    <img src="./assets/img/deans/image009.png" class="img-fluid rounded-start" alt="..." width="100" height="100">
                </div>
                <div class="col-10 d-flex align-items-center">
                    <p class="text-left fs-5">Prof. Fang Jing, Public Health School, Kumming Medical University, China</p>
                </div>
            </div>

            <div class="row h-100 mb-4">
                <div class="col-2 d-flex align-items-center justify-content-center">
                    <img src="./assets/img/deans/image005.png" class="img-fluid rounded-start" alt="..." width="100" height="100">
                </div>
                <div class="col-10 d-flex align-items-center">
                    <p class="text-left fs-5">Prof. Chea Chhorvann, NIPH, Dean of NIPH, Cambodia</p>
                </div>
            </div>

            <div class="row h-100 mb-4">
                <div class="col-2 d-flex align-items-center justify-content-center">
                    <img src="./assets/img/deans/image006.png" class="img-fluid rounded-start" alt="..." width="100" height="100">
                </div>
                <div class="col-10 d-flex align-items-center">
                    <p class="text-left fs-5">Prof. Hla Hla Win, Rector of Myannmar University of Public Health, Myanmar</p>
                </div>
            </div>

        </div>

    </section>

    <!-- Keynote-speaker-here!!! -->
    <section class="keynote-speaker">
        <div class="container">
            <i class="fa-regular fa-keynote w-100 text-center pt-5" style="font-size: 60px;color: #ffffff;text-shadow: 2px 2px 2px #333;"></i>
            <div class="fw-bolder text-center pt-2 pb-4" style="color: #ffffff; font-size:45px; text-shadow: 2px 2px 2px #333;">Key Note Speakers</div>
            <?php include_once("./components/speaker.php"); ?>
            <?php include_once("./components/modal_speaker.php"); ?>
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
            <hr class="gala-dinner-divier">

            <div class=" gala-dinner-link fs-2 text-white text-center pb-4">
                Link for : <a href="https://drive.google.com/file/d/1PsmfnA85LkUSfUVrj4p4rUDW4DVpVjdv/view?usp=sharing" target="_blank">Gala dinner</a>
            </div>

            <div class="d-flex justify-content-center">
                <img src="./assets/img/gala_dinner.jpeg" alt="gala_dinner" class="img-fluid rounded" width="75%">
            </div>

        </div>
    </section>


    <!-- js_script_here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/scrolltotop.js"></script>
</body>

</html>