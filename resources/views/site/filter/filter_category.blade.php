<h3>Фильтрация</h3>
<hr>
{!! Form::open(['method' => 'get','route' => ['category',$category->slug],'id' => 'sub_form_filter_cat'])!!}
<h4>Производитель</h4>
    @foreach($manufacturers as $manufacturer)
        @if($manufacturer->products->whereIn('id', $products->pluck('id'))->isNotEmpty())
            {{Form::checkbox("filter[manufacturer_id][$manufacturer->id]", $manufacturer->id, false, array_merge
            (['onclick'=>'document.getElementById("sub_form_filter_cat").submit();']))}}
            {{Form::label('manufacturer_id', $manufacturer->title)}}
            <br>
        @else
            {{Form::checkbox("filter[manufacturer_id][$manufacturer->id]", $manufacturer->id, false, array_merge
            (['disabled' => 'disabled']))}}
            <a style="cursor: pointer;" href="{!! route('manufacturer', $manufacturer->slug) !!}">{{Form::label
            ('manufacturer_id',$manufacturer->title)}}</a>
            <br>
        @endif
    @endforeach

<h4>Атрибуты</h4>
@foreach($groupsAttributes as $groupAttribute)
    <h5>{{$groupAttribute->name}}</h5>
    <div class="form-group col-md-12">
    @foreach($groupAttribute->attributes as $attribute)
        @if($attribute->products->whereIn('id', $products->pluck('id'))->isNotEmpty())
                {{Form::checkbox("filter[attribute_id][$attribute->id]", $attribute->id, false, array_merge(['onclick'=>'document.getElementById("sub_form_filter_cat").submit();']))}}
                {{Form::label('attribute_id', $attribute->name)}}
                <br>
            @else
                {{Form::checkbox("filter[attribute_id][$attribute->id]", $attribute->id, false, array_merge(['disabled' => 'disabled']))}}
                {{Form::label('attribute_id', $attribute->name)}}
                <br>
        @endif
    @endforeach
    </div>
@endforeach

<h4>Цена</h4>
<div class="form-group col-md-6">
    {!! Form::text('filter[price][ot]', $products->min('price'), array_merge(['class' => 'form-control']))!!}
</div>
<div class="form-group col-md-6">
    {!! Form::text('filter[price][do]', $products->max('price'), array_merge(['class' => 'form-control'])
    )!!}
</div>
<div class="form-group col-md-12">
    {!! Form::submit('Применить',array_merge(['class' => 'btn btn-default'] )) !!}
    <a type="button" href="{!! route('category', $category->slug) !!}" class="btn btn-default">Сброс</a>
</div>
{!! Form::close() !!}