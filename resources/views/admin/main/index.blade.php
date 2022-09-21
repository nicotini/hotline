@extends('admin.layouts.main')
@section('content')
<!-- start page content wrapper-->
<div class="page-content-wrapper">
      <!-- start page content-->
      <div class="page-content">

        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Dashboard</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;">
                    <ion-icon name="home-outline"></ion-icon>
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">eCommerce</li>
              </ol>
            </nav>
          </div>
          <div class="ms-auto">
           
          </div>
        </div>
        <!--end breadcrumb-->
        <div class="container">
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-5">
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="mx-auto widget-icon bg-light-dark text-dark">
                  <i class="bi bi-basket2-fill"></i>
                </div>
                <div class="text-center mt-3">
                  <h3 class="text-dark mb-1">4.6K</h3>
                  <p class="text-muted mb-4">Total Orders</p>
                  <p class="text-dark mb-0 font-13"><i class="bi bi-arrow-up"></i><span>45.5%</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="mx-auto widget-icon bg-light-dark text-dark">
                  <i class="bi bi-wallet-fill"></i>
                </div>
                <div class="text-center mt-3">
                  <h3 class="text-dark mb-1">$25M</h3>
                  <p class="text-muted mb-4">Total Income</p>
                  <p class="text-dark mb-0 font-13"><i class="bi bi-arrow-up"></i><span>24.5%</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="mx-auto widget-icon bg-light-dark text-dark">
                  <i class="bi bi-people-fill"></i>
                </div>
                <div class="text-center mt-3">
                  <h3 class="text-dark mb-1">5.6K</h3>
                  <p class="text-muted mb-4">Total Visitors</p>
                  <p class="text-dark mb-0 font-13"><i class="bi bi-arrow-down"></i><span>15.8%</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="mx-auto widget-icon bg-light-dark text-dark">
                  <i class="bi bi-chat-text-fill"></i>
                </div>
                <div class="text-center mt-3">
                  <h3 class="text-dark mb-1">752</h3>
                  <p class="text-muted mb-4">Total Comments</p>
                  <p class="text-dark mb-0 font-13"><i class="bi bi-arrow-up"></i><span>35.2%</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="mx-auto widget-icon bg-light-dark text-dark">
                  <i class="bi bi-bar-chart-fill"></i>
                </div>
                <div class="text-center mt-3">
                  <h3 class="text-dark mb-1">42.8%</h3>
                  <p class="text-muted mb-4">Bounce Rate</p>
                  <p class="text-dark mb-0 font-13"><i class="bi bi-arrow-down"></i><span>28.5%</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
      <!-- end page content-->
    </div>
    <!--end page content wrapper-->
    @endsection