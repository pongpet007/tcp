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
  <section class="section-blog">
    <?php $this->load->view('2021_theme_1/inc/header2/header') ?>
    
  </section>

  <!-- End Section head -->


  <section class="blog-detail">
    <div class="container container-header" style="padding-bottom: 50px;">
      <div class="row">

        <div class="col-md-12">

          <nav aria-label="breadcrumb ">
            <ol class="breadcrumb breadcrumb-self">
              <li class="breadcrumb-item breadcrumb-self-item"><a href="#"><?=lang('HOME')?></a></li>
              <li class="breadcrumb-item breadcrumb-self-item"><a href="#"><?=lang('BLOG')?></a></li>
              <li class="breadcrumb-item breadcrumb-self-item-active" aria-current="page">หัวข้อบทความ</li>
            </ol>
          </nav>

          <h1 class="blog-name font-PSL-bold">
            บรรจุภัณฑ์ที่สัมผัสโดยตรงกับผลิตภัณฑ์ เช่น
          </h1>

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