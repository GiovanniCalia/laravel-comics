
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


    <div class="second-main">
        <div class="container-blue-cards">
            <ul class="ul-images">
                <li class="li-inline-block">
                    <a href="#!">
                        <img src="/images/buy-comics-digital-comics.png" alt="">
                        <div>DIGITAL COMICS</div>
                    </a>
                </li>
                <li class="li-inline-block">
                    <a href="#!">
                        <img src="/images/buy-comics-merchandise.png" alt="">
                        <div>DC MERCHANDISE</div>
                    </a>
                </li>
                <li class="li-inline-block">
                    <a href="#!">
                        <img src="/images/buy-comics-subscriptions.png" alt="">
                        <div>SUBSCRIPTION</div>
                    </a>
                </li>
                <li class="li-inline-block">
                    <a href="#!">
                        <img src="/images/buy-comics-shop-locator.png" alt="">
                        <div>COMIC SHOP LOCATOR</div>
                    </a>
                </li>
                <li class="li-inline-block">
                    <a href="#!">
                        <img src="/images/buy-dc-power-visa.svg" alt="">
                        <div>DC POWER VISA</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</main>