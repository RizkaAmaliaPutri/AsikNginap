<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Asik Nginap &middot; Hasil Pencarian</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo site_url('css/bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo site_url('css/bootstrap-responsive.css')?>" rel="stylesheet">
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

   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo site_url('ico/A144.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo site_url('ico/A114.png'); ?>">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo site_url('ico/A72.png'); ?>">
                    <link rel="apple-touch-icon-precomposed" href="<?php echo site_url('ico/A57.png'); ?>">
                                   <link rel="shortcut icon" href="<?php echo site_url('ico/A32.png');?>">
  </head>

  <body>



    <!-- NAVBAR
    ================================================== -->

      <div class="container">
		<p class="text-right"><img src="img/logo.jpg"class="img-rounded" /></p>
        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <div class="nav-collapse collapse">
              <ul class="nav">
                
				<li><a href="<?php echo site_url('beranda') ?>">BERANDA</a></li>
				<li class="active"><a href="#">PENGINAPAN</a></li>
				<li><a href="<?php echo site_url('kontakkami')?>">KONTAK KAMI</a></li>
                  </ul>
                </li>
              
			  </ul>
            </div>
          </div>
        </div>
        
		<div class="container-fluid">
		<div class="row-fluid">
		<div class="span3">
		<h3>Tujuan</h3>
	
	<form class="form-search">
    <input type="text" class="input-small search-query">
    <button type="submit" class="btn">
	Search
	</button>
    </form>
	
	<hr>
	
	<div class="btn-group">
    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
    Rating
    <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
    <li><a tabindex="-1" href="#">Bintang*</a></li>
    <li><a tabindex="-1" href="#">Bintang**</a></li>
    <li><a tabindex="-1" href="#">Bintang***</a></li>
	<li><a tabindex="-1" href="#">Bintang****</a></li>
    <li><a tabindex="-1" href="#">Bintang*****</a></li>
    </ul></div>
	
	<p>
	
	<div class="btn-group">
    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
    Harga
    <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
    <li><a tabindex="-1" href="#">< 500.000</a></li>
    <li><a tabindex="-1" href="#">500.000 - 1.000.000</a></li>
    <li><a tabindex="-1" href="#">> 1000.000</a></li>

    </ul></div>
	
	<h3>Jenis</h3>
	<label class="checkbox">
	<input type="checkbox" value="option1">
	Hotel</label>
	<label class="checkbox">
	<input type="checkbox" value="option2">
	Guest House</label>
	<label class="checkbox">
	<input type="checkbox" value="option3">
	Inn</label>
	
	<h3>Fasilitas</h3>
	<label class="checkbox">
	<input type="checkbox" value="option1">
	Supermarket</label>
	<label class="checkbox">
	<input type="checkbox" value="option2">
	Kolam Renang</label>
	<label class="checkbox">
	<input type="checkbox" value="option3">
	Sport Area</label>
	
	<h3>Area</h3>
	<label class="checkbox">
	<input type="checkbox" value="option1">
	Sby Utara</label>
	<label class="checkbox">
	<input type="checkbox" value="option2">
	Sby Selatan</label>
	<label class="checkbox">
	<input type="checkbox" value="option3">
	Sby Pusat</label>
	<label class="checkbox">
	<input type="checkbox" value="option4">
	Sby Timur</label>
	<label class="checkbox">
	<input type="checkbox" value="option5">
	Sby Barat</label>
	</label>
	

		</div>
		
	<div class="span5">
		<h3>Guesthouse ITS</h3>
		<p><img src="img/guesthouseITS.jpg"class="img-rounded" /></p>
   
		
	<hr>
	
		<h3>Sahid Gunawangsa Hotel</h3>
		<p><img src="img/sahidgunawangsahotel.jpg"class="img-rounded" /></p>
		
	
	<hr>
	
		<h3>Swiss-Belinn Manyar</h3>
		<p><img src="img/swissbelinn.jpg"class="img-rounded" /></p>
		
		
	</div>
	
	<div class="span4">
	<br><br><br><br>
	<p>Homestay dengan fasilitas standar ini berada di area dalam ITS sehingga lingkungan nyaman karena jauh dari kebisingan.</p>
	<p><a class="btn" href="<?php echo site_url('DetailPenginapan')?>">Info Selengkapnya &raquo;</a></p>
	<br><br><br><br><br><br><br><br><br><br>
	<p>Hotel ini hanya berjarak 3.63 km dari kampus ITS, selain itu hotel ini juga dekat dengan tempat menarik serta Rumah Sakit Jiwa, dan Rumah Sakit Internasional Surabaya</p>
	<p><a class="btn" href="<?php echo site_url('DetailPenginapan')?>">Info Selengkapnya &raquo;</a></p>
	<br><br><br><br><br><br><br><br><br>
	<p>Swiss-Belinn Manyar posisinya disebelah barat hanya berjarak 2.15km dari kampus ITS.Selain paling dekat dengan ITS dan Unair, hotel bintang 3 ini juga menawarkan kemudahan akses dari berbagai tempat menarik di SBY.</p>
	<p><a class="btn" href="<?php echo site_url('DetailPenginapan')?>">Info Selengkapnya &raquo;</a></p>
	</div>
	
	</div>
	</div>	  
	</div>
    </div>



    <!-- Le javascript
    ================================================== -->

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
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="../assets/js/holder/holder.js"></script>
  </body>
</html>
