<?php
$linksShop = config('footer-shop-nav');
$linksDC = config('footer-dc-nav');
$linksSites = config('footer-sites-nav');
?>
<div>
    <footer>
        <div class="footer-top">
            <nav>
                <ul>
                    <h4>Dc Comics </h4>
                    @foreach ($links as $link)
                    <li class="{{ Route::currentRouteName() == $link['route-name'] ? 'active' : ''}}">
                        <a href="{{ route($link['route-name']) }}">
                            {{ $link['title'] }}
                        </a>
                    </li>
                    @endforeach
                    <ul>
                        <h4>Shop </h4>
                        @foreach ($linksShop as $linkShop)
                        <li class="{{ Route::currentRouteName() == $linkShop['route-name'] ? 'active' : ''}}">
                            <a href="{{ route($linkShop['route-name']) }}">
                                {{ $linkShop['title'] }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </ul>
                <ul>
                    <h4>Dc</h4>
                    @foreach ($linksDC as $linkDC)
                        <li class="{{ Route::currentRouteName() == $linkDC['route-name'] ? 'active' : ''}}">
                            <a href="{{ route($linkDC['route-name']) }}">
                                {{ $linkDC['title'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                <ul>
                    <h4>Sites</h4>
                    @foreach ($linksSites as $linkSites)
                        <li class="{{ Route::currentRouteName() == $linkSites['route-name'] ? 'active' : ''}}">
                            <a href="{{ route($linkSites['route-name']) }}">
                                {{ $linkSites['title'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div>
                    <img class="dc-logo" src="../images/dc-logo-bg.png" alt="">
                </div>
            </nav>
        </div>
    </footer>

</div>
