<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="/" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="asset('vesperr/assets/img/logo.png') }}" alt=""> -->
            <img src="{{ asset('vesperr/assets/img/GoodDeed.png') }}" alt="GoodDeed Logo" class="mx-0">
            <h1 class="sitename">oodDeed</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/" class="{{ (Request::is('/') || (Request::is('home')) ? 'active' : '') }}">Home<br></a></li>
                <li><a href="/opportunities" class="{{ Request::is('opportunities*') ? 'active' : '' }}">Opportunity</a></li>
                <li><a href="/categories" class="{{ Request::is('categories*') ? 'active' : '' }}">Category</a></li>
                <li><a href="#" class="{{ Request::is('donate*') ? 'active' : '' }}">Donate</a></li>
                <li><a href="/about" class="{{ Request::is('about') ? 'active' : '' }}">About</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="{{ route('login') }}">Sign In</a>

    </div>
</header>
