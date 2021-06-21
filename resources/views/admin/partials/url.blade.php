@foreach($langs as $key => $lang)
    <div class="tab-pane {{ $key == 0 ? 'active' : null }}"
         id="{{$id}}_{{$type}}_{{ $lang->locate_code }}">
        @if($title)
            <div class="form-group">
                <label for="title_{{ $lang->locate_code }}">{{ isset($title_name) ? $title_name . ':' : 'Название:' }}</label>
                <input required name="title_{{ $lang->locate_code }}"
                       id="title_{{ $lang->locate_code }}"
                       value="{{ json_encode(@optional($item)->data[$lang->locate_code]['title'] ?: old('title_' . $lang->locate_code)) == 'null' ? @optional($item)->title ?: @optional($item)->name : @optional($item)->data[$lang->locate_code]['title'] ?: old('title_' . $lang->locate_code) }}"
                       placeholder="Title {{ strtoupper($lang->locate_code) }}"
                       type="text"
                       class="form-control"/>
            </div>
        @endif

        @if($meta)
                @php $method = "meta_h1_" . $lang->locate_code @endphp
            <div class="form-group">
                <label for="meta_{{ $lang->locate_code }}">Meta Заголовок:</label>
                <input type="text"
                       id="meta_{{ $lang->locate_code }}"
                       name="meta_{{ $lang->locate_code }}"
                       class="form-control"
                       value="{{
                        // json_encode(@optional($item)->data[$lang->locate_code]['meta'] ?: old('meta_' . $lang->locate_code)) == 'null' ? @optional($item)->meta_h1 : @optional($item)->data[$lang->locate_code]['meta'] ?: old('meta_' . $lang->locate_code)
                        @optional($item)->$method
                        }}"
                       placeholder="Meta H1 {{ strtoupper($lang->locate_code) }}"/>
            </div>
        @endif

            @if(isset($page_url))
                <div class="form-group">
                    <label for="slug">Url</label>
                    <input type="text"  name="slug" value="{{ $page->slug }}" class="form-control">
                </div>
            @endif

            @if(isset($tag_url))
                <div class="form-group">
                    <label for="slug">Url</label>
                    <input type="text" @if($item) value="{{ $lang->locate_code == 'ru' ? $item->slug_ru : $item->slug_uk }}" @endif name="slug_{{ $lang->locate_code }}" class="form-control">
                </div>
            @endif

            @if(isset($prod_url))
                <div class="form-group">
                    <label for="slug">Url</label>
                    <input type="text"  name="slug_{{ $lang->locate_code }}" class="form-control">
                </div>
            @endif

            @if(isset($category_url))
                <div class="form-group">
                    <label for="slug">Url</label>
                    <input type="text" name="slug_{{ $lang->locate_code }}" value="{{ $lang->locate_code == 'ru' ? $item->slug_ru : $item->slug_uk }}" class="form-control">
                </div>
            @endif

            @if(isset($category_create_url))
                <div class="form-group">
                    <label for="slug">Url</label>
                    <input name="slug_{{ $lang->locate_code }}"  type="text" value="" class="form-control">
                </div>
            @endif

            @if(isset($manufacturer_url))
                <div class="form-group">
                    <label for="slug">Url</label>
                    <input type="text" name="slug_{{ $lang->locate_code }}" value="{{ $lang->locate_code == 'ru' ? $item->slug_ru : $item->slug_uk }}" class="form-control">
                </div>
            @endif

            @if(isset($manufacturer_create_url))
                <div class="form-group">
                    <label for="slug">Url</label>
                    <input type="text" name="slug" value="" class="form-control">
                </div>
            @endif

            @if(isset($page_type))
                <div class="form-group">
                    <label for="type">Тип</label>
                    <input type="text" required name="type" value="{{$page->type}}" class="form-control">
                </div>
            @endif

            @if(isset($long_title))
                <div class="form-group">
                    <label for="long_title_{{ $lang->locate_code }}">Значение (в карточке товара):</label>

                    <textarea placeholder="{{ strtoupper($lang->locate_code) }}" name="long_title_{{ $lang->locate_code }}" id="long_title_{{ $lang->locate_code }}" cols="30" rows="3" class="form-control">{{ @optional($item)->data[$lang->locate_code]['long_title'] ?: old('title_' . $lang->locate_code) }}</textarea>

                </div>
            @endif
            @if(isset($short_description))
                <div class="form-group">
                    <label for="desc">Краткое описание:</label>
                    <editor-component :name="{{json_encode('short_description_' . $lang->locate_code)}}" :v="{{ json_encode(@optional($item)->data[$lang->locate_code]['short_desc'] ?: old('short_description_' . $lang->locate_code)) }}"></editor-component>
                    {{--<textarea id="editor1" name="description_{{ $lang->locate_code }}"
                              --}}{{--id="editor_{{ $key }}"--}}{{--
                              class="form-control">
                    {{ @optional($item)->data[$lang->locate_code]['desc'] ?: old('description_' . $lang->locate_code) }}
                </textarea>--}}

                </div>
            @endif
        @if($description)
            <div class="form-group">
                <label for="desc">Описание:</label>
                <!-- <span>{{ json_encode(@optional($item)->data[$lang->locate_code]['description'] ?: old('description_' . $lang->locate_code)) ? 'true' : 'false' }}</span> -->
                <div class="w-100">
                  <editor-component :name="{{json_encode('description_' . $lang->locate_code)}}" :v="{{ json_encode(@optional($item)->data[$lang->locate_code]['description'] ?: old('description_' . $lang->locate_code)) == 'null' ? json_encode(@optional($item)->description) : json_encode(@optional($item)->data[$lang->locate_code]['description'] ?: old('description_' . $lang->locate_code)) }}"></editor-component>
                </div>
                    {{--<textarea id="editor1" name="description_{{ $lang->locate_code }}"
                              --}}{{--id="editor_{{ $key }}"--}}{{--
                              class="form-control">
                    {{ @optional($item)->data[$lang->locate_code]['desc'] ?: old('description_' . $lang->locate_code) }}
                </textarea>--}}

            </div>
        @endif
            @if(isset($slider))
                <div class="form-group pl-0">
                    <label for="button_{{ $lang->locate_code }}">Название кнопки:</label>
                    <input type="text" name="button_{{ $lang->locate_code }}" id="button_{{ $lang->locate_code }}" class="form-control" value="{{ @optional($item)->data[$lang->locate_code]['button'] ?: old('button_' . $lang->locate_code) }}">
                </div>
                {{--<div class="form-group">
                    <label for="link_{{ $lang->locate_code }}">Ссылка</label>
                    <input type="text" name="link_{{ $lang->locate_code }}" id="link_{{ $lang->locate_code }}" class="form-control" value="{{ @optional($item)->data[$lang->locate_code]['link'] ?: old('link_' . $lang->locate_code) }}">
                </div>--}}
                <div class="form-group">
                    <label for="additional_button_{{ $lang->locate_code }}">Название дополнительной кнопки:</label>
                    <input type="text" name="additional_button_{{ $lang->locate_code }}" id="additional_button_{{ $lang->locate_code }}" class="form-control" value="{{ @optional($item)->data[$lang->locate_code]['additional_button'] ?: old('additional_button_' . $lang->locate_code) }}">
                </div>
                {{--<div class="form-group">
                    <label for="additional_link_{{ $lang->locate_code }}">Дополнительная ссылка</label>
                    <input type="text" name="additional_link_{{ $lang->locate_code }}" id="additional_link_{{ $lang->locate_code }}" class="form-control" value="{{ @optional($item)->data[$lang->locate_code]['additional_link'] ?: old('additional_link_' . $lang->locate_code) }}">
                </div>--}}
            @endif
            @if(isset($additional))
                <div class="form-group">
                    <label for="additional_title_{{ $lang->locate_code }}">Дополнительное поле:</label>
                    <input name="additional_title_{{ $lang->locate_code }}"
                           id="additional_title_{{ $lang->locate_code }}"
                           value="{{ @optional($item)->data[$lang->locate_code]['additional_title'] ?: old('additional_title_' . $lang->locate_code) }}"
                           placeholder="Дополнительное поле {{ strtoupper($lang->locate_code) }}"
                           type="text"
                           class="form-control"/>
                </div>
            @endif
            @if(isset($additional))
                <div class="form-group">
                    <label for="desc">Описание:</label>
                    <editor-component :name="{{json_encode('additional_' . $lang->locate_code)}}" :v="{{ json_encode(@optional($item)->data[$lang->locate_code]['additional'] ?: old('additional_' . $lang->locate_code)) }}"></editor-component>
                </div>
                <div class="form-group">
                    <label for="how_size_{{ $lang->locate_code }}">Название кнопки "Как узнать размер":</label>
                    <input name="how_size_{{ $lang->locate_code }}"
                           id="how_size_{{ $lang->locate_code }}"
                           value="{{ @optional($item)->data[$lang->locate_code]['how_size'] ?: old('how_size_' . $lang->locate_code) }}"
                           placeholder="{{ strtoupper($lang->locate_code) }}"
                           type="text"
                           class="form-control"/>
                </div>
            @endif

            @if(isset($slug))
                <div class="form-group">
                    <label for="slug">Url</label>
                    <input type="text" name="slug_{{ $lang->locate_code }}" value="{{ $lang->locate_code == 'ru' ? $item->slug_ru : $item->slug_uk }}" class="form-control">
                </div>
            @endif
        @if(isset($setting))
                <div class="form-group">
                    <label for="new_{{ $lang->locate_code }}">Название вкладки "Новики"</label>
                    <input type="text" name="new_{{ $lang->locate_code }}" id="new_{{ $lang->locate_code }}" class="form-control" value="{{ @optional($item)->data[$lang->locate_code]['new'] ?: old('new' . $lang->locate_code) }}">
                </div>
                <div class="form-group">
                    <label for="sell_{{ $lang->locate_code }}">Название вкладки "Распродажа"</label>
                    <input type="text" name="sell_{{ $lang->locate_code }}" id="sell_{{ $lang->locate_code }}" class="form-control" value="{{ @optional($item)->data[$lang->locate_code]['sell'] ?: old('sell_' . $lang->locate_code) }}">
                </div>
        @endif
        @if($seo)
            <div class="form-group">
                <label for="seo_{{ $lang->locate_code }}">SEO описание:</label>
{{--                <editor-component :name="{{json_encode('seo_' . $lang->locate_code)}}" :v="{{ json_encode(@optional($item)->data[$lang->locate_code]['seo'] ?: old('seo_' . $lang->locate_code)) == 'null' ? json_encode(@optional($item)->seo) : json_encode(@optional($item)->data[$lang->locate_code]['seo'] ?: old('seo_' . $lang->locate_code)) }}"></editor-component>--}}
                <editor-component :name="{{json_encode('seo_' . $lang->locate_code)}}" :v="{{ $item ? json_encode($lang->locate_code == 'ru' ? $item->seo_ru : $item->seo_uk) : 'seo'}}"></editor-component>
                {{--<textarea name="seo_{{ $lang->locate_code }}"
                          id="seo_{{ $lang->locate_code }}"
                          placeholder="Seo {{ strtoupper($lang->locate_code) }}"
                          class="form-control">{{ @optional($item)->data[$lang->locate_code]['seo'] ?: old('seo_' . $lang->locate_code) }}</textarea>--}}
            </div>
        @endif
    </div>
@endforeach