<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="logo-popup"><a href="#"><img src="<?= base_url('images/').$setting['logo'];?>"></a></div>
      </div>
      <div class="modal-body">
          <form method="post" method="post" action="<?= base_url('Email/emailsend');?>">
          <div class="form-group">
              <input type="text" placeorder="Name" name="name" class="form-control" onkeyup="this.value = this.value.replace(/[^a-zA-Z\s]+$/g,'');" maxlength="100" placeholder="Name" required="">
          </div>
          <div class="form-group">
              <input type="text" class="form-control" name="phone" onkeyup="this.value = this.value.replace(/[^0-9\.]/g,'');" maxlength="10" placeholder="Phone" required="">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email"  placeholder="Eamil Id">
          </div>
          <select class="form-control" id="recipient-name" name="type">
              <option selected="selected" disabled="">---Please Select---</option>
            <?php
            $product = getftcharrayall('product', 'priority ASC', array('status'=>'Yes'),'url,heading' );
            foreach ($product as $productval) {  ?>
          <option value="<?= $productval['heading'];?>"><?= $productval['heading'];?></option>
            <?php }?>
            </select>
          <div style="margin-bottom:20px;"></div>
          <div class="form-group">
              <textarea class="form-control address" onkeyup="this.value = this.value.replace(/[^A-Za-z0-9//,.\/\s]/g,'');" maxlength="155"  placeholder="Message" name="message"></textarea>
          </div>
                <div style="margin-bottom:20px;"></div>
          
            <div class="modal-footer">
        <button type="button" class="btn btn-default" id="recipient-name" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="submit" style="background:#64aa3c; border:none;" value="Send message" id="recipient-name" >
      </div>
        </form>
      </div>
    
    </div>
  </div>
</div>