@extends('layouts.admin')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="d-xl-flex justify-content-between align-items-start">
        <h2 class="text-dark font-weight-bold mb-2"> Overview dashboard </h2>
        
        <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
          <div class="btn-group bg-white p-3" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-link text-gray py-0 border-right">7 Days</button>
            <button type="button" class="btn btn-link text-dark py-0 border-right">1 Month</button>
            <button type="button" class="btn btn-link text-gray py-0">3 Month</button>
          </div>
          <div class="dropdown ms-0 ml-md-4 mt-2 mt-lg-0">
            <button class="btn bg-white dropdown-toggle p-3 d-flex align-items-center" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-calendar me-1"></i>24 Mar 2019 - 24 Mar 2019 </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
              <h6 class="dropdown-header">Settings</h6>
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
            <ul class="nav nav-tabs tab-transparent" role="tablist">
              <li class="nav-item">
                <a class="nav-link" id="home-tab" data-bs-toggle="tab" href="#" role="tab" aria-selected="true">All Data</a>
              </li>
             
            </ul>
            <div class="d-md-block d-none">
              <a href="#" class="text-light p-1"><i class="mdi mdi-view-dashboard"></i></a>
              <a href="#" class="text-light p-1"><i class="mdi mdi-dots-vertical"></i></a>
            </div>
          </div>
          <div class="tab-content tab-transparent-content">
            <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
              <div class="row">
                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <h5 class="mb-2 text-dark font-weight-normal">Total Groups</h5>
                      <h2 class="mb-4 text-dark font-weight-bold">{{ $groups }}</h2>
                      <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-lightbulb icon-md absolute-center text-dark"></i></div>
                      <p class="mt-4 mb-0">Registered</p>
                      <h3 class="mb-0 font-weight-bold mt-2 text-dark">5%</h3>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <h5 class="mb-2 text-dark font-weight-normal">Members</h5>
                      <h2 class="mb-4 text-dark font-weight-bold">{{ $members }}</h2>
                      <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i></div>
                      <p class="mt-4 mb-0">Increased since yesterday</p>
                      <h3 class="mb-0 font-weight-bold mt-2 text-dark">50%</h3>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <h5 class="mb-2 text-dark font-weight-normal">Pending Loans</h5>
                      <h2 class="mb-4 text-dark font-weight-bold">100,38</h2>
                      <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-eye icon-md absolute-center text-dark"></i></div>
                      <p class="mt-4 mb-0">Increased since yesterday</p>
                      <h3 class="mb-0 font-weight-bold mt-2 text-dark">35%</h3>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <h5 class="mb-2 text-dark font-weight-normal">Completed Loans</h5>
                      <h2 class="mb-4 text-dark font-weight-bold">4250k</h2>
                      <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-cube icon-md absolute-center text-dark"></i></div>
                      <p class="mt-4 mb-0">Decreased since yesterday</p>
                      <h3 class="mb-0 font-weight-bold mt-2 text-dark">25%</h3>
                    </div>
                  </div>
                </div>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->

    
   
    
@endsection

