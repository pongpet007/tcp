<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('2021_theme_1/inc/header-meta') ?>
<?php $this->load->view('2021_theme_1/inc/css') ?>


<body style="background-color: #FFF;">

  <?php
  $lang = $this->session->userdata('site_lang_name');
  ?>


  <section class="section-header">
    <?php $this->load->view('2021_theme_1/inc/header2/header') ?>
    <div  class="container  container-header d-md-block ">
      <div class="row">
        <div class="col-md-12">
          <div class="about-us">
            <h1>
              <?=lang('know tcp')?>
            </h1>
            <p>
              <?=lang('Answers to all businesses')?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End Section head -->
  <section class="section-tab">
    <div class="container container-header">
      <div class="row">
       <!-- Tab Selection -->

       <div class="col-md-12 space-tab Top"> 
        <div class="row text-center row-space-tab" >
          <div class="space-tab-select item-1 ">
            <a href="<?=base_url($lang.'/About#vision')?>">
              <div class="tab-select">
                <div class="vision">
                  <i class="icofont-unique-idea iconvision"></i>
                  <p>
                    <?=lang('vision')?>
                  </p>
                  <span>
                    <?=lang('Aiming to improve')?>
                  </span>
                </div>
              </div>
            </a>
          </div>
          <div class="space-tab-select item-2" >
            <a href="<?=base_url($lang.'/About#obligation')?>">
              <div class="tab-select">
                <div class="vision">
                  <i class="fas fa-bullseye iconvision"></i>
                  <p>
                    <?=lang('obligation')?>
                  </p>
                  <span>
                    <?=lang('Respond for business')?>
                  </span>
                </div>
              </div>
            </a>
          </div>

          <div class="space-tab-select item-3" id="sidebar-tab" >
            <a href="<?=base_url($lang.'/About#history')?>">
              <div class="tab-select">
                <div class="vision">
                  <i class="icofont-building-alt iconvision"></i>
                  <p>
                    <?=lang('history')?>
                  </p>
                  <span>
                    <?=lang('Was established to produce packaging')?>
                  </span>
                </div>
              </div>
            </a>
          </div>

          <div class="space-tab-select item-4" id="sidebar-tab" >
            <a href="<?=base_url($lang.'/About#board')?>">
              <div class="tab-select">
                <div class="vision">            
                  <i class="icofont-site-map iconvision"></i>
                  <p>
                    <?=lang('board')?>
                  </p>
                  <span>
                    <?=lang('With quality management')?>
                  </span>
                </div>
              </div>
            </a>
          </div>

          <div class="space-tab-select item-5" id="sidebar-tab" >
            <a href="<?=base_url($lang.'/About#iso')?>">
              <div class="tab-select">
                <div class="vision">
                  <!-- <i class="icofont-certificate iconvision"></i> -->
                  <i class="icofont-badge iconvision"></i>
                  <p>
                    <?=lang('Certification')?>
                  </p>
                  <span>
                    ISO 9001:2000
                  </span>
                </div>
              </div>
            </a>
          </div>

        </div>

      </div>

    </div>
  </div>
</section>
<!-- END Selection -->



