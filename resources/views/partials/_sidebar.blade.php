<div class="categories">
    <h2>Categories</h2>
    <ul class="cate">
        @foreach ($categories as $category)
        <li>
            <a href="{{ route('products.index', 'category='. $category->slug) }}">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>{{ $category->name }}
            </a>
        </li>
        <ul>
        @foreach ($category->groups as $group)
        <li>
            <a href="{{ route('products.index', 'group='. $group->slug) }}">
                <i class="fa fa-arrow-right" aria-hidden="true"></i> {{ $group->name }}
            </a>
        </li>
        @endforeach
        </ul>
        @endforeach
    </ul>
</div>