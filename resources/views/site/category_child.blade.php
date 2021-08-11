{{--todo Category - Trable 3--}}

@foreach($childs as $child)

        <a href="{{URL('category',$child->slug)}}">{{$child->title}}</a>


        @if(count($child->childs))
            @include('site.category_child',['childs' => $child->childs])
        @endif
@endforeach
