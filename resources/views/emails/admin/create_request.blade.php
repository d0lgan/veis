<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Магазин SHOP!</title>
    <link href="{{ asset('css/email_site.css') }}" rel="stylesheet">
</head>
<body>

<h1>Новый запрос №{{$contact->id}}</h1>
<hr>
<p>{{$contact->name}}</p>
<p>{{$contact->type}}</p>
@if($contact->email)
<p>{{$contact->email}}</p>
@endif
<p>{{$contact->phone}}</p>
<p>{{$contact->pages}}</p>
@if($contact->your_subject)
<p>{{$contact->your_subject}}</p>
@endif
@if($contact->message)
<p>{{$contact->message}}</p>
@endif
<p>Перейдите в <a href="{{route('admin-contacts-index')}}">ЗАПРОСЫ</a> для просмотра!</p>
<hr>
</body>
</html>



