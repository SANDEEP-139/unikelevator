<div class="pcoded-content">
<div class="pcoded-inner-content">
<!-- Main-body start -->
<div class="main-body">
<div class="page-wrapper">
<!-- Page body start -->
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <!-- Basic Form Inputs card start -->
            <div class="card">
                <div class="card-header">
                    <h5>Update Page Setting</h5>
                </div>
                <div class="card-block">
                     <form method="post" action="<?php echo base_url('Admin/Settings/setting_upd'); ?>" enctype='multipart/form-data'>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-4">
                                <input type="text" name="name" value="<?= $data['name'];?>" class="form-control">
                            </div>
                            <label class="col-sm-2 col-form-label">company Name</label>
                            <div class="col-sm-4">
                                <input type="text" name="cname" value="<?= $data['cname'];?>" class="form-control">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Phone No.</label>
                            <div class="col-sm-4">
                                <input type="text" name="phoneno" value="<?= $data['phoneno'];?>" class="form-control">
                            </div>
                            <label class="col-sm-2 col-form-label">Whatsapp No</label>
                            <div class="col-sm-4">
                                <input type="text" name="whatsapp" value="<?= $data['whatsapp'];?>" class="form-control">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email Id1</label>
                            <div class="col-sm-4">
                                <input type="text" name="emailid1" value="<?= $data['emailid'];?>" class="form-control">
                            </div>
                            <label class="col-sm-2 col-form-label">Email Id2</label>
                            <div class="col-sm-4">
                                <input type="text" name="emailid2" value="<?= $data['semailid'];?>" class="form-control">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Permanent Address</label>
                            <div class="col-sm-4">
                                <textarea name="p_address" class="form-control"><?= $data['p_address'];?></textarea>
                            </div>
                            <label class="col-sm-2 col-form-label">Office Address</label>
                            <div class="col-sm-4">
                                <textarea name="o_address" class="form-control"><?= $data['o_address'];?></textarea>
                            </div>
                        </div>
                         
                         
                         <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Google Link</label>
                            <div class="col-sm-4">
                                <textarea name="rsslink" class="form-control"><?= $data['rss_link'];?></textarea>
                            </div>
                            <label class="col-sm-2 col-form-label">Fb Link</label>
                            <div class="col-sm-4">
                                <textarea name="fblink" class="form-control"><?= $data['fb_link'];?></textarea>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Twitter Link</label>
                            <div class="col-sm-4">
                                <textarea name="twitter" class="form-control"><?= $data['twitter_link'];?></textarea>
                            </div>
                            <label class="col-sm-2 col-form-label">Linkedin Link</label>
                            <div class="col-sm-4">
                                <textarea name="linkedin" class="form-control"><?= $data['linkedin_link'];?></textarea>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Logo</label>
                            <div class="col-sm-4">
                                <input type="file" name="image" class="form-control">
                                <img src="<?= base_url('images/'.$data['logo']);?>" height="75px" width="65px">
                            </div>
                           <label class="col-sm-2 col-form-label">Office Time</label>
                            <div class="col-sm-4">
                                <input type="text" name="ofiicetime" value="<?= $data['ofiicetime'];?>" class="form-control">
                            </div>
                        </div>
                         <div class="form-group row">
                           <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-3 checkbox-fade fade-in-primary">
                                <label>
                                    <input type="checkbox" value="Yes" name="status" checked="checked">
                                    <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                  </label>
                                </div>
                           <label class="col-sm-2 col-form-label"></label>
                               <div class="col-sm-4">
                                   <input type="submit" name="submit" value="Update" class="btn btn-primary">
                                   <input type="reset" name="reset" value="Reset" class="btn btn-danger">
                                </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Basic Form Inputs card end -->
        </div>
    </div>
</div>
<!-- Page body end -->
</div>
</div>
</div>
</div>