<section id="vision" class="vision-detail" >
  <div class="container container-about">
    <div class="row">
      <div class="col-md-6 img-vision sticky">
        <img src="<?=base_url('image_new/bg/img-about.png')?>" width="100%">
      </div>
      <div class="col-md-6">
        <div class="detail-vision">
          <h1>
            วิสัยทัศน์
          </h1>
          <div class="scrollbar" id="vision-p">
           <p >
            &nbsp;&nbsp;&nbsp;&nbsp;มุ่งมั่นและพัฒนาการผลิต โดยนำเอาเทคโนโลยีการพิมพ์ที่ทันสมัยจากต่างประเทศเข้ามาพัฒนาการผลิต ซึ่งถือได้ว่าเป็นโรงพิมพ์ที่ทันสมัยแห่งหนึ่งในประเทศไทย ทั้งยังมีระบบตรวจสอบประกันคุณภาพทุกขั้นตอนของการผลิต เพื่อสนองความต้องการและความพึงพอใจของลูกค้า
          </p>
          <p>
            &nbsp;&nbsp;&nbsp;&nbsp;ด้วยการบริหารงานคุณภาพของทีมงานในฝ่ายต่างๆ ประกอบด้วย ฝ่ายมาตรฐานคุณภาพ, ฝ่ายบัญชี, ฝ่ายการเงิน, ฝ่ายบุคคล, ฝ่ายขาย, ฝ่ายจัดซื้อ, ฝ่ายออกแบบ, ฝ่ายวางแผนการผลิต, ฝ่ายผลิต, ฝ่ายไอที และการพัฒนาองค์กร เพื่อครอบคลุม กระบวนการผลิต รองรับงานพิมพ์ที่มีคุณภาพรวดเร็ว เพราะทุกกระบวนการผลิตสามารถผลิตสำเร็จภายในโรงงาน ประกอบด้วย แผนกออกแบบ, แผนกตัด, แผนกพิมพ์, แผนกคัด, แผนกอาบเคลือบ, แผนกปะกบลูกฟูก, แผนกไดคัท, แผนกติดประกอบ, แผนกจัดส่ง และแผนกซ่อมบำรุง 
          </p>
        </div>


      </div>

    </div>
  </div>
</div>
</section>

<section id="obligation" class="obligation" style="background-color: #FFF;">
  <div class="container container-obligation">
    <div class="row">
      <div class="col-md-6">
        <div class="detail-obligation">

          <h1>
            พันธกิจ
          </h1>
          <p>
            &nbsp;&nbsp;&nbsp;&nbsp;เพื่อตอบสนองด้านเศรษฐกิจ ทางบริษัทฯ จึงได้จัดตั้งโรงงาน ณ ที่ปัจจุบัน บนถนนประชาอุทิศ แขวงทุ่งครุ เขตทุ่งครุ กรุงเทพฯ ในปีพุทธศักราช 2532 เพื่อขยายรากฐานกำลังการผลิตให้มีปริมาณมากขึ้น โดนใช้ชื่อว่า "บริษัท ที.ซี.พี อินดัสทรี้ จำกัด" บนเนื้อที่ 12 ไร่ พื้นที่สำนักงาน 1,386 ตารางเมตร พื้นที่โรงงาน 9,000 ตารางเมตร ด้วยบุคลากรมากกว่า 300 คน โดยมีกำลังการผลิต 15,000 ตันต่อปี เพื่อนสร้างสรรค์บรรจุภัณฑ์คุณภาพออกสู่ตลาดทั้งในประเทศและต่างประเทศ อย่างต่อเนื่องจนถึงปัจจุบัน 
          </p>

        </div>
      </div>
      <div class="col-md-6">
       <img src="<?=base_url('image_new/bg/img-about.png')?>" width="100%">
     </div>
   </div>
 </div>
</section>


