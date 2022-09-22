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
                <li class="breadcrumb-item active" aria-current="page"> Edit Post {{ $post->title }}</li>
              </ol>
            </nav>
          </div>
          <div class="ms-auto">
           
          </div>
        </div>
        <!--end breadcrumb-->
        <div class="container">
          <div class="row">
            <div class="col-8">
            <div class="card">
                <div class="card-body">
                  <div class="border p-3 rounded">
                  <h6 class="mb-0 text-uppercase">Edit post id {{ $post->id}}</h6>
                  <hr>
                  <form class="row g-3" method="post" action="{{route('admin.post.update', $post->id)}}">
                    @csrf
                    @method('patch')
                    <div class="col-12">
                      <label class="form-label">Name of post</label>
                      <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                    </div>
                    @error('title')
                    {{ $message }}
                    @enderror
                    <div class="col-12">
                      <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </div>
                  </form>
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