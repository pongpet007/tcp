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
              <li class="breadcrumb-item breadcrumb-self-item"><a href="#"><?=lang('HOME')?></a></li>
              <li class="breadcrumb-item breadcrumb-self-item"><a href="#"><?=lang('BLOG')?></a></li>
              <li class="breadcrumb-item breadcrumb-self-item-active" aria-current="page">หัวข้อบทความ</li>
            </ol>
          </nav>

          <h1 class="blog-name font-PSL-bold">
            บรรจุภัณฑ์ที่สัมผัสโดยตรงกับผลิตภัณฑ์ เช่น
          </h1>

          <ul class="head-blog-detail">
            <li >
              <?=lang('BY')?>&nbsp;<span class="admin-head">ADMIN</span>
            </li>
            <li >
              <?=lang('Posted date')?>&nbsp;<span class="admin-head">ADMIN</span>
            </li>
            <li >
              <?=lang('Views')?>&nbsp;<span class="admin-head">1000</span>
            </li>
          </ul>

          <hr>

          <!-- Wait CK -->
          <div class="">
            <img src="<?=base_url('assets_2021_theme_1/img/product/wait-ck.png?')?><?=rand()?>" style="width: 100%;">
          </div>

          <div style="padding: 40px 0">
            <hr >
          </div>

          <? 

          $lang = $this->session->userdata('site_lang_name');
          $share = base_url().$lang.'/Products/detail/'?>
          <div class="" style="display: inline-block;">


            <ul class="ul-share">
              <li>
                <div class="breadcrumb-detail menu-pro-detail font-PSL-bold"><?=lang('Share')?>&nbsp;</div>
              </li>
              <li>
                <div class="share-face">
                  <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $share?>">
                    <i class="fab fa-facebook-square face-color"></i>&nbsp;&nbsp;<span>share</span>
                  </a>
                </div>
              </li>
              <li>
                <div class="share-line">
                  <a href="https://lineit.line.me/share/ui?url=<?= $share?>">
                    <i class="fab fa-line line-color"></i>&nbsp;&nbsp;<span>share</span>
                  </a>
                </div>
              </li>
              <li>
                <div class="share-twitter">
                  <a href="https://twitter.com/share?url=<?= $share?>">
                    <i class="fab fa-twitter line-color"></i>&nbsp;&nbsp;<span>Tweet</span>
                  </a>
                </div>
              </li>
              <li>
                <div class="share-mail">
                  <a href="mailto:?subject=I wanted you to see this site&body=Check out this site <?= $share?>">
                    <i class="fas fa-envelope mail-color"></i>&nbsp;&nbsp;<span>Send</span>
                  </a>
                </div>
              </li>
              <li>
                <div class="share-print">
                  <a href="#" onClick="window.print(); return false;">
                    <i class="fas fa-print print-color"></i>&nbsp;&nbsp;<span>Print</span>
                  </a>
                </div>
              </li>
            </ul>



            <div class="tags">
              <div class="" style="display: inline-flex;">
                <h3 class="h3-tags font-PSL-bold">
                  <?=lang('tags')?>&nbsp;&nbsp;
                </h3>

                <div class="scrollbar">

                  <div class="tags-a">
                    <a href="#">กล่องเครื่องใช้ไฟฟ้า</a>
                  </div>
                  ,
                  <div class="tags-a">
                    <a href="#">กล่องเครื่องใช้ไฟฟ้า</a>
                  </div>
                  ,
                  <div class="tags-a">
                    <a href="#">กล่องเครื่องใช้ไฟฟ้า</a>
                  </div>

                </div>
              </div>
            </div>






          </div> 



        </div><!-- ENd Col-md-12 -->



        <div class="col-md-12">


          <ul class="nav nav-tabs nav-tabs-new" id="myTab" role="tablist">
            <li class="nav-item nav-item-work" role="presentation">
              <a class="nav-link active nav-link-work font-PSL-bold" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                <?=lang('Sample work')?>
              </a>
            </li>
          </ul>

         <!--  <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" >
            </div>
          </div> -->
          <!-- carousel -->







        </div> 

        
        <div class="col-md-12">


          <div class="owl-carousel owl-theme owl-carousel-blog">

            <div class="item">
              <a href="<?= base_url($lang)?>/Blog/detail">
                <img src="<?=base_url()?>/assets_2021_theme_1/img/about.jpg"  class="img-blog-all">
              </a>
              <a href="<?= base_url($lang)?>/Blog/detail" class="name-blog-all font-PSL-bold">
                <h3>
                  หัวข้อบทความ
                </h3>
              </a>
              <p class="detail-blog-all">
                Aenean quis ultrices arcu. Praesent ullamcorper, tellus id tincidunt commodo, nulla nisi tempor libero, et sodales nulla sem nec mi. Maecenas augue metus, laoreet nec magna sed, mattis porttitor metus. Mauris euismod lorem sit amet nunc efficitur eleifend. Vivamus pellentesque mattis dui, ac lacinia ligula pretium non. Aenean eget tincidunt orci. Integer tempor velit eu dolor scelerisque, vitae faucibus justo vehicula. Ut id sapien in velit ornare mollis. Aenean eleifend euismod justo, sed varius dui. Nulla et sollicitudin metus, lobortis tincidunt enim. Vivamus sit amet urna ut metus mollis feugiat.
              </p>
              <div class="but-blog">
                <a href="<?=base_url($lang.'/Blog/detail/1')?>" class="to-blog">
                  <?=lang('see-details')?>
                </a>
              </div>
            </div>


            <div class="item">
              <a href="<?= base_url($lang)?>/Blog/detail">
                <img src="<?=base_url()?>/assets_2021_theme_1/img/about.jpg"  class="img-blog-all">
              </a>
              <a href="<?= base_url($lang)?>/Blog/detail" class="name-blog-all font-PSL-bold">
                <h3>
                  หัวข้อบทความ
                </h3>
              </a>
              <p class="detail-blog-all">
                Aenean quis ultrices arcu. Praesent ullamcorper, tellus id tincidunt commodo, nulla nisi tempor libero, et sodales nulla sem nec mi. Maecenas augue metus, laoreet nec magna sed, mattis porttitor metus. Mauris euismod lorem sit amet nunc efficitur eleifend. Vivamus pellentesque mattis dui, ac lacinia ligula pretium non. Aenean eget tincidunt orci. Integer tempor velit eu dolor scelerisque, vitae faucibus justo vehicula. Ut id sapien in velit ornare mollis. Aenean eleifend euismod justo, sed varius dui. Nulla et sollicitudin metus, lobortis tincidunt enim. Vivamus sit amet urna ut metus mollis feugiat.
              </p>
              <div class="but-blog">
                <a href="<?=base_url($lang.'/Blog/detail/1')?>" class="to-blog">
                  <?=lang('see-details')?>
                </a>
              </div>
            </div>



          </div><!-- End Carousel -->

        </div><!-- ENd Col-md-12 carousel -->
        



        <script>
          $(document).ready(function() {
            $('.owl-carousel-blog').owlCarousel({
              loop: true,
              margin: 10,
              responsiveClass: true,
              responsive: {
                0: {
                  items: 1,
                  nav: true
                },
                600: {
                  items: 3,
                  nav: false
                },
                1000: {
                  items: 5,
                  nav: true,
                  loop: false,
                  margin: 20
                }
              }
            })
          })
        </script>





      </div><!-- End Row -->
    </div><!-- End Container -->









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



  <script src="<?=base_url()?>assets_2021_theme_1/owl/vendors/highlight.js"></script>
  <script src="<?=base_url()?>assets_2021_theme_1/owl/js/app.js"></script>












  <script type="text/javascript">