<section id="history" class="history">
 <div class="container container-history">
   <div class="row">
     <div class="col-md-12">
      <div class="detail-history">
        <h1>
          ประวัติ
        </h1>
        <p>
          บริษัท ที.ซี.พี อินดัสทรี้ จำกัด เป็นผู้ดำเนินการเกี่ยวกับสิ่งพิมพ์ด้านบรรจุภัณฑ์ประเภทกระดาษ รวมถึงบรรจุภัณฑ์ประเภทลูกฟูกออฟเซ็ท
          <br>
          และสิ่งพิมพ์ที่เกี่ยวกับกระดาษอื่นๆ เช่น กล่องบรรจุสินค้า , โปสเตอร์ , ป้าย , โบรชัวร์ , สติ๊กเกอร์ มากกว่า 65 ปี
        </p>


        

        <picture>
          <source media="(min-width:769px)" srcset="<?=base_url('image_new/bg/timeline-about.png')?>">                
          <source media="(max-width:768px)" srcset="<?=base_url('image_new/bg/timeline-about.png')?>" src="" type="" style="width:100%;">
          <img src="<?=base_url('image_new/bg/timeline-about.png')?>" width="100%">
        </picture>

            <div style="margin-top: 30px;">
              <p>
                ทุกกระบวนการ เราดำเนินการผลิตภายในบริษัท ตั้งแต่การจัดทำตัวอย่าง, การทำเพลทพิมพ์ด้วยระบบคอมพิวเตอร์, การทำบล็อคไดคัท รวมถึงกระบวนการอาบเคลือบประเภทต่างๆ นอกจากนี้ยังสามารถทำ Hot Stamp , Emboss และการอัดลาย เพื่อเพิ่มความสวยงามและมูลค่าให้แก่สินค้าได้อีกด้วย
              </p>
            </div>

            <div style="width: 100% ;margin-top: 40px; margin-bottom: 70px;">
              <span style=" border-bottom: 10px solid #013b9c;padding: 0 100px;"></span>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <section id="board" class="board">
    <div class="container container-board">
      <div class="row">

        <div class="col-md-12">
          <div class="detail-board">
           <h1>
             คณะกรรมการบริษัท
           </h1>
           <p>
             ด้วยการบริหารงานคุณภาพของทีมงานในฝ่ายต่างๆ
           </p>
         </div>
         <div class="board-head">
          <div class="row">
            <div class="col-md-5">
            </div>
            <div class="col-md-7">
              <div class="detail-director">

                <h2 class="name-director d-sm-none d-block">
                  นายสุนทร สุนทรกำพลรัตน์
                  
                </h2>
                <h2 class="position-director d-sm-none d-block">
                  กรรมการบริษัท
                </h2>

                <h2 class="name-board-1  d-sm-block d-none">
                  นายสุนทร สุนทรกำพลรัตน์
                </h2>

                <p class="detail-com  d-sm-block d-none">
                  ด้วยการบริหารงานคุณภาพของทีมงานในฝ่ายต่างๆ ประกอบด้วย ฝ่ายมาตรฐานคุณภาพ, ฝ่ายบัญชี, ฝ่ายการเงิน, ฝ่ายบุคคลฝ่ายขาย, ฝ่ายจัดซื้อ, ฝ่ายออกแบบ, ฝ่ายวางแผนการผลิต, ฝ่ายผลิต, ฝ่ายไอที และการพัฒนาองค์กร เพื่อครอบคลุมกระบวนการผลิต รองรับงานพิมพ์ที่มีคุณภาพรวดเร็ว เพราะทุกกระบวนการผลิต  สามารถผลิตสำเร็จภายในโรงงาน ประกอบด้วย แผนกออกแบบ, แผนกคัด, แผนกอาบเคลือบ, แผนกประกบลูกฟูก, แผนกไดคัท, แผนกติดประกอบ, แผนกจัดส่ง และแผนกซ่อมบำรุง 
                </p>
                <div class="hover-detail-director d-sm-block d-none">

                  <div class="arrow_box">
                    <h3 class="arrow">
                      กรรมการบริษัท
                    </h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12 ">
        <div class="other-board">
          <div class="row">
            <div class="col-md-6">
              <div class="hover-board-1">
                <div class="board-1">
                  <div class="position-rank-1">
                    <h1 class="h1-rank-1">ผู้ช่วยการตลาด</h1>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="hover-board-2">
                <div class="board-2">
                  <div class="position-rank-2">
                    <h1 class="h1-rank-2">ผู้ช่วยการฝ่ายขาย</h1>
                  </div>
                </div>
              </div>
            </div>


          </div>

        </div>
      </div>

      <div class="col-md-12">
        <div class="bg-member">
          <img src="<?=base_url()?>assets_2021_theme_1/img/bg/member.png?<?= rand()?>" alt="Member of TCP" id="memberImg">
          <!-- The Modal -->
          <div id="myModal" class="modal">
            <span class="close" id="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
          </div>
        </div>
      </div>

      <div class="col-md-5">
        <img src="<?=base_url()?>assets_2021_theme_1/img/bg/member-join.png" style="width: 100%;">
      </div>
      <div class="col-md-7">
        <div class="name-member">
          <h2 class="team-board">
            ทีมบริหาร
          </h2>

          <!-- <ul class="ul-member">
            <li>
              1.นางสาวนวลน้อย  สุนทรกำพลรัตน์
            </li>
            <li>
              Corporate Governace
            </li>
          </ul> -->

          <div class="row row-member">

            <div class="col-md-6">
              <h3 class="h3-name-member">1.นางสาวนวลน้อย &nbsp;&nbsp; สุนทรกำพลรัตน์</h3>
            </div>
            <div class="col-md-6">
              <h3 class="position-member">Corporate &nbsp;&nbsp; Governace</h3>
            </div>

            <div class="col-md-6">
              <h3 class="h3-name-member">2.นายภัทร &nbsp;&nbsp;   แสงโรจน์รัตน์</h3>
            </div>
            <div class="col-md-6">
              <h3 class="position-member">Audit and Risk mangement</h3>
            </div>

            <div class="col-md-6">
              <h3 class="h3-name-member">3.นายพิศิษฐ์   &nbsp;&nbsp; สุนทรกำพลรัตน์</h3>
            </div>
            <div class="col-md-6">
              <h3 class="position-member">Managing Director</h3>
            </div>

            <div class="col-md-6">
              <h3 class="h3-name-member">4.นายพิชาญ &nbsp;&nbsp; สุนทรกำพลรัตน์</h3>
            </div>
            <div class="col-md-6">
              <h3 class="position-member">Managing Director</h3>
            </div>

            <div class="col-md-6">
              <h3 class="h3-name-member">5.นายพิชาญ  &nbsp;&nbsp;  สุนทรกำพลรัตน์</h3>
            </div>
            <div class="col-md-6">
              <h3 class="position-member">Managing Director</h3>
            </div>

            <div class="col-md-6">
              <h3 class="h3-name-member">6.นางสาวกัลยา  &nbsp;&nbsp;  แต้สงเคราะห์</h3>
            </div>
            <div class="col-md-6">
              <h3 class="position-member">Assistant Managing Director</h3>
            </div>

            <div class="col-md-6">
              <h3 class="h3-name-member">7.นางสาวนุสราภรณ์  &nbsp;&nbsp;  อมรวิกัยกุล</h3>
            </div>
            <div class="col-md-6">
              <h3 class="position-member">Prepress Division Manager</h3>
            </div>

            <div class="col-md-6">
              <h3 class="h3-name-member">8.นางมั่นชิง  &nbsp;&nbsp;  สุนทรกำพลรัตน์</h3>
            </div>
            <div class="col-md-6">
              <h3 class="position-member">Export Sales Department Manager</h3>
            </div>

            <div class="col-md-6">
              <h3 class="h3-name-member">9.นางบังอร &nbsp;&nbsp; สมทรง</h3>
            </div>
            <div class="col-md-6">
              <h3 class="position-member">Local Sales Department</h3>
            </div>

            <div class="col-md-6">
              <h3 class="h3-name-member">10.นายกำพลรัตน์  &nbsp;&nbsp;  สุนทรกำพลรัตน์</h3>
            </div>
            <div class="col-md-6">
              <h3 class="position-member">Operation Division Manager</h3>
            </div>

            <div class="col-md-6">
              <h3 class="h3-name-member">11.นางสาวกุสุมาลี  &nbsp;&nbsp;  ชำนาญสุทธิพงศ์</h3>
            </div>
            <div class="col-md-6">
              <h3 class="position-member">Assistant Operation Division Manager</h3>
            </div>

            <div class="col-md-6">
              <h3 class="h3-name-member">12.นางพิมพา  &nbsp;&nbsp;  บุญทวี</h3>
            </div>
            <div class="col-md-6">
              <h3 class="position-member">Human Resource Division Supervisor</h3>
            </div>

            <div class="col-md-6">
              <h3 class="h3-name-member">13.นายทรงพิพัฒน์  &nbsp;&nbsp;  ทะนันไชย</h3>
            </div>
            <div class="col-md-6">
              <h3 class="position-member">Maintenance Division Manager</h3>
            </div>

          </div>



        </div>
      </div>

      <div class="col-md-12">
        <div style="border-bottom: 10px dotted #EEE; margin: 10px 0;">

        </div>
      </div>

    </div>
  </div>
