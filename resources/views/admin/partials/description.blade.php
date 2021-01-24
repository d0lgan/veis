

{{--@foreach($langs as $key => $lang)
    <div class="tab-pane {{ $key == 0 ? 'active' : null }}"
         id="language{{ $lang->locate_code }}">
        <div class="form-group">

            <div class="form-group">
                <label for="description">Description:</label>

                <textarea name="description" class="form-control"
                          id="description_{{ $lang->locate_code }} editorl">
                    {{ old('description') }}
                </textarea>
            </div>
        </div>
    </div>
@endforeach--}}

@foreach($langs as $key => $lang)
    <div class="tab-pane {{ $key == 0 ? 'active' : null }}"
         id="language{{ $lang->locate_code }}">
        <div class="form-group">
            <input required name="title_{{ $lang->locate_code }}"
                   value="{{ optional($category)->{ $lang->locate_code } ?: null }}"
                   placeholder="Title" type="text" class="form-control">
        </div>
    </div>
@endforeach