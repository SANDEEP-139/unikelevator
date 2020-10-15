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
                        <h5>Service Config Details</h5>
                        <a class="btn btn-danger waves-effect waves-light f-right d-inline-block md-trigger" href="<?= base_url('Admin/Product/Add');?>"><span>Add Service Config</span></a>
                      </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <table id="base-style" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Product Name</th>
                                        <th>Url</th>
                                        <th>Slider</th>
                                        <th>Priority</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if(!empty($data)){
                                        $n = 1;
                                        foreach ($data as $value) {
                                            if($value['status'] == 'Yes'){
                                                $status = "<p style='color:green;'>Active</p>";
                                            }else{
                                                $status = "<p style='color:red;'>Inactive</p>";
                                            }
                                    ?>
                                    <tr>
                                        <td><?= $n;?></td>
                                        <td><?= $value['heading'];?></td>
                                        <td><?= $value['url'];?></td>
                                        <td>
                                           <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                            <div class="btn-group btn-group-sm" style="float: none;">
                                                 <a target="_blank" href="<?= base_url('Admin/Slider?sid='.$value['id']);?>" class="tabledit-edit-button btn btn-primary  waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></a>
                                                </div>
                                            </div> 
                                        </td>
                                        <td><?= $value['priority'];?></td>
                                        <td><?= $status;?></td>
                                        <td>
                                            <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                            <div class="btn-group btn-group-sm" style="float: none;">
                                                <a href="<?= base_url('Admin/Product/product_id?id='.$value['id']);?>" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></a>
                                                <a href="<?= base_url('Admin/Product/product_del?id='.$value['id']);?>" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></a>
                                              </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $n++; }} else{}?>
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