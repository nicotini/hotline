@extends('admin.layouts.main')
@section('content')
<!-- start page content wrapper-->
<div class="page-content-wrapper">
      <!-- start page content-->
      <div class="page-content">

        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Blog</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">
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
                  <form class="row g-3" method="post" action="{{route('admin.post.update', $post->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="col-12">
                      <label class="form-label">Name of post</label>
                      <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                    </div>
                    @error('title')
                    <div class="link-danger">{{ $message }}</div> 
                    @enderror
                    <div class="col-12">
                      <label class="form-label">Content</label>
                      <textarea id="summernote" name="content" type="text" class="form-control" name="title">{{ $post->content }}</textarea>
                    </div>
                    @error('content')
                    <div class="link-danger">{{ $message }}</div> 
                    @enderror
                    <div class="mb-3">
                      <div>
                        <img src="{{ asset('storage/' . $post->preview_image)}}" alt="{{ $post->title}}" class="w-50">
                      </div>
                      <label for="formFile" class="form-label">Preview</label>
                      <input class="form-control" name="preview_image" type="file" id="formFile" >
                    </div>
                    @error('preview_image')
                    <div class="link-danger">{{ $message }}</div> 
                    @enderror
                    <div class="mb-3">
                    <div class="w-25">
                        <img src="{{ asset('storage/' . $post->main_image) }}" alt="{{ $post->title}}" class="w-50">
                      </div>
                      <label for="formFile" class="form-label">Main image</label>
                      <input class="form-control" type="file" name="main_image" id="formFile">
                    </div>
                    @error('main_image')
                    <div class="link-danger">{{ $message }}</div> 
                    @enderror
                    <div class="mb-3">
                      <label class="form-label">Choose a category</label>
                      <select name="category_id" class="form-select mb-3">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" 
                        {{ $category->id == $post->category_id ? ' selected' : ''}} >{{ $category->title }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Choose tags</label>
                      
                      <select class="multiple-select" name="tag_ids[]" data-placeholder="Choose anything" multiple="multiple">
                        @foreach($tags as $tag)
                        
                        <option {{ is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ?  ' selected' : ''}} value="{{$tag->id}}">{{$tag->title}}</option>
                        @endforeach
                      </select>
                    </div>
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