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
                    </div>
                    <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                        <div class="Appointment">
                            @if (Route::has('login'))
                                @auth
                                <div class="book_btn d-none d-lg-block" data-toggle="modal" data-target="#exampleModalCenter">
                                    <a href="#!"> <i class="fa fa-shipping-fast"></i> Cotiza tu envío!</a>
                                </div>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                @else
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