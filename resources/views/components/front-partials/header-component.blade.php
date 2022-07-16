<header id="header">

    <!-- Start Navigation -->
    <nav
        class="navbar navbar-default @if (Route::is('front.home')) navbar-fixed no-background @else navbar-sticky @endif dark bootsnav">
        <div class="container-full">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav multi-item">
                <ul class="social">
                    <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
                <ul>
                    <li class="side-menu">
                        <a href="#">
                            <span class="bar-1"></span>
                            <span class="bar-2"></span>
                            <span class="bar-3"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ route('front.home') }}">
                    <img src="{{ asset('assets/img/logo.png') }}" class="logo" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                    <li>
                        <a @if (Route::is('front.home')) href="#header" @else href="{{ route('front.home') }}" @endif
                            class="dropdown-toggle @if (Route::is('front.home')) active @endif">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#services" class="dropdown-toggle">Services</a>
                    </li>
                    <li>
                        <a href="#features" class="dropdown-toggle">Features</a>
                    </li>
                    <li>
                        <a href="{{ route('front.contact') }}" class="dropdown-toggle @if (Route::is('front.contact')) active @endif">Contact Us</a>
                    </li>
                    <li>
                        <a href="{{ route('front.get-a-quote') }}" class="dropdown-toggle" target="_blank">
                            Get A Quote
                        </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

        <!-- Start Side Menu -->
        <div class="side">
            <div class="widget">
                <a href="#" class="close-side"><i class="icon_close"></i></a>
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                <p> We work in close partnership with the UK’s ‘Big Six’ energy suppliers, who are an integral
                    part of the government’s domestic energy efficiency programme known as the Energy Companies
                    Obligation (ECO). The grants cover the entire cost of having all loft rooms insulated to
                    current building regulations using the latest insulation materials.
                </p>
            </div>
            <div class="widget address">
                <div>
                    <ul>
                        <li>
                            <div class="content">
                                <p>Address</p>
                                <strong>
                                    Unit 565, Chamber Business Centre, Chamber Rd. Oldham
                                    OL8 4QQ
                                </strong>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <p>Email</p>
                                <strong>admin@eco4grants.com</strong>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <p>Contact</p>
                                <strong>+92 349 4684544</strong>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="widget social">
                <ul class="link">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li>
                        <a href="{{ route('front.get-a-quote') }}" target="_blank">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->
</header>
