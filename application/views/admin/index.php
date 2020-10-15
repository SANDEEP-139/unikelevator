<div class="pcoded-content">
  <div class="pcoded-inner-content">
      <div class="main-body">
          <div class="page-wrapper">
              <div class="page-header">
                  <div class="page-header-title">
                      <h4>Dashboard</h4>
                  </div>
                  <div class="page-header-breadcrumb">
                      <ul class="breadcrumb-title">
                          <li class="breadcrumb-item">
                              <a href="index-2.html">
                                  <i class="icofont icofont-home"></i>
                              </a>
                          </li>
                          <li class="breadcrumb-item"><a href="#!">Pages</a>
                          </li>
                          <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="page-body">
                  <div class="row">
                      <!-- Visitor Chart Start-->
                      <div class="col-md-6 col-xl-4">
                          <a href="<?= base_url('Admin/Inquiry/today');?>"> 
                          <div class="card">
                              <div class="card-block-big card-visitor-block">
                                  <div class="row">
                                          <div class="col-sm-8  card-visitor-button">
                                          <button class="btn btn-primary btn-icon"><i class="icofont icofont-user-alt-3"></i></button>
                                          <div class="card-contain">
                                              <h6><?= ($leads);?></h6>
                                              <p class="text-muted f-18 m-0">Today Leads</p>
                                          </div>
                                      </div>
                                      <div class="col-sm-4 text-center">
                                          <span class="visitor-chart"></span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                           </a>
                      </div>
                      <div class="col-md-6 col-xl-4">
                          <a href="<?= base_url('Admin/Inquiry');?>"> 
                          <div class="card">
                              <div class="card-block-big card-visitor-block">
                                  <div class="row">
                                      <div class="col-sm-8 card-visitor-button">
                                          <button class="btn btn-warning btn-icon"><i class="icofont icofont-shopping-cart"></i></button>
                                          <div class="card-contain">
                                              <h6><?= ($tleads);?></h6>
                                              <p class="text-muted f-18 m-0">Total Leads</p>
                                          </div>
                                      </div>
                                      <div class="col-sm-4 text-center">
                                          <span class="sale-chart"></span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          </a>
                      </div>
                      
                      <!-- Visitor Chart End-->
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
               