@extends('layouts.admin.app')
@section('content')









	<div class="main-content">
        <div class="section__content section__content--p30">

            <div class="container-fluid">
                <div class="row">
                    <div class="w-100">

                        <div class="d-flex justify-content-between align-items-center m-b-20">
                            <h2 class="title-1">Пользователи</h2>
                        </div>





                        <div class="table-responsive table-responsive-data2">
                            <table style="border-collapse: separate; border-spacing: 0 .25rem;" class="table table-data2 border-0">
                                <thead>
                                <tr>
	                                <th class="align-middle py-2">Имя</th>
	                                <th class="align-middle py-2"></th>
	                                <th class="align-middle py-2">Email</th>
	                                <th class="align-middle py-2">Slug</th>
	                                <th class="align-middle py-2">Blocked</th>
	                                <th class="align-middle py-2"></th>
	                            </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
	                                <tr>
	                                    <td class="align-middle py-2">{{$user->name}}</td>
	                                    <td class="align-middle py-2">
	                                        @if($user->isOnline())
	                                            <span style="color:green">В сети</span>
	                                        @else
	                                            <span style="color:red">Не в сети</span>
	                                        @endif
	                                    </td>
	                                    <td class="align-middle py-2">{{$user->email}}</td>
	                                    <td class="align-middle py-2">{{$user->slug}}</td>
	                                    <td class="align-middle py-2">
	                                        @if($user->blocked == 1)
	                                            <p style="color: red;">Да</p>
	                                        @else
	                                            <p style="color: #3cc000;">Нет</p>
	                                        @endif
	                                    </td>
	                                    <td class="align-middle py-2">
                                            <div class="table-data-feature d-flex justify-content-center">
                                                
                                                <a href="{{route('admin-users.edit',$user->id)}}" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" title="" data-original-title="Редактировать">
                                                    <i style="font-size: 16px" class="fas fa-pencil-alt"></i>
                                                </a>

                                                <a href="#" style="width: 35px; height: 35px; border-radius: 100%; background-color: #e5e5e5" class="item p-1 d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" title="" data-original-title="Удалить">
                                                    <i style="font-size: 16px" class="fas fa-trash-alt"></i>
                                                </a>
                                            </div>
	                                    </td>
	                                </tr>
                            @endforeach
                                </tbody>
                            </table>
                        </div>
                   	</div>
               </div>
           </div>
       </div>
   </div>















    <!-- <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Пользователи</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered datatable">
                            <thead>
                            <tr>
                                <th>Имя</th>
                                <th></th>
                                <th>Email</th>
                                <th>Slug</th>
                                <th>Blocked</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>
                                        @if($user->isOnline())
                                            <span style="color:green">В сети</span>
                                        @else
                                            <span style="color:red">Не в сети</span>
                                        @endif
                                    </td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->slug}}</td>
                                    <td>
                                        @if($user->blocked == 1)
                                            <p style="color: red;">Да</p>
                                        @else
                                            <p style="color: #3cc000;">Нет</p>
                                        @endif
                                    </td>
                                    <td>
                                        <p><a style="width: 35px; height: 35px;" class="btn btn-primary d-flex justify-content-center align-items-center" href="{{route('admin-users.edit',$user->id)}}"><i class="fas fa-pencil-alt"></i></a></p>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{--{{ $users->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection
