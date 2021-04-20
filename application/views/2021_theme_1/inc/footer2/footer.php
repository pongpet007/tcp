<footer>

	<div class="container" style="max-width: 1140px;">
		<div class="row">

			<div class="col-lg-4 col-sm-4 col-12">
				<img src="<?=base_url()?>image_new/logo/logo-footer.png" width="100%">
				<div class="contact-social">
					<p>
						<?=lang('detail-company-footer')?>
					</p>

					<a href="#">
						<i class="icofont-facebook"></i>
					</a>
					<a href="#">
						<i class="icofont-twitter"></i>
					</a>
					<a href="#">
						<i class="icofont-instagram"></i>
					</a>
					<a href="#">
						<i class="fab fa-line"></i>
					</a>
					<a href="#">
						<i class="far fa-envelope"></i>
					</a>
				</div>
				
			</div>

			<div class="col-lg-2 col-sm-2 col-6">
				<div class="menu-footer">										
					<div style="margin-bottom: 10px; color: #FFF;">
						<?=lang('MENU')?>
					</div>
					<div>
						<i class="icofont-curved-right"></i>
						<a href="<?=base_url($this->session->userdata('site_lang_name').'/Home')?>">
							<?=lang('HOME')?>
						</a>
					</div>
					<div>
						<i class="icofont-curved-right"></i>
						<a href="<?=base_url($this->session->userdata('site_lang_name').'/About')?>">
							<?=lang('know tcp')?>
						</a>
					</div>
					<div>
						<i class="icofont-curved-right"></i>
						<a href="<?=base_url($this->session->userdata('site_lang_name').'/Solution')?>">
							<?=lang('Solution')?>
						</a>
					</div>
					<div>
						<i class="icofont-curved-right"></i>
						<a href="<?=base_url($this->session->userdata('site_lang_name').'/Products')?>">
							<?=lang('Products and Service')?>
						</a>
					</div>
					<div>
						<i class="icofont-curved-right"></i>
						<a href="<?=base_url($this->session->userdata('site_lang_name').'/Job')?>">
							<?=lang('Recruit')?>
						</a>
					</div>
					<div>
						<i class="icofont-curved-right"></i>
						<a href="<?=base_url($this->session->userdata('site_lang_name').'/Blog')?>">
							<?=lang('BLOG')?>
						</a>
					</div>
					<div>
						<i class="icofont-curved-right"></i>
						<a href="<?=base_url($this->session->userdata('site_lang_name').'/Contactus')?>">
							<?=lang('Contact Us')?>
						</a>
					</div>

					
					
				</div>
			</div>

			<div class="col-lg-2 col-sm-2 col-6">
				<div class="menu-about">
					<div style="margin-bottom: 10px; color: #FFF;">
						<?=lang('know tcp')?>
					</div>
					<div>
						<i class="icofont-curved-right"></i>
						<a href="<?=base_url($this->session->userdata('site_lang_name').'/About#vision')?>">
							<?=lang('vision')?>
						</a>
					</div>
					<div>
						<i class="icofont-curved-right"></i>
						<a href="<?=base_url($this->session->userdata('site_lang_name').'/About#obligation')?>">
							<?=lang('obligation')?>
						</a>
					</div>
					<div>
						<i class="icofont-curved-right"></i>
						<a href="<?=base_url($this->session->userdata('site_lang_name').'/About#history')?>">
							<?=lang('history')?>
						</a>
					</div>
					<div>
						<i class="icofont-curved-right"></i>
						<a href="<?=base_url($this->session->userdata('site_lang_name').'/About#board')?>">
							<?=lang('board')?>
						</a>
					</div>
					<div>
						<i class="icofont-curved-right"></i>
						<a href="<?=base_url($this->session->userdata('site_lang_name').'/About#iso')?>">
							<?=lang('Certification')?>
						</a>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-sm-4 col-12">

				<div class="row">

					<div class="col-md-12 col-sm-12 col-6">
						<div class="contact-footer">
							<h2>
								<?=lang('Contact Us')?>
							</h2>
							<p style="font-size: 20px;">
								82, 84 <?=lang('Soi Pracha Uthit 69')?> <?=lang('Thung Khru')?> <?=lang('District Thung Khru')?> <?=lang('BANGKOK')?> 10140
							</p>		
						</div>
					</div>

					<div class="col-md-12 col-sm-12 col-6">
						<div class="contact-footer">
							<h4 style="margin-bottom: -5px; font-size: 20px;">
								<?=lang('tel')?>
							</h4>
							<div class="phone-call">
								<a href="tel:+662-426-1567-70">+662-426-1567-70</a>
								<a href="tel:+668-7929-8998">+668-7929-8998</a>	
								<a href="tel:+668-6978-7447">+668-6978-7447</a>
								<a href="tel:+668-1821-2481">+668-1821-2481</a>
							</div>		
						</div>
					</div>

					<div class="col-md-12 col-sm-12 col-12">
						<div class="contact-footer">

							<h2 style="padding-top: 5px; margin-bottom: -5px;">
								<?=lang('More websites')?>
							</h2>
							<span >
								<a href="http://tcpindustry.brandexdirectory.com" style="color: #FFF; font-size: 23px;">tcpindustry.brandexdirectory.com</a>
							</span>

						</div>
					</div>

				</div>
			</div>

			


			


		</div>
	</div>

</footer>

<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-12">
			<copyright >
				<div style="text-align: center; padding: 20px 0; color: #9b9c9e; font-size: 20px;">
					COPYRIGHT <? echo date('Y')?> T.C.P. INDUSTRY  CO.,LTD. ALL  RIGHT RESERVED. LEGAL & PRIVACY.
				</div>

			</copyright>
		</div>
	</div>
</div>

<?
$this->load->view('2021_theme_1/inc/footer2/css')
?>