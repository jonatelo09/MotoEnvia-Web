<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid ">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-2 col-lg-1">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="img/LOGO-MOTOENVIA_1.png" width="165px" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                @auth
                                @else
                                <ul id="navigation">
                                    <li><a data-scroll href="#us">Nosotros</a></li>
                                    <li><a data-scroll href="#services">Servicios</a></li>
                                    <li><a data-scroll href="#shipping">Envíos</a></li>
                                    <li><a data-scroll href="#mission">Misión</a></li>
                                    <li><a data-scroll href="#vision">Visión</a></li>
                                    <li ><a data-scroll href="#contact">Contacto</a></li>
                                    <li data-toggle="modal" data-target="#exampleModalCenter" class="d-block d-lg-none mobile">
                                        <a style="color: #138baa !important;" data-scroll href="#!">Cotiza tu envío! </a>
                                    </li>
                                    <li class="d-block d-lg-none mobile">
                                        <a style="color: #138baa !important;" data-scroll href="{{ route('login') }}">Login</a>
                                    </li>
                                </ul>
                                @endauth
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                        <div class="Appointment">
                            @if (Route::has('login'))
                                @auth
                                <div class="book_btn d-none d-lg-block" data-toggle="modal" data-target="#exampleModalCenter">
                                    <a href="#!"> <i class="fa fa-shipping-fast"></i> Cotiza tu envío!</a>
                                </div>
                                <div class="login_btn d-none d-lg-block ml-3 ">
                                    <a href="{{ route('home')}} " class="text-secundary"> <i class="fas fa-tachometer-alt"></i> Inicio</a>
                                </div>

                                @else
                                    <div class="book_btn d-none d-md-block" data-toggle="modal" data-target="#exampleModalCenter">
                                        <a href="#!"> <i class="fa fa-shipping-fast"></i> Cotiza tu envío!</a>
                                    </div>
                                    <div class="login_btn d-none d-lg-block ml-3">
                                        <a href="{{ route('login') }}">Login</a> 
                                    </div>
                                @endauth
                            @endif
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>