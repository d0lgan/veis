@extends('layouts.admin.app')
@section('content')

    <div id="app">
        <table-products-component :manufacturers="{{ json_encode($manufacturers) }}" :categories="{{ json_encode($categories) }}" :prod="{{json_encode($products)}}" :settings="{{ json_encode($settings) }}" :count_p="{{ json_encode($count_p) }}"></table-products-component>
    </div>


    {{--<div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Товары</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <a type="button" class="btn btn-primary" href="{{route('admin-products.create')}}">Добавить</a>
                        <hr>
                        <table class="table table-striped table-hover table-bordered datatable">
                            <thead>
                            <tr>
                                <th>ID:</th>
                                <th>Название</th>
                                <th>Image</th>
                                <th>Цена</th>
                                <th>Производитель</th>
                                <th>Статус</th>
                                <th>Категория</th>
                                <th>Отображать</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->title ?? '-'}}</td>
                                    <td><img class="im_admin" src="{{ asset('house/uploads/' . $product->image)}}"></td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->manufacturer->title}}</td>
                                    <td>
                                        @if($product->public == 0)
                                            <p style="color: red;">Отключен</p>
                                        @else
                                            <p style="color: #3cc000;">Включен</p>
                                        @endif
                                    </td>
                                    <td>{{ $product->category->title ?? '-'}}</td>
                                    <td>
                                        @forelse($product->categories as $category)
                                            <span class="label label-success">{{ $category->title }}</span>
                                        @empty
                                            <span class="label label-danger">Не выбрано</span>
                                        @endforelse
                                    </td>
                                    <td>
                                        <p><a class="btn btn-warning" href="{{route('admin-products.edit', $product->id)}}"><i class="fas fa-pencil-alt"></i></a></p>
                                    </td>
                                    <td>
                                        <form method="post" action="{{route('admin-products.destroy', $product->id)}}" role="form">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
--}}{{--                        {{ $products->links() }}--}}{{--
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
@endsection

@section('test')
    <script type="text/javascript">
        
    </script>
@endsection
