<?= $this->extend('layout') ?>
<?= $this->section('bodycontent') ?>
<!--========== SLIDER ==========-->
<div class="promo-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 sm-margin-b-60">
        <div class="margin-b-30">
          <h1 class="promo-block-title">
            <?= $name ?>
          </h1>
          <p class="promo-block-text">Web Developer</p>
        </div>
        <ul class="list-inline">
          <li>
            <a href="https://www.linkedin.com/in/mohamadripalperdiansyah/" class="social-icons"><i class="icon-social-linkedin"></i></a>
          </li>
          <li>
            <a href="https://github.com/mripalp" class="social-icons"><i class="icon-social-github"></i></a>
          </li>
          <li>
            <a href="https://www.instagram.com/mhmdriipal_/" class="social-icons"><i class="icon-social-instagram"></i></a>
          </li>
        </ul>
      </div>
      <div class="col-sm-6">
        <div class="promo-block-img-wrap">
          <img class="promo-block-img img-responsive" style="width: 70%;" src="<?= base_url('img/mockup/avatar-01.png') ?>" alt="Avatar" />
        </div>
      </div>
    </div>
  </div>
</div>
<!--========== SLIDER ==========-->

<!--========== PAGE LAYOUT ==========-->
<!-- About -->
<div id="about">
  <div class="container content-lg">
    <div class="row">
      <div class="text-color-base">
        <h2>ABOUT ME</h2>
      </div>
      <div class="col-sm-5 sm-margin-b-60 margin-t-60">
        <h2>Get to Know
          <br>
          About Me
        </h2>
      </div>
      <div class="col-sm-7">
        <div class="section-seperator margin-b-50">
          <div class="margin-b-50">
            <div class="margin-b-30">
              <p>
                <?= $about ?>
              </p>
            </div>
            <a href="<?= base_url('documents/CV.pdf') ?>" class="btn-theme btn-theme-md btn-default-bg text-uppercase">Download my CV</a>
          </div>
        </div>

        <h2>My Tools & Skills</h2>
        <?php foreach ($tools as $tool) : ?>
          <div class="progress-box">
            <h5><?= $tool['tools_name'] ?> <span class="color-heading pull-right"><?= $tool['percentage'] ?></span></h5>
            <div class="progress">
              <div class="progress-bar bg-color-base" role="progressbar" data-width="<?= $tool['percentage'] ?>"></div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
<!-- End About -->


<!-- My Project -->
<div id="projects">
  <div class="container content-lg">
    <div class="row margin-b-40">
      <div class="col-sm-6">
        <h2>My Projects</h2>
      </div>
    </div>
    <div class="row">
      <?php foreach ($projects as $project) : ?>
        <div class="col-sm-4 sm-margin-b-50">
          <div class="margin-b-20">
            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
              <img class="img-responsive" src="<?= base_url('img/projects/' . $project['filename']) ?>.png" alt="<?= $project['name'] ?> Website" />
            </div>
          </div>
          <h4>
            <?= $project['name'] ?>
          </h4>
          <p>
            <?= $project['description'] ?>
          </p>
          <a class="icon-eye social-icons" style="font-size: 18px;" href="<?= $project['link_site'] ?>" target="_blank"></a>
          <a class="icon-social-github social-icons" style="font-size: 18px;" href="<?= $project['link_github'] ?>" target="_blank"></a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<!-- End My Project -->

<!-- Contact -->
<div id="contact">
  <div class="bg-color-sky-light">
    <div class="container content-lg">
      <div class="row margin-b-40">
        <div class="col-sm-6">
          <h2>Contact Me</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-xs-6 md-margin-b-30">
          <h4>Location</h4>
          <a href="https://maps.app.goo.gl/k7yXUsroEJxJzA3P6">Kota Sukabumi, Jawa Barat</a>
        </div>
        <div class="col-md-3 col-xs-6 md-margin-b-30">
          <h4>Phone</h4>
          <a href="tel:+6281320633531"><?= $phone ?></a>
        </div>
        <div class="col-md-3 col-xs-6">
          <h4>Email</h4>
          <a href="mailto:mohamadripal001@gmail.com"><?= $email ?></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Contact -->
<!--========== END PAGE LAYOUT ==========-->

<?= $this->endSection() ?>