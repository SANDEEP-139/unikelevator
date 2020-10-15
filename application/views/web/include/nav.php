<body class="home page-template page-template-100-width page-template-100-width-php page page-id-7 fusion-body no-tablet-sticky-header no-mobile-sticky-header no-mobile-slidingbar no-mobile-totop mobile-logo-pos-left layout-wide-mode mobile-menu-design-modern" data-spy="scroll">
<div id="wrapper" class="">
<div id="home" style="position:relative;top:1px;"></div>
<div class="fusion-header-wrapper">
<div class="fusion-header-v1 fusion-logo-left fusion-sticky-menu-1 fusion-sticky-logo- fusion-mobile-logo- fusion-mobile-menu-design-modern">
 <div class="fusion-header-sticky-height"></div>
    <div class="fusion-header">
      <div class="fusion-row">
          <div class="fusion-logo" data-margin-top="11px" data-margin-bottom="31px" data-margin-left="0px" data-margin-right="0px"> <a href="<?= base_url();?>"> <img src="<?= base_url('images/').$setting['logo'];?>" alt="#" class="fusion-logo-1x fusion-standard-logo" width="251" height="81"> 

          </a> </div>

            <div class="contact-us">
                <a href="tel:+91 <?= $setting['phoneno'];?>"><i class="fa fa-phone" aria-hidden="true"></i> : +91 <?= $setting['phoneno'];?></a></div>

        <div class="fusion-main-menu">

          <ul id="menu-main-menu" class="fusion-menu">

              <li  id="menu-item-832"  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-832"  ><a href="<?= base_url();?>">HOME</a></li>

            <li  id="menu-item-898"  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-898 fusion-dropdown-menu"  >

            

         <a href="#">PRODUCTS<span class="caret"></span></a>   

              <ul class="sub-menu">

                <li  id="menu-item-1741"  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1741 fusion-dropdown-submenu"  >

                 <?php
                 $product = getftcharrayall('product', 'priority ASC', array('status'=>'Yes'),'url,heading' );
                 foreach ($product as $productval) {
                 ?>
                  <li><a href="<?= base_url('Product/').$productval['url'];?>"><?= $productval['heading'];?></a></li>
                  <?php }?>
              </ul>
            </li>
            <li  id="menu-item-1344"  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1344 fusion-dropdown-menu"  ><a href="<?= base_url('about-us');?>">ABOUT US</a>
            </li>
            <li  id="menu-item-1818"  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1818"  ><a href="<?= base_url('Contact');?>">CONTACT</a></li>
          </ul>
        </div>
      </div>

    </div>

  </div>

</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">

    <div class="modal-content" id="popup-section-header">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      </div>

      <div class="modal-body">

        <div class="login-agileits-top call-back-form">

          <form action="#" method="post">

            <p>Name </p>

            <input type="text" class="name" name="Name" required="">

            <p>Mobile</p>

            <input type="text" class="name" name="Mobile" required="">

          </form>

        </div>

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-primary">Submit</button>

      </div>

    </div>

  </div>

</div>
