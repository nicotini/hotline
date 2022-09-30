@extends('layouts.main')
@section('content')
<!-- ================> Page Header section start here <================== -->
<div class="pageheader-section">
        <div class="container">
            <div class="pageheader">
                <div class="pageheader__title">
                    <h2>{{ $post->title }}</h2>
                </div>
                <div class="pageheader__breadcamp">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Page Header section end here <================== -->


    <!-- ================> Blog section start here <================== -->
    <div class="blog-section padding--top padding--bottom" id="blog">
        <div class="container">
            <div class="section-wrapper">
                <div class="row g-4">
                    <div class="col-lg-8 col-12">
                        <div class="blog blog-style2 blog-single">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="blog__item">
                                        <div class="blog__inner">
                                            <div class="blog__thumb">
                                                <img src="{{ asset('storage/' . $post->main_image) }}" alt="blog-thumb" class="w-100">
                                            </div>
                                            <div class="blog__content">
                                                <div class="blog__meta">
                                                    <div class="blog__icon">
                                                        <i class="fas fa-image"></i>
                                                    </div>
                                                    <ul>
                                                        <li>{{ $date->format('d M Y')}}</li>
                                                    </ul>
                                                </div>
                                                <div class="blog__postcontent">
                                                    <h5>{{ $post->title }}</h5>
                                                    <p>
                                                        {!! $post->content !!}
                                                    </p>
                                                            
                                                    <div class="blog__tags">
                                                        <div class="blog__tags-left">
                                                            <div class="blog__tags-title">
                                                                <p>Tags:</p>
                                                            </div>
                                                            <div class="blog__tags-details">
                                                               
                                                                <ul>
                                                                    @foreach($post->tags as $tag)
                                                                    <li><a href="#">{{$tag->title}}</a></li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="blog__tags-right">
                                                            <div class="blog__tags-title">
                                                                <p>Share:</p>
                                                            </div>
                                                            <div class="blog__tags-details">
                                                                <div class="footer__social">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="likes-post d-flex justify-content-end">
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
                                    </div>
                                    <div class="blog__navigation">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-chevron-left"></i> Preview Post</a></li>
                                            <li><a href="#">Newest Post <i class="fas fa-chevron-right"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="blog__comments">
                                        <div class="blog__comments-title">
                                            <h4>Comments ({{ $post->comments->count()}})</h4>
                                        </div>
                                        <div class="blog__comments-details">
                                            <ul>
                                                @foreach($post->comments as $comment)
                                                <li>
                                                    <div class="blog__comments-content">
                                                        <div class="d-flex justify-content-between">
                                                        <h6>{{ $comment->user->name}}</h6>
                                                        <span>{{ $comment->dateAsCarbon->diffForHumans()}}</span>
                                                        </div>
                                                        
                                                        <p>{{ $comment->message }}</p>
                                                       
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    @auth
                                    <div class="blog__respond">
                                        <div class="blog__respond-title">
                                            <h4>Leave a Comments</h4>
                                        </div>
                                        <div class="blog__respond-details">
                                            <form action="{{ route('post.comments.store', $post->id)}}" method="post">
                                               @csrf 
                                                <textarea id="comment-reply" name="message" rows="5" placeholder="Type Here Your Comment"></textarea>
                                                
                                                <input type="submit" class="default-btn move-right" value="Send">
                                            </form>
                                        </div>
                                    </div>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('includes.sidebar')
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Blog section end here <================== -->
    @if($relatedPosts->count()> 0)
     <!-- ================> Blog section start here <================== -->
     <div class="blog-section padding--top padding--bottom" id="blog">
        <div class="container">
            <div class="section-header style-2">
                <h2>Related posts</h2>
                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
            </div>
            <div class="section-wrapper">
                <div class="blog blog-style2">
                    <div class="row g-4">
                        @foreach($relatedPosts as $post)
                        <div class="col-lg-6 col-12">
                            <div class="blog__item">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="blog-single.html"><img src="{{ asset('storage/' . $post->preview_image) }}" alt="{{ $post->title}}" style="object-fit: cover; width: 100%; height: 440px">></a>
                                    </div>
                                    <div class="blog__content">
                                        <div class="blog__meta">
                                            <div class="blog__icon">
                                                <i class="fas fa-image"></i>
                                            </div>
                                            <ul>
                                                <li>{{ $date->format('d M Y')}}</li>
                                                
                                                <li>{{ $post->comments->count() }} Comments</li>
                                            </ul>
                                        </div>
                                        <div class="blog__postcontent">
                                            <a href="blog-single.html"><h5>{{ $post->title }}</h5></a>
                                            <p>{!! $post-> content !!}</p>
                                            <a href="{{ route('post.show', $post->id )}}" class="default-btn move-bottom"><span>Read On</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Blog section end here <================== -->
 @endif
@endsection