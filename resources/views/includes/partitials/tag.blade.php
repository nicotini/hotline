<div class="sidebar__tags">
    <div class="sidebar__head">
        <h4>Tags</h4>
    </div>
    <div class="sidebar__body">
        <ul>
            @foreach($tags as $tag)
            <li><a href="{{ route('tag.post.index', $tag->id)}}">{{ $tag->title }}</a></li>
            @endforeach
            
        </ul>
    </div>
</div>