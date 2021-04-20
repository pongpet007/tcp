  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">

    <div class="container  d-lg-block d-sm-none d-none ">

      <div class="row">

        <div class="col-lg-3">
          <h1 class="logo">
            <a href="<?=base_url()?>">
              <img src="<?=base_url()?>image_new/logo/logo-footer.png">
            </a>
          </h1>

        </div>

        <div class="col-lg-6">
         <nav class="nav-menu ">
          <ul>
            <li class="active nav-1">
              <a href="<?=base_url()?>">
                <?=lang('HOME')?>
              </a>
            </li>
            <li class="nav-2">
              <a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/About">
                <?=lang('know tcp')?>
              </a>
            </li>
            <li class="nav-3">
              <a href="<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/">
                <?=lang('Solution')?>
              </a>
            </li>
            <li class="nav-4">
              <a href="#portfolio<?=$this->session->userdata('site_lang_name')?>/">
                <?=lang('Products and Service')?>
              </a>
            </li>
            <li class="nav-5">
              <a href="#team<?=$this->session->userdata('site_lang_name')?>/">
                <?=lang('Recruit')?>
              </a>
            </li>
            <li class="nav-6">
              <a href="#contact<?=$this->session->userdata('site_lang_name')?>/">
                <?=lang('Blogs')?>
              </a>
            </li>
            <li class="nav-7">
              <a href="#contact<?=$this->session->userdata('site_lang_name')?>/">
                <?=lang('Contact Us')?>
              </a>
            </li>

          </ul>
        </nav><!-- .nav-menu -->
      </div>


      <div class="col-lg-3" style="align-self: center; ">
       <div class="dropdown dropdonw-lang">
        <?php foreach ($countrys as $country) { ?>
          <? $uri =  uri_string(); ?>
          <? $uri = str_ireplace($this->session->userdata('site_lang_name')."/", $country->iso2."/", $uri); ?>
          <? if ($country->iso2 == $lang) { ?>
            <div class="space-flag" style="display: inline-block;">
              <span class="flag">
                <img src="<?= base_url()?>images/country_flags/<? echo $country->iso2; ?>.png" alt="kulthorn" >
              </span>
            </div>
            <?
          } 
        } 
        ?>

        <a class="btn btn-secondary dropdown-toggle dropdown-full lang-home" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php foreach ($countrys as $country) { ?>
            <? $uri =  uri_string(); ?>
            <? $uri = str_ireplace($this->session->userdata('site_lang_name')."/", $country->iso2."/", $uri); ?>
            <? if ($country->iso2 == $lang) { ?>
              <?   echo $country->short_name; ?>
              <i class="fas fa-chevron-down i-drop-menu"></i>
              <?
            } 
          } 
          ?>
        </a>

        <div class="dropdown-menu drop-lang" aria-labelledby="dropdownMenuLink">
          <?php foreach ($countrys as $country) { ?>
            <? $uri =  uri_string(); ?>
            <? $uri = str_ireplace($this->session->userdata('site_lang_name')."/", $country->iso2."/", $uri); ?>
            <? if ($country->iso2 != $lang) { ?>
              <a class="dropdown-item drop-lang" href="<?=base_url($uri)?>">
                <?   echo $country->short_name; ?>
              </a>
              <?
            } 
          } 
          ?>
        </div>

      </div>




    </div>
  </div>

</div>


