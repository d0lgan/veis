<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Магазин SHOP!</title>
    <link href="{{ asset('css/email_site.css') }}" rel="stylesheet">
</head>
<body>

<h1>Уважаемый (-ая) {{$order->name}}</h1>
<hr>

<p>Ваш заказ приянт в обработку! ожидайте звонка</p>

<hr>
<a href="{{route('profile')}}" class="btn btn-info btn-fill btn-wd">Перейти к заказам</a>
</body>
</html>



