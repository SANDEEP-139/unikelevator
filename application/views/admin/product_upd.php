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
                    <h5>Add Service Config</h5>
                    <a class="btn btn-danger waves-effect waves-light f-right d-inline-block md-trigger" href="<?= base_url('Admin/Product');?>"><span>View Service Config</span></a>
                </div>
                <div class="card-block">
                     <form method="post" action="<?php echo base_url('Admin/Product/upd?id='.$data['id']); ?>" enctype='multipart/form-data'>
                        
                         <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="title"><?= $data['title'];?></textarea>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Meta Keyword</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="metakeyword"><?= $data['metakeyword'];?></textarea>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Meta Description</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="metadescription"><?= $data['metadesc'];?></textarea>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Url</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="<?= $data['url'];?>" name="url">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Product Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="<?= $data['heading'];?>" name="headig">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-8">
                               <textarea name="desc" class="form-control jqte-test"><?= $data['description'];?></textarea>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Priority</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="<?= $data['priority'];?>" name="priority">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-3 checkbox-fade fade-in-primary">
                                <label>
                                    <input type="checkbox" value="Yes" name="status" <?php if($data['status']=='Yes')echo "checked='checked'";?>>
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