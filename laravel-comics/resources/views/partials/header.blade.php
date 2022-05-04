<div class="container-header">
    <div class="header-content">
        <img src="{{asset("images/dc-logo.png")}}" alt="DC Comics main logo">
        <nav>
            <ul>
                <li><a href="">Characters</a></li>
                <li><a class = "active" href="">Comics</a></li>
                <li><a href="">Movies</a></li>
                <li><a href="">TV</a></li>
                <li><a href="">games</a></li>
                <li><a href="">Collectibles</a></li>
                <li><a href="">Videos</a></li>
                <li><a href="">Fans</a></li>
                <li><a href="">News</a></li>
                <li><a href="">Shop</a></li>
            </ul>
        {{-- <nav>
            <ul>
                <li v-for="(element, index) in headerNav" :key="index" :class="{active : element.current}"><a :href="element.url">{{ element.text }}</a>
                </li>
            </ul>
        </nav> --}}
    </div>
</div>
