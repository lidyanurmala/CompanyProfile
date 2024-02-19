<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/style.css"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>PT.Evatech Tecnology</title>
  </head>
  <body>
    <!--navbar-->
    <div class="navbar-fixed">
    <nav class="blue lighten-2">
    <div class="container">
      <div class="nav-wrapper">
        <a href=" index.php" class="brand-logo">PT.Evatech Technology</a>
        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index.php">Home</a></li>
          <li><a href="aboutus.php">About us</a></li>
          <li><a href="service.php">Services</a></li>
          <li><a href="produk.php">Product</a></li>
          <li><a href="kontak.php">Contact</a></li>
          <li><a href="lokasi.php">Location</a></li>  
        </ul>
      </div>
    </div>
    </nav>
    </div>
    
    <ul class="sidenav" id="mobile-nav">
          <li><a href="aboutus.php">About us</a></li>
          <li><a href="service.php">Services</a></li>
          <li><a href="produk.php">Product</a></li>
          <li><a href="kontak.php">Contact</a></li>
          <li><a href="lokasi.php">Location</a></li>  
    </ul>
    <!-- slider -->
    <div class="slider">
    <ul class="slides">
      <li>
        <img src= slider/2.png> 
        <div class="caption left-align">
          <h3>WELCOME TO MY WEBSITE !</h3>
          <h5 class="light grey-text text-lighten-3">Apa Saja Kebutuhan IT itu?</h5>
        </div>
      </li>    
      <li>
        <img src=slider/3.png> <!-- random image -->
        <div class="caption right-align">
          <h3>WELCOME TO MY WEBSITE !</h3>
          <h5 class="light grey-text text-lighten-3">Software apa yang diperlukan?</h5>
        </div>
      </li>    
      <li>
        <img src=slider/1.png> <!-- random image -->
        <div class="caption center-align">
          <h3>WELCOME TO MY WEBSITE !</h3>
          <h5 class="light grey-text text-lighten-3"> Yuk belajar tentang IT lainnya..</h5>
        </div>
      </li>  
      </ul>
      </div>    
      <section id="services" class="services grey lighten-3">
    <div class="container">
        <div class="row">
            <h3 class="light center grey-text text-darken-3">What do you do know? </h3>
        <div class="col m4 s12">
            <div class="card-panel center">
                <i class="material-icons medium">desktop_windows</i>
                <h5>LAPTOP</h5>
                <p> Laptop adalah komputer bergerak (bisa dipindahkan dengan mudah) yang berukuran relatif kecil dan ringan.</p>
            </div>
        </div>
        <div class="col m4 s12">
            <div class="card-panel center">
                <i class="material-icons medium">developer_mode</i>
                <h5>SMARTPHONE</h5>
                <p> Smartphone adalah telepon genggam yang mempunyai kemampuan tingkat tinggi dan mudah untuk dibawa.</p>
            </div>
        </div>
        <div class="col m4 s12">
            <div class="card-panel center">
                <i class="material-icons medium">computer</i>
                <h5>COMPUTER</h5>
                <p> Komputer adalah alat elektronik yang bekerja secara sistematis dan cermat untuk mengolah berbagai macam data.</p>
            </div>
        </div>
        </div>
    </div>
    </section>
      <footer class="page-footer blue lighten-2">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">PT.Evatech Technology</h5>
                <p class="grey-text text-lighten-4">Canggih bersama Kami</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">We are Selling:</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Apple</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Asus</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Samsung</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Accer</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2020 evatech tch
            <a class="grey-text text-lighten-4 right" href="#!">More Info</a>
            </div>
          </div>
        </footer>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
          indicators: false,
          height: 400,
          transition: 600,
          interval:3000
        });
      </script>
    </body>
  </html>
        