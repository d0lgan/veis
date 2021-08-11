@if($call_form)

    <!-- Button trigger modal -->
    <button class="btn btn-default" data-toggle="modal" data-target="#myModal">
        Перезвонить мне
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Перезвонить мне</h4>
                </div>
                <div class="modal-body">
                    <form role="form" action="{{route('contact-form.store')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <input hidden name="pages" value="{{$_SERVER['REQUEST_URI']}}" />
                        <input hidden name="type" value="call-form" />
                        <div class="form-group col-md-6">
                            <input required type="text" name="name" class="form-control" placeholder="Ваше имя">
                        </div>
                        <div class="form-group col-md-6">
                            <input required type="text" name="phone" class="form-control" placeholder="Телефон">
                        </div>
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
@endif