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