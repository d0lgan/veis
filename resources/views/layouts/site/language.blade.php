{{--
<div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        {{ LaravelLocalization::getCurrentLocale() }}
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li>
                <a rel="alternate" hreflang="{{ $localeCode }}"
                   href="{{ LaravelLocalization::getLocalizedURL($localeCode, NULL, [], TRUE) }}">
                    {{ $properties['native'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
--}}

<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ LaravelLocalization::getCurrentLocale() }}
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <a class="dropdown-item" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, NULL, [], TRUE) }}">
            {{ $properties['native'] }}
        </a>
        @endforeach
    </div>
</div>