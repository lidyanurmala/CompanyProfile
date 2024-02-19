<?php
include 'koneksi.php';
?>
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
      <title>Contact Us</title>
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
    <section id="contact" class="contact grey lighten-3">
<div class="container">
  <h3 class = "center light grey-text text-darken-3">Visit Our:</h3>
<div class="row">
    <div class="col m5 s12">
        <div class="card-panel blue darken-2 center white-text">
        <i class="material-icons">email</i>
        <h5>Contact</h5>
        <p>evatechtechnology@co.id</p>
        <p>(+622)2825-6709</p>
        </div>
        <ul class="collection with-header">
        <li class="collection-header"><h4>Contact Us:</h4></li>
        <li class="collection-item"><div>WhatsApp:(+62)81228256709<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item"><div>Instagram:@ptevatechtechnology<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item"><div>Line:@7f90<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item"><div>Facebook:PT Evatech Tecnology<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
      </ul>
    </div>
    <div class="col m7 s12">
        <form id="form" action="input_proses.php" method="post">
            <div class="card-panel center">
                <h4>Please Fill Out this Form </h4>
                <div class="input-field">
                    <input type="text" name="nama" id="nama" required> 
                    <label for="name">Nama Lengkap:</label>
                </div>
                <div class="input-field">
                    <input type="text" name="email" id="email">
                    <label for="email">Email:</label>
                </div>
                <div class="input-field">
                    <input type="text" name="no_hp" id="no_hp" required>
                    <label for="no">Nomor HP:</label>
                </div>
                <div class="input-field">
                    <textarea name="saran" id="message" class="materialize-textarea"></textarea>
                    <label for="saran">Saran:</label> 
                </div>
                <button type="submit"  name="input" class="btn blue darken-2">Send</button>
            </div>
        </form>
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

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);
    </script>
    </body>
  </html>