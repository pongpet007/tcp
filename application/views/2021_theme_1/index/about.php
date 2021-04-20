<section id="index-about">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-6 col-12 pl-30 pr-30" data-aos="fade-left" data-aos-delay="100">
        <div class="row">
          <div class="col-lg-12 pt-60 pb-60" id="home-bg-1" >
            <div class="row">
              <div class="col-lg-6 style1">
                <h1>พันธกิจ</h1>
                <p >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam </p>
                <button class="button btn-primary" onclick="goto_obligation()">ชมด้านใน</button>
              </div>
              <div class="col-lg-6">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-12 pl-30 pr-30" data-aos="fade-right" data-aos-delay="100">
        <div class="row">
          <div class="col-lg-12 pt-60 pb-60" id="home-bg-2" >
            <div class="row">
              <div class="col-lg-6 style1">
                <h1>วิสัยทัศน์</h1>
                <p >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam </p>
                <button class="button btn-primary" onclick="goto_vision()">ชมด้านใน</button>
              </div>
              <div class="col-lg-6">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
  function goto_obligation() {
    window.location="<?=base_url($this->session->userdata('site_lang_name').'/About#obligation')?>";
  }
  function goto_vision() {
    window.location="<?=base_url($this->session->userdata('site_lang_name').'/About#vision')?>";
  }
</script>