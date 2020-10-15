<div class="fusion-footer">

  <footer class="fusion-footer-widget-area">

    <div class="fusion-row">

      <div class="fusion-columns fusion-columns-4 fusion-widget-area">

        <div class="fusion-column col-lg-3 col-md-3 col-sm-3">

          <div id="nav_menu-4" class="fusion-footer-widget-column widget widget_nav_menu">

            <div class="menu-main-menu-container">

              <ul id="menu-main-menu-2" class="menu">

                <ul>

                  <h4 class="footer-heading"><a href="#">Products</a> </h4>

                  <?php $n = 1;
                 $product = getftcharrayall('product', 'priority ASC', array('status'=>'Yes'),'url,heading' );
                 foreach ($product as $productval) {
                 ?>
                <li style="display: <?php   if(($n % 2) == 0)  {echo 'none';}?>"><a href="<?= base_url('Product/').$productval['url'];?>"><?= $productval['heading'];?></a></li>
                  <?php $n++; }?>
                </ul>
             

              </ul>

            </div>

            <div style="clear:both;"></div>

          </div>

        </div>

        <div class="fusion-column col-lg-3 col-md-3 col-sm-3">

          <div id="contact_info-widget-5" class="fusion-footer-widget-column widget contact_info">

           <ul id="menu-main-menu-2" class="menu">

                <ul>
                  <h4 class="footer-heading"><a href="#">Products</a> </h4>
                  <?php $n = 1;
                 $product = getftcharrayall('product', 'priority ASC', array('status'=>'Yes'),'url,heading' );
                 foreach ($product as $productval) {
                 ?>
                <li style="display: <?php   if(($n % 2) == 0)  {echo '';}else{echo 'none';}?>"><a href="<?= base_url('Product/').$productval['url'];?>"><?= $productval['heading'];?></a></li>
                  <?php $n++; }?>
                </ul>
             

              </ul>

            <div style="clear:both;"></div>

          </div>

        </div>
     

        <div class="fusion-column col-lg-3 col-md-3 col-sm-3">

          <ul>

            <h4 class="footer-heading"><a href="#">Quick Contact</a></h4>

            <li><a href="<?= base_url();?>">Home</a></li>
            <li><a href="<?= base_url('About');?>">About Us</a></li>
            <li><a href="<?= base_url('Contact');?>">Contact Us</a></li>
          </ul>

        </div>

        <div class="fusion-column col-lg-3 col-md-3 col-sm-3">

          <ul>

              <h4 class="footer-heading"><i style="background-color:transparent;border-color:transparent;height:auto;width:25px;line-height:normal;color:#ffffff;font-size:25px;" class="fa fa-map-marker"></i><a href="#">Address</a></h4>

              <li><a href="#" ><address><?= $setting['p_address'];?></address></a></li>

                  <li><a href="#"> <address>Phone: +91-<?= $setting['phoneno'];?></address></a></li>

                  <li><a href="#"><address>Email: <?= $setting['emailid'];?></address></a></li>

                  

                  </ul>

        </div>

        <div class="fusion-clearfix"></div>

      </div>

      <!-- fusion-columns --> 

    </div>

    <!-- fusion-row --> 

  </footer>

  <!-- fusion-footer-area -->

  <footer id="footer" class="fusion-footer-copyright-area">

    <div class="fusion-row">

      <div class="fusion-copyright-content">

        <div class="fusion-copyright-notice">

          <div>Copyright 2017 Kundan Traders|&nbsp;All Rights Reserved</div>

        </div>

        

      </div>

      

      <!-- fusion-fusion-copyright-area-content --> 

    </div>

    <!-- fusion-row --> 

  </footer>

  <!-- #footer --> 

</div>