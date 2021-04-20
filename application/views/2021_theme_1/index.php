<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('2021_theme_1/inc/header-meta') ?>

<?php $this->load->view('2021_theme_1/inc/css') ?>
<?php $this->load->view('2021_theme_1/inc/css1') ?>
<?php $this->load->view('2021_theme_1/inc/header2/css') ?>

<body>

 

  <?php $this->load->view('2021_theme_1/inc/header1/header') ?>
  <?php $this->load->view('2021_theme_1/index/banner') ?>

  <main id="home1">


    <?php $this->load->view('2021_theme_1/index/about') ?>
    <?php $this->load->view('2021_theme_1/index/timeline') ?>
    <?php $this->load->view('2021_theme_1/index/service') ?>

    
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
  <?php $this->load->view('2021_theme_1/inc/footer-js-home') ?>

  <script type="text/javascript">
     // Menu Bar Mobile 
     if( 'ontouchstart' in window ){ var click = 'touchstart'; }
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

</body>
</html>