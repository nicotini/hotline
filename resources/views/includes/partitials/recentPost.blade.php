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
                        <li>{{ $post->dateAsCarbon->format('d M Y') }}</li>
                        <li>{{ $post->comments->count()}} Comments</li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>