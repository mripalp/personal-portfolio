<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- BEGIN HEAD -->

<head>
  <meta charset="utf-8" />
  <title><?= $title ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />

  <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('vendor/simple-line-icons/css/simple-line-icons.css') ?>" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />

  <link href="<?= base_url('css/animate.css') ?>" rel="stylesheet" />
  <link href="<?= base_url('vendor/swiper/css/swiper.min.css') ?>" rel="stylesheet" type="text/css" />

  <!-- THEME STYLES -->
  <link href="<?= base_url('css/layout.min.css') ?>" rel="stylesheet" type="text/css" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?= base_url('img/logo.svg') ?>" />
</head>
<!-- END HEAD -->

<!-- BODY -->

<body id="body" data-spy="scroll" data-target=".header">
  <!--========== HEADER ==========-->
  <header class="header navbar-fixed-top">
    <!-- Navbar -->
    <nav class="navbar" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="menu-container js_nav-item">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="toggle-icon"></span>
          </button>

          <!-- Logo -->
          <div class="logo">
            <a class="logo-wrap" href="#body">
              <img class="logo-img" src="<?= base_url('img/logo.svg') ?>" alt="Ripal Logo" />
            </a>
          </div>
          <!-- End Logo -->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse nav-collapse">
          <div class="menu-container">
            <ul class="nav navbar-nav navbar-nav-right">
              <li class="js_nav-item nav-item">
                <a class="nav-item-child nav-item-hover" href="#body">Home</a>
              </li>
              <li class="js_nav-item nav-item">
                <a class="nav-item-child nav-item-hover" href="#about">About</a>
              </li>
              <li class="js_nav-item nav-item">
                <a class="nav-item-child nav-item-hover" href="#projects">Projects</a>
              </li>
              <!-- <li class="js_nav-item nav-item">
                <a class="nav-item-child nav-item-hover" href="#work">Work</a>
              </li> -->
              <li class="js_nav-item nav-item">
                <a class="nav-item-child nav-item-hover" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- End Navbar Collapse -->
      </div>
    </nav>
    <!-- Navbar -->
  </header>
  <!--========== END HEADER ==========-->

  <?= $this->renderSection('bodycontent'); ?>

  <!--========== FOOTER ==========-->

  <footer class="footer">
    <div class="content container">
      <div class="row">
        <div class="text-right sm-text-left margin-t-20">
          <p class="margin-b-0">
            <a class="fweight-400">Copyright &copy; <span id="year" class="fweight-700"></span></a>
            Developed by:
            <a class="fweight-700" href="#">mripalp</a>
          </p>
        </div>
      </div>
      <!--// end row -->
    </div>
  </footer>
  <!--========== END FOOTER ==========-->

  <!-- Back To Top -->
  <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

  <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
  <!-- CORE PLUGINS -->
  <script src="<?= base_url('vendor/jquery.min.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('vendor/jquery-migrate.min.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('vendor/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>

  <!-- PAGE LEVEL PLUGINS -->
  <script src="<?= base_url('vendor/jquery.easing.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('vendor/jquery.back-to-top.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('vendor/jquery.smooth-scroll.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('vendor/jquery.wow.min.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('vendor/jquery.parallax.min.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('vendor/jquery.appear.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('vendor/swiper/js/swiper.jquery.min.js') ?>" type="text/javascript"></script>

  <!-- PAGE LEVEL SCRIPTS -->
  <script src="<?= base_url('js/layout.min.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('js/components/progress-bar.min.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('js/components/swiper.min.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('js/components/wow.min.js') ?>" type="text/javascript"></script>
  <script>
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>
</body>
<!-- END BODY -->

</html>