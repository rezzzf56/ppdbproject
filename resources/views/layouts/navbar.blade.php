    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="#" class=""><span class="mr-2  icon-envelope-open-o"></span> <span
                            class="d-none d-md-inline-block">Sekolah</span></a>
                    <span class="mx-md-2 d-inline-block"></span>
                    <a href="#" class=""><span class="mr-2  icon-phone"></span> <span
                            class="d-none d-md-inline-block">1+ (234) 5678 9101</span></a>


                    <div class="float-right">

                        <a href="#" class=""><span class="mr-2  icon-twitter"></span> <span
                                class="d-none d-md-inline-block">Twitter</span></a>
                        <span class="mx-md-2 d-inline-block"></span>
                        <a href="#" class=""><span class="mr-2  icon-facebook"></span> <span
                                class="d-none d-md-inline-block">Facebook</span></a>

                    </div>

                </div>

            </div>

        </div>
    </div>

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
        <div class="container">
            <div class="row align-items-center">

                <!-- Logo -->
                <div class="col-3 d-flex align-items-center">
                    <h1 class="my-0 site-logo">
                        <p class="text-black h4 mb-0">SMK <br />EXAMPLE</p>
                    </h1>
                </div>

                <!-- Navbar -->
                <div class="col-9 d-flex justify-content-end">
                    <nav class="site-navigation" role="navigation">
                        <ul class="site-menu main-menu d-none d-lg-block">
                            <li><a href="{{ route('info') }}" class="nav-link">Informasi PPDB</a></li>
                            <li><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                            <li><a href="{{ route('jalurpendaftaran') }}" class="nav-link">Daftar</a></li>
                            <li class="has-children">
                                <a href="#about-section" class="nav-link">About Us</a>
                                <ul class="dropdown arrow-top">
                                    <li><a href="{{ route('jurusan') }}" class="nav-link">Jurusan</a></li>
                                    <li><a href="{{ route('about') }}" class="nav-link">Tentang Sekolah</a></li>
                                    <li><a href="{{ route('faq') }}" class="nav-link">FAQ</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </header>

    <div class="hero" style="background-image: url('images/hero_1.jpg');"></div>
