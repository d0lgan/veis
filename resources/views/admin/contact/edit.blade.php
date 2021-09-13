@extends('layouts.admin.app')
@section('content')





    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-lg-13">
                        <h2 class="title-1 m-b-25">Запрос № {{ $contact->id }}</h2>
                    </div>

                    <div class="w-100">
                        {!! Form::open(['method' => 'PUT', 'route' =>['admin-contacts.update', $contact->id]]) !!}

                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <strong class="col-8">Данные заказа</strong>


                            <div class="d-flex align-items-center col-4">
                                <select name="status" id="stat" class="form-control p-3 contact_select h-100 mr-3">
                                    <option value="1">Новый</option>
                                    <option value="0" @if($contact->status == 0) selected @endif>Просмотренный</option>
                                    <option value="2">Закрыт</option>
                                </select>

                                <button class="btn mr-3 save p-3" type="submit"><i class="fas fa-sync-alt"></i></button>
                                
                                <a href="{{ route('admin-contacts-index') }}" class="btn back p-3"><i class="fas fa-reply-all"></i></a>
                            </div>


                            <!-- <div class="col-md-3 p-0">
                                <select name="status" id="stat" class="form-control">
                                    <option value="1">Новый</option>
                                    <option value="0" @if($contact->status == 0) selected @endif>Просмотренный</option>
                                    <option value="2">Закрыт</option>
                                </select>
                            </div> -->
                        </div>





                        <div class="w-100 p-3" style="background-color: #fff">
                        	<div class="form-group">
                        		<label class="form-label">Тип</label>
                        		@if($contact->type == 'call')
                        			<input type="text" class="form-control" value="Звонок" disabled name="">
                        		@else 
                        			<input type="text" class="form-control" value="Сообщение" disabled name="">
                        		@endif
                        	</div>

                        	<div class="form-group">
                        		<label class="form-label">Тема</label>
                        		<input type="text" class="form-control" value="{{ $contact->theme }}" disabled name="">
                        	</div>

                        	<div class="form-group">
                        		<label class="form-label">Сообщение</label>
                        		<input type="text" class="form-control" value="{{ $contact->message }}" disabled name="">
                        	</div>

                        	<div class="form-group">
                        		<label class="form-label">Имя</label>
                        		<input type="text" class="form-control" value="{{ $contact->name }}" disabled name="">
                        	</div>

                        	<div class="form-group">
                        		<label class="form-label">Email</label>
                        		<input type="text" class="form-control" value="{{ $contact->email }}" disabled name="">
                        	</div>

                        	<div class="form-group">
                        		<label class="form-label">Телефон</label>
                        		<input type="text" class="form-control" value="{{ $contact->phone }}" disabled name="">
                        	</div>

                        	<div class="form-group">
                        		<label class="form-label">Дата</label>
                        		<input type="text" class="form-control" value="{{ $contact->created_at }}" disabled name="">
                        	</div>
                        </div>








                        <!-- <div class="w-100">
                            <table class="table table-data2 border-0" >
                                <thead>
                                <tr>
                                    <th class="align-middle py-2 pr-3">Тип</th>
                                    <th class="align-middle py-2 pr-3">Тема</th>
                                    <th class="align-middle py-2 pr-3">Сообщение</th>
                                    <th class="align-middle py-2 pr-3">Имя</th>
                                    <th class="align-middle py-2 pr-3">Email</th>
                                    <th class="align-middle py-2 pr-3">Телефон</th>
                                    <th class="align-middle py-2 pr-3">Дата</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="align-middle py-2 pr-3" scope="col">@if($contact->type == 'call') Звонок @else Сообщение @endif</td>
                                    <td class="align-middle py-2 pr-3">{{ $contact->theme }}</td>
                                    <td class="align-middle py-2 pr-3">{{ $contact->message }}</td>
                                    <td class="align-middle py-2 pr-3">{{ $contact->name }}</td>
                                    <td class="align-middle py-2 pr-3">{{ $contact->email }}</td>
                                    <td class="align-middle py-2 pr-3">{{ $contact->phone }}</td>
                                    <td class="align-middle py-2 pr-3">{{ $contact->created_at }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div> -->
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>









    <!-- <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Запрос № {{ $contact->id }}</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12 border border-secondary mt-4 position-relative p-3"
                         style="height: 280px;">
                        <h4 class="position-absolute" style="background: white; top: -20px;">Данные
                            заказа</h4>
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Тип</th>
                                <th scope="col">@if($contact->type == 'call') Звонок @else Сообщение @endif</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">Тема</th>
                                <td>{{ $contact->theme }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Сообщение</th>
                                <td>{{ $contact->message }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Имя</th>
                                <td>{{ $contact->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td>{{ $contact->email }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Телефон</th>
                                <td>{{ $contact->phone }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Дата</th>
                                <td>{{ $contact->created_at }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    {!! Form::open(['method' => 'PUT', 'route' =>['admin-contacts.update', $contact->id]]) !!}
                    <div class="col-md-3 mt-4 offset-7">
                        <div class="form-group">
                            <select name="status" id="stat" class="form-control">
                                <option value="1">Новый</option>
                                <option value="0" @if($contact->status == 0) selected @endif>Просмотренный</option>
                                <option value="2">Закрыт</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 mt-4">
                        {!! Form::submit('Сохранить',array_merge(['class' => 'btn btn-default'])) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div> -->
@endsection