<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Asik Nginap &middot; Beranda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo site_url('css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url('css/bootstrap-responsive.css'); ?>" rel="stylesheet">
    <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }

    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }



    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 200px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 80px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
      padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo site_url('ico/apple-touch-icon-144-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo site_url('ico/apple-touch-icon-114-precomposed.png'); ?>">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo site_url('ico/apple-touch-icon-72-precomposed.png'); ?>">
                    <link rel="apple-touch-icon-precomposed" href="<?php echo site_url('ico/apple-touch-icon-57-precomposed.png'); ?>">
                                   <link rel="shortcut icon" href="<?php echo site_url('ico/favicon.png');?>">
  </head>

  <body>



    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">
		<h3 class="muted">
		<p class="text-right">Asik Nginap</p>
		</h3>
        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#">Beranda</a></li>
                <li><a href="<?php echo site_url('penginapan') ?>">Penginapan</a></li>
				<li><a href="<?php echo site_url('kontakkami')?>">Kontak Kami</a></li>
				
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo site_url('img/examples/slide-01.jpg') ?>" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Guesthouse ITS</h1>
              <p class="lead">Homestay dengan fasilitas standar ini berada di area dalam ITS sehingga lingkungan nyaman karena jauh dari kebisingan.</p>
              <a class="btn btn-large btn-primary" href="<?php echo site_url('DetailPenginapan')?>">Info Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo site_url('img/examples/slide-02.jpg') ?>" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Sahid Gunawangsa Hotel</h1>
              <p class="lead">Hotel ini hanya berjarak 3.63 km dari kampus ITS, selain itu hotel ini juga dekat dengan tempat menarik serta Rumah Sakit Jiwa, dan Rumah Sakit Internasional Surabaya.</p>
              <a class="btn btn-large btn-primary" href="<?php echo site_url('DetailPenginapan')?>">Info Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo site_url('img/examples/slide-03.jpg') ?>" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Swiss-Belinn Manyar</h1>
              <p class="lead">Swiss-Belinn Manyar posisinya disebelah barat hanya berjarak 2.15km dari kampus ITS.Selain paling dekat dengan ITS dan Unair, hotel bintang 3 ini juga menawarkan kemudahan akses dari berbagai tempat menarik di SBY.</p>
              <a class="btn btn-large btn-primary" href="<?php echo site_url('DetailPenginapan')?>">Info Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img class="img-circle" img src="<?php echo site_url('img/guesthouseITS.jpg') ?>" class="img-circle">
          <h2>Guesthouse ITS</h2>
          <p>Homestay dengan fasilitas standar ini berada di area dalam ITS sehingga lingkungan nyaman karena jauh dari kebisingan.</p>
          <p><a class="btn" href="<?php echo site_url('DetailPenginapan')?>">Info Selengkapnya &raquo;</a></p>
		  
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" img src="<?php echo site_url('img/sahidgunawangsahotel.jpg') ?>" class="img-circle">
          <h2>Sahid Gunawangsa Hotel</h2>
          <p>Hotel ini hanya berjarak 3.63 km dari kampus ITS, selain itu hotel ini juga dekat dengan tempat menarik serta Rumah Sakit Jiwa, dan Rumah Sakit Internasional Surabaya</p>
          <p><a class="btn" href="<?php echo site_url('DetailPenginapan')?>">Info Selengkapnya &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" img src="<?php echo site_url('img/swissbelinn.jpg') ?>" class="img-circle">
          <h2>Swiss-Belinn Manyar</h2>
          <p>Swiss-Belinn Manyar posisinya disebelah barat hanya berjarak 2.15km dari kampus ITS.Selain paling dekat dengan ITS dan Unair, hotel bintang 3 ini juga menawarkan kemudahan akses dari berbagai tempat menarik di SBY.</p>
          <p><a class="btn" href="<?php echo site_url('DetailPenginapan')?>">Info Selengkapnya &raquo;</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->


      


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2015 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo site_url('js/jquery.js')?>"></script>
    <script src="<?php echo site_url('js/bootstrap-transition.js')?>"></script>
    <script src="<?php echo site_url('js/bootstrap-alert.js')?>"></script>
    <script src="<?php echo site_url('js/bootstrap-modal.js')?>"></script>
    <script src="<?php echo site_url('js/bootstrap-dropdown.js')?>"></script>
    <script src="<?php echo site_url('js/bootstrap-scrollspy.js')?>"></script>
    <script src="<?php echo site_url('js/bootstrap-tab.js')?>"></script>
    <script src="<?php echo site_url('js/bootstrap-tooltip.js')?>"></script>
    <script src="<?php echo site_url('js/bootstrap-popover.js')?>"></script>
    <script src="<?php echo site_url('js/bootstrap-button.js')?>"></script>
    <script src="<?php echo site_url('js/bootstrap-collapse.js')?>"></script>
    <script src="<?php echo site_url('js/bootstrap-carousel.js')?>"></script>
    <script src="<?php echo site_url('js/bootstrap-typeahead.js')?>"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="<?php echo site_url('js/holder/holder.js')?>"></script>
  </body>
</html>
