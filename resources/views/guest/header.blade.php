<header>
    <div class="container">
        <div class="my-nav-container">
            <nav>
                <img src="{{asset("images/dc-logo.png")}}" alt="logo dc comics">
                <ul>
                    @foreach ($navLinks as $link)
                        <li>
                            <a href="#">{{$link['name']}}</a>
                        </li>
                    @endforeach
                    
                </ul>
            </nav>
        </div>
    </div>
    <div class="my-jumbotron">
        <img src="{{asset("images/jumbotron.jpg")}}" alt="">
    </div>
</header>