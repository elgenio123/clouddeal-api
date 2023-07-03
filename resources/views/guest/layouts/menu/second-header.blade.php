<div class="fluid-container">
    <div class="row">
        <div class="col-lg-3 col-md-7 col-sm-6 col-6">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="">
                </a>
            </div>
        </div>
        <div class="col-lg-9 d-none d-lg-block">
            <nav class="mainmenu">
                <ul class="d-flex">
                    <li class="active">
                        <a href="{{ route('home') }}">Home</i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">Best ads <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown_style">
                            <li><a href="{{ route('dashboard') }}">Ads</a></li>
                            <li><a href="{{ route('dashboard.ad-list') }}">My ads</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);">Categories <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown_style">
                            @foreach ($allCategories as $all)
                                <li><a href="{{ route('dashboard') }}">{{ $all->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li class="search-tigger"><a href="javascript:void(0);"><i class="flaticon-search"></i></a></li>
                </ul>
            </nav>
        </div>

        <div class="col-md-1 col-sm-3 col-7 d-block d-lg-none" style="position: absolute; right: 0">
            <div class="responsive-menu-tigger">
                <a href="javascript:void(0);">
                    <span class="first"></span>
                    <span class="second"></span>
                    <span class="third"></span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- responsive-menu area start -->
<div class="responsive-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-12 d-block d-lg-none">
                <ul class="metismenu">
                    <li class="sidemenu-items">
                        <a aria-expanded="false" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="sidemenu-items">
                        <a class="has-arrow" aria-expanded="false" href="javascript:void(0);">Best ads </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('dashboard') }}">Ads</a></li>
                            <li><a href="{{ route('dashboard.ad-list') }}">My ads</a></li>
                            <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                        </ul>
                    </li>
                    <li class="sidemenu-items">
                        <a class="has-arrow" aria-expanded="false" href="javascript:void(0);">Categories</a>
                        <ul aria-expanded="false">
                            @foreach ($allCategories as $all)
                                <li><a href="{{ route('dashboard') }}">{{ $all->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
