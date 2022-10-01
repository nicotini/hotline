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
                                            <a href="{{ route('category.post.index', $category->id) }}"><i class="fas fa-chevron-right"></i> {{ $category->title }}</a>
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
                                                <a href="{{ route('post.show', $post->id)}}"><img src="{{ asset('storage/'. $post->preview_image) }}" alt="post-thumb"></a>
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