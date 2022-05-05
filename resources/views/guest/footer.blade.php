<footer>
    <div class="top-footer bg-dark">
        <div class="container">
            <div class="nav-footer">
                <div class="ul-vertical">
                    <ul>
                        <li>
                            <h4>dc commics</h4>
                        </li>
                        @foreach ($topFooterLinks['dcComicsLinks'] as $link)
                            <li>
                                <a href="#">{{$link}}</a>
                            </li>
                        @endforeach
                    </ul>
                    <ul>
                        <li>
                            <h4>shop</h4>
                        </li>
                        @foreach ($topFooterLinks['shopLinks'] as $link)
                            <li>
                                <a href="#">{{$link}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="ul-horizontal">
                    <ul>
                        <li>
                            <h4>dc</h4>
                        </li>
                        @foreach ($topFooterLinks['dcLinks'] as $link)
                            <li>
                                <a href="#">{{$link}}</a>
                            </li>
                        @endforeach
                    </ul>
                    <ul>
                        <li>
                            <h4>sites</h4>
                        </li>
                        @foreach ($topFooterLinks['sitesLinks'] as $link)
                            <li>
                                <a href="#">{{$link}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="logo-dc">
                
            </div>
        </div>
    </div>
    {{-- <div class="bot-footer">
        <div class="container bottom-f">
            <div>
                <button>
                    <a href="#">sign-up now!</a>
                </button>
            </div>
            <div class="bot-footer-links">
                <h3>follow us</h3>
                <ul class="footer-img-links">
                    <li v-for="(element,index) in footerLinks" :key="index">
                        <a :href="element.url">
                            <img :src="require(`@/assets/images/${element.img}`)" :alt="element.name">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}
</footer>