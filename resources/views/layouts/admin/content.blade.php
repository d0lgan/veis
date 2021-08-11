
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="col-lg-11">
                                <div id="app">
                                    <statistics-component></statistics-component>
                                    <h2 class="title-1 m-b-25">Брошеные корзины</h2>
                                    <div class="table-responsive m-b-40">
                                        <table class="table table-borderless table-data3">
                                            <thead>
                                                <tr>
                                                    <th>№</th>
                                                    <th>Имя</th>
                                                    <th>Email</th>
                                                    <th>Телефон</th>
                                                    <th>Дата</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($orders as $order)
                                                <tr>
                                                    <td>{{ $order->id }}</td>
                                                    <td>{{ $order->name }}</td>
                                                    <td>{{ $order->email }}</td>
                                                    <td>{{ $order->phone }}</td>
                                                    <td>{{ $order->created_at }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                            </div>


                            <div class="col-12 d-flex justify-content-end p-5">
                                <a href="#">Техподдержка</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>