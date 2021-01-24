
{{--<div class="btn-group dropright">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Dropright</button>

</div>--}}


<div class="list-group my-4">

    @foreach($categories as $category)
        <a href="{{ url('category',$category->slug)}} " class="list-group-item">
            {{$category->title}}

                        @if(count($category->childs))
                                @include('site.category_child',['childs' =>
                                $category->childs->each(function($item) {
                                    $item->title = App\Document::get('category', 'title', $item->id, \LaravelLocalization::getCurrentLocale());
                                })])
                        @endif

        </a>
    @endforeach
</div>

{{--
<h3>Категории</h3>
<ul class="dropdown-menu ver_category" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; margin-bottom: 5px; *width: 180px;">
            @foreach($categories as $category)
                <li class="dropdown-submenu">
                    <a tabindex="-1" href="{{URL('category',$category->slug)}}">{{$category->title}}</a>
                    @if(count($category->childs))
                        @include('site.category_child',['childs' =>
                        $category->childs])
                    @endif
                </li>
            @endforeach
</ul>--}}