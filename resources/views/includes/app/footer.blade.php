<div class="bg-white border-top border-black-50">
    <div class="container py-5">
        <h4 class="font-weight-bold text-montserrat-alt text-center text-montserrat-alt">{{ $content['footer']['partners']['title'] }}</h4>
        <div class="red-line mx-auto mb-3"></div>
        <div class="owl-carousel partners">
            @foreach ($content['footer']['partners']['content'] as $item)
            <div class="px-3 d-flex align-items-center" style="height: 5rem;"><img src="{{ url('/images/logos/' . $item) }}" alt="Logo de partenaire"></div>    
            @endforeach
        </div>
    </div>
</div>
@if (Session::has('newsletter_success'))
<div class="position-fixed" style="top: 91px; left: 10px; width: calc(100% - 20px); z-index: 1200;">
    <div class="alert alert-success">{{ session('newsletter_success') }}</div>
</div>
@endif
@if (Session::has('newsletter_failure'))
<div class="position-fixed" style="top: 91px; left: 10px; width: calc(100% - 20px); z-index: 1200;">
    <div class="alert alert-danger">{{ session('newsletter_failure') }}</div>
</div>
@endif
@if (Session::has('sent_mail'))
<div class="position-fixed" style="top: 91px; left: 10px; width: calc(100% - 20px); z-index: 1200;">
    <div class="alert alert-success">{{ session('sent_mail') }}</div>
</div>
@endif
<footer class="bg-blue">
    <div class="container-fluid text-white">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-3 pb-3 pb-lg-0 col-sm-6 d-flex align-items-center">
                    <div class="px-3 mb-3">
                        <img src="{{ asset('images/DOMOTECS - white.png') }}" alt="Domotecs' logo" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-3 pb-3 pb-lg-0 col-sm-6">
                    <h4 class="font-weight-bold text-montserrat-alt text-uppercase">{{ $content['footer']['useful-links'] }}</h4>
                    <div class="red-line mb-4"></div>
                    <div>
                        <ul class="fa-ul">
                            <li class="mb-3"><a href="{{ url('/') }}" class="text-decoration-none text-white"><span class="fa-li"><i class="fas fa-home"></span></i>{{ $content['header']['home'] }}</a></li>
                            <li class="mb-3"><a href="{{ url('about-us') }}" class="text-decoration-none text-white"><span class="fa-li"><i class="fas fa-address-card"></i></span>{{ $content['header']['about-us'] }}</a></li>
                            <li class="mb-3"><a href="{{ url('services') }}" class="text-decoration-none text-white"><span class="fa-li"><i class="fab fa-servicestack"></i></span>{{ $content['header']['services'] }}</a></li>
                            <li class="mb-3"><a href="{{ url('contact') }}" class="text-decoration-none text-white"><span class="fa-li"><i class="fas fa-mobile-alt"></i></span>{{ $content['header']['contact'] }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 pb-3 pb-lg-0 col-sm-6">
                    <h4 class="font-weight-bold text-montserrat-alt text-uppercase">{{ $content['footer']['contact'] }}</h4>
                    <div class="red-line mb-4"></div>
                    <div class="mb-4">
                        746 Rue Boué de Lapeypère,<br>
                        Douala<br>
                        Cameroun<br>
                        <strong>Tel</strong> : <a class="text-white" href="tel:+237 699 970 543">(+237) 699 970 543</a><br>
                        <strong>Email</strong>: <a class="text-white" href="mailto:info@domotecs.com">infos@domotecs.cm</a>
                    </div>
                    <div class="text-large">
                        <a href="https://api.whatsapp.com/send?phone=237699970543" target="_blank" class="text-red text-decoration-none">
                            <span class="fa-stack">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-whatsapp fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                        <a href="https://twitter.com/domotecs" target="_blank" class="text-red text-decoration-none">
                            <span class="fa-stack">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                        <a href="https://facebook.com/domotecs?_rdc=1&_rdr" target="_blank" class="text-red text-decoration-none">
                            <span class="fa-stack">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                        <a href="https://www.instagram.com/domotecs237/" target="_blank" class="text-red text-decoration-none">
                            <span class="fa-stack">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                        <a href="https://www.linkedin.com/company/domotecs" target="_blank" class="text-red text-decoration-none">
                            <span class="fa-stack">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h4 class="font-weight-bold text-montserrat-alt text-uppercase">NEWSLETTER</h4>
                    <div class="red-line mb-4"></div>
                    <div>
                        <div class="mb-4">
                            {{ $content['footer']['newsletter'] }}
                        </div>
                        <form action="{{ url('/newsletter') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control" placeholder="{{ session('lang') === 'en' ? 'Your email address' : 'Votre adresse mail' }}" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-red">{{ session('lang') === 'en' ? 'Submit' : 'Envoyer' }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-black-33">
        <div class="text-center text-white py-5">
            <span>© Copyright <strong>Domotecs</strong>. {{ session('lang') === 'en' ? 'All Rights Reserved.' : 'Tous Droits Réservés.' }}</span><br>
            <span>Designed by <a href="mailto: jaris.ultio.21@gmail.com" class="text-decoration-none text-white font-weight-bold">Brainer 21</a></span>
        </div>
    </div>
</footer>