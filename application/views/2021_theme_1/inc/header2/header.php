<header id="header2" class="">
	<div class="container container-header">
		<div class="row row-header">
			<div class="col-md-6">
				<div class="logo-header">
					<img src="<?=base_url()?>image_new/logo/logo-footer.png">
				</div>				
				
			</div>
			<div class="col-md-6">
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
					<span class="flag">
						<img src="<?=base_url()?>image_new/flag/thailand-3.png" width="10%">
					</span>
					

					<div class="navbar-lang">
						<a href="" class="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							ภาษาไทย <i class="icofont-simple-down icondown"></i>
						</a>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							<a class="dropdown-item" href="#">ภาษาอังกฤษ</a>		
							<a class="dropdown-item" href="#">ภาษาจีน</a>								
						</div>
					</div>
				</div>
			</div>
			<hr class="hr-header">
			<div class="col-md-12 d-sm-block d-none navbar-2">
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
								<a class="nav-link " href="#">
									หน้าหลัก<span href="#" class="span-menu">T.C.P. INDUSTRY</span>
								</a>

							</li>
							<li class="nav-item nav-2">
								<a class="nav-link nav-active" href="#" >
									รู้จัก T.C.P
									<span href="#" class="span-menu">เกี่ยวกับเรา</span>
								</a>
							</li>
							<li class="nav-item nav-3">
								<a class="nav-link" href="#"  >
									โซลูชั่น
									<span href="#" class="span-menu">เทคโนโลยีของเรา</span>
								</a>
							</li>
							<li class="nav-item nav-4">
								<a class="nav-link" href="#" >
									สินค้าและบริการ
									<span href="#" class="span-menu">ผลิตภัณฑ์ทั้งหมด</span>
								</a>
							</li>
							<li class="nav-item nav-5">
								<a class="nav-link" href="#" >
									รับสมัครงาน
									<span href="#" class="span-menu">ร่วมงานกับเรา</span>
								</a>
							</li>
							<li class="nav-item nav-6">
								<a class="nav-link" href="#" >
									บทความ
									<span href="#" class="span-menu">สาระความรู้จากเรา</span>
								</a>
							</li>
							<li class="nav-item nav-7">
								<a class="nav-link" href="#" >
									ติดต่อเรา
									<span href="#" class="span-menu">สอบถามเพิ่มเติม</span>
								</a>
							</li>

						</ul>
					</div>
				</nav>
			</div>


			<!-- Header Mobile -->
			<div class="d-lg-none d-md-none d-sm-block d-block">
				

				<div class="screen">
					<div class="navbar"></div>
					<div class="list">
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
					</div>
					<div class="circle"></div>
					<div class="menu">
						<ul>
							<li><a href="">About</a></li>
							<li><a href="">Share</a></li>
							<li><a href="">Activity</a></li>
							<li><a href="">Settings</a></li>
							<li><a href="">Contact</a></li>
						</ul>
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
		border-top : 1px solid #4c5969;
	}
	.hr-header {
		border-top: 1px solid #EEE; 
	}
	.navbar-expand-lg .navbar-nav .nav-link {
		padding-left: 2.3rem;
		padding-right: 2.3rem;
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
		height: 800px;
	}
	.row-header {
		padding-top: 15px;
	}
	.flag {
		max-width: 5%;
		float: none;
	}
	.flag img {
		margin-top: -30px;
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
	
	@media (max-width: 500px) and (min-width: 300px) {

		.section-header {
			height: 450px;
		}
	}
	@media (max-width: 768px) and (min-width: 501px) {
		.section-header {
			height: 560px;
		}
		
	}
	@media (max-width: 1024px) and (min-width: 769px) {
		.navbar-expand-lg .navbar-nav .nav-link {
			padding-left: 1.8rem;
			padding-right: 1.8rem;
		}
		.section-header {
			height: 650px;
		}

	}
	@media (min-width: 1024px) {
		.nav-2 {
			border-top: 5px solid #07a7ff;
			margin-top: -12px;
		}
		.nav-active {
			padding-top: 12px;
		}
		.nav-2:after {
			top: 12px;
		}
	}
	
</style>