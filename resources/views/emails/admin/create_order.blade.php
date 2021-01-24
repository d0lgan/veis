<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Магазин SHOP!</title>
    <link href="{{ asset('css/email_site.css') }}" rel="stylesheet">
</head>
<body>

<h1>Новый заказ №{{$order->id}}</h1>
<hr>
<p>Клиент: {{$order->name}}</p>
@if($order->email)
<p>Email: {{$order->email}}</p>
@endif
<p>Телефон: {{$order->phone}}</p>
<hr>
<p>Перейдите в <a href="{{route('admin-orders-index')}}">ЗАКАЗЫ</a> для просмотра!</p>
<hr>
</body>
</html>



