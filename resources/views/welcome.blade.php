@extends('layouts.app')

@section('content')
<section class="home">
    <div id="carousel-home-banner" class="carousel slide carousel-fade position-relative" data-ride="carousel">
        <div class="carousel-inner h-100">
            <div class="carousel-item h-100 active">
                
            </div>
            <div class="carousel-item h-100">
                
            </div>
            <div class="carousel-item h-100">
                
            </div>
        </div>
        <div class="position-absolute container text-white py-5">
            <div class="row">
                <div class="col-xl-8 col-lg-9 col-md-10 text-center text-sm-left">
                    <div class="h1 font-weight-bolder text-montserrat-alt mb-3 mb-md-4">
                        Technology for <span class="text-red">better</span> living
                    </div>
                    <p class="mb-3 mb-md-4">
                        {{ $content['home']['banner']['text'] }}
                    </p>
                    <div class="">
                        <a href="{{ url('/about-us') }}" class="btn text-montserrat-alt px-4 py-3 font-weight-bold btn-red mr-0 mr-sm-3">{{ $content['home']['banner']['learn'] }}</a>
                        <a href="{{ url('/services') }}" class="btn text-montserrat-alt px-4 py-3 font-weight-bold btn-blue">{{ $content['home']['banner']['services'] }}</a>
                    </div>
                </div>
            </div>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#carousel-home-banner" data-slide-to="0" class="carousel-indicator active"></li>
            <li data-target="#carousel-home-banner" data-slide-to="1" class="carousel-indicator"></li>
            <li data-target="#carousel-home-banner" data-slide-to="2" class="carousel-indicator"></li>
            <div id="circle-carousel-indicator"></div>
        </ol>
    </div>
      
    <div class="py-5 bg-white">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-6 order-2">
                    <img src="{{ asset('images/NoPath - Copie (3)@2x.png') }}" alt="Under home page banner 1" class="img-fluid img-thumbnail">
                </div>
                <div class="col-md-6 order-1">
                    <h2 class="tet-montserrat-alt font-weight-bold text-montserrat-alt text-blue">{{ $content['about-us']['title'] }}</h2>
                    <p class="text-italic">
                        {!! $content['about-us']['text'] !!}
                    </p>
                </div>
                <div class="col-12 text-center order-3 pt-4 pb-4">
                    <a href="{{ asset('docs/CATALOGUE D’OFFRES.pdf') }}" class="btn btn-red btn-lg font-weight-bold"><i class="fas fa-download mr-2"></i>{{ $content['about-us']['catalog'] }}</a>
                </div>
            </div>

            @component('components.home.section', [
                'title' => $content['services']['title'],
                'subtitle' => $content['services']['subtitle']
            ])
                <div class="row">
                    @foreach ($content['services']['content'] as $service)
                        @component('components.home.service', $service)
                        @endcomponent
                    @endforeach
                </div>
            @endcomponent

            @component('components.home.section', [
                'title' => $content['home']['projects']['title'],
                'subtitle' => ''
            ])
                <div class="row mb-3">
                    <div class="owl-carousel projects">
                        @foreach ($content['home']['projects']['content'] as $portfolio)
                            @component('components.home.portfolio', ['img' => $portfolio, 'name' => ''])
                            @endcomponent
                        @endforeach
                    </div>
                </div>
            @endcomponent
        </div>

        <div class="mb-4 container-fluid bg-blue text-white py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-6 pb-lg-0 pb-3 text-center">
                        <h1 class="font-weight-bold">+25</h1>
                        <span class="text-large">{{ $content['about-us']['information']['projects'] }}</span>
                    </div>
                    <div class="col-lg-3 col-6 pb-lg-0 pb-3 text-center">
                        <h1 class="font-weight-bold">+20</h1>
                        <span class="text-large">{{ $content['about-us']['information']['clients'] }}</span>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <h1 class="font-weight-bold">+10</h1>
                        <span class="text-large">{{ $content['about-us']['information']['partners'] }}</span>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <h1 class="font-weight-bold">0</h1>
                        <span class="text-large">{{ $content['about-us']['information']['awards'] }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            @component('components.home.section', [
                'title' => 'Contact',
                'subtitle' => ''
            ])
                <div class="row">
                    <div class="col-12">
                        <iframe width="100%" height="300" src="https://maps.google.com/maps?q=746%20Rue%20Bou%C3%A9%20De%20Lapeyr%C3%A8re%2C%20Douala&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

                        <div class="row pt-4">
                            <div class="col-lg-4 pb-lg-0 pb-4">
                                <h3 class="text-blue font-weight-bold text-montserrat-alt">{{ $content['contact']['coordinates'] }}</h3>
                                <div>
                                    <div class="d-flex mb-3 align-items-center">
                                        <div class="pr-3 text-center" style="width: 3rem;">
                                            <i class="far fa-map fa-2x text-red"></i>
                                        </div>
                                        <div>
                                            746 Rue Boué de Lapeypère,<br>
                                            Douala<br>
                                            Cameroun
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3 align-items-center">
                                        <div class="pr-3 text-center" style="width: 3rem;">
                                            <i class="fas fa-mobile-alt fa-2x text-red"></i>
                                        </div>
                                        <div>
                                            <a class="text-dark" href="tel:+237 699 970 543">(+237) 699 970 543</a>  
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="pr-3 text-center" style="width: 3rem;">
                                            <i class="far fa-envelope fa-2x text-red"></i>
                                        </div>
                                        <div>
                                            <a class="text-dark" href="mailto:info@domotecs.com">infos@domotecs.cm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                            <div class="col-lg-8">
                                <h3 class="text-blue font-weight-bold text-montserrat-alt">{{ $content['contact']['message']['title'] }}</h3>
                                <form action="{{ url('contact') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <input type="text" name="name" class="form-control" required placeholder="{{ $content['contact']['message']['form']['name'] }}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="email" name="email" class="form-control" required placeholder="{{ $content['contact']['message']['form']['email'] }}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" name="object" class="form-control" required placeholder="{{ $content['contact']['message']['form']['object'] }}">
                                        </div>
                                        <div class="form-group col-12">
                                            <textarea name="message" class="form-control" required placeholder="{{ $content['contact']['message']['form']['message'] }}"></textarea>
                                        </div>
                                        <div class="form-group col-12">
                                            <button class="btn btn-red">{{ $content['contact']['message']['form']['submit'] }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endcomponent
        </div>
    </div>
</section>

@endsection

@section('scripts')
    <script>
        $(function () {
            const activeCarouselIndicator = $('.carousel-indicator.active');
            const circleCarouselIndicator = $('#circle-carousel-indicator');

            const { top, left } = activeCarouselIndicator.position();
            circleCarouselIndicator.css({ top: top + 1, left: left - 2 });

            $('#carousel-home-banner').on('slide.bs.carousel', function () {
                setTimeout(() => {
                    const activeCarouselIndicator = $('.carousel-indicator.active');
                    
                    const { top, left } = activeCarouselIndicator.position();
                    circleCarouselIndicator.animate({ top: top + 1, left: left - 2 }, 'fast');
                }, 1);
            });
        });
    </script>
@endsection