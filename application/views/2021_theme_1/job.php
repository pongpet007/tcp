<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('2021_theme_1/inc/header-meta') ?>
<?php $this->load->view('2021_theme_1/inc/css') ?>
<?/*php $this->load->view('2021_theme_1/inc/css1')*/ ?>
<body style="background-color: #FFF;">

	<? $lang = $this->session->userdata('site_lang_name');?>

	<section class="section-job">
		<?php $this->load->view('2021_theme_1/inc/header2/header') ?>
		<?php $this->load->view('2021_theme_1/inc/css-solution')?>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="top-detail">
						<h3>
							<?=lang('Recruit')?>
						</h3>
						<p>
							<?=lang('come to be a part')?>
						</p>
					</div>
				</div>
			</div>
		</div>

	</section>

	<section class="section-job-2">
		<div class="container container-header">
			<div class="blog-all">
				<div class="row">

					<div class="col-md-12">
						
						<h2 class="h2-job-topic font-PSL-bold">
							<?= lang('Work with us')?>
						</h2>

						<div>

							<table class="table-join" width="100%">
								<thead>
									<tr class="head-join ">
										<td class="text-position">
											<h3>
												<?=lang('Position')?>
											</h3>
										</td>

										<td class="text-detail">
											<h3>
												<?=lang('detail')?>
											</h3>
										</td>
									</tr>


									<!-- Wait code Loop -->


									<tr class="job-detail-tr-1">
										<td class="name-job">
											<h3>ผู้จัดการโครงการ</h3>
										</td>

										<td class="detail-job">
											<h3>
												<a href="<?=base_url($lang)?>/Job/detail/1" class="job-quali">
													<?=lang('Qualification')?>
												</a>
											</h3>
										</td>
									</tr>
									<tr class="head-join ">
										<td class="text-position">
											<h3>Sale</h3>
										</td>

										<td class="detail-job">
											<h3>
												<a href="<?=base_url($lang)?>/Job/detail/1" class="job-quali">
													<?=lang('Qualification')?>
												</a>
											</h3>
										</td>
									</tr>
									<!-- End Loop -->

								</thead>
							</table>

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
		.nav-4:hover {
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
			$('.nav-5').addClass('nav-active');
		});
	</script>

<!-- 	<script type="text/javascript">
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
$this->load->view('2021_theme_1/inc/footer2/footer') 
?>


<?php 
$this->load->view('2021_theme_1/inc/footer-js') 
?>



</body>
</html>