<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/style2.css"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Services</title>
    </head>

    <body>
    <div class="navbar-fixed">
    <nav class="blue lighten-2">
    <div class="container">
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo">PT.Evatech Tecnology</a>
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
          <li><a href="index.php">Home</a></li>
          <li><a href="aboutus.php">About us</a></li>
          <li><a href="service.php">Services</a></li>
          <li><a href="produk.php">Product</a></li>
          <li><a href="kontak.php">Contact</a></li>
          <li><a href="lokasi.php">Location</a></li>  
    </ul>

    <section id="services" class="services grey lighten-3">
    <div class="container">
        <div class="row">
            <h3 class="light center grey-text text-darken-3">Our Services </h3>
        <div class="col m4 s12">
            <div class="card-panel center">
                <i class="material-icons medium">desktop_windows</i>
                <h5>WEB DEVELOPMENT</h5>
                <p>Pengembang Web yang bekerja untuk merancang, membuat, dan memelihara situs web dan aplikasi web.</p>
            </div>
        </div>
        <div class="col m4 s12">
            <div class="card-panel center">
                <i class="material-icons medium">developer_mode</i>
                <h5>MOBILE APP</h5>
                <p> Aplikasi yang dibuat untuk perangkat-perangkat bergerak seperti : Smartphone, SmartWatch, Tablet, dan lainnya.
                </p>
            </div>
        </div>
        <div class="col m4 s12">
            <div class="card-panel center">
                <i class="material-icons medium">adb</i>
                <h5>APPLICATION</h5>
                <p> suatu perangkat lunak komputer yang memanfaatkan kemampuan komputer secara langsung untuk melakukan suatu.</p>
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
    </script>
    </body>
  </html>