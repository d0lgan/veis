@extends('layouts.admin.app')
@section('content')



    <div class="main-content">

            <div class="section__content section__content--p30">
                    <div class="row">

                            <div class="w-100">
                                {!! Form::model($currency,['method' => 'PUT','files' => true, 'route' =>
                          ['admin-currency.update',$currency->id]]) !!}
                                <div class="mb-3 d-flex align-items-center justify-content-between">
                                    <strong>Редактирование - {{$currency->title}}</strong>

                                    <div class="d-flex align-items-center">
                                        <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                        <a href="{{ route('admin-categories-index') }}" class="btn back"><i class="fas fa-reply-all"></i></a>
                                    </div>
                                </div>

                                <div class="w-100 p-3" style="background-color: #fff">
                                    <div class="form-group">
                                        {!! Form::label('title', 'title',['class' => 'control-label']) !!}
                                        {!! Form::text('title', $currency->title, array_merge(['class' => 'form-control'])) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('code', 'code',['class' => 'control-label']) !!}
                                        {!! Form::text('code', $currency->code, array_merge(['class' => 'form-control'])) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('rate', 'rate',['class' => 'control-label']) !!}
                                        {!! Form::text('rate', $currency->rate, array_merge(['class' => 'form-control'])) !!}
                                    </div>


                                    <div class="form-group">
                                        {!! Form::label('public', 'public',['class' => 'control-label']) !!}
                                        {!! Form::select('public', [1 => 'Да', 0 => 'Нет'], $currency->public, array_merge(['class'=>'form-control'])) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('default', 'default',['class' => 'control-label']) !!}
                                        {!! Form::select('default', [1 => 'Да', 0 => 'Нет'], $currency->default, array_merge(['class'=>'form-control'])) !!}
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>

                    </div>

            </div>

    </div>




    <!-- <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="bs-example">
                        <h2 class="sub-header">Редактирование - {{$currency->title}}</h2>
                        <div class="table-responsive">
                            {!! Form::model($currency,['method' => 'PUT','files' => true, 'route' =>
                          ['admin-currency.update',$currency->id]]) !!}

                            <div class="col-md-3 form-group">
                                {!! Form::label('title', 'title',['class' => 'control-label']) !!}
                                {!! Form::text('title', $currency->title, array_merge(['class' => 'form-control'])) !!}
                            </div>

                            <div class="col-md-3 form-group">
                                {!! Form::label('code', 'code',['class' => 'control-label']) !!}
                                {!! Form::text('code', $currency->code, array_merge(['class' => 'form-control'])) !!}
                            </div>

                            <div class="col-md-3 form-group">
                                {!! Form::label('rate', 'rate',['class' => 'control-label']) !!}
                                {!! Form::text('rate', $currency->rate, array_merge(['class' => 'form-control'])) !!}
                            </div>


                            <div class="col-md-3 form-group">
                                {!! Form::label('public', 'public',['class' => 'control-label']) !!}
                                {!! Form::select('public', [1 => 'Да', 0 => 'Нет'], $currency->public, array_merge(['class'=>'form-control'])) !!}
                            </div>

                            <div class="col-md-3 form-group">
                                {!! Form::label('default', 'default',['class' => 'control-label']) !!}
                                {!! Form::select('default', [1 => 'Да', 0 => 'Нет'], $currency->default, array_merge(['class'=>'form-control'])) !!}
                            </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                {!! Form::submit('Сохранить',array_merge(['class' => 'btn btn-default'] )) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
						</div>
                    </div>
                </div>
            </div>
        </div>
        </div> -->
@endsection
