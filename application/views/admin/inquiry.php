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
                        <h5>Inquiry Details</h5>
                       </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <table id="base-style" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($data)){
                                        $n = 1;
                                        foreach ($data as $value) {  ?>
                                    <tr>
                                        <td><?= $n;?> .</td>
                                        <td><?= $value['name'];?></td>
                                        <td><?= $value['phone'];?></td>
                                        <td><?= $value['email'];?></td>
                                        <td><?= $value['message'];?></td>
                                    </tr>
                                    <?php $n++; }} else{}?>
                                </tfoot>
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