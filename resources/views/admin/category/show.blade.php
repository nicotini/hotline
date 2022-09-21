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
                <li class="breadcrumb-item active" aria-current="page">Categories</li>
              </ol>
            </nav>
          </div>
          <div class="ms-auto">
           
          </div>
        </div>
        <!--end breadcrumb-->
        <div class="container">
          <div class="row">
            <h2 class="mb-4">Categories</h2>
            
          <div class="card">
            <div class="card-body">
              <table class="table mb-0 table-hover">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name of category</th>
                    
                    <th scope="col">Edit category</th>
                    <th scope="col">Delete category</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->title}}</td>
                  
                    <td>
                        <div class="font-22">	
                          <a href="">
                            <i class="lni lni-pencil"></i>
                          </a>
                        </div>
                    </td>
                    <td>
                      <div class="font-22">	
                        <a href="">
                          <i class="lni lni-trash"></i>
                        </a>
                      </div>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
              <div class="col">
                  <a href="{{route('admin.category.index')}}" type="button" class="btn btn-primary px-5">Return to all categories</a>
                </div>
          </div>
        </div>
        
      </div>
      <!-- end page content-->
    </div>
    <!--end page content wrapper-->
    @endsection