<nav class="navbar navbar-light navbar-expand-lg custom-navbar position-fixed top-0 start-0 end-0" style="z-index: 1030;">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('assets/images/eresa/Logo_biru.png') }}" alt="Eresa.id" class="logo-img">
        </a>

        <!-- Mobile Button -->
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarEresa">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarEresa">
            <ul class="navbar-nav align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">
                        Eresa Creative Studio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('rebootcom') ? 'active' : '' }}" href="/rebootcom">
                        Reboot Com
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('portofolio') ? 'active' : '' }}" href="/portofolio">
                        Portofolio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('pricing') ? 'active' : '' }}" href="/pricing">
                        Pricing
                    </a>
                </li>

                <li class="nav-item ms-lg-4">
                    <a class="custom-btn text-decoration-none d-inline-block mt-3 mt-lg-0 {{ Request::is('contact') ? 'active' : '' }}"
                        href="/contact">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>