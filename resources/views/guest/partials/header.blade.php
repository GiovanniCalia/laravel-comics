<header>
    <img src="../../public/images/dc-logo.png" alt="">
    <ul>
        @foreach ($links as $link)
        <li><a href="#!">{{ $link['name'] }}</a></li>
        @endforeach
    </ul>
</header>

<style>
    li{
        list-style-type: none;
        display: inline-block
    }

    a{
        color: black;
        text-decoration: none
    }
</style>