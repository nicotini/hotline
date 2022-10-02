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
                                                <a href="{{ route('post.show', $post->id ) }}"><img src="{{ asset('storage/'. $post->preview_image) }}" alt="blog-thumb" style="object-fit: cover; width: 100%; height: 440px"></a>
                                            </div>
                                            <div class="blog__content">
                                                <div class="blog__meta">
                                                    <div class="blog__icon">
                                                        <i class="fas fa-image"></i>
                                                    </div>
                                                    <ul>
                                                        <li>{{ $post['date']->format('d M Y')}}</li>
                                                        <li>{{ $post->comments->count()}} Comments</li>
                                                    </ul>
                                                </div>
                                                <div class="blog__postcontent">
                                                    <div class="d-flex justify-content-between">
                                                        <a href="{{ route('post.show', $post->id) }}"><h5>{{ $post->title}}</h5></a>
                                                        @auth
                                                        <form action="{{ route('post.like.store', $post->id) }}" method="post">
                                                        <span>{{ $post->liked_users_count}}</span>
                                                            @csrf
                                                            
                                                            <button type="submit" class="border-0 bg-transparent">
                                                               
                                                                <i class="lni lni-heart{{ auth()->user()->likedPosts->contains($post->id) ? '-filled' : ''}}"></i>
                                                                
                                                            </button>
                                                        </form>
                                                        @endauth
                                                        @guest
                                                        <div>
                                                            <i class="lni lni-heart"></i>
                                                            <span>{{ $post->liked_users_count}}</span>
                                                        </div>
                                                        @endguest
                                                        
                                                    </div>
                                                    
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
                    @include('includes.sidebar')
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Blog section end here <================== -->
    @endsection