</section>




<section id="iso" class="iso">
  <div class="container container-iso">
    <div class="row">
      <div class="col-md-6">
        <div class="detail-iso">
          <h1>
            การรับรองคุณภาพ
          </h1>
          <p>
            &nbsp;&nbsp;&nbsp;&nbsp;ด้วยระบบการบริหารคุณภาพ ISO 9001:2000 ครอบคลุมการบริการตลอดจนทุกกระบวนการ และทุกกิจกรรมของบรัษัทฯ ซึ่งว่าด้วยมาตรฐานคุณภาพ คือ มุ่งมั่นพัฒนาคุณภาพการผลิตโดยนำเอาเทคโนโลยีการพิมพ์ที่ทันสมัยจากต่างประเทศเข้ามาพัฒนาการผลิต ซึ่งถือได้ว่าเป็นโรงพิมพ์ที่ทันสมัยแห่งหนึ่งในประเทศไทย ทั้งยังมีระบบตรวจสอบประกันคุณภาพทุกขั้นตอนของการผลิต เพื่อสนองความต้องการ และความพึงพอใจขอลูกค้า
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <img src="<?=base_url('image_new/bg/img-iso.png')?>" width="100%">
      </div>
    </div>
  </div>


  
</section>

<a href="#" class="radius scroll-top " ><i class="fa fa-angle-up" aria-hidden="true"></i></a>
<p class="open-menu-left " onclick="hideButtonmenu();"><i class="fas fa-chevron-right" aria-hidden="true"></i></a></p>
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
    $('.nav-2').addClass('nav-active');
  });

  var $mybutton = $('.scroll-top'),
  $menuleft = $('.open-menu-left'),
  $barleft = $('.menu-left'),
  $menulefta = $('.menu-left-a');

  function hideButtonmenu() {
    $menuleft.removeClass('active-open-menu-left');
    $barleft.addClass('active-menuleft');
    $menulefta.addClass('active-menu-left-a');
  }
