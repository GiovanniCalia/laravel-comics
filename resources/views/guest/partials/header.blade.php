<header>
    <ul>
        @foreach ($links as $link)
        <li><a href="#!">{{ $link['name'] }}</a></li>
        @endforeach
    </ul>
</header>

<style>
    li{
        list-style-type: none;
    }
</style>