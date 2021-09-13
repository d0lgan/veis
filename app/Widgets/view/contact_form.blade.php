@if($contact_form)
    <form role="form" action="{{route('contact-form.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        <input hidden name="pages" value="{{$_SERVER['REQUEST_URI']}}" />
        <input hidden name="type" value="contact-form" />
        <div class="form-group">
            <label>Имя</label>
            <input type="text" required name="name" class="form-control" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label>Телефон</label>
            <input type="text" required name="phone" class="form-control" value="{{ old('phone') }}">
        </div>
        <div class="form-group">
        <label>Тема</label>
        <select name="your_subject" class="form-control">
            <option value="message">Сообщение</option>
            <option value="offer">Предложение</option>
            <option value="help">Помощь</option>
        </select>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" required name="email" class="form-control" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label>Сообщение</label>
            <textarea class="form-control" required name="message" rows="3"  placeholder="{{ old('message') }}"></textarea>
        </div>
        <div class="form-group">
            <label>Файл</label>
            <input type="file" name="file" >
        </div>

        <button type="submit" class="btn btn-default">Отправить</button>
    </form>
@else
    <p>Извините, контактная форма сейчас недоступна.</p>
@endif