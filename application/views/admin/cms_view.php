<div class="pcoded-content">
<div class="pcoded-inner-content">

    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <!-- Base Style table start -->
                <div class="card">
                    <div class="card-header">
                        <h5> View CMS</h5>
                        <a class="btn btn-danger waves-effect waves-light f-right d-inline-block md-trigger" href="<?= base_url('Admin/CMS/Add');?>"><span>Add CMS</span></a>
                      </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <table id="base-style" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Page Name</th>
                                        <th>Heading </th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php  if(!empty($data)){ $n = 1; 
                                   foreach ($data as $value) { 
                                       if($value['pagename'] == 1){
                                           $pagename = 'About Us';
                                       }elseif ($value['pagename'] == 2) {
                                            $pagename = 'Privacy Policy';    
                                       }elseif ($value['pagename'] == 3) {
                                              $pagename = 'Refund Policy';  
                                       }elseif ($value['pagename'] == 4) {
                                              $pagename = 'Terms & Conditions';  
                                       }elseif ($value['pagename'] == 5) {
                                              $pagename = 'Why Kundan Traders';  
                                       }
                                       ?>
                                    <tr>
                                    <td><?= $n;?></td>
                                    <td><?= $pagename;?></td>
                                    <td><?= $value['heading'];?></td>
                                    <td><?= substr($value['description'],0,50);?> ...</td>
                                    <td><img src="<?= base_url('images/'.$value['image']);?>" height="75px" width="65px"></td>
                                    <td>
                                     <div class="checkbox-fade fade-in-primary">
                                        <label>
                                            <input type="checkbox" value="" <?php if($value['status']=='Yes')echo "checked='checked'";?>>
                                            <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                          </label>
                                        </div>   
                                    </td>
                                    <td>
                                        <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                            <div class="btn-group btn-group-sm" style="float: none;">
                                                <a href="<?= base_url('Admin/CMS/cms_id?id=').$value['id'];?>" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></a>
                                                <a href="<?= base_url('Admin/CMS/cms_del?id=').$value['id'];?>" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></a>
                                              </div>
                                            </div>
                                    </td>
                                    </tr>
                                  <?php $n++; } } else{ } ?> 
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
                <!-- Base Style table end -->
            </div>
            <!-- Page-body end -->
        </div>
    </div>
</div>
</div>