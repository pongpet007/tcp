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
            <a href="<?=base_url($this->session->userdata('site_lang_name').'/Products/detail')?>" class="see-details">
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
            <a href="<?=base_url($this->session->userdata('site_lang_name').'/Products/detail')?>" class="see-details">
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

<!-- <script type="text/javascript">
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
</script> -->

<?php 
$this->load->view('2021_theme_1/inc/footer2/footer');
?>


<?php 
$this->load->view('2021_theme_1/inc/footer-js') 
?>





</body>
</html>