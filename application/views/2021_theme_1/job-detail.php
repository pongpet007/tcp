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
  <section class="section-blog-detail">
    <?php $this->load->view('2021_theme_1/inc/header2/header') ?>
    
  </section>

  <!-- End Section head -->


  <section class="blog-detail">
    <div class="container container-header" style="padding-bottom: 50px;">
      <div class="row">

        <div class="col-md-12">

          <nav aria-label="breadcrumb ">
            <ol class="breadcrumb breadcrumb-self">
              <li class="breadcrumb-item breadcrumb-self-item">
                <a href="<?=base_url($this->session->userdata('site_lang_name').'/Home')?>">
                  <?=lang('HOME')?>
                </a>
              </li>
              <li class="breadcrumb-item breadcrumb-self-item">
                <a href="<?=base_url($this->session->userdata('site_lang_name').'/Job')?>">
                  <?=lang('Recruit')?>
                </a>
              </li>
              <li class="breadcrumb-item breadcrumb-self-item-active" aria-current="page">โปรแกรมเมอร์</li>
            </ol>
          </nav>

          <h1 class="blog-name font-PSL-bold">
            โปรแกรมเมอร์
          </h1>

          <ul class="head-blog-detail">
            <li >
              <?=lang('BY')?>&nbsp;<span class="admin-head">ADMIN</span>
            </li>
            <li >
              <?=lang('Posted date')?>&nbsp;<span class="admin-head">05/20/2564</span>
            </li>
          </ul>

          <hr style="margin-top: 3rem; margin-bottom: 2rem;">

          <!-- Wait CK -->
          <div class="">
            <img src="<?=base_url('assets_2021_theme_1/img/product/wait-ck.png?')?><?=rand()?>" style="width: 100%;">
          </div>


          <hr class="border-products-detail">





        </div>
      </div>
    </div>






  </section>


  <style type="text/css">
    .nav-1:hover {
      border-top: 5px solid  #4186FA;
      margin-top: -3px;
      transition: all 0.3s ease-in;
    }
    .nav-2:hover {
      border-top: 5px solid  #4186FA;
      margin-top: -3px;
      transition: all 0.3s ease-in;
    }
    .nav-3:hover {
      border-top: 5px solid  #4186FA;
      margin-top: -3px;
      transition: all 0.3s ease-in;
    }
    .nav-4:hover {
      border-top: 5px solid  #4186FA;
      margin-top: -3px;
      transition: all 0.3s ease-in;
    }
    .nav-6:hover {
      border-top: 5px solid  #4186FA;
      margin-top: -3px;
      transition: all 0.3s ease-in;
    }
    .nav-7:hover {
      border-top: 5px solid  #4186FA;
      margin-top: -3px;
      transition: all 0.3s ease-in;
    }
  </style>


  <script type="text/javascript">
    $('#memberImg').ready(function(){
      $('.nav-5').addClass('nav-active');
    });
  </script>







  <a href="#" class="radius scroll-top " ><i class="fa fa-angle-up" aria-hidden="true"></i></a>
  <!-- <p class="open-menu-left " onclick="hideButtonmenu()"><i class="fas fa-chevron-right" aria-hidden="true"></i></a></p>
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
  </div> -->


  <?php 
  $this->load->view('2021_theme_1/inc/footer2/footer');
  ?>

  <?php 
  $this->load->view('2021_theme_1/inc/footer-js');
  ?>




















</body>
</html>