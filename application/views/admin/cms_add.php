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
                    <h5>Add CMS</h5>
                    <a class="btn btn-danger waves-effect waves-light f-right d-inline-block md-trigger" href="<?= base_url('Admin/CMS');?>"><span>View CMS</span></a>
                </div>
                <div class="card-block">
                    <form method="post" action="<?php echo base_url('Admin/CMS/cmssave'); ?>" enctype='multipart/form-data'>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Page Name</label>
                            <div class="col-sm-8">
                              <select name="pagename" class="form-control">
                                  <option value="0" disabled="disabled" selected="">--Select Page Name--</option>
                                  <option value="1" >About Us</option>
                                  <option value="2">Privacy Policy</option>
                                  <option value="3">Refund Policy</option>
                                  <option value="4">Terms & Conditions</option>
                                  <option value="5">Why Kundan Traders</option>
                                  </select>  
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-8">
                                <textarea name="title" class="form-control"></textarea>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Meta Keyword</label>
                            <div class="col-sm-8">
                                <textarea name="m_keyword" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Meta Description</label>
                            <div class="col-sm-8">
                                <textarea name="m_desc" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Heading</label>
                            <div class="col-sm-8">
                                <textarea name="heading" class="form-control"></textarea>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-8">
                                <textarea name="desc" class="form-control jqte-test" name="description"></textarea>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-4">
                                <input type="file" name="image" class="form-control">
                            </div>
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-3 checkbox-fade fade-in-primary">
                            <label>
                                <input type="checkbox" value="Yes" name="status" checked="checked">
                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                              </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                               <div class="col-sm-4">
                                   <input type="submit" name="submit" value="Submit" class="btn btn-primary">
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