<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="/" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="asset('vesperr/assets/img/logo.png') }}" alt=""> -->
            <img src="{{ asset('vesperr/assets/img/GoodDeed.png') }}" alt="GoodDeed Logo" class="mx-0"">
            <h1 class="sitename">oodDeed</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/" class="{{ Request::is('/') || Request::is('home') ? 'active' : '' }}">Home<br></a>
                </li>
                <li><a href="/opportunities" class="{{ Request::is('opportunities*') ? 'active' : '' }}">Opportunity</a>
                </li>
                <li><a href="/categories" class="{{ Request::is('categories*') ? 'active' : '' }}">Category</a></li>
                <li><a href="#" class="{{ Request::is('donate*') ? 'active' : '' }}">Donate</a></li>
                <li><a href="/about" class="{{ Request::is('about') ? 'active' : '' }}">About</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Welcome back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('dashboard') }}"><i class="bi bi-house"></i> Dashboard</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
        @else
            <div class="text-center">
                <a class="btn-getstarted" style="margin-right: 5px; margin-left: 30px;"
                    href="{{ route('login') }}">Login</a>
                <a class="btn-getstarted" href="{{ route('register') }}">Register</a>
            </div>
        @endauth
    </div>
</header>
