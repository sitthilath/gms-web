<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
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
      background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(9, 28, 45, 0.2)), url(./assets/img/venue/conference_room_3.jpeg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      color: #ffffff;
      padding: 20px;
      text-align: center;
      height: 92vh;
      justify-content: center;
      align-items: center;
      display: flex;
      flex-direction: column;
    }

    .header-content {
      font-size: 60px;
      color: white;
      font-weight: 700;
      /* color:#1df5cd; */
      text-shadow: 2px 2px 2px #000;
    }

    .header-box {
      border-radius: 5px;
      padding: 20px;
      background-image: linear-gradient(rgba(0,204,204, 1.0),rgba(0,204,204, 1.0));
    }
    .header-btn-reg {
      display: flex;
      flex-direction: row;
      justify-content: center;
      gap: 20px;
    }

    .header-sub-content {
      font-size: 26px;
      color: white;
      text-shadow: none;
    }

    body {
      font-family: 'Times New Roman', sans-serif;
      background-color: rgb(17, 48, 77);
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 40px;
      background-color: #fff;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      margin-top: 50px;
    }

    h1,
    h2 {
      color: #333;
    }

    .section {
      margin-bottom: 50px;
    }

    .registration-link {
      color: #007bff;
      text-decoration: none;
    }

    .registration-link:hover {
      text-decoration: underline;
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    li {
      margin-bottom: 5px;
    }

    .footer {
      margin-top: 50px;
      text-align: center;
      color: #777;
    }



    .submission-btn {
      border-radius: 10px;
      /* background-color: rgb(253, 128, 32); */
      background-color:lightgrey;
      width: 255px;
      height: 50px;
      text-decoration: underline;
      text-align: center;
      text-decoration: none;
      /* text-shadow: 2px 2px 2px #000; */
      font-size: 24px;
      font-weight: bold;
      color: #fff;
      border: #000;
    }

    /*.submission-btn:hover {
      background-color: white;
      text-shadow: none;
      color: black;
    }*/


    .how-to-play-container {
      background-color: #DFFDF8FA;
      display: flex;
      flex-direction: column;
      height: auto;
      /* Set height as needed */
    }

    .block1 {
      /* Take up all available space */
      display: flex;
      justify-content: center;
      padding: 15px 0;
      background-color: #414141;
      font-style: italic;
      /* background-image: linear-gradient(rgba(3, 3, 3, 0.1),rgba(58, 51, 51, 0.9)); */
    }

    .block1-desc {
      text-align: center;
    }

    .block2-container {

      /* padding-left: 80px;
      padding-right: 80px;
      display: flex;
      justify-content: center;
      flex-wrap: wrap; */

      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    }



    .block-list {
      padding: 10px;

      list-style: none;
    }


    .block2 {


      flex: 1;
      flex-direction: column;
      justify-content: start;
    }

    /* .block2-title,
    .block3-title {

      text-align: center;
      font-weight: bolder;
      height: 100px;
      color: #043193;
    } */




    .block3-image {

      padding-top: 30px;
      width: 25rem;
      height: 14rem;
      border-radius: 50%;
      /* border: 5px solid grey; */
      box-shadow: 2px 2px #333;

    }

    ul {
      list-style-type: disc;
      /* Change to your preferred bullet style */
    }

    .section-detail-of-free {
      background-color: white;
    }

    .text-left-custom {
      text-align: left;
      word-wrap: break-word;
    }

    .td-lg {
      display: block;
    }

    .td-sm {
      display: none;
    }

    .price-table {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 20px;
    }

    .group-table-n-italic {
      padding: 20px;
    }

    /* Add your own styles or customize further as needed */

    .detail-of-free-title {
      color: #077B81FA;;
    }


    @media screen and (max-width: 768px) {
      .block2-container {
        padding-left: 30px;
        padding-right: 30px;
      }

      .block3-image {

        width: 200px;
      }
    }

    @media screen and (max-width: 576px) {

      .td-lg {
        display: none;
      }

      .td-sm {
        display: block;
      }

      .header-content {
        font-size: 40px;
        font-weight: 700;
      }

      .header-btn-reg {
        flex-direction: column;
      }

      .block2-container {
        display: grid;
        grid-template-columns: none;
      }

      .panel-header {
        padding-top: 30px;
      }
      .header-sub-content{
        font-size: 20px;
      }
    }

    @media screen and (max-width: 380px) {

      .group-table-n-italic {
        padding: 5px;
      }

      .text-left-custom {
        font-size: 14px;
      }

      .text-left {
        font-size: 12px;
      }

      .text-center {
        font-size: 14px;
      }

      .text-italic {
        font-size: 14px;
      }

      .header-btn-reg {
        flex-direction: column;
      }
      .block2-container {
        display: grid;
        grid-template-columns: none;
      }
      .price-table {
      display: grid;
      grid-template-columns: none;
    }
    }

    @media screen and (max-width: 320px) {
      .text-left-custom {
        font-size: 12px;
      }

      .text-left {
        font-size: 10px;
      }

      .text-center {
        font-size: 12px;
      }

      .text-italic {
        font-size: 12px;
      }

      .header-btn-reg {
        flex-direction: column;
      }
      .block2-container {
        display: grid;
        grid-template-columns: none;
      }
      .price-table {
      display: grid;
      grid-template-columns: none;
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
    <div class="panel-header">
      <div class="header-content fw-bolder">Registration Information</div><br>
      <div class="header-box">
        <h4 class="header-sub-content pb-2" style="color: blue;font-weight: bold;">Click the following link to access the Google form for registration :</h4>
        <div class="header-btn-reg">
          <a target="_blank" href="https://forms.gle/jjuAxDEMu6R93mC16">
            <button class="submission-btn" title="participants" disabled>Participants</button>
          </a>
          <a target="_blank" href="https://forms.gle/6nKURiBbp4UAHp5YA">
            <button class="submission-btn" title="Pre-Workshops" disabled>Pre-Workshops</button>
          </a>
        </div>
      </div>
    </div>
  </header>
  <div class="block1">
    <h3 class="block1-desc text-white">All participants must register as attending participants, presenters
      participants for pre-conference workshops</h3>
  </div>
  <div class="section-detail-of-free pt-5 pb-3" style="background-color: #ffedd8;">
    <i class="fa-solid fa-wallet w-100 text-center" style="font-size:60px;color: #077B81FA;"></i>
    <h1 class="detail-of-free-title text-center pb-4 fw-bolder fs-1">Registration fees</h1>


    <div class="group-table-n-italic">
      <div class="price-table">
        <div class="card-early price p-0 rounded-2" style="border: 3px solid #00ADB5;">
          <div class="card-header" style="background-color: #00ADB5;">
            <p class="header text-center fs-3 fw-bolder text-white">Early Fee</p>
            <div class="grey text-center fs-4 fw-bolder text-white">Up to 30<sup>th</sup> April, 2024</div>
          </div>
          <div style="width: auto;">
            <div style="background-color: #f0f0f0;padding:15px 50px;">

              <div class="d-flex justify-content-between fs-4"><span>Participant:</span><span class="fw-bold">80$</span>
              </div>

            </div>
            <div style="padding: 15px 50px;">
              <div class="d-flex justify-content-between fs-4"><span>Accompanying Person:</span><span
                  class="fw-bold">50$</span></div>
            </div>
            <div style="background-color: #f0f0f0;padding:15px 50px;">

              <div class="d-flex justify-content-between fs-4"><span>UN/INGOs:</span><span class="fw-bold">80$</span>
              </div>
            </div>

            <div style="padding: 15px 50px;">
              <div class="d-flex justify-content-between fs-4"><span>*Student/Master/PhD/Laos:</span><span
                  class="fw-bold">30$</span></div>
            </div>
          </div>
        </div>

        <div class="card-late price p-0 rounded-2" style="border: 3px solid #00ADB5">
          <div class="card-header" style="background-color: #00ADB5;">
            <p class="header text-center fs-3 fw-bolder text-white">Late Fee</p>
            <div class="grey text-center fs-4 fw-bolder text-white">1<sup>st</sup> May - 15<sup>th</sup> June, 2024</div>
          </div>
          <div>
            <div style="background-color: #f0f0f0;padding:15px 50px;">
              <div class="d-flex justify-content-between fs-4"><span>Participant:</span><span class="fw-bold">90$</span>
              </div>
            </div>
            <div style="padding:15px 50px;">
              <div class="d-flex justify-content-between fs-4"><span>Accompanying Person:</span><span
                  class="fw-bold">60$</span></div>
            </div>
            <div style="background-color: #f0f0f0;padding:15px 50px;">
              <div class="d-flex justify-content-between fs-4"><span>UN/INGOs:</span><span class="fw-bold">90$</span>
              </div>
            </div>
            <div style="padding:15px 50px;">
              <div class="d-flex justify-content-between fs-4"><span>*Student/Master/PhD/Laos:</span><span
                  class="fw-bold">40$</span></div>
            </div>
          </div>
        </div>
        <div class="card-onsite price p-0 rounded-2" style="border: 3px solid #00ADB5">
          <div class="card-header" style="background-color: #00ADB5;">
            <p class="header text-center fs-3 fw-bolder text-white">On Site</p>
            <div class="grey text-center fs-4 fw-bolder text-white">28 June, 2024</div>
          </div>
          <div>
            <div style="background-color: #f0f0f0;padding:15px 50px;">
              <div class="d-flex justify-content-between fs-4"><span>Participant:</span><span class="fw-bold">100$</span>
              </div>
            </div>
            <div style="padding:15px 50px;">
              <div class="d-flex justify-content-between fs-4"><span>Accompanying Person:</span><span
                  class="fw-bold">60$</span></div>
            </div>
            <div style="background-color: #f0f0f0;padding:15px 50px;">
              <div class="d-flex justify-content-between fs-4"><span>UN/INGOs:</span><span class="fw-bold">100$</span>
              </div>
            </div>
            <div style="padding:15px 50px;">
              <div class="d-flex justify-content-between fs-4"><span>*Student/Master/PhD/Laos:</span>
                <span class="fw-bold">50$</span>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="text-italic text-center p-0">
        <div class="card pt-4 pb-4 " style="border: 1px solid #d1e7dd;">
          <i class="fa-regular fa-hourglass-clock  fs-3" style="color: #00058a;"></i>
          <div class="pt-2 fs-4">Early registration</div>
          <div class="date-regis fs-3 fw-bolder pb-2">30<sup>th</sup> April, 2024</div>
        </div>
        <div class="card pt-4 pb-4 " style="border: 1px solid #d1e7dd;">
          <i class="fa-regular fa-alarm-exclamation  fs-3 " style="color: #ff0000;"></i>
          <div class="pt-2 fs-4">Late registration</div>
          <div class="date-regis fs-3 fw-bolder pb-2">Before 31 May, 2024</div>
        </div>

      </div>
    </div>

  </div>

  <div class="section how-to-play-container pt-5 pb-3">


    <h1 class="text-center fw-bolder pb-4 fs-1" style="color: #077B81FA;">How to Pay</h1>

    <div class="block2-container ms-lg-5 me-lg-5">

      <div class="block2">
        <i class="fa-regular fa-globe text-center w-100" style="font-size:60px;color: #077B81FA;"></i>
        <h3 class="block2-title fw-bolder fs-3 text-center pt-3" style="color: #4C9EA2FA;">The registration can be paid
          via <br>bank transfer to:</h3>
        <div class="d-flex justify-content-center" style="border-radius: 3px; padding: 20px;">
          <table>
            <tr>
              <td colspan="2" style="font-weight: bold; font-size: 20px;">Ms. Phanthy Sisana</td>
            </tr>
            <tr>
              <td class="fs-5"><b>Tel:</b></td>
              <td style="padding-left: 20px; font-size: 18px;">+856 (0)21-2213231</td>
            </tr>
            <tr>
              <td class="fs-5"><b>Bank Name:</b></td>
              <td style="padding-left: 20px; font-size: 18px;">Bank pour Le Commerce Exterieur Du Laos,<br>Vientiane Capital, Lao PDR
              </td>
            </tr>
            <tr>
              <td class="fs-5"><b>Account name:</b></td>
              <td style="padding-left: 20px; font-size: 18px;">PHANTHY SISANA</td>
            </tr>
            <tr>
              <td class="fs-5"><b>Bank Account:</b></td>
              <td style="padding-left: 20px; font-size: 18px;">0161213174433</td>
            </tr>
            <tr>
              <td class="fs-5"><b>SWIFT CODE:</b></td>
              <td style="padding-left: 20px; font-size: 18px;">COEBLALA</td>
            </tr>
            <tr>
              <td colspan="2">
                <hr>
              </td>
            </tr>
            <tr>
              <td colspan="2" style="padding-top: 20px;"><b>Or through the financial officer of the Faculty of Public
                  Health, UHS</b></td>
            </tr>
            <tr>
              <td colspan="2" style="font-weight: bold; font-size: 20px;">Ms. Manyphone Xayyasane</td>
            </tr>
            <tr>
              <td class="fs-5"><b>Account name:</b></td>
              <td style="padding-left: 20px; font-size: 18px;">MANYPHONE SAYYASAN</td>
            </tr>
            <tr>
              <td class="fs-5"><b>Bank Account:</b></td>
              <td style="padding-left: 20px; font-size: 18px;">091120100042411001</td>
            </tr>
            <tr>
              <td class="fs-5"><b>Tel:</b></td>
              <td style="padding-left: 20px; font-size: 18px;">+856 (0)21-240854</td>
            </tr>
            <tr>
              <td class="fs-5"><b>P.O. Box:</b></td>
              <td style="padding-left: 20px; font-size: 18px;">7444</td>
            </tr>
          </table>
          <!-- <ul class="block-list ">
            <li><b>Ms. Phanthy Sisana</b></li>
            <li><b>Tel:</b> +856 (0)21-2213231</li>
            <li><b>Bank Name:</b> Bank pour Le Commerce Exterieur Du Laos, Vientiane Capital, Lao PDR</li>
            <li><b>Account name:</b>Phanthy Sisana </li>
            <li><b>Bank Account:</b> 0161213174433</li>
            <li><b>SWIFT CODE:</b> COEBLALA</li>
            <br>
            <li>Or through the financial officer of the Faculty of Public Health, UHS</li>
            <li><b>Ms. Manyphone Xayyasane</b></li>
            <li><b>Account name:</b> MANYPHONE SAYYASAN</li>
            <li><b>Bank Account:</b> 091120100042411001</li>
            <li><b>Tel:</b> +856 (0)21-240854</li>
            <li><b>P.O. Box:</b> 7444</li>
          </ul> -->
        </div>

      </div>
      <div class="block3 ms-2">
        <div class="card-onsite">
          <i class="fa-regular fa-bench-tree text-center w-100" style="font-size:60px;color: #077B81FA;"></i>
          <h3 class="block3-title text-center pt-3 fs-3 fw-bolder" style="color: #4C9EA2FA;">Onsite Payment</h3>
          <br>
          <div class="d-flex justify-content-center">
            <img class="block3-image" src="./assets/img/onsite_payment.png">
          </div>
        </div>
      </div>

    </div>

  </div>


  <!-- js_script_here -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script src="./assets/js/script.js"></script>
  <script src="./assets/js/scrolltotop.js"></script>
</body>

</html>