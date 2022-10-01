@extends('layouts.main')
@section('content')
<!-- ================> Page Header section start here <================== -->
 <div class="pageheader-section">
        <div class="container">
            <div class="pageheader">
                <div class="pageheader__title">
                    <h2>Blog Post</h2>
                </div>
                <div class="pageheader__breadcamp">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Page Header section end here <================== -->


    <!-- ================> Blog section start here <================== -->
    <div class="blog-section padding--top padding--bottom">
        <div class="container">
            <div class="section-wrapper">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <ul>
                            @foreach($categories as $category)
                            <li><a href="{{ route('category.post.index', $category->id) }}">{{ $category->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    @include('includes.sidebar')
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Blog section end here <================== -->
    @endsection