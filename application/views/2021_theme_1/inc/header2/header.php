<? $lang = $this->session->userdata('site_lang_name');?>


<header id="header2" class="">
	<div class="container container-header d-lg-block d-sm-none d-none">
		<div class="row row-header">
			<div class="col-md-6 d-md-block d-sm-none d-none">
				<div class="logo-header">
					<img src="<?=base_url()?>image_new/logo/logo-footer.png">
				</div>				
				
			</div>
			<div class="col-md-6 d-md-block d-sm-none d-none">
				<div class="contact-header">
					<div class="detail-contact">
						<div class="head-1">
							<i class="icofont-phone iconphone"></i>
						</div>				
						<div class="head-2">
							<span class="contactphone">
								<a href="tel:+668-666-555-6666">+668-666-555-6666</a>
							</span>
							<br>
							<span class="time-work">
								จ-ส 8:00-17:00 Ofiice
							</span>
						</div>
					</div>

					<div class="dropdown">
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
						
						<a class="btn btn-secondary dropdown-toggle dropdown-full" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
									<a class="dropdown-item" href="<?=base_url($uri)?>">
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
			<hr class="hr-header">
			<div class="col-md-12 d-md-block d-sm-none d-none navbar-2">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<a class="navbar-brand" href="#"></a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav">
							<!-- <li class="nav-item active">
								<a class="nav-link" href="#">หน้าหลัก <span class="sr-only">(current)</span></a>
							</li> -->
							<li class="nav-item nav-1">
								<a class="nav-link " href="<?=base_url($lang.'/Home')?>">
									<?=lang('HOME')?><span class="span-menu">T.C.P. INDUSTRY</span>
								</a>

							</li>
							<li class="nav-item nav-2">
								<a class="nav-link" href="<?=base_url($lang.'/About')?>" >
									<?=lang('know tcp')?>
									<span class="span-menu"><?=lang('aboutus')?></span>
								</a>
							</li>
							<li class="nav-item nav-3">
								<a class="nav-link" href="<?=base_url($lang.'/Solution')?>"  >
									<?=lang('Solution')?>
									<span class="span-menu"><?=lang('Our Technology')?></span>
								</a>
							</li>
							<li class="nav-item nav-4">
								<a class="nav-link" href="<?=base_url($lang.'/Products')?>" >
									<?=lang('Products and Service')?>
									<span class="span-menu"><?=lang('All Products')?></span>
								</a>
							</li>
							<li class="nav-item nav-5">
								<a class="nav-link" href="<?=base_url($lang.'/Job')?>" >
									<?=lang('Recruit')?>
									<span class="span-menu"><?=lang('Join Us')?></span>
								</a>
							</li>
							<li class="nav-item nav-6">
								<a class="nav-link" href="<?=base_url($lang.'/Blog')?>" >
									<?=lang('Blogs')?>
									<span class="span-menu"><?=lang('Knowledge from us')?></span>
								</a>
							</li>
							<li class="nav-item nav-7">
								<a class="nav-link" href="<?=base_url($lang.'/Contactus')?>" >
									<?=lang('Contact Us')?>
									<span class="span-menu"><?=lang('Ask more')?></span>
								</a>
							</li>

						</ul>
					</div>
				</nav>
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
</header>

<? 
$this->load->view('2021_theme_1/inc/header2/css.php') 
?>

