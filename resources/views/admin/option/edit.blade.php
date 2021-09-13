@extends('layouts.admin.app')
@section('content')





    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="row">
                <div id="app" class="w-100">

                    <div class="w-100">
                        {!! Form::open(['method' => 'put','route' => ['admin-options.update',$option->id],'files' => true,
                            'multiple' => 'multiple'])!!}

                        <div class="mb-3 d-flex align-items-center justify-content-between">
                            <strong>Редактирование опции - {{ $option->title['ru'] }}</strong>

                            <div class="d-flex m-0 p-0">
                                <button class="btn  mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                <a href="{{ route('admin-options-index') }}" class="btn  back"><i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>


                        <div style="background-color: #fff" class="p-3 w-100">
                            

                                <values-option-component :value="{{ json_encode($option->values) }}" :optio="{{ json_encode($option) }}" :langs="{{ json_encode($langs) }}"></values-option-component>
                                {{--<div class="row">
                                    <div class="col-12">
                                        <h3>Значение опции</h3>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="value">Значение</label>
                                        <input type="text" name="value[]" id="value" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="img">Изображение</label>
                                        <input type="file" name="image[]" id="img" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="sort_value">Сортировка</label>
                                        <input type="text" name="sorting[]" id="sort_value" class="form-control">
                                    </div>
                                </div>--}}
                            
                        </div>
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>









<!-- {{--    @dd($option->values[0]->value)--}}
    <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="bs-example">
                        <h1 class="sub-header">Редактирование опции - {{ $option->title['ru'] }}</h1>
                        <div class="col-12 d-flex justify-content-end">
                        <a href="{{ route('admin-options-index') }}" class="btn btn-primary my-2">< Назад</a>
                        </div>
                        <div>
                            {!! Form::open(['method' => 'put','route' => ['admin-options.update',$option->id],'files' => true,
                            'multiple' => 'multiple'])!!}


                            <values-option-component :value="{{ json_encode($option->values) }}" :optio="{{ json_encode($option) }}" :langs="{{ json_encode($langs) }}"></values-option-component>
                            {{--<div class="row">
                                <div class="col-12">
                                    <h3>Значение опции</h3>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="value">Значение</label>
                                    <input type="text" name="value[]" id="value" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="img">Изображение</label>
                                    <input type="file" name="image[]" id="img" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="sort_value">Сортировка</label>
                                    <input type="text" name="sorting[]" id="sort_value" class="form-control">
                                </div>
                            </div>--}}
                            <br>
                                <div class="col-md-12">
                                    <input class="btn btn-primary" type="submit" value="Сохранить">
                                </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection


