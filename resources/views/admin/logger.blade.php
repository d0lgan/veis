@extends('layouts.admin.app')
@section('content')
    <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Изменения</h1>
               <div class="row">
                 <div class="col-sm-12">
                    <div class="bs-example">
                        <div class="table-responsive">
                            <table class="table table-striped datatable">
                                <thead>
                                <tr>
                                    <th>Юзер</th>
                                    <th>Что</th>
                                    <th>Дата изменения</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($loggers as $logger)
                                    <tr>
                                        <td>{{$logger->user}}</td>
                                        <td>{{$logger->data}}</td>
                                        <td>{{$logger->created_at}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{--{{ $loggers->links() }}--}}
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
@endsection
