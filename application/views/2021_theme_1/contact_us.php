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
  <section class="section-contactus">
    <?php $this->load->view('2021_theme_1/inc/header2/header') ?>
    <div class="container  container-header d-md-block ">
      <div class="row">
        <div class="col-md-12">
          <div class="about-us">
            <h1>
              ติดต่อเรา
            </h1>
            <p>
              หากท่านสนใจสามารถติดต่อสอบถามเราเพิ่มเติมได้ที <span style="color: #FD4549;">/////รอเปลี่ยนภาพื้นหลัง</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End Section head -->


  <section class="contact-detail">
    <div class="container container-header" style="padding-bottom: 50px;">
      <div class="row">
        <div class="col-md-6">
          <h2 style="color: #17337d; letter-spacing: .5px;">
            ติดต่อเรา
          </h2>
          <h3 style="color: #808183; letter-spacing: .5px; line-height: 50px">
            กรุณากรอกข้อมูลเพื่อให้ทางเราติดต่อกลับ
          </h3>

          <div class="row">
            <div class="col-md-12">
              <form method="" action="#" class="form-contact-mail" style="">
                <div class="row">
                  <div class="col-md-6">
                    <h3>
                      ชื่อผู้ติดต่อ*
                    </h3>
                    <input type="text" name="name" class="input-contact" placeholder="กรุณากรอกชื่อ">
                  </div>
                  <div class="col-md-6">
                    <h3>
                      เบอร์โทรศัพท์*
                    </h3>
                    <input type="text" name="name" class="input-contact" placeholder="กรุณากรอกเบอร์โทรศัพท์">
                  </div>
                  <div class="col-md-12">
                    <h3>
                      อีเมล*
                    </h3>
                    <input type="text" name="name" class="input-contact" placeholder="กรุณากรอกอีเมล">
                  </div>
                  <div class="col-md-12">
                    <h3>
                      ข้อความ*
                    </h3>
                    <textarea name="messages" class="input-contact" placeholder="ข้อความ" type="textarea" style=""></textarea>
                  </div>

                  <div class="col-md-12" style="display: -webkit-inline-box;" >
                    <div class="g-recaptcha" data-sitekey="6LfudvkUAAAAAE8r05xmweDiQQVswvV6KmryzIKb" data-theme="light" data-type="image" data-size="normal">
                      <div style="width: 304px; height: 78px;">
                        <div>
                          <iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfudvkUAAAAAE8r05xmweDiQQVswvV6KmryzIKb&amp;co=aHR0cDovL2JkcHJvb2YuY29tOjgw&amp;hl=en&amp;type=image&amp;v=539Evs44yecoSf-lkJBQzKKj&amp;theme=light&amp;size=normal&amp;cb=yzxmr1mdir3n" width="304" height="78" role="presentation" name="a-gkhzc8gx9to8" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox">
                          </iframe>
                        </div>
                        <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;">
                        </textarea>
                      </div>
                      <iframe style="display: none;"></iframe>
                    </div>                 
                    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?render=onload&amp;hl=en" async="" defer=""></script>

                    <button class="btn-sent-mail" type="submit">ส่งข้อความ</button>

                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>


        <div class="col-md-6">
          <h2 style="color: #17337d; letter-spacing: .5px;">
            ที่อยู่ในการติดต่อเรา
          </h2>

          <ul class="contact-lines">
            <li>
              <p class="info-item">
                <span class="icon-contact">
                  <i class="fas fa-building i-font-contact"></i>
                </span>
                <b class="contatc-h4">บริษัท ที.ซี.พี อินดัสทรี้ จำกัด</b>
              </p>
            </li>
            <li>
              <p class="info-item">
                <span class="icon-contact">
                  <i class="fas fa-map-marker-alt i-font-contact"></i>
                </span>
                <b class="contatc-h4">ที่อยู่ : <span class="color-contact-2">82,84 ซ.ประชาอุทิศ 69 แขวงทุ่งครุ เขตทุ่งครุ กทม. 10140</span></b>
              </p>
            </li>

            <li>
              <p class="info-item">
                <span class="icon-contact">
                  <i class="fas fa-phone-alt i-font-contact"></i>
                </span>
                <b class="contatc-h4">เบอร์โทรศัพท์ : 
                  <br>
                  <a href="tel:+662-426-1567-70">+662-426-1567-70</a>
                  <br>
                  <a href="tel:+668-7929-8998">+668-7929-8998</a>
                  <br>
                  <a href="tel:+668-6978-7447">+668-6978-7447</a>
                  <br>
                  <a href="tel:+668-1821-2481">+668-1821-2481</a>
                </b>
              </p>
            </li>

            <li>
              <p class="info-item">
                <span class="icon-contact">
                  <i class="far fa-envelope-open i-font-contact"></i>
                </span>
                <b class="contatc-h4">อีเมล : <a href="mailto:crlighting@gmail.com">info@tcpindustry.com</a></b>
              </p>
            </li>
            <li>
              <p class="info-item">
                <span class="icon-contact">
                  <i class="fab fa-facebook-f i-font-contact"></i>
                </span>
                <b class="contatc-h4">เฟสบุ๊ค : <span class="color-contact-2">TCPINDUSTRY</span></b>
              </p>
            </li>
            <li>
              <p class="info-item">
                <span class="icon-contact">
                  <i class="fab fa-line i-font-contact"></i>
                </span>
                <b class="contatc-h4">ไลน์ : <a href="#">@tcpindustry</a></b>
              </p>
            </li>
            <li>
              <p class="info-item">
                <span class="icon-contact">
                  <i class="fas fa-globe-asia i-font-contact"></i>
                </span>
                <b class="contatc-h4">เว็บไซต์เพิ่มเติม : <a href="http://tcpindustry.brandexdirectory.com">tcpindustry.brandexdirectory.com</a></b>
              </p>
            </li>
          </ul>


          <h2 style="color: #17337d; letter-spacing: .5px;">
            เวลาทำการ
          </h2>

          <ul class="contact-lines">
           <li>
            <p class="info-item">
              <i class="fas fa-history i-font-contact-time"></i>
              <b class="contatc-h4-2">จันทร์ - เสาร์ <span class="color-contact-2">เวลา 8:00 น. - 17:00 น. (ออฟฟิศ)</span></b>
            </p>
          </li>
        </ul>

      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13041.399272225972!2d100.5065777566717!3d13.643695371694031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2a3afffffffff%3A0x26603e5864173c92!2z4Lia4Lij4Li04Lip4Lix4LiXIOC4l-C4tS7guIvguLUu4Lie4Li1LiDguK3guLTguJnguJTguLHguKrguJfguKPguLXguYkg4LiI4LmN4Liy4LiB4Lix4LiU!5e0!3m2!1sth!2sth!4v1617874010161!5m2!1sth!2sth" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>


  <div class="container container-header">
    <div class="row">
      <div class="col-md-12">
        <div class="img-map">
          <img src="<?=base_url()?>assets_2021_theme_1/img/bg/map.png" style="width : 100%" alt="TCPINDUSTRY">
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
$this->load->view('2021_theme_1/inc/footer2/footer');
?>


<?php 
$this->load->view('2021_theme_1/inc/footer-js') 
?>





</body>
</html>