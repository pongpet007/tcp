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
    <div class="container container-header" >
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
                  <?=lang('Products and Service')?>
                </a>
              </li>
              <li class="breadcrumb-item breadcrumb-self-item-active" aria-current="page">กล่องกระดาษ</li>
            </ol>
          </nav>

          <hr style="margin-top: 3rem; margin-bottom: 2rem;">
          <h2>
            <?=lang('Quotation')?>
          </h2>


          <form name="frmsendRequest" id="frmsendRequest" class="cart" action="<?=base_url($lang)?>/Favorite/sendmail" method="post">
            <table class="table-quotation " style="margin-top: 20px;" width="100%">
              <thead>
                <tr class="quotation-top">
                  <td class="text-position">
                    <h2 class="my-4">รูปสินค้า</h2>
                  </td>
                  <td class="text-count">
                    <h2 class="my-4">สินค้า</h2>
                  </td>
                  <td class="text-detail">
                    <h2 class="my-4">จำนวน</h2>
                  </td>

                </tr>

                <!-- Wait code Loop -->
                <tr class="quotation-detail-tr-1">
                  <td class="img-products-quotation">
                    <img class="lazy img-fluid img-thumbnail img-thumbnail-no-borders rounded-0 img-pro-quotation" src="<?=base_url('assets_2021_theme_1/img/product/img-pro-1.png?'.rand())?>"  style="width: 200px;" alt="Product name">
                  </td>
                  <td class="count-job">
                    <p>กล่องกระดาษ</p>
                  </td>
                  <td class="detail-job">
                    <div class="quotation-count">
                      <p class="pr-2">จำนวน</p>
                      <input type="text" name="qty" value="1" class="pro-cart"> 
                    </div>
                  </td>
                </tr>

                <!-- End Loop -->
              </thead>
            </table>
            <div class="cart-tax">
              <div class="">
                <h2 class="cart-bottom-title section-bg-white pb-3 input-contact">
                  กรอกรายละเอียดผู้ติดต่อ
                </h2>
              </div>
              <div class="tax-wrapper">
                <div class="tax-select-wrapper">
                  <div class="tax-select">
                    <input type="text" name="fullname" placeholder="ชื่อ" value="" required=""> 
                  </div>
                  <div class="tax-select">
                    <input type="text" name="company_name" placeholder="ชื่อบริษัท" value="" required=""> 
                  </div>
                  <div class="tax-select">
                    <input type="email" name="email" placeholder="อีเมล" value="" required="">
                  </div>
                  <div class="tax-select">
                    <input type="text" name="telephone" placeholder="เบอร์โทรศัพท์" value="" required=""> 
                    <input style="display: none;" class="hidden" type="text" name="pro_id" placeholder="โทร" value="1"> 
                  </div>
                  <div class="tax-select">
                    <textarea name="detail" placeholder="ข้อความ"></textarea>
                  </div>
                  <div class="g-recaptcha" data-sitekey="6LfudvkUAAAAAE8r05xmweDiQQVswvV6KmryzIKb" data-theme="light" data-type="image" data-size="normal"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfudvkUAAAAAE8r05xmweDiQQVswvV6KmryzIKb&amp;co=aHR0cDovL2JkcHJvb2YuY29tOjgw&amp;hl=en&amp;type=image&amp;v=mrdLhN7MywkJAAbzddTIjTaM&amp;theme=light&amp;size=normal&amp;cb=lrj5a4j262dr" width="304" height="78" role="presentation" name="a-rkhgdh4j7p2u" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>                                        <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?render=onload&amp;hl=en" async="" defer=""></script>                  <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?render=onload&amp;hl=en" async="" defer=""></script>                                        <br>
                  <div style="text-align: left;">
                    <button class="cart-btn-2" type="submit" >ส่งขอใบเสนอราคา</button>
                  </div>
                </div>
              </div>
            </div>
          </form>





          <hr style="margin-top: 2rem; margin-bottom: 2rem;">


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
    .nav-5:hover {
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
      $('.nav-4').addClass('nav-active');
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