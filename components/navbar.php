<style>
  /* css-navbar here!!! */
  .navbar {
    padding: 0;
    background-color: rgba(255, 255, 255, 0.1);
    -webkit-backdrop-filter: blur(2px);
    backdrop-filter: blur(2px);
  }

  .navbar-brand {
    color: #e62e00;
    font-weight: bolder;
    font-size: 30px;
  }

  .navbar-brand:hover {
    color: #fff;
  }

  .nav-logo {
    width: 60px;
    height: 60px;
  }

  .nav-item {
    padding-right: 20px;
  }

  .nav-link {
    color: #fff;
    font-weight: bold;
    font-size: 18px;
    border-radius: 5px;
    text-shadow: 2px 2px 2px #000;
  }

  .nav-link:hover {
    background-color: rgb(64, 209, 253);
    border-radius: 5px;
    color: #fff;
  }

  .bgcolor {
    background-color: #0B60B0;
  }

  /* css-offcanvas here!!! */
  .offcanvas {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(112, 112, 112, 0.5)), url(./assets/img/index/index_bg_header.png);
    background-size: cover;
    background-repeat: no-repeat;
  }

  .offcanvas-header {
    border-bottom: 2px solid #fff;
    /* background-color: rgb(64, 209, 253); */
  }

  .offcanvas-title {
    color: #EA3C53;
    font-weight: bold;
    font-size: 30px;
  }

  .offcanvas-ul {
    list-style: none;
    text-align: left;
  }

  .offcanvas-ul li {
    padding-bottom: 20px;
  }

  .offcanvas-ul li a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-size: x-large;
  }

  .offcanvas-ul li a:hover {
    color: #fff;
    background-color: rgb(64, 209, 253);
    border-radius: 10px;
    padding: 10px;
  }


</style>

<!-- navbar here! -->
<nav id="navbar" class="navbar fixed-top navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="./14gms_home.php"><img class="nav-logo" alt="nav_logo"
        src="./assets/img/index/index_head2.png">&nbsp;ICPH-GMS</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
      aria-controls="staticBackdrop" title="menu" style="background-color: #e2e2e2;">
      <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="navbar-nav justify-content-end collapse navbar-collapse">
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="./14gms_home.php"><i class="fa fa-university"
            aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./14gms_about.php"><i class="fa fa-info-circle"
            aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./14gms_pro.php"><i class="fa fa-table"
            aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Conference Program</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./14gms_call.php"><i class="fa fa-address-card"
            aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Call For Abstracts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./14gms_reg.php"><i class="fa fa-registered"
            aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Registration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./14gms_venue.php"><i class="fa fa-map"
            aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Venue</a>
      </li>
    </ul>
  </div>
    <?php include_once("./components/announcement_bar.php")?>
</nav>



<!-- offcanvas here! -->
<div class="offcanvas offcanvas-start text-black bg-info" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
  aria-labelledby="staticBackdropLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="staticBackdropLabel">
      <img class="nav-logo" src="./assets/img/index/index_head2.png" alt="navlogo">&nbsp;ICPH-GMS
    </h5>
    <hr>
    <a class="btn btn-danger" href="#" data-bs-dismiss="offcanvas">Close</a>
    <!-- <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button> -->
  </div>
  <div class="offcanvas-body">
    <div>
      <ul class="offcanvas-ul">
        <li>
          <a href="./14gms_home.php"><i class="fa fa-university" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Home</a>
        </li>
        <li>
          <a href="./14gms_about.php"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;About</a>
        </li>
        <li>
          <a href="./14gms_pro.php"><i class="fa fa-table" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Conference
            Program</a>
        </li>
        <li>
          <a href="./14gms_call.php"><i class="fa fa-address-card" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Call For
            Abstracts</a>
        </li>
        <li>
          <a href="./14gms_reg.php"><i class="fa fa-registered" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Registration</a>
        </li>
        <li>
          <a href="./14gms_venue.php"><i class="fa fa-map" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Venue</a>
        </li>
      </ul>
    </div>
  </div>
</div>