<!-- Header Mobile -->
<div class="container-fluid d-lg-none d-sm-block d-block" >
  <div class="row" >

    <div class=" col-xs-12 d-lg-none d-sm-block d-block">   
      <div class="screen">
        <div class="navbar"></div>
          <!-- <div class="list">
            <div class="item">
              <div class="img"></div>
              <span></span>
              <span></span>
              <span></span>                    
            </div>
            <div class="item">
              <div class="img"></div>
              <span></span>
              <span></span>
              <span></span>                    
            </div>
            <div class="item">
              <div class="img"></div>
              <span></span>
              <span></span>
              <span></span>                    
            </div>
            <div class="item">
              <div class="img"></div>
              <span></span>
              <span></span>
              <span></span>                    
            </div>
          </div> -->
          <div class="circle"></div>
          <div class="menu">
            <div>
              <div class="logo-header-mobile" style="text-align: center;">
                <div class="circle-logo">
                  <img src="<?=base_url()?>assets_2021_theme_1//img/bg/logo.png" style="width: 100%;">
                </div>
                <h4 class="font-PSL-bold" style="color: #000; font-size: 20px;">
                  บริษัท ทีซีพี อินดั้สทรี้ จำกัด
                </h4>
                <h4 style="color: #565656; font-size: 20px;">
                  TCP
                </h4>
                <hr>
              </div>
            </div>
            <div style="background-color: #0e2046; color: #FFF; padding-left: 10px; font-size: 26px;">
              <span><?=lang('MENU')?></span>
            </div>
            <div class="menu-nav-mobile" style="">
              <i class="fas fa-chevron-right icon-next-mobile"></i>
              <a href="<?=base_url($lang.'/Home')?>" style="color: #333;">
                <?=lang('HOME')?><span class="span-menu-mobile">T.C.P. INDUSTRY</span>
              </a>
            </div>
            <div class="menu-nav-mobile">
              <i class="fas fa-chevron-right icon-next-mobile"></i>
              <a href="<?=base_url($lang.'/About')?>" style="color: #333;">
                <?=lang('know tcp')?>
                <span class="span-menu-mobile"><?=lang('aboutus')?></span>
              </a>
            </div>
            <div class="menu-nav-mobile">
              <i class="fas fa-chevron-right icon-next-mobile"></i>
              <a href="<?=base_url($lang.'/Solution')?>" style="color: #333;">
                <?=lang('Solution')?>
                <span class="span-menu-mobile"><?=lang('Our Technology')?></span>
              </a>
            </div>
            <div class="menu-nav-mobile">
              <i class="fas fa-chevron-right icon-next-mobile"></i>
              <a href="<?=base_url($lang.'/Products')?>" style="color: #333;">
                <?=lang('Products and Service')?>
                <span class="span-menu-mobile"><?=lang('All Products')?></span>
              </a>
            </div>
            <div class="menu-nav-mobile">
              <i class="fas fa-chevron-right icon-next-mobile"></i>
              <a href="<?=base_url($lang.'/Job')?>" style="color: #333;">
                <?=lang('Recruit')?>
                <span class="span-menu-mobile"><?=lang('Join Us')?></span>
              </a>
            </div>
            <div class="menu-nav-mobile">
              <i class="fas fa-chevron-right icon-next-mobile"></i>
              <a href="<?=base_url($lang.'/Blog')?>" style="color: #333;">
                <?=lang('Blogs')?>
                <span class="span-menu-mobile"><?=lang('Knowledge from us')?></span>
              </a>
            </div>
            <div class="menu-nav-mobile">
              <i class="fas fa-chevron-right icon-next-mobile"></i>
              <a href="<?=base_url($lang.'/Contactus')?>" style="color: #333;">
                <?=lang('Contact Us')?>
                <span class="span-menu-mobile"><?=lang('Ask more')?></span>
              </a>
            </div>
            <div class="menu-nav-mobile">
              <div class="lang-mobile" style="text-align: center;">
                <?php foreach ($countrys as $country) { ?>
                  <? $uri =  uri_string(); ?>
                  <? $uri = str_ireplace($this->session->userdata('site_lang_name')."/", $country->iso2."/", $uri); ?>
                  <a class="text-reset" style="color: #000;" href="<?=base_url($uri)?>">
                    <img src="<?= base_url()?>images/country_flags/<? echo $country->iso2; ?>.png" alt="kulthorn" class="img-flag" style="margin-top: -5px;">
                    <?= $country->iso2?>
                  </a>
                <?php } ?>

                <!-- <a class="text-reset" href="#" style="color: #333;">
                  <img src="<?=base_url()?>images/country_flags/TH.png" class="flag-mobile">
                  TH
                </a>
                <a class="text-reset" href="#" style="color: #333;">
                  <img src="<?=base_url()?>images/country_flags/US.png" class="flag-mobile">
                  US
                </a> -->
              </div>
            </div>

          </div>                  
          <div class="burger">
            <div class="x"></div>
            <div class="y"></div>
            <div class="z"></div>
          </div>    
        </div>  
      </div>
    </div>
  </div>
  <!-- End Header Mobile -->













</header><!-- End Header -->