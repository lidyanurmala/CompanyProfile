<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/style1.css"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>About us</title>
    </head>

    <body>
    <!--Home-->
    <div class="navbar-fixed">
    <nav class="blue lighten-2">
    <div class="container">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">PT.Evatech Tecnology</a>
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
    <!--parallax-->
    <div class="parallax-container">
            <div class="parallax"><img src="slider/4.png"></div>
            <h3 class="center light white-text">Tentang Kami:</h3>
    </div>
    <section id="about" class="about">
        <div class="container">
          <div class="row">
          
          <div class="col m6">
            <h5> We Are Study </h5>
              <p> PT.Evatech Tecnology merupakan perusahaan yang bergerak dibidang IT yang sudah berjalan hampir 5 tahun.
              Perusahaan kami melayani beberapa kebutuhan anak IT, Seperti alat-alat yang dibutuhkan oleh anak IT dan memnjawab Keperluan anak IT</p>
          </div>
           
           <div class="col m6 light">
           <p>ALAT ALAT IT</p>          
            <div class="progress">
                <div class="determinate blue" style="width: 70%"></div>
            </div>
            <p>KEBUTUHAN ANAK TI</p>          
            <div class="progress">
                <div class="determinate blue" style="width: 70%"></div>
            </div>
            <p>SOFTWARE IT</p>          
            <div class="progress">
                <div class="determinate blue" style="width: 70%"></div>
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

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);
      </script>
    </body>
  </html>
        