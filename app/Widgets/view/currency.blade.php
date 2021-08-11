<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ $currency->code }}
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

        @foreach($currencies as $c)
            <a class="dropdown-item" href="?currency=">
                {{ $c->code }}
            </a>
        @endforeach

    </div>
</div>