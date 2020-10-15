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
                                    <h5>Slider Add</h5>
                                    <a class="btn btn-danger waves-effect waves-light f-right d-inline-block md-trigger" href="<?= base_url('Admin/Mstslider');?>"><span>Slider View</span></a>
                                  </div>
                                <div class="card-block">
                                      <form method="post" action="<?php echo base_url('Admin/Mstslider/slidersave'); ?>" enctype='multipart/form-data'>
                                         <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Image</label>
                                            <div class="col-sm-4">
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                            <label class="col-sm-2 col-form-label">Priority</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="priority" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-3 checkbox-fade fade-in-primary">
                                                <label>
                                                    <input type="checkbox" name="status" value="Yes" checked="checked">
                                                    <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                  </label>
                                                </div>
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