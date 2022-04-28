
<main>
    <div class="container-cards">
        <ul>
            @foreach ($cards as $card)
            <li>
                <img src="{{ $card['thumb'] }}" alt="">
                <div>{{ $card['series'] }}</div>
            </li>
            @endforeach
        </ul>
        <button>load more</button>
    </div>

    {{--
    <div class="second-main">
        <div class="container">
            <ul class="ul-images">
                @foreach ($dc as $comic)
                    <li class="li-inline-block">
                        <a href="#!">
                           <img src="{{ $comic['image'] }}" alt="">
                           <div>{{ $comic['text'] }}</div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>--}}

</main>