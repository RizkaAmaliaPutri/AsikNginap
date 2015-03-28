<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Asik Nginap &middot; Penginapan</title>
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
				<li><a href="<?php echo site_url('penginapan') ?>">PENGINAPAN</a></li>
				<li><a href="<?php echo site_url('kontakkami')?>">KONTAK KAMI</a></li>
                  </ul>
                </li>
              
			  </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

     

	<!-- Example row of columns -->
        
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
	
		<!--Sidebar content-->
		</div>
		
		<div class="span4">
		
		<h3>Swiss-Belinn Manyar</h3>
		<p><img src="img/swissbelinn.jpg"class="img-rounded" align="absmiddle" /></p>
		<br><br>
		<h5>Rating Hotel Ini! ***</h5>
		
		<label for="exampleInputNama1">Nama</label>
			<input type="text" class="form-control" id="exampleInputNama1" placeholder="nama">
			<label for="exampleInputEmail1">Email</label>
			<input type="email" class="form-control" id="exampleInputEmail1" placeholder="email">
		
		<h5>Komentar</h5>
			<textarea class="form-control" class="span5" rows="5" id="InputKomentar1">
			</textarea><p>
			<button type="submit" class="btn">Kirim</button></p>
			
		</div>
		<div class="container-fluid">
		<div class="row-fluid">
		<div class="span1">
		<br><br><br><br>
		
		<h5>
		
		<p class="text-left">Nama     </p> 
		<p class="text-left">Alamat   </p> 
		<p class="text-left">Email    </p> 
		<p class="text-left">No Telp  </p> 
		<p class="text-left">Fax      </p> 
		<p class="text-left">Link     </p> 
		</h5>
				
		</div>
		
		<div class="row-fluid">
		<div class="span4">
		<br><br><br><br>
		<h5>
		<p class="text-left">: Swiss-Belinn Manyar</p>
		<p class="text-left">: Jalan Manyar Kertoarjo No. 100, Jawa Timur</p>
		<p class="text-left">: sbiid@swiss-belhotel.com</p>
		<p class="text-left">: (031)-5946868</p>
		<p class="text-left">: (031)-5947795</p>
		<p class="text-left">: http://www.swiss-belhotel.com/</p>
		</h5>
		
		</div>
		</div>
		</div>
	  
	</div>

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
    <script src="../assets/js/holder/holder.js"></script>
  </body>
</html>
