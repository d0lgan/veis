@extends('layouts.admin.app')
@section('content')



    <div class="main-content">

            <div class="section__content section__content--p30">
                    <div class="row">

                            <div class="w-100">
                                {!! Form::model($language,['method' => 'PUT','files' => true, 'route' =>
                          ['admin-languages.update',$language->id]]) !!}
                                <div class="mb-3 d-flex align-items-center justify-content-between">
                                    <strong>Редактирование - {{$language->locate_code}}</strong>

                                    <div class="d-flex align-items-center">
                                        <button class="btn mr-3 save" type="submit"><i class="far fa-save"></i></button>
                                        <a href="{{ route('admin-languages-index') }}" class="btn back"><i class="fas fa-reply-all"></i></a>
                                    </div>

                                </div>

                                <div class="w-100 p-3" style="background-color: #fff">
                                    <div class="form-group">
                                        {!! Form::label('locate_code', 'locate_code',['class' => 'control-label']) !!}
                                        {!! Form::text('locate_code', $language->locate_code, array_merge(['class' => 'form-control',
                                        'disabled' => 'disabled'])) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('name', 'name',['class' => 'control-label']) !!}
                                        {!! Form::text('name', $language->name, array_merge(['class' => 'form-control',
                                        'disabled' => 'disabled'])) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('script', 'script',['class' => 'control-label']) !!}
                                        {!! Form::text('script', $language->script, array_merge(['class' => 'form-control',
                                        'disabled' => 'disabled'])) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('native', 'native',['class' => 'control-label']) !!}
                                        {!! Form::text('native', $language->native, array_merge(['class' => 'form-control',
                                        'disabled' => 'disabled'])) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('regional', 'regional',['class' => 'control-label']) !!}
                                        {!! Form::text('regional', $language->regional, array_merge(['class' => 'form-control',
                                        'disabled' => 'disabled'])) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('public', 'public',['class' => 'control-label']) !!}
                                        {!! Form::select('public', [1 => 'Да', 0 => 'Нет'], $language->public, array_merge(['class'=>'form-control'])) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('default', 'default',['class' => 'control-label']) !!}
                                        {!! Form::select('default', [1 => 'Да', 0 => 'Нет'], $language->default, array_merge(['class'=>'form-control'])) !!}
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
                        <h1 class="sub-header">Редактирование - {{$language->locate_code}}</h1>
                        <div class="table-responsive">
                            {!! Form::model($language,['method' => 'PUT','files' => true, 'route' =>
                          ['admin-languages.update',$language->id]]) !!}
                            <div class="col-md-3 form-group">
                                {!! Form::label('locate_code', 'locate_code',['class' => 'control-label']) !!}
                                {!! Form::text('locate_code', $language->locate_code, array_merge(['class' => 'form-control',
                                'disabled' => 'disabled'])) !!}
                            </div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('name', 'name',['class' => 'control-label']) !!}
                                {!! Form::text('name', $language->name, array_merge(['class' => 'form-control',
                                'disabled' => 'disabled'])) !!}
                            </div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('script', 'script',['class' => 'control-label']) !!}
                                {!! Form::text('script', $language->script, array_merge(['class' => 'form-control',
                                'disabled' => 'disabled'])) !!}
                            </div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('native', 'native',['class' => 'control-label']) !!}
                                {!! Form::text('native', $language->native, array_merge(['class' => 'form-control',
                                'disabled' => 'disabled'])) !!}
                            </div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('regional', 'regional',['class' => 'control-label']) !!}
                                {!! Form::text('regional', $language->regional, array_merge(['class' => 'form-control',
                                'disabled' => 'disabled'])) !!}
                            </div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('public', 'public',['class' => 'control-label']) !!}
                                {!! Form::select('public', [1 => 'Да', 0 => 'Нет'], $language->public, array_merge(['class'=>'form-control'])) !!}
                            </div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('default', 'default',['class' => 'control-label']) !!}
                                {!! Form::select('default', [1 => 'Да', 0 => 'Нет'], $language->default, array_merge(['class'=>'form-control'])) !!}
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
