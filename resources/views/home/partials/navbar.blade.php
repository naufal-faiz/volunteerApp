<style>
    .dropdown-menu {
        opacity: 0;
        animation: fadeIn 0.3s ease forwards;
    }

    @keyframes fadeIn {
        to {
            opacity: 1;
        }
    }

    .dropdown-menu .dropdown-item {
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: #f1f3f5;
        color: #0d6efd;
    }
</style>

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
                <li><a href="/about" class="{{ Request::is('about') ? 'active' : '' }}" style="margin-right: 30px">About</a></li>
                @auth
                    <li class="dropdown">
                        <a class="d-flex align-items-center text-decoration-none dropdown-toggle" href="#"
                            id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="margin-left: 30px">
                            <img src="{{ asset('vesperr/assets/img/team/team-1.jpg') }}" alt="user" width="36"
                                height="36" class="rounded-circle me-2 shadow">
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end mt-2 px-2 py-2" aria-labelledby="userDropdown"
                            style="
                                    min-width: 220px;
                                    font-size: 0.875rem;
                                    border: none;
                                    border-radius: 10px;''
                                    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
                                ">
                            <li class="px-3 py-2">
                                <strong class="text-dark">{{ auth()->user()->name }}</strong>
                            </li>
                            <hr class="dropdown-divider my-2">
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2" href="/user/dashboard">
                                    <i class="bi bi-speedometer2"></i> Dashboard
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2" href="/profile">
                                    <i class="bi bi-person"></i> Profile
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider my-2">
                            </li>
                            <li>
                                <form action="/logout" method="POST" class="m-0">
                                    @csrf
                                    <button class="dropdown-item d-flex align-items-center gap-2 text-danger"
                                        type="submit">
                                        <i class="bi bi-box-arrow-right"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                <div class="d-flex gp-4">
                    <li>
                        <a class="btn-getstarted"
                            href="{{ route('login') }}">Login</a>
                    </li>
                    <li>
                        <a class="btn-getstarted" href="{{ route('register') }}" style="padding-left: 10px; padding-right: 10px;">Register</a>
                    </li>
                </div>
                @endauth
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>
