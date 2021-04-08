<!DOCTYPE html>
<html lang="en">
  <?php $this->load->view('2021_theme_1/inc/header-meta') ?>
  <?php $this->load->view('2021_theme_1/inc/css') ?>
  <?/*php $this->load->view('2021_theme_1/inc/css1')*/ ?>
  <body>
    <?php $this->load->view('2021_theme_1/inc/header1/header') ?>
    <?php $this->load->view('2021_theme_1/index/banner') ?>
    <main id="home1">
      <?php $this->load->view('2021_theme_1/index/about') ?>
    </main>

    <footer id="footer">
      <div class="container">
        <div class="copyright new-copyright">
          &copy; Copyright <strong><?=date('Y')?></strong> - All Rights Reserved.
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <!-- <div id="preloader"></div> -->
    <!-- Vendor JS Files -->
    <?php $this->load->view('2021_theme_1/inc/footer-js') ?>
  </body>
</html>