</script>

<?php 
$this->load->view('2021_theme_1/inc/footer2/footer') 
?>


<?php 
$this->load->view('2021_theme_1/inc/footer-js') 
?>










<?php 
  // $this->load->view('2021_theme_1/index/banner')
?>
<main id="home1">
  <?php 
    // $this->load->view('2021_theme_1/index/about') 
  ?>


</main>






<!-- <script type="text/javascript">
  // This is a functions that scrolls to #{blah}link
  function goToByScroll(id) {
    // Remove "link" from the ID
    id = id.replace("link", "");
    // Scroll
    $('html,body').animate({
      scrollTop: $("#" + id).offset().top
    }, 'slow');
  }

  $("#sidebar-tab > a").click(function(e) {
    // Prevent a page reload when a link is pressed
    e.preventDefault();
    // Call the scroll function
    goToByScroll(this.id);
  });

</script> -->

<script>
  // $(function() {
  //   $('a[href*=\\#]:not([href=\\#])').on('click', function() {
  //     var target = $(this.hash);
  //     target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
  //     if (target.length) {
  //       $('html,body').animate({
  //         scrollTop: target.offset().top
  //       }, 1000);
  //       return false;
  //     }
  //   });
  // });
</script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script type="text/javascript">
  function hide(x) {
    x.style.background-color = #333;
  }
  
</script>


 <!--  <footer id="footer">
    <div class="container">
      <div class="copyright new-copyright">
        &copy; Copyright <strong><?=date('Y')?></strong> - All Rights Reserved.
      </div>
    </div>
  </footer> -->
  <!-- End Footer -->
  <!-- <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a> -->
  <!-- <div id="preloader"></div> -->
  <!-- Vendor JS Files -->
  
</body>
</html>