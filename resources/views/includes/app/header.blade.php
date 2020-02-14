<div class="position-sticky nav">
    <div class="container-fluid bg-white d-none d-lg-block border-bottom py-2">
        <div class="container d-flex justify-content-between align-items-center">
            <div>
                <span class="mr-3 border-right pr-3">
                    <i class="fas fa-envelope text-red mr-2"></i>infos@domotecs.cm
                </span>
                <span>
                    <i class="fas fa-phone-square text-blue mr-2"></i>(+237) 699 970 543
                </span>
            </div>
            <div>
                <a href="https://api.whatsapp.com/send?phone=237699970543" target="_blank" class="text-decoration-none text-secondary"><i class="fab text-large fa-whatsapp border-right mr-2 pr-2"></i></a>
                <a href="https://twitter.com/domotecs" target="_blank" class="text-decoration-none text-secondary"><i class="fab text-large fa-twitter-square border-right mr-2 pr-2"></i></a>
                <a href="https://facebook.com/domotecs?_rdc=1&_rdr" target="_blank" class="text-decoration-none text-secondary"><i class="fab text-large fa-facebook-square border-right mr-2 pr-2"></i></a>
                <a href="https://www.instagram.com/domotecs237/" target="_blank" class="text-decoration-none text-secondary"><i class="fab text-large fa-instagram border-right mr-2 pr-2"></i></a>
                <a href="https://www.linkedin.com/company/domotecs" target="_blank" class="text-decoration-none text-secondary"><i class="fab text-large fa-linkedin"></i></a>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom w-100 py-0">
        <div class="container position-relative">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/DOMOTECS.png') }}" alt="Domotecs' logo" class="logo">
            </a>

            <div class="collapse navbar-collapse {{ session('lang') }}" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
    
                </ul>
    
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto d-flex align-items-center">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link {{ !Request::segment(1) ? 'active' : '' }}" href="{{ url('/') }}"><i class="fas fa-home mr-1"></i>{{ $content['header']['home'] }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::segment(1) === 'about-us' ? 'active' : '' }}" href="{{ url('about-us') }}"><i class="fas fa-address-card mr-1"></i>{{ $content['header']['about-us'] }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::segment(1) === 'services' ? 'active' : '' }}" href="{{ url('services') }}"><i class="fab fa-servicestack mr-1"></i>{{ $content['header']['services'] }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::segment(1) === 'contact' ? 'active' : '' }}" href="{{ url('contact') }}"><i class="fas fa-mobile-alt mr-1"></i>{{ $content['header']['contact'] }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
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
                        </li>
                    @endguest
                </ul>
            </div>

            <div class="d-flex align-items-center position-absolute" style="right: 0; top: 1.45rem;">
                <div class="position-relative text-montserrat">
                    <div class="text-black-50 ml-1 px-1">
                        <a href="#language-dropdown" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="language-dropdown" class="text-black-50 text-decoration-none d-flex justify-content-around align-items-center">
                            <span class="language-flag shadow-lg d-inline-flex mr-1 justify-content-center align-items-center overflow-hidden">
                                <img src="{{ session('lang') === 'en' ? asset('/images/641ad9571c9ade545faf3ef16810b143.png') : asset('/images/1.jpg') }}" class="h-100" alt="en-flag">
                            </span>
                            <span class="px-1 border-left border-white-50">{{ session('lang') === 'en' ? 'En' : 'Fr' }}</span>
                            <i class="fas fa-caret-down"></i>
                        </a>
                    </div>
                    <div id="language-dropdown" class="collapse position-absolute">
                        <div class="p-2 rounded bg-white border position-absolute" style="top: calc(100% + 5px);">
                            <a href="{{ session('lang') === 'en' ? url('fr') : url('en') }}" class="rounded-lg ml-1 px-1 d-flex justify-content-around align-items-center text-black-50 text-decoration-none">
                                <span class="language-flag shadow-lg d-inline-flex mr-1 justify-content-center align-items-center overflow-hidden">
                                    <img src="{{ session('lang') === 'en' ? asset('/images/1.jpg') : asset('/images/641ad9571c9ade545faf3ef16810b143.png') }}" class="h-100" alt="fr-flag">
                                </span>
                                <span class="mr-1">{{ session('lang') === 'en' ? 'Fr' : 'En' }}</span>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="https://webmail.domotecs.cm/" target="_blank" class="btn btn-red text-small text-montserrat-alt ml-3 font-weight-bold">{{ session('lang') === 'en' ? 'Sign in' : 'Se connecter' }}<i class="fas fa-sign-in-alt ml-2"></i></a>
            
                <button class="navbar-toggler ml-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
</div>