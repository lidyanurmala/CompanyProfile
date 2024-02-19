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
      <title>Location</title>
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
    <h3 class="light center grey-text text-darken-3">Lokasi Kantor Kami :</h3>
    <iframe width="500" height="250" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.294076450246!2d110.39305561403914!3d-7.758603394408191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5988eedfb25b%3A0xe4c482ef2c8a765c!2sJl.%20Padjajaran%2C%20Kabupaten%20Sleman%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1609044186096!5m2!1sid!2sid" 
        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    <button><a href="https://goo.gl/maps/ZAjzdEkLLUeHcLoJ8">Cek Lokasi</a></button>
   </br>
   </br> 
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

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);
    </script>
    </body>
  </html>