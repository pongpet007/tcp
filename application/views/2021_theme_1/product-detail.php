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

       <div class="col-md-12">

        <nav aria-label="breadcrumb ">
          <ol class="breadcrumb breadcrumb-self">
            <li class="breadcrumb-item breadcrumb-self-item"><a href="#"><?=lang('HOME')?></a></li>
            <li class="breadcrumb-item breadcrumb-self-item"><a href="#"><?=lang('Products and Service')?></a></li>
            <li class="breadcrumb-item breadcrumb-self-item-active" aria-current="page">กล่องลูกฟูกออฟเซ็ท กล่องแสตนโชว์ กล่องพีวีซี ทุกขนาด</li>
          </ol>
        </nav>

        <h1 class="detail-name-pro font-PSL-bold">
          กล่องลูกฟูกออฟเซ็ท กล่องแสตนโชว์ กล่องพีวีซี ทุกขนาด
        </h1>

        <hr>

        <!-- CK -->
        <img src="<?=base_url('assets_2021_theme_1/img/product/wait-ck.png?')?><?=rand()?>" style="width: 100%;">
        <!-- end CK -->

        <hr class="border-products-detail">

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

          
        </div>
        <div class="button-ask">
          <div class="dropdown">
            <a class="btn btn-more-detail" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <?=lang('see-more-ask')?>
           </a>

           <div class="dropdown-menu drop-more-new" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item contact-by" href="#"><?=lang('add-line')?></a>
            <a class="dropdown-item contact-by" href="#"><?=lang('by-phone')?></a>
            <a class="dropdown-item contact-by" href="#"><?=lang('facebook')?></a>
          </div>
        </div>
      </div>

      <div class="tags">
        <div class="tags-all" style="">
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
            ,
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
            ,
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
            ,
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
            ,
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


      <ul class="nav nav-tabs nav-tabs-new" id="myTab" role="tablist">
        <li class="nav-item nav-item-work" role="presentation">
          <a class="nav-link active nav-link-work font-PSL-bold" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
            <?=lang('Sample work')?>
          </a>
        </li>
        <!-- <li class="nav-item" role="presentation">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
        </li> -->
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" >


          <div class="gallery-div">


            <!-- Gallerly -->
            <div class="row">

              <div class="col-md-3 col-sm-4 col-6">
                <a data-fancybox="gallery" href="<?=base_url('assets_2021_theme_1/img/product/img-pro-1.png?')?><?=rand()?>">
                  <img src="<?=base_url('assets_2021_theme_1/img/product/img-pro-1.png?')?><?=rand()?>" style="width: 100%;">
                </a>
                <div class="name-gallerly">
                  <a href="<?=base_url($lang.'/Products/detail/')?>">
                    กล่องเครื่องใช้ไฟฟ้า
                  </a>
                </div>
              </div>


              <div class="col-md-3 col-sm-4 col-6">
                <a data-fancybox="gallery" href="<?=base_url('assets_2021_theme_1/img/product/img-pro-2.png?')?><?=rand()?>">
                  <img src="<?=base_url('assets_2021_theme_1/img/product/img-pro-2.png?')?><?=rand()?>" style="width: 100%;">
                </a>
                <div class="name-gallerly">
                  <a href="<?=base_url($lang.'/Products/detail/')?>">
                    กล่องเครื่องใช้ไฟฟ้า
                  </a>
                </div>
              </div>

            </div>


          </div>

        </div>

      </div>



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

<script type="text/javascript">
// Menu Bar Mobile 
// if( 'ontouchstart' in window ) { 
//   var click = 'touchstart'; 
// }
// else { 
//   var click = 'click'; 
// }
// $('div.burger').on(click, function(){

//   if( !$(this).hasClass('open') ){ openMenu(); } 
//   else { 
//     closeMenu(); 
//   }
// });
// $('div.menu ul li a').on(click, function(e){
//   e.preventDefault();
//   closeMenu();
// });   
// function openMenu(){
//   // $('div.menu ul').style.left = "0";
//   $('div.circle').addClass('expand');
//   $('div.menu').css("visibility","visible");
//   $('div.screen').css("height","610px");
//   $('div.burger').addClass('open'); 
//   // $('div.x, div.y, div.z').addClass('collapse');
//   $('.menu li').addClass('animate');
//   setTimeout(function(){ 
//     $('div.z').hide(); 
//     $('div.x').addClass('rotate30'); 
//     $('div.y').addClass('rotate150'); 
//   }, 70);
//   setTimeout(function(){
//     $('div.x').addClass('rotate45'); 
//     $('div.y').addClass('rotate135');  
//   }, 120);
// }

// function closeMenu(){
//   $('div.menu').css("visibility","hidden");
//   $('div.screen').css("height","100px");
//   $('div.burger').removeClass('open');  
//   $('div.x').removeClass('rotate45').addClass('rotate30'); 
//   $('div.y').removeClass('rotate135').addClass('rotate150');        
//   $('div.circle').removeClass('expand');
//   $('.menu li').removeClass('animate');

//   setTimeout(function(){      
//     $('div.x').removeClass('rotate30'); 
//     $('div.y').removeClass('rotate150');      
//   }, 50);
//   setTimeout(function(){
//     $('div.z').show(); 
//     $('div.x, div.y, div.z').removeClass('collapse');
//   }, 70);                         

// }
// End Menu Bar
</script>

<?php 
$this->load->view('2021_theme_1/inc/footer2/footer');
?>


<?php 
$this->load->view('2021_theme_1/inc/footer-js') 
?>

<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script type="text/javascript">
  $('[data-fancybox="gallery"]').fancybox({
    thumbs : {
      autoStart : true
    }
  });



</script>


</body>
</html>