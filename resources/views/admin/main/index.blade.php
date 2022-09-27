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
                  <a href="{{ route('admin.user.index')}}"><i class="bi bi-people-fill"></i></a>
                </div>
                <div class="text-center mt-3">
                  <h3 class="text-dark mb-1">Users</h3>
                  <p class="text-muted mb-4">{{ $data['usersCount'] }}</p>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="mx-auto widget-icon bg-light-dark text-dark">
                <a href="{{ route('admin.user.index')}}"><i class="lni lni-folder"></i></a>
                </div>
                <div class="text-center mt-3">
                  <h3 class="text-dark mb-1">Categories</h3>
                  <p class="text-muted mb-4">{{ $data['categoriesCount'] }}</p>
                 
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="mx-auto widget-icon bg-light-dark text-dark">
                <a href="{{ route('admin.user.index')}}"><i class="lni lni-files"></i></a>
                </div>
                <div class="text-center mt-3">
                  <h3 class="text-dark mb-1">Posts</h3>
                  <p class="text-muted mb-4">{{ $data['postsCount'] }}</p>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="mx-auto widget-icon bg-light-dark text-dark">
                <a href="{{ route('admin.user.index')}}"><i class="lni lni-tag"></i></a>
                </div>
                <div class="text-center mt-3">
                  <h3 class="text-dark mb-1">Tags</h3>
                  <p class="text-muted mb-4">{{ $data['tagsCount'] }}</p>
                  
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
                  <h3 class="text-dark mb-1">Comments</h3>
                  <p class="text-muted mb-4"></p>
                  
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