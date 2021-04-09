<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('2021_theme_1/inc/header-meta') ?>
<?php $this->load->view('2021_theme_1/inc/css') ?>

<body style="background-color: #FFF;">

  <?php
  $lang = $this->session->userdata('site_lang_name');
  ?>

  <?php 
  // $this->load->view('2021_theme_1/inc/header1/header') 
  ?>
  <section class="section-products">
    <?php $this->load->view('2021_theme_1/inc/header2/header') ?>
    
  </section>

  <!-- End Section head -->


  <section class="products-detail">
    <div class="container container-header" style="padding-bottom: 50px;">
      <div class="row">

        <!-- Waiting Loop Products -->
        <div class="col-md-6">
          <div class="detail-item-product">
            <img src="<?=base_url('assets_2021_theme_1/img/product/img-pro-1.png?')?><?=rand()?>" style="width: 100%;">
            <h2 class="font-PSL-bold h2-name-pro">
              กล่องลูกฟูกออฟเซ็ท กล่องแสตนโชว์ กล่องพีวีซี ทุกขนาด
            </h2>
            <p class="detail-pro-page-allpro">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In fermentum non velit nec tincidunt. Vivamus in est convallis, elementum ligula sed, interdum purus. Proin eu aliquet nulla, ut fringilla sem. 
            </p>
            <a href="#" class="see-details">
              <?=lang('see-details')?>
            </a>
          </div>
        </div>


        <div class="col-md-6">
          <div class="detail-item-product">
            <img src="<?=base_url('assets_2021_theme_1/img/product/img-pro-2.png?')?><?=rand()?>" style="width: 100%;">
            <h2 class="font-PSL-bold h2-name-pro">
              กล่องลูกฟูกออฟเซ็ท กล่องแสตนโชว์ กล่องพีวีซี ทุกขนาด
            </h2>
            <p class="detail-pro-page-allpro">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In fermentum non velit nec tincidunt. Vivamus in est convallis, elementum ligula sed, interdum purus. Proin eu aliquet nulla, ut fringilla sem. 
            </p>
            <a href="#" class="see-details">
              <?=lang('see-details')?>
            </a>
          </div>
        </div>


      </div>
    </div>


  </section>










  <a href="#" class="radius scroll-top " ><i class="fa fa-angle-up" aria-hidden="true"></i></a>
  <p class="open-menu-left " onclick="hideButtonmenu()"><i class="fas fa-chevron-right" aria-hidden="true"></i></a></p>
  <div class="menu-left">
    <div class="space-left-a">
      <a href="#vision" class="menu-left-a" data-toggle="tooltip" data-placement="right" title="<?=lang('vision')?>">
        <i class="icofont-unique-idea iconvision-left"></i>
      </a>
    </div>
    <div class="space-left-a">
      <a href="#obligation" class="menu-left-a" data-toggle="tooltip" data-placement="right" title="<?=lang('obligation')?>">
        <i class="fas fa-bullseye iconvision-left"></i>

      </a>
    </div>
    <div class="space-left-a">
      <a href="#history" class="menu-left-a" data-toggle="tooltip" data-placement="right" title="<?=lang('history')?>">
        <i class="icofont-building-alt iconvision-left"></i>

      </a>  
    </div>
    <div class="space-left-a">
      <a href="#board" class="menu-left-a" data-toggle="tooltip" data-placement="right" title="<?=lang('board')?>">
        <i class="icofont-site-map iconvision-left"></i>

      </a>
    </div>
    <div class="space-left-a">
      <a href="#iso" class="menu-left-a" data-toggle="tooltip" data-placement="right" title="<?=lang('iso')?>">
        <i class="icofont-badge iconvision-left"></i>

      </a>
    </div>
  </div>



  <?php 
  $this->load->view('2021_theme_1/inc/footer2/footer');
  ?>


  <?php 
  $this->load->view('2021_theme_1/inc/footer-js') 
  ?>





</body>
</html>