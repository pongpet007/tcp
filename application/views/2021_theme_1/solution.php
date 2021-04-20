<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('2021_theme_1/inc/header-meta') ?>
<?php $this->load->view('2021_theme_1/inc/css') ?>
<?/*php $this->load->view('2021_theme_1/inc/css1')*/ ?>
<body style="background-color: #f1f2f6;">

	<? $lang = $this->session->userdata('site_lang_name');?>

	<section class="section-header-solution">
		<?php $this->load->view('2021_theme_1/inc/header2/header') ?>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="top-detail">
						<h3>
							<?= lang('Solution')?>
						</h3>
						<p>
							<?= lang('Machine And modern technology')?>
						</p>

						
					</div>
				</div>
			</div>
		</div>

	</section>



	<section class="section-solution-1">
		<div class="container container-header">
			<div class="row">
				<div class="col-md-12">
					<div class="detail-1">
						<h3>
							PROCESS
						</h3>
						<p>
							<?= lang('Machine And modern technology')?>
						</p>
					</div>
				</div>
				<div class="col-md-12">
					<div class="row">

						<div class="col-md-3">
							<div class="bg-process">
								<div class="detail-process" onclick="togglevideo();">
									<h1>
										01
									</h1>
									<h3 class="solution-h3-pre">
										PREPRESS
									</h3>
									<p class="detail-process-p">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis mollis viverra. Aenean semper ac nisl in tempus. In pellentesque magna id sollicitudin scelerisque. Nunc non tempor enim, sit amet scelerisque ligula.
									</p>
								</div>
							</div>
						</div>



						<div class="col-md-3">
							<div class="bg-process">
								<div class="detail-process">							
									<p class="detail-process-p">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis mollis viverra. Aenean semper ac nisl in tempus. In pellentesque magna id sollicitudin scelerisque. Nunc non tempor enim, sit amet scelerisque ligula.
									</p>
									<h3 class="solution-h3-pre">
										PREPRESS
									</h3>
									<h1>
										02
									</h1>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="bg-process">
								<div class="detail-process">
									<h1>
										03
									</h1>
									<h3 class="solution-h3-pre">
										PREPRESS
									</h3>
									<p class="detail-process-p">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis mollis viverra. Aenean semper ac nisl in tempus. In pellentesque magna id sollicitudin scelerisque. Nunc non tempor enim, sit amet scelerisque ligula.
									</p>
								</div>
							</div>
						</div>



						<div class="col-md-3">
							<div class="bg-process">
								<div class="detail-process">							
									<p class="detail-process-p">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis mollis viverra. Aenean semper ac nisl in tempus. In pellentesque magna id sollicitudin scelerisque. Nunc non tempor enim, sit amet scelerisque ligula.
									</p>
									<h3 class="solution-h3-pre">
										PREPRESS
									</h3>
									<h1>
										04
									</h1>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="bg-process">
								<div class="detail-process">
									<h1>
										05
									</h1>
									<h3 class="solution-h3-pre">
										PREPRESS
									</h3>
									<p class="detail-process-p">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis mollis viverra. Aenean semper ac nisl in tempus. In pellentesque magna id sollicitudin scelerisque. Nunc non tempor enim, sit amet scelerisque ligula.
									</p>
								</div>
							</div>
						</div>



						<div class="col-md-3">
							<div class="bg-process">
								<div class="detail-process">							
									<p class="detail-process-p">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis mollis viverra. Aenean semper ac nisl in tempus. In pellentesque magna id sollicitudin scelerisque. Nunc non tempor enim, sit amet scelerisque ligula.
									</p>
									<h3 class="solution-h3-pre">
										PREPRESS
									</h3>
									<h1>
										06
									</h1>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="bg-process">
								<div class="detail-process">
									<h1>
										07
									</h1>
									<h3 class="solution-h3-pre">
										PREPRESS
									</h3>
									<p class="detail-process-p">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis mollis viverra. Aenean semper ac nisl in tempus. In pellentesque magna id sollicitudin scelerisque. Nunc non tempor enim, sit amet scelerisque ligula.
									</p>
								</div>
							</div>
						</div>



						<div class="col-md-3">
							<div class="bg-process">
								<div class="detail-process">							
									<p class="detail-process-p">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis mollis viverra. Aenean semper ac nisl in tempus. In pellentesque magna id sollicitudin scelerisque. Nunc non tempor enim, sit amet scelerisque ligula.
									</p>
									<h3 class="solution-h3-pre">
										PREPRESS
									</h3>
									<h1>
										08
									</h1>
								</div>
							</div>
						</div>

					</div>
					
				</div>
			</div>			
		</div>
	</section>

	<section class="section-solution-2">
		<div class="container container-header">
			<div class="row">

				<div class="col-md-12">
					<div class="detail-3">
						<h2>
							<?=lang('We have modern machines.')?>
						</h2>
						<p>
							<?=lang('Machine printing process And modern technology')?>
						</p>
					</div>					
				</div>

				<? foreach ($products as $product) { ?>

					<div class="col-md-3 col-6 space-product-solution"> 
						<div class="row">
							<div class="col-md-12 product">
								<a href="<?= base_url($lang)?>/Products/detail/1">
									<img src="<?=base_url()?>/assets_2021_theme_1/img/about.jpg" style="width: 100%">
								</a>
								<a href="<?= base_url($lang)?>/Products/detail/1">
									<div class="detail-product-short">
										<?=$product->name?>
									</div>
								</a>
							</div> 
						</div>
					</div>

				<? } ?>

				

				

				<!-- <div class="row">
					<div class="col-md-12 text-center" style="padding-top: 15px;">
						<button onclick="loadmore()" class="" style=" width:266px; background-color: #73c2fd; border-radius: 25px;border: 0px;  padding: 10px;">
							<span style="font-weight: bold;color: #fff">สินค้าเพิ่มเติม</span>
						</button>
						<input type="hidden" name="start" id="start" value="0">
					</div>
				</div>	 -->

			</div>

			<div id="product_foryou" class="row">
					
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="see-a-solution">
						<button onclick="loadmore()" class="see-more-solution">
							<?=lang('See more')?>
						</button>
						<input type="hidden" name="start" id="start" value="0">
					</div>

				</div>
			</div>
		</div>

	</section>

	<!-- <section class="section-solution-2">
		<div class="container container-header">
			<div class="row">
				<div class="col-md-12">

				</div>
			</div>
		</div>

	</section> -->

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



	<div class="watchvideo" id="watchvideo">
		<!-- <video src="<?=base_url()?>assets_2021_theme_1/video/Wiz Khalifa - See You Again.webm" controls="true"></video> -->
		<iframe width="50%" height="315" src="https://www.youtube.com/embed/J_i1XQmp0e0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen controls="true" id="YouTube"> </iframe>
		<!-- <i class="far fa-times-circle close-video" onclick="togglevideo();"></i> -->
		<span class="close" onclick="togglevideo();" id="stop-button">&times;</span>
	</div>

	<script type="text/javascript">
		$('#memberImg').ready(function(){
			$('.nav-3').addClass('nav-active');
		});

		// $('div.detail-process').click(function() {
		// 	$('.watchvideo').addClass('watchvideo active-video');
		// 	// video.pause();
		// 	// video.currentTime = 0;
		// });
		
		// function togglevideo() {
		// 	$('.watchvideo').addClass('watchvideo active-video');
		// }
		// When the user clicks on <span> (x), close the modal

		
		function loadmore() {
			var start = $('#start').val();
			start = parseInt(start) + 8;
			$.get('<?=base_url('Solution/loadmore/') ?>' + start,function(data){
				//alert(data);
				$('#product_foryou').append(data);
				$('#start').val(start);
			});

		}




		function togglevideo() {
			var watchvideo = document.querySelector(".watchvideo");
			var video = document.querySelector("video");
			var iframe = document.getElementById("#YouTube");
			watchvideo.classList.toggle("active-video");
			iframe.pauseVideo();
			iframe.stopVideo();

			iframe.currentTime = 0;
			iframe.pause();

			video.pause();
			video.currentTime = 0;
		}


		// global variable for the player
	// 	var player;

	// 	// this function gets called when API is ready to use
	// 	function onYouTubePlayerAPIReady() {
	//     // create the global player from the specific iframe (#video)
	//     player = new YT.Player('video', {
	//     	events: {
 //            // call this function when player is ready to use
 //            'onReady': onPlayerReady
 //        }
 //    });
	// }

	// $('#stop-button').ready(function(){
	// 	$('#stop-button').click(function(){
	// 		var stopButton = document.getElementById("stop-button");
	// 		stopButton.addEventListener("click", function() {
	// 			player.stopVideo();
	// 		});
	// 	});
	// });




	// function onPlayerReady(event) {

	// 	    // bind events
	// 	    var playButton = document.getElementById("play-button");
	// 	    playButton.addEventListener("click", function() {
	// 	    	player.playVideo();
	// 	    });

	// 	    var pauseButton = document.getElementById("pause-button");
	// 	    pauseButton.addEventListener("click", function() {
	// 	    	player.pauseVideo();
	// 	    });
	// 	    var stopButton = document.getElementById("stop-button");
	// 	    stopButton.addEventListener("click", function() {
	// 	    	player.stopVideo();
	// 	    });

	// 	}
	// 	// Inject YouTube API script
	// 	var tag = document.createElement('script');
	// 	tag.src = "https://www.youtube.com/player_api";
	// 	var firstScriptTag = document.getElementsByTagName('script')[0];
	// 	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

</script>




<?php 
$this->load->view('2021_theme_1/inc/footer2/footer') 
?>


<?php 
$this->load->view('2021_theme_1/inc/footer-js') 
?>

</body>
</html>