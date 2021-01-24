@extends('layouts.admin.app')
@section('content')




   <div class="main-content">
    <div class="section__content section__content--p30">
        <div class="row">
            <div id="app" class="w-100">
                <div class="w-100">
                    <form method="post" action="{{ route('admin-mailing.store') }}" enctype="multipart/form-data">
                    
	                    <div class="mb-3 d-flex align-items-center justify-content-between">
	                        <h2 class="title-3 col-7 m-0 p-0">Рассылка</h2>

                            <input type="submit" class="btn btn-primary" value="Отправить">
	                    </div>

	                    <div class="w-100 p-3" style="background-color: #fff">
	                    	<div class="form-group">
		                        <label for="title">Заголовок письма</label>
		                        <input type="text" name="title" id="title" class="form-control">
		                    </div>

		                    <div class="form-check p-0 my-3">
	                            <div class="radio">
	                            	<input type="radio" checked name="users" value="clients" id="clients" class="m-0">
	                            	<label for="clients" class="m-0">Клиенты</label>
	                            </div>

	                            <div class="radio">
	                            	<input type="radio" name="users" value="all" id="all" class="m-0">
                            		<label for="all" class="m-0">Все пользователи</label>
	                            </div>
	                        </div>

	                        <div class="form-group textarea">
		                        <label for="desc">Содержимое письма</label>
		                        <editor-component :name="{{json_encode('desc')}}"></editor-component>
		                    </div>

		                    <div class="form-group">
		                        <input type="file" name="file" class="form-control">
		                    </div>
	                    </div>

	                </form>
                </div>
            </div>
        </div>
    </div>
</div>













    <!-- <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Рассылка</h1>
            <form method="post" action="{{ route('admin-mailing.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label for="title">Заголовок письма</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="col-md-6 pt-5">
                        <div class="form-group col-md-6 d-flex justify-content-center align-items-center">
                            <input type="radio" checked name="users" value="clients" id="clients" class="m-0">
                            <label for="clients" class="m-0">Клиенты</label>
                        </div>
                        <div class="form-group col-md-6 d-flex justify-content-center align-items-center">
                            <input type="radio" name="users" value="all" id="all" class="m-0">
                            <label for="all" class="m-0">Все пользователи</label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="desc">Содержимое письма</label>
                        <editor-component :name="{{json_encode('desc')}}"></editor-component>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="file" name="file" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary" value="Отправить">
                    </div>
                </div>
            </form>

        </div>
    </div> -->
@endsection
