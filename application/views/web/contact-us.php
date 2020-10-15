
  <div id="sliders-container"> </div>
  <div id="main" class="clearfix width-100" style="padding-left:0px;padding-right:0px">
    <div class="fusion-row" style="max-width:100%;">
      <div id="content" class="full-width">
        <div id="post-1701" class="post-1701 page type-page status-publish hentry"> <span class="vcard" style="display: none;"><span class="fn"><a href="../author/admin/index.html" title="Posts by admin" rel="author">admin</a></span></span><span class="updated" style="display:none;">2017-05-06T10:36:22+00:00</span>
          <div class="post-content">
            <div class="fusion-fullwidth fullwidth-box fusion-fullwidth-1  fusion-parallax-none" style="border-color:#eae9e9;border-bottom-width: 0px;border-top-width: 0px;border-bottom-style: solid;border-top-style: solid;margin-bottom:50px;padding-left:0px;padding-right:0px;padding-top:16px;background-color:#c8e1f4;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;">
              <div class="fusion-row">
                <h1 style="text-align: center;"><span style="color: #4b88c1;">Contact us </span></h1>
                <div class="fusion-sep-clear"></div>
                <div class="fusion-separator sep-single" style="border-top-width:1px;margin-left: auto;margin-right: auto;margin-top:px;margin-bottom:40px;width:100%;max-width:170px;"></div>
                <div class="imageframe-align-center"><span class="fusion-imageframe imageframe-glow imageframe-1"> </span></div>
                <div class="fusion-one-sixth fusion-layout-column fusion-spacing-yes" style="margin-top:0px;margin-bottom:20px;">
                  <div class="fusion-column-wrapper"></div>
                </div>
                <div class="fusion-one-sixth fusion-layout-column fusion-column-last fusion-spacing-yes" style="margin-top:0px;margin-bottom:20px;">
                  <div class="fusion-column-wrapper"></div>
                </div>
                <div class="fusion-clearfix"></div>
              </div>
            </div>
            <div class="make-appoint">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Quick Inquiry </button>
            </div>
            <div class="container">
              <div class="heading " style="margin-bottom:45px;">
                
              </div>
              
              <div class="row">
  <div class="container">
  
  <div class="col-md-5">
  
  <div class="contact-block white-bg trending-list">
              <div class="main-heading">
                <h3 style="margin:0px;">Contact Information</h3>
              </div>
              <ul class="address">
                <li><i class="fa fa-map-marker"></i><?= $setting['p_address'];?></li>
                <li><a href="tel:+91<?= $setting['phoneno'];?>"><i class="fa fa-phone"></i>+91 <?= $setting['phoneno'];?></a> </li>
                <li><a href="mailto:<?= $setting['emailid'];?>"><i class="fa fa-envelope"></i><?= $setting['emailid'];?></a> </li>
                
              </ul>
              <ul class="social">
                <li><a href="<?= $setting['fb_link'];?>"><i class="fa fa-facebook"></i> </a> </li>
                <li><a href="<?= $setting['twitter_link'];?>"><i class="fa fa-twitter"></i> </a> </li>
                <li><a href="<?= $setting['rss_link'];?>"><i class="fa fa-rss"></i> </a> </li>
                <li><a href="<?= $setting['linkedin_link'];?>"><i class="fa fa-linkedin"></i> </a> </li>
              </ul>
            </div>
  
  </div>
  
  
  <div class="col-md-7">
  <div class="contact-block white-bg input-form-section">
      <form id="contact-form" method="post" action="<?= base_url('Email/contact');?>">
              <div class="form-group col-sm-6 padding-right">
                  <input type="text" class="form-control" onkeyup="this.value = this.value.replace(/[^a-zA-Z\s]+$/g,'');" maxlength="100" name="name" id="name" required placeholder="Name">
              </div>
              <div class="form-group col-sm-6 padding-left">
                <input type="email" class="form-control" name="mail" id="mail" required placeholder="Email">
              </div>
              <div class="form-group col-sm-12 padding-left">
                  <input type="text" class="form-control" onkeyup="this.value = this.value.replace(/[^0-9\.]/g,'');" maxlength="10" name="phone" id="mail" required placeholder="Phone">
              </div>
              <div class="form-group col-sm-12 no-padding">
                  <input type="text" class="form-control" onkeyup="this.value = this.value.replace(/[^a-zA-Z\s]+$/g,'');" maxlength="100" name="subject" id="website" placeholder="Subject">
              </div>
              <div class="form-group col-sm-12 no-padding">
                  <textarea class="form-control" onkeyup="this.value = this.value.replace(/[^A-Za-z0-9//,.\/\s]/g,'');" maxlength="255" name="comment" id="comment" placeholder="Message"></textarea>
              </div>
              <div class="col-sm-12 button no-padding">
               <input id="submit_contact" class="btn btn-danger" name="submit" value="Send Message" style="padding: 10px;" type="submit">
                <div id="msg" class="message"></div>
              </div>
            </form>
  </div>
  </div>
  
  </div>
  </div>
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- fusion-row --> 
  </div>
  <!-- #main --> 
  
  <!-- fusion-footer --> 
</div>
<!-- wrapper -->