// Menu Bar Mobile 
if( 'ontouchstart' in window ) { 
  var click = 'touchstart'; 
}
else { 
  var click = 'click'; 
}
$('div.burger').on(click, function(){

  if( !$(this).hasClass('open') ){ openMenu(); } 
  else { 
    closeMenu(); 
  }
});
$('div.menu ul li a').on(click, function(e){
  e.preventDefault();
  closeMenu();
});   
function openMenu(){
  // $('div.menu ul').style.left = "0";
  $('div.circle').addClass('expand');
  $('div.menu').css("visibility","visible");
  $('div.screen').css("height","610px");
  $('div.burger').addClass('open'); 
  // $('div.x, div.y, div.z').addClass('collapse');
  $('.menu li').addClass('animate');
  setTimeout(function(){ 
    $('div.z').hide(); 
    $('div.x').addClass('rotate30'); 
    $('div.y').addClass('rotate150'); 
  }, 70);
  setTimeout(function(){
    $('div.x').addClass('rotate45'); 
    $('div.y').addClass('rotate135');  
  }, 120);
}

function closeMenu(){
  $('div.menu').css("visibility","hidden");
  $('div.screen').css("height","100px");
  $('div.burger').removeClass('open');  
  $('div.x').removeClass('rotate45').addClass('rotate30'); 
  $('div.y').removeClass('rotate135').addClass('rotate150');        
  $('div.circle').removeClass('expand');
  $('.menu li').removeClass('animate');

  setTimeout(function(){      
    $('div.x').removeClass('rotate30'); 
    $('div.y').removeClass('rotate150');      
  }, 50);
  setTimeout(function(){
    $('div.z').show(); 
    $('div.x, div.y, div.z').removeClass('collapse');
  }, 70);                         

}
// End Menu Bar
</script>




<?php 
$this->load->view('2021_theme_1/inc/footer-js');
?>





</body>
</html>