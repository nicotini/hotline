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
                <li class="breadcrumb-item active" aria-current="page"> Create Post</li>
              </ol>
            </nav>
          </div>
          <div class="ms-auto">
           
          </div>
        </div>
        <!--end breadcrumb-->
        <div class="container">
          <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <div class="border p-3 rounded">
                  <h6 class="mb-0 text-uppercase">Create post</h6>
                  <hr>
                  <form class="row g-3" method="post" action="{{route('admin.post.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                      <label class="form-label">Name of post</label>
                      <input type="text" class="form-control" name="title">
                    </div>
                    @error('title')
                    {{ $message }}
                    @enderror
                    <div class="col-12">
                      <label class="form-label">Content</label>
                      <textarea id="summernote" name="content" type="text" class="form-control" name="title"></textarea>
                    </div>
                    @error('content')
                    {{ $message }}
                    @enderror
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Preview</label>
                      <input class="form-control" name="preview_image" type="file" id="formFile">
                    </div>
                    @error('preview_image')
                    {{ $message }}
                    @enderror
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Main image</label>
                      <input class="form-control" type="file" name="main_image" id="formFile">
                    </div>
                    @error('main_image')
                    {{ $message }}
                    @enderror
                    <div class="mb-3">
                      <label class="form-label">Choose a category</label>
                      <select name="category_id" class="form-select mb-3">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" 
                        {{ $category->id == old('category_id') ? ' selected' : ''}} >{{ $category->title }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Choose tags</label>
                      <select class="multiple-select" name="tag_ids[]" data-placeholder="Choose anything" multiple="multiple">
                        @foreach($tags as $tag)
                        <option {{ is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ?  ' selected' : ''}} value="{{$tag->id}}">{{$tag->title}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-12">
                      <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Create</button>
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