

<main>
    <div class="container-cards">
        <ul>
            @foreach ($cards as $card)
            <li v-for="element in links" :key="element">
                <img src="{{ $card['thumb'] }}" alt="">
                <div>{{ $card['series'] }}</div>
            </li>
            @endforeach
        </ul>
        <button>load more</button>
    </div>
</main>

