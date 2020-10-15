
  <div id="sliders-container"> </div>
  <div id="main" class="clearfix width-100" style="padding-left:0px;padding-right:0px">
    <div class="fusion-row" style="max-width:100%;">
      <div id="content" class="full-width">
        <div id="post-1701" class="post-1701 page type-page status-publish hentry"> <span class="vcard" style="display: none;"><span class="fn"><a href="../author/admin/index.html" title="Posts by admin" rel="author">admin</a></span></span><span class="updated" style="display:none;">2017-05-06T10:36:22+00:00</span>
          <div class="post-content">
            <div class="fusion-fullwidth fullwidth-box fusion-fullwidth-1  fusion-parallax-none" style="border-color:#eae9e9;border-bottom-width: 0px;border-top-width: 0px;border-bottom-style: solid;border-top-style: solid;padding-bottom:20px;padding-left:0px;padding-right:0px;padding-top:16px;background-color:#e10f18;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;">
              <style type="text/css" scoped="scoped">
                .fusion-fullwidth-1 {
                padding-left: 0px !important;
                padding-right: 0px !important;
                }
                </style>
              <div class="fusion-row">
                <h1 style="text-align: center;"><span class="front"> <?= $productd['heading']?></span></h1>
                <div class="fusion-sep-clear"></div>
                <div class="fusion-separator sep-single" style="border-color:#000000;border-top-width:1px;margin-left: auto;margin-right: auto;margin-top:px;margin-bottom:40px;width:100%;max-width:170px;"></div>
                <div class="imageframe-align-center"><span class="fusion-imageframe imageframe-glow imageframe-1">
                <?php if(!empty($singleslider)){
                foreach ($singleslider as $valuess) {?>
                  <img src="<?= base_url('images/').$valuess['image'];?>" alt="Kundan Traders" class="img-responsive" style="height: 343px;border:4px solid #ffffff;-moz-box-shadow: 0 0 3px rgba(160,214,122,.3);-webkit-box-shadow: 0 0 3px rgba(160,214,122,.3);box-shadow: 0 0 3px rgba(160,214,122,.3);"/></span></div>
                <?php }}else{}?>
                 <div class="fusion-one-sixth fusion-layout-column fusion-spacing-yes" style="margin-top:0px;margin-bottom:20px;">
                  <div class="fusion-column-wrapper"></div>
                </div>
                <div class="fusion-two-third fusion-layout-column fusion-spacing-yes" style="margin-top:0px;margin-bottom:20px;">
                  <div class="fusion-column-wrapper">
                    <h3 style="text-align: center;">
                    <span style="color: #ffffff;">
                    <p><?= $productd['description']?></p>
                    </span> </div>
                </div>
                <div class="fusion-one-sixth fusion-layout-column fusion-column-last fusion-spacing-yes" style="margin-top:0px;margin-bottom:20px;">
                  <div class="fusion-column-wrapper"></div>
                </div>
                <div class="fusion-clearfix"></div>
              </div>
            </div>
            <div class="fusion-fullwidth fullwidth-box fusion-fullwidth-2  fusion-parallax-none" style="border-color:#eae9e9;border-bottom-width: 0px;border-top-width: 0px;border-bottom-style: solid;border-top-style: solid;padding-bottom:20px;padding-left:20px;padding-right:20px;padding-top:20px;background-color:#f5f5f5;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;">
              <style type="text/css" scoped="scoped">
.fusion-fullwidth-2 {
							padding-left: 20px !important;
							padding-right: 20px !important;
						}
</style>
              <div class="fusion-row"><script src="../../app.anyguide.com/assets/integration-v1.1.js"></script>
                <div id="iframe_wrapper"></div>
                
                <div class="make-appoint">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Quick Inquiry </button>
                </div>
                <h2 style="text-align: center;" data-fontsize="60" data-lineheight="60"><strong>Kundal Traders <?= $productd['heading']?> in Lucknow</strong></h2>
                <div class="fusion-sep-clear"></div>
                <div class="fusion-separator sep-single" style="border-color:#000000;border-top-width:1px;margin-left: auto;margin-right: auto;margin-top:px;margin-bottom:40px;width:100%;max-width:170px;"></div>
                <div class="row">
                <?php if(!empty($slider)){
                    foreach ($slider as $sliderval) {
                 ?>
                <div class="col-lg-4 col-md-4 col-sm-12">
                <div class=" fusion-layout-column fusion-spacing-yes" style="margin-top:10px;margin-bottom:10px;">
                  <div class="fusion-column-wrapper wrapper">
                      <div  class="parent" style="margin-bottom:10px;"><img src="<?= base_url('images/').$sliderval['image'];?>" style="height: 193px;width: 388px;">
                  </div>
                </div>
                </div>
                </div>
                <?php }}else{}?>
                </div>
                
                 <div class="fusion-clearfix"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
<script language="javascript" type="text/javascript">
                (function(){
                  window.anyroad = new AnyRoad({
                    container: "#iframe_wrapper",
                    tours: { curated_list: 'amitn_three_day_private' },
                    iframe_style: { width: '100%', background: 'transparent' },
                    referrer: { name: '30975' }
                  });
                })();
              </script>