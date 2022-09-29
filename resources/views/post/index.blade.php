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
                        <div class="blog blog-style2">
                            <div class="row g-4">
                                @foreach($posts as $post)
                                <div class="col-12">
                                    <div class="blog__item">
                                        <div class="blog__inner">
                                            <div class="blog__thumb">
                                                <a href="blog-single.html"><img src="{{ asset('storage/'. $post->preview_image) }}" alt="blog-thumb" style="object-fit: cover; width: 100%; height: 440px"></a>
                                            </div>
                                            <div class="blog__content">
                                                <div class="blog__meta">
                                                    <div class="blog__icon">
                                                        <i class="fas fa-image"></i>
                                                    </div>
                                                    <ul>
                                                        <li>{{ $date->format('d M Y')}}</li>
                                                        <li>{{ $post->comments->count()}} Comments</li>
                                                    </ul>
                                                </div>
                                                <div class="blog__postcontent">
                                                    <a href="blog-single.html"><h5>{{ $post->title}}</h5></a>
                                                    <span> @if(!is_null($post->category))
                                                        ( Category: {{  $post->category->title }} )
                                                        @endif
                                                    </span>
                                                    <p>{!! $post->content !!}</p>
                                                    <a href="{{ route('post.show', $post->id ) }}" class="default-btn move-bottom"><span>Read On</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            {{ $posts->links() }}
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="sidebar">
                            
                            <div class="sidebar__catagory mb-5">
                                <div class="sidebar__head">
                                    <h4>Blog Categories</h4>
                                </div>
                                <div class="sidebar__body">
                                    <ul>
                                        @foreach($categories as $category)
                                        <li>
                                            <a href="#"><i class="fas fa-chevron-right"></i> {{ $category->title }}</a>
                                            <span>{{ $category->posts->count() }}</span>
                                        </li>
                                       @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar__post mb-5">
                                <div class="sidebar__head">
                                    <h4>Recent Blog</h4>
                                </div>
                                <div class="sidebar__body">
                                    @foreach($recentPosts as $post)
                                    <div class="sidebar__post-item">
                                        <div class="sidebar__post-inner">
                                            <div class="sidebar__post-thumb">
                                                <a href="{{ route('post.show', $post->id)}}"><img src="{{'storage/'. $post->preview_image }}" alt="post-thumb"></a>
                                            </div>
                                            <div class="sidebar__post-content">
                                                <a href="{{ route('post.show', $post->id ) }}"><h6>{{ $post->title}}</h6></a>
                                                <ul>
                                                    <li>{{ $date->format('d M Y')}}</li>
                                                    <li>{{ $post->comments->count()}} Comments</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                           
                            <div class="sidebar__tags">
                                <div class="sidebar__head">
                                    <h4>Tags</h4>
                                </div>
                                <div class="sidebar__body">
                                    <ul>
                                        @foreach($tags as $tag)
                                        <li><a href="#">{{ $tag->title }}</a></li>
                                        @endforeach
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Blog section end here <================== -->
    @endsection