<style type="text/css">

	.span-menu {
		font-size: 18px;
		display: grid;
		color: #a8afb7;
	}
	.contactphone a{
		color: #FFF;
	}
	.time-work {
		color: #798385;
	}
	.iconphone {
		color: #798385;
	}
	.navbar-brand {
		font-size: 23px;
	}
	.navbar-2 .bg-light {
		background-color: transparent !important;
		margin-top: 10px;
		/*border-top : 1px solid #4c5969;*/
	}
	.nav-1 {
		border-top : 1px solid #4c5969;
	}
	.nav-2 {
		border-top : 1px solid #4c5969;
	}
	.nav-3 {
		border-top : 1px solid #4c5969;
	}
	.nav-4 {
		border-top : 1px solid #4c5969;
	}
	.nav-5 {
		border-top : 1px solid #4c5969;
	}
	.nav-6 {
		border-top : 1px solid #4c5969;
	}
	.nav-7 {
		border-top : 1px solid #4c5969;
	}


	.hr-header {
		border-top: 1px solid #EEE; 
	}
	.navbar-expand-lg .navbar-nav .nav-link {
		padding-left: 3.5rem;
		padding-right: 3.5rem;
		font-size: 23px;
		color: #FFF;
	}
	.section-header-solution {
		background : url(<?=base_url()?>image_new/bg/solution-banner.jpg)  no-repeat center center ;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		height: 800px;
	}
	.section-header {
		background : url(<?=base_url()?>image_new/bg/about-banner.jpg)  no-repeat center center ;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		
	}
	.section-contactus {
		background : url(<?=base_url()?>image_new/bg/contactus-banner.png)  no-repeat center center ;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		height: 800px;
	}
	.row-header {
		padding-top: 15px;
	}
	.flag {
		/*max-width: 100%;*/
		/*float: none;*/
	}
	div.space-flag{
		width: 40px;
		height: 40px;
	}
	.flag img {
		/*margin-top: -30px;*/
		border-radius: 50%;
		border: 4px solid #333;
		width: 40px;
		height: 40px;
	}
	.navbar-lang .dropdown-toggle {
		border: none;
	}

	.position-header {

	}
	.contact-header {
		padding-top: 10px;
		float: right;
		display: -webkit-inline-box;
	}
	.iconphone {
		font-size: 50px;
	}
	.contactphone {
		font-size: 18px;
	}
	.time-work {
		font-size: 18px;
	}
	.navbar-lang {
		font-size: 23px;
		margin-top: 5px;

	}
	.navbar-lang .icondown {
		margin-top: 5px;
	}
	.navbar-lang .dropdown-item{
		font-size: 20px;
	}
	.navbar-light .navbar-brand {
		color: #FFF;
	}
	.navbar-light .navbar-brand:hover  {
		color: #EEE;
	}
	.navbar-expand-lg .navbar-nav .nav-link:hover {
		color: #EEE;
	}
	.nav-1 {
		/*border-right: 1px solid #6b6d82;*/
		/*background-color: #ebebeb;
		content: "";
		height: 20px;
		position: absolute;
		right: 0px;
		width: 3px;*/
		/*margin-top: 30px;*/
	}
	.nav-1 ,.nav-2 , .nav-3 ,.nav-4 ,.nav-5 , .nav-6 ,.nav-7 {
		position: relative;
	}

	
	@media (min-width: 300px) and (max-width: 767px) {

		.section-header {
			height: 450px;
		}
		.item-1::before, .item-2::before, .item-3::before, .item-4::before {
			margin-top: 10px;
		}

	}
	@media (min-width: 768px) and (max-width: 1023px) {
		.section-header {
			height: 560px;
		}
		
	}
	@media (max-width: 1279px) and (min-width: 1024px) {
		.navbar-expand-lg .navbar-nav .nav-link {
			padding-left: 2.5rem;
			padding-right: 2.5rem;
		}
	}
	@media (max-width: 1300px) and (min-width: 1280px) {
		.navbar-expand-lg .navbar-nav .nav-link {
			padding-left: 3.5rem;
			padding-right: 3.5rem;
		}
	}
	@media (max-width: 1400px) and (min-width: 1301px) {
		.navbar-expand-lg .navbar-nav .nav-link {
			padding-left: 3.5rem;
			padding-right: 3.5rem;
		}
	}
	@media (min-width: 1025px) {
		/*.navbar-expand-lg .navbar-nav .nav-link {
			padding-left: 1.8rem;
			padding-right: 1.8rem;
			}*/
			.section-header {
				height: 650px;
			}
			.nav-active {
				border-top: 5px solid #07a7ff;
				margin-top: -3px;
			}
			.nav-active {
				/*padding-top: 8px;*/
			}
			.nav-active:after {
				top: 12px;
			}
			.nav-link:hover {

			}
		}

	</style>