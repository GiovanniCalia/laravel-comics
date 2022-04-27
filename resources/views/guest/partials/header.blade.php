<header>
    <div>
        <section class="bk-blue">
            <div>dc power visa&#174;</div>
            <div>additional dc sities</div>
        </section>
        <section class="header-container">
            <img src="../../public/images/jumbotron.png" alt="">
            <ul>
                @foreach ($links as $link)
                <li><a href="#!">{{ $link['name'] }}</a></li>
                @endforeach
            </ul>

        </section>
    </div>